
@extends('AdminPanel.AdminPanel')

 
@section('ManageEmpcontent')
    <div class="col-sm-9">
    <h3 class="text-primary">Manage Employee</h3>
      <hr>
      <div class ="container box">
      <div class="row">
        <div class="col-md-11">
            <br>
          
            <br>
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>
                </div>
            @endif
           
            <div align="right">
                <a href="{{route('Employee.create')}}" class="btn btn-primary">Add Employee</a> <br> <br>

            </div>
            <table class="table table-bordered" >
                <tr class="active">
                    
                    <th class="text-primary">Emp ID</th>
                    <th class="text-primary">Dep ID</th>
                    <th class="text-primary">HoD ID</th>
                    <th class="text-primary">Name</th>
                    <th class="text-primary">Email</th>
                    <th class="text-primary">Designation</th>
                    <th class="text-primary"> PhoneNo</th>
                    <th class="text-primary"> Address</th>
                    <th class="text-primary">Creation date</th>
                    <th class="text-primary">Action</th>
                </tr>
                @foreach($employees as $row)
                    <tr>
                        
                        <td>{{$row['emp_id']}}</td>
                        <td>{{$row['dep_id']}}</td>
                        <td>{{$row['hod_id']}}</td>
                        <td>{{$row['e_name']}}</td>
                        <td>{{$row['e_email']}}</td>
                        <td>{{$row['e_designation']}}</td>
                        <td>{{$row['e_phoneno']}}</td>
                        <td>{{$row['e_address']}}</td>
                        <td>{{$row['created_at']}}</td>
                        <td>
                        <table>
                            <tr>
                                <td>
                                <a href="{{action('EmployeeController@edit',$row['id'])}}" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                <form method="post" class="delete_form" action="{{action('EmployeeController@destroy',$row['id'])}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                                </td>
                            </tr>
                        </table>
                        
                        </td>


                       
                    </tr>
                @endforeach
            </table>
            <script>
            $(document).ready(function(){
                $('.delete_form').on('submit',function(){
                    if(confirm("Are you sure you want to delete it?"))
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                });
            });
        </script>
        </div>


        @endsection
