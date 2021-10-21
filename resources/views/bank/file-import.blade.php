<x-app-layout>
    <header class="page-header">
        <h2>  {{ __('Import Excel') }} </h2>
      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
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
                    <button style="margin-bottom: 10px" class="btn btn-primary delete_all" data-url="{{ url('myproductsDeleteAll') }}">Delete All Selected</button>
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="master"></th>
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
                           
                     
                       <tr id="tr_{{$bank->id}}">
                           <td><input type="checkbox" class="sub_chk" data-id="{{$bank->id}}"></td>
                            <td>{{ $bank->License }}</td>
                            <td>{{ $bank->Model }}</td>
                            <td>{{ $bank->Year }}</td>
                            <td>{{ $bank->Chasis_number }}</td>
                            <td>{{ $bank->Bank_Name }}</td>
                            <td>{{ $bank->Color }}</td>
                            <td>{{ $bank->Condition }}</td>
                            <td>{{ $bank->Key_Available }}</td>
                         
                           
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
    <script type="text/javascript">

        $(document).ready(function () {
    
    
            $('#master').on('click', function(e) {
    
             if($(this).is(':checked',true))  
    
             {
    
                $(".sub_chk").prop('checked', true);  
    
             } else {  
    
                $(".sub_chk").prop('checked',false);  
    
             }  
    
            });
    
    
            $('.delete_all').on('click', function(e) {
    
    
                var allVals = [];  
    
                $(".sub_chk:checked").each(function() {  
    
                    allVals.push($(this).attr('data-id'));
    
                });  
    
    
                if(allVals.length <=0)  
    
                {  
    
                    alert("Please select row.");  
    
                }  else {  
    
    
                    var check = confirm("Are you sure you want to delete this row?");  
    
                    if(check == true){  
    
    
                        var join_selected_values = allVals.join(","); 
    
    
                        $.ajax({
    
                            url: $(this).data('url'),
    
                            type: 'DELETE',
    
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    
                            data: 'ids='+join_selected_values,
    
                            success: function (data) {
    
                                if (data['success']) {
    
                                    $(".sub_chk:checked").each(function() {  
    
                                        $(this).parents("tr").remove();
    
                                    });
    
                                    alert(data['success']);
    
                                } else if (data['error']) {
    
                                    alert(data['error']);
    
                                } else {
    
                                    alert('Whoops Something went wrong!!');
    
                                }
    
                            },
    
                            error: function (data) {
    
                                alert(data.responseText);
    
                            }
    
                        });
    
    
                      $.each(allVals, function( index, value ) {
    
                          $('table tr').filter("[data-row-id='" + value + "']").remove();
    
                      });
    
                    }  
    
                }  
    
            });
    
    
            $('[data-toggle=confirmation]').confirmation({
    
                rootSelector: '[data-toggle=confirmation]',
    
                onConfirm: function (event, element) {
    
                    element.trigger('confirm');
    
                }
    
            });
    
    
            $(document).on('confirm', function (e) {
    
                var ele = e.target;
    
                e.preventDefault();
    
    
                $.ajax({
    
                    url: ele.href,
    
                    type: 'DELETE',
    
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    
                    success: function (data) {
    
                        if (data['success']) {
    
                            $("#" + data['tr']).slideUp("slow");
    
                            alert(data['success']);
    
                        } else if (data['error']) {
    
                            alert(data['error']);
    
                        } else {
    
                            alert('Whoops Something went wrong!!');
    
                        }
    
                    },
    
                    error: function (data) {
    
                        alert(data.responseText);
    
                    }
    
                });
    
    
                return false;
    
            });
    
        });
    
    </script>
   
    
</x-app-layout>