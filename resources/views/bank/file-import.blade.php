<x-app-layout>
    <header class="page-header">
        <h2>  {{ __('Import Excel') }} </h2>
      
      
      </header>

      <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                  
                    </div>
    
                    <h2 class="card-title">Import Document</h2>
                </header>
                <div class="card-body">

                    <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                            <div class="custom-file text-left">
                                <input type="file" name="file" class="custom-file-input" id="customFile" required>
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <button class="btn btn-primary">Import data</button>
                        <a class="btn btn-success" href="{{ route('file-export') }}">Export data</a>
                    </form>


               
                </div>
              
            </section>


            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                  
                    </div>
    
                    <h2 class="card-title">Cars List</h2>
                </header>
                <div class="card-body">
                 
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                            <tr>
                                <th>License plate</th>
                                <th>Model</th>
                                <th>Year</th>
                                <th>Chasis Number</th>
                                <th>Bank Name</th>
                                <th>Color</th>
                               
                                <th>Condition</th>
                                <th>Key</th>
                                <th>Actions</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                       @foreach ($banks as $bank)
                           
                     
                        <tr>
                          
                            <td>{{ $bank->License }}</td>
                            <td>{{ $bank->Model }}</td>
                            <td>{{ $bank->Year }}</td>
                            <td>{{ $bank->Chasis_number }}</td>
                            <td>{{ $bank->Bank_Name }}</td>
                            <td>{{ $bank->Color }}</td>
                            <td>{{ $bank->Condition }}</td>
                            <td>{{ $bank->Key_Available }}</td>
                           
                            <td><a href="" class="delete-row"><i class="fas fa-pencil-alt"></i></a>&nbsp;<a href="" class="delete-row"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                        @endforeach   
                        
                            
                            
                        
                        </tbody>
                    </table>    

                  
                </div>
            </section>


        </div>
    </div>
    
</x-app-layout>