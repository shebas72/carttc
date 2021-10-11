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
    
                    <h2 class="card-title">Edit Details</h2>
                </header>
                <div class="card-body">

                    <form action="{{ route('update-bank',$bank->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">License</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="name" name="License" value="{{  $bank->License  }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Model</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="name" name="Model" value="{{  $bank->Model  }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Year</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="name" name="Year" value="{{  $bank->Year  }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Chasis Number</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="name" name="Chasis_number" value="{{  $bank->Chasis_number  }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Bank Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="name" name="Bank_Name" value="{{  $bank->Bank_Name  }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Color</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="name" name="Color" value="{{  $bank->Color  }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Condition</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="name" name="Condition" value="{{  $bank->Condition  }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Key_Available</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="name" name="Key_Available" value="{{  $bank->Key_Available  }}">
                            </div>
                        </div>
                       
                        <x-button class="btn btn-primary">
                            {{ __('Submit') }}
                        </x-button>
                    </form>


               
                </div>
              
            </section>


        


        </div>
    </div>

   
    
</x-app-layout>