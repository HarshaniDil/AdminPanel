@extends('AdminPanel.AdminPanel')

@section('editDepcontent')

<h3 class="text-primary">Edit Department</h3>
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


<form class="form-horizontal" method="POST" action="{{action('DepartmentController@update',$id)}}">
    {{csrf_field() }}
    <input type="hidden" name="_method" value="PATCH" />

    <label  class="text-primary">Department ID</label>
    <div class="form-group">
       <div class ="col-sm-11">
        <input type="text" name="dep_id" value="{{$department->dep_id}}" class="form-control" placeholder="Department ID"/>
        </div>
    </div>

    <label  class="text-primary">Department Name</label>
    <div class="form-group">
        <div class ="col-sm-11">
        <input type="text" name="dep_name" value="{{$department->dep_name}}" class="form-control" placeholder="Department Name" />
        </div>
        
    </div>

    <label  class="text-primary">Department Short Name</label>
    <div class="form-group">
        <div class ="col-sm-11">
        <input type="text" name="dep_short_name" value="{{$department->dep_short_name}}" class="form-control" placeholder="Department Short name" />
        </div>
        
    </div>

    <div class="form-group">
        <div class ="col-sm-11">
        <input type="submit" name="edit" class="btn btn-primary" value="Edit" />
    </div>
</form>
<div>
@endsection