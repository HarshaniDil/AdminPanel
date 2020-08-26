@extends('AdminPanel.AdminPanel')

@section('Showcomment')


<div class="col-sm-9">

    <h3 class="text-primary">Comments</h3>
      <hr>
      <div class ="container box">
      <div class="row">
        <div class="col-md-11">
         
          
          

<table class="table table-bordered">
                <thead>
                    <tr class="active">
                       
                        <th width="11%" style="cursor: pointer" class="text-primary">Emp No</th>
                        <th width="16%" style="cursor: pointer" class="text-primary">Email</th>
                        <th width="43%" style="cursor: pointer" class="text-primary">Comment</th>
                        <th width="15%" class="text-primary" class="sorting" data-sorting_type="desc" data-column_name="created_at" style="cursor: pointer">Created Date <span id="createdat_icon"></span></th>
                        <th width="15%" style="cursor: pointer" class="text-primary">IsCompleted</th>
                    </tr>

                </thead>
              <tbody>
              @foreach($allcomments as $row)
                    <tr>
                      
                        <td>{{$row->emp_no}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->comment}}</td>
                        <td>{{$row->created_at}}</td>
                        <td></td>
                    </tr>
                @endforeach
                <tr>
                        <td colspan="6" align="center">
                            {!! $allcomments->links()!!}
                        </td>
                </tr>

              </tbody>

            </table>
           
</div>

</div>
</div>


@endsection