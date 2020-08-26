
@extends('AdminPanel.AdminPanel')

 
@section('AddLeaveinfocontent')
    <div class="col-sm-9">
    <h3 class="text-primary">Add Leave</h3>
      <hr>
      <br><br>
      <div class ="container box">


@if(count($errors) > 0)
    <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif


    <form class="form-horizontal" method="POST" action="{{url('main/Leaveinfor')}}">
    {{csrf_field() }}
    <label class="text-primary">Leave ID</label>
    <div class="form-group">

        <div class ="col-sm-11">
        <input type="text" name="lev_id" class="form-control" placeholder="Leave ID"/>
        </div>
    </div>
    <label class="text-primary">Leave type</label>
    <div class="form-group">
      
        <div class ="col-sm-11">
        <input type="text" name="lev_type" class="form-control" placeholder="Leave type" />
        </div>
        
    </div>

    <label class="text-primary">Leave Description</label>
    <div class="form-group">
       
        <div class ="col-sm-11">
        <input type="text" name="lev_description" class="form-control" placeholder="Leave Description" />
        </div>
        
    </div>

    
    <label class="text-primary">Number of Leaves</label>
    <div class="form-group">
       
       <div class ="col-sm-11">
       <input type="text" name="lev_num" class="form-control" placeholder="Number of Leaves" />
       </div>
       
   </div>

    <div class="form-group">
        <div class ="col-sm-11">
        <input type="submit" name="Add" class="btn btn-primary" value="ADD" />
    </div>
</form>

</div>
      
@endsection

