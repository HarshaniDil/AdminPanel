@extends('AdminPanel.AdminPanel')
@section('ManageLeaveinfocontent')

 <div class="col-sm-9">
 <h3 class="text-primary">Manage Leave Types</h3>
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
             <a href="{{route('Leaveinfor.create')}}" class="btn btn-primary">Add Leave type</a> <br> <br>

         </div>
         <table class="table table-bordered" >
             <tr class="active">
                 <th class="text-primary">No</th>
                 <th class="text-primary">Leave ID</th>
                 <th class="text-primary">Leave Type</th>
                 <th class="text-primary">Leave Description</th>
                 <th class="text-primary">No of Leaves</th>
                 <th class="text-primary">Creation date</th>
                 <th class="text-primary">Action</th>
             </tr>
             @foreach($leaveinfors as $row)
                 <tr>
                     <td>{{$row['id']}}</td>
                     <td>{{$row['lev_id']}}</td>
                     <td>{{$row['lev_type']}}</td>
                     <td>{{$row['lev_description']}}</td>
                     <td>{{$row['lev_num']}}</td>
                     <td>{{$row['created_at']}}</td>
                    <td>
                    <table>
                            <tr>
                                <td>
                                <a href="{{action('LeaveinforController@edit',$row['id'])}}" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                <form method="post" class="delete_form" action="{{action('LeaveinforController@destroy',$row['id'])}}">
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


