<x-app-layout>
    <header class="page-header">
        <h2>  {{ __('User Management') }} </h2>
      
      
      </header>

      <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                  
                    </div>
    
                    <h2 class="card-title">Add New User</h2>
                </header>
                <div class="card-body">

                    <form class="form-horizontal form-bordered" method="POST" action="{{ route('user-registration') }}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Email</label>
                            <div class="col-lg-6">
                            <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                            </div>
                        </div>
            
                        <!-- Password -->
                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Password</label>
                            <div class="col-lg-6">
                            <x-input id="password" class="form-control"
                                            type="password"
                                            name="password"
                                            minlength="9"
                                            required autocomplete="new-password" />
                                            </div>
                        </div>
            
                        <!-- Confirm Password -->
                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Confirm Password</label>
                            <div class="col-lg-6">
                            <x-input id="password_confirmation" class="form-control"
                                            type="password"
                                            minlength="9"
                                            name="password_confirmation" required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Select Role</label>
                            <div class="col-lg-6">
                                <select class="form-control mb-3" name="role" required>
                                    <option value="1">Admin</option>
                                    <option value="2">Driver</option>
                                    <option value="3">Customer</option>
                                </select>
                         
                            </div>
                        </div>
    
                
                        <x-button class="btn btn-primary">
                            {{ __('Register') }}
                        </x-button>
                 
             
    
                    </form>


               
                </div>
              
            </section>


            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                  
                    </div>
    
                    <h2 class="card-title">Users List</h2>
                </header>
                <div class="card-body">
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user) 
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->is_permission }}</td>
                            <td><a href="{{ route('edit-user',$user->id) }}" class="delete-row"><i class="fas fa-pencil-alt"></i> Edit</a>
                                
                                <form action="{{ route('delete-user',$user->id) }}" method="Post">
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
       
            <div id="edituser" class="modal-block modal-block-primary mfp-hide">
                <section class="card">
                    <header class="card-header">
                        <h2 class="card-title">Registration Form</h2>
                    </header>
                    <div class="card-body">
                        <form class="form-horizontal form-bordered" method="POST" action="{{ route('user-registration') }}">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Name</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus>
                                </div>
                            </div>
    
    
                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Email</label>
                                <div class="col-lg-6">
                                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                                </div>
                            </div>
                
                            <!-- Password -->
                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Password</label>
                                <div class="col-lg-6">
                                <x-input id="password" class="form-control"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                                                </div>
                            </div>
                
                            <!-- Confirm Password -->
                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Confirm Password</label>
                                <div class="col-lg-6">
                                <x-input id="password_confirmation" class="form-control"
                                                type="password"
                                                name="password_confirmation" required />
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Select Role</label>
                                <div class="col-lg-6">
                                    <select class="form-control mb-3" name="role" required>
                                        <option value="Admin">Admin</option>
                                        <option value="Driver">Driver</option>
                                        <option value="Customer">Customer</option>
                                    </select>
                             
                                </div>
                            </div>
        
                    
                           
                     
                 
        
                      
    
                            <footer class="card-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <x-button class="btn btn-primary">
                                            {{ __('Register') }}
                                        </x-button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </form>
                    </div>
                    
                </section>
            </div>

            <div id="deleteuser" class="modal-block modal-block-primary mfp-hide">
                <section class="card">
                    <header class="card-header">
                        <h2 class="card-title">Registration Form</h2>
                    </header>
                    <div class="card-body">
                        <form method="POST" action="{{ route('vtCreate') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                               

                                <div class="form-group col-md-12">
                                    <label for="model">Are you sure want to delete?</label>
                                  
                                </div>
                             
                              
                            </div>
                            <footer class="card-footer">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary">Delete</button>
                                        <button class="btn btn-default modal-dismiss">Cancel</button>
                                    </div>
                                </div>
                            </footer>
                        </form>
                    </div>
                    
                </section>
            </div>


        </div>
    </div>
    
</x-app-layout>