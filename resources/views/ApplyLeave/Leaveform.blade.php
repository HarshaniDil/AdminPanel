@extends('Employee.EmpProfile')

 
@section('ApplyLeavecontent')

    <div class="col-sm-9">
    <h3 class="text-primary">Apply Leave</h3>
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


<form class="form-horizontal" method="POST" action="{{url('empprofile/history')}}">
            {{csrf_field() }}

            <table>
                <tr>
                    <td>     <label  class="text-primary">Emp ID</label>
        <div class="form-group">
        <div class ="col-sm-8">
        <input type="text" name="emp_id" class="form-control" placeholder="Emp ID"/>
        </div>
</div></td>

<td>
<label  class="text-primary">Emp Name</label>
<div class="form-group">

<div class ="col-sm-11">
<input type="text" name="e_name" class="form-control" placeholder="Employee name" />
</div>

</div>
</td>
                
 </tr>


 <tr>
 
        <td>
        <label  class="text-primary">Email</label>
<div class="form-group">

<div class ="col-sm-11">
<input type="text" name="e_email" class="form-control" placeholder="Employee email" />
</div>

</div>
        </td>

        <td>
        <label  class="text-primary"> designation</label>
<div class="form-group">

        <div class ="col-sm-11">
        <input type="text" name="e_designation" class="form-control" placeholder="Employee designation" />
        </div>
</div>
        
        </td>
 </tr>
            
            </table>
            <label  class="text-primary"> Leave Type</label>
            <div class="radio">
                <label><input type="radio" name="optradio" checked>Annual Leaves</label>
                <label><input type="radio" name="optradio" checked>Casual Leaves</label>
                <label><input type="radio" name="optradio" checked>Sick Leaves</label>
                <label><input type="radio" name="optradio" checked>Short Leaves</label>
            </div>


<div class="form-group">
<div class ="col-sm-11">
<input type="submit" name="Add" class="btn btn-primary" value="ADD" />
</div>
           

        </form>
      

</div>

@endsection



