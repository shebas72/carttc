<x-app-layout>
    <header class="page-header">
        <h2>  {{ __('Edit Roles') }} </h2>
      
      
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


                  {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Name:</strong>
                              {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Permission:</strong>
                              <br/>
                              @foreach($permission as $value)
                                  <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                  {{ $value->name }}</label>
                              <br/>
                              @endforeach
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                  </div>
                  {!! Form::close() !!}
             
              
                    </div>
            </section>
        </div>
    </div>
    
</x-app-layout>