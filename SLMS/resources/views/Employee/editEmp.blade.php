@extends('AdminPanel.AdminPanel')

 
@section('editEmpcontent')

    <div class="col-sm-9">
    <h3 class="text-primary">Edit Employee</h3>
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


<form class="form-horizontal" method="POST" action="{{action('EmployeeController@update',$id)}}">
            {{csrf_field() }}
            <input type="hidden" name="_method" value="PATCH" />
  <table width="80%">
    <tr>
        <td>   <label  class="text-primary">Emp ID</label>
        <div class="form-group">
        <div class ="col-sm-7">
        <input type="text" name="emp_id" value="{{$employee->emp_id}}" class="form-control" placeholder="Emp ID"/>
        </div>
</div></td>

<td>
<label  class="text-primary">Dep ID</label>
<div class="form-group">
        <div class ="col-sm-7">
        <input type="text" name="dep_id" value="{{$employee->dep_id}}" class="form-control" placeholder="Dep ID"/>
        </div>
</div>
</td>

<td>  
<label  class="text-primary">HoD ID</label>
<div class="form-group">

<div class ="col-sm-7">
<input type="text" name="hod_id" value="{{$employee->hod_id}}" class="form-control" placeholder="HoD ID"/>
</div>
</div>

</td>
    </tr>
  </table>

 

<label  class="text-primary">Emp Name</label>
<div class="form-group">

<div class ="col-sm-10">
<input type="text" name="e_name" value="{{$employee->e_name}}" class="form-control" placeholder="Employee name" />
</div>

</div>

<label  class="text-primary">Email</label>
<div class="form-group">

<div class ="col-sm-10">
<input type="text" name="e_email" value="{{$employee->e_email}}" class="form-control" placeholder="Employee email" />
</div>

</div>
<label  class="text-primary"> designation</label>
<div class="form-group">

        <div class ="col-sm-10">
        <input type="text" name="e_designation" value="{{$employee->e_designation}}" class="form-control" placeholder="Employee designation" />
        </div>
</div>

<label  class="text-primary"> PhoneNo</label>
<div class="form-group">
       
        <div class ="col-sm-10">
        <input type="text" name="e_phoneno" value="{{$employee->e_phoneno}}" class="form-control" placeholder="Employee PhoneNo" />
        </div>
</div>

<label  class="text-primary"> Address</label>
<div class="form-group">

        <div class ="col-sm-10">
        <input type="text" name="e_address" value="{{$employee->e_address}}"  class="form-control" placeholder="Employee address" />
        </div>
</div>


<div class="form-group">
<div class ="col-sm-10">
<input type="submit" name="edit" class="btn btn-primary" value="Edit" />
</div>
           

        </form>
      

</div>

@endsection



