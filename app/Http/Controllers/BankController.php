<?php

namespace App\Http\Controllers;

use App\Models\bank;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BanksImport;
use App\Exports\BanksExport;
use DB;
use Auth;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bank.file-import',compact('banks'));
    }

    // public function newindex()
    // {
    //     return view('incoming');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(bank $bank)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(bank $bank)
    {
        return view('bank.edit-bank', compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bank = Bank::findOrFail($id);
        $get_venid= Auth::user()->email;
        $bank->License = $request->License;
        $bank->Model = $request->Model;
        $bank->Year = $request->Year;
        $bank->Chasis_number = $request->Chasis_number;
        $bank->Bank_Name = $request->Bank_Name;
        $bank->Color = $request->Color;
        $bank->Condition = $request->Condition;
        $bank->Key_Available = $request->Key_Available;
        $bank->venid = $request->$get_venid;
      
        $bank->save();
                 return redirect('/file-import-export')->with('completed', 'User has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(bank $bank, $id)
    {
        $bank = bank::findOrFail($id);

        $bank->delete();
        return redirect()->route('file-import-export')
        ->with('success','car detail deleted successfully');
    
    }

    public function deleteAll(Request $request)

    {

        $ids = $request->ids;

        DB::table("banks")->whereIn('id',explode(",",$ids))->delete();

        return response()->json(['success'=>"Products Deleted successfully."]);

    }

    public function fileImportExport()
    {
        $banks = Bank::all();
      $sameuser = Auth::user()->email;
        // $banks = DB::table('banks')
        // ->where('venid', 'like', '$sameuser')
        // ->get();
        $banks = DB::table('banks')
        ->whereIn('venid', [$sameuser])
        ->get();
       return view('bank.file-import',compact('banks'));
    }
    public function fileImport(Request $request) 
    {
        Excel::import(new BanksImport, $request->file('file')->store('temp'));
        return back();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new BanksExport, 'users-collection.xlsx');
    }    
}
