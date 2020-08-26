@extends('AdminPanel.AdminPanel')

@section('editHeadcontent')

    <div class="col-sm-9">
    <h3 class="text-primary">Edit Head of Department</h3>
      <hr>
      
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


<form class="form-horizontal" method="POST" action="{{action('HeadController@update',$id)}}">
            {{csrf_field() }}
            <input type="hidden" name="_method" value="PATCH" />
            <table width ="90%">
              <tr>
                <td>
                <label  class="text-primary">HoD ID</label>
<div class="form-group">
        <div class ="col-sm-10">
        <input type="text" name="hod_id" value="{{$head->hod_id}}" class="form-control" placeholder="HoD ID"/>
        </div>
</div>

                </td>
      
                <td>
                <label  class="text-primary">Department ID</label>
<div class="form-group">

<div class ="col-sm-10">
<input type="text" name="dep_id" value="{{$head->dep_id}}" class="form-control" placeholder="Department ID" />
</div>

</div>
                </td>
              </tr>
            </table>

<label  class="text-primary">HoD Name</label>
<div class="form-group">

        <div class ="col-sm-10">
        <input type="text" name="h_name" value="{{$head->h_name}}" class="form-control" placeholder=" HoD Name" />
        </div>
</div>


<label  class="text-primary">Designation</label>
<div class="form-group">

        <div class ="col-sm-10">
        <input type="text" name="h_designation" value="{{$head->h_designation}}" class="form-control" placeholder="Designation" />
        </div>
</div>

<label  class="text-primary">Phone No</label>
<div class="form-group">
       
        <div class ="col-sm-10">
        <input type="text" name="h_phoneno" value="{{$head->h_phoneno}}" class="form-control" placeholder="Phone No" />
        </div>
</div>

<label  class="text-primary">E mail</label>
<div class="form-group">

        <div class ="col-sm-10">
        <input type="text" name="h_email" value="{{$head->h_email}}" class="form-control" placeholder="E mail" />
        </div>
</div>

        <div class="form-group">
        <div class ="col-sm-10">
        <input type="submit" name="edit" class="btn btn-primary" value="Edit" />
        </div>
           

 </form>
      

</div>

@endsection


