<x-app-layout>
    <header class="page-header">
        <h2>  {{ __('Roles Management') }} </h2>
      
      
      </header>

      <div class="row">
        <div class="col">
            <a  class="modal-with-form btn btn-default" href="{{ route('users.create') }}"> Create New User</a>
            <section class="card">
                <div class="card-body">
                 
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                      <p>{{ $message }}</p>
                    </div>
                    @endif


                    <table class="table table-bordered">
                      <tr>
                         <th>No</th>
                         <th>Name</th>
                         <th width="280px">Action</th>
                      </tr>
                        @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                                @can('role-edit')
                                    <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                @endcan
                                @can('role-delete')
                                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    
                       {!! $roles->render() !!}

                  
                </div>
            </section>
        </div>
    </div>
    
</x-app-layout>