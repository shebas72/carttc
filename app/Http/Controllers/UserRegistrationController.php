<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserRegistrationController extends Controller
{

    public function index()
    {
        $users = DB::table('users')->get();

        return view('usermanagement')->with(['users' => $users]); //take a closer look here
    }

  
    public function create()
    {
        
        $users = User::all();
        return view('usermanagement');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_permission' => $request->role,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('user-registration')
        ->with('success','User deleted successfully');
    }

    public function edit(User $user) {
        // $user = User::findOrFail($id);
        return view('edit-user', compact('user'));
     }

     public function update(Request $request, $id)
     {
         $updateData = $request->validate([
             'name' => 'max:255',
             'email' => 'max:255',
             'role' => 'max:255',
             'password' => 'max:255',
         ]);
         $user = User::findOrFail($id);
         
$user->name = $request->name;
$user->email = $request->email;
$user->password = $request->password;
$user->is_permission = $request->role;
$user->save();
         return redirect('/user-registration')->with('completed', 'User has been updated');
     }

     public function destroy(User $user, $id)
     {
        // $user->delete();
        $res=User::where('id',$id)->delete();
         return redirect()->route('user-registration')
                         ->with('success','User deleted successfully');
     }

    // public function show(Request $request)
    // {
    //     return view('usermanagement', compact('users'));
    // }
}
