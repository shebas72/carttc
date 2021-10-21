<x-app-layout>
    <header class="page-header">
        <h2>  {{ __('Incoming') }} </h2>
      
      
      </header>

      <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                  
                    </div>
    
                    <h2 class="card-title">Incoming Car</h2>
                </header>
                
              
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
                                
                                <th>Added by</th>
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
                            <td>{{ $bank->venid }}</td>
                           
                            <td><a href="{{ route('edit-bank',$bank->id) }}"><i class="fas fa-pencil-alt"></i> edit</a>&nbsp;&nbsp;
                                <form action="{{ route('delete-bank',$bank->id) }}" method="Post">
                                    @csrf

                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</button>
                                
                            </form>    
                            </td>
                        </tr>
                        @endforeach   
                        
                    
                 
                        
                        </tbody>
                    </table>    

                  
                </div>
            </section>


        </div>
    </div>

   
    
</x-app-layout>