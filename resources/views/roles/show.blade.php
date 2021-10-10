<x-app-layout>
    <header class="page-header">
        <h2>  {{ __('Role Details') }} </h2>
      
      
      </header>

      <div class="row">
        <div class="col">
            <a  class="modal-with-form btn btn-default" href="{{ route('users.index') }}"> Back</a>
                        <section class="card">
                <div class="card-body">
                 
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                         @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                         @endforeach
                      </ul>
                    </div>
                  @endif


                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $role->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Permissions:</strong>
                            @if(!empty($rolePermissions))
                                @foreach($rolePermissions as $v)
                                    <label class="label label-success">{{ $v->name }},</label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                 
                </div>
              
                    </div>
            </section>
        </div>
    </div>
    
</x-app-layout>