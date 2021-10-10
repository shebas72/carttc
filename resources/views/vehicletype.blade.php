<x-app-layout>
    <header class="page-header">
        <h2>  {{ __('Vehicle Type') }} </h2>
      
      
      </header>

      <div class="row">
        <div class="col">
            <section class="card">
                <div class="card-body">
                <div class="row">
                  
                        <div class="col-lg-6">
                <a class="modal-with-form btn btn-default" href="#modalForm">Create New</a>


                <div id="modalForm" class="modal-block modal-block-primary mfp-hide">
                    <section class="card">
                        <header class="card-header">
                            <h2 class="card-title">Registration Form</h2>
                        </header>
                        <div class="card-body">
                            <form method="POST" action="{{ route('vtCreate') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Make</label>
                                        <input type="text" class="form-control" name="vt_make" id="inputEmail4" placeholder="Make" required>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="model">Model</label>
                                        <input type="text" class="form-control" name="vt_model" id="model" placeholder="Model" required>
                                    </div>
                                 
                                  
                                </div>
                                <footer class="card-footer">
                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-primary">Submit</button>
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
                </div>
              
            </section>
            <section class="card">
                <div class="card-body">
                 
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                            <tr>
                                <th>Make</th>
                                <th>Model</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicleTypes as $vehicleType)
                        <tr>
                            <td>{{ $vehicleType->make }} </td>
                            <td>{{ $vehicleType->model }}</td>
                        
                            
                            
                        </tr>
                        @endforeach
                        </tbody>
                    </table>    

                  
                </div>
            </section>
        </div>
    </div>
    
</x-app-layout>