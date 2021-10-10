<x-app-layout>
    <header class="page-header">
        <h2>  {{ __('Edit User') }} </h2>
      
      
      </header>

      <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                  
                    </div>
    
                    <h2 class="card-title">Edit User</h2>
                </header>
                <div class="card-body">

                    <form class="form-horizontal form-bordered" method="POST" action="{{ route('update-user',$user->id) }}">
                        @csrf
                       
                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Email</label>
                            <div class="col-lg-6">
                            <x-input id="email" class="form-control" type="email" name="email" value="{{ $user->email }}" />
                            </div>
                        </div>
            
                        <!-- Password -->
                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Password</label>
                            <div class="col-lg-6">
                            <x-input id="password" class="form-control"
                                            type="password"
                                            name="password"
                                            autocomplete="new-password" />
                                            </div>
                        </div>
            
                        <!-- Confirm Password -->
                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Confirm Password</label>
                            <div class="col-lg-6">
                            <x-input id="password_confirmation" class="form-control"
                                            type="password"
                                            name="password_confirmation" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Select Role</label>
                            <div class="col-lg-6">
                                <select class="form-control mb-3" name="role">
                                    <option value="Admin">Admin</option>
                                    <option value="Driver">Driver</option>
                                    <option value="Customer">Customer</option>
                                </select>
                         
                            </div>
                        </div>
    
                
                        <x-button class="btn btn-primary">
                            {{ __('Register') }}
                        </x-button>
                 
             
    
                    </form>


               
                </div>
              
            </section>



        </div>
    </div>
    
</x-app-layout>