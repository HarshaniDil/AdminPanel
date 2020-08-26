@extends('Employee.EmpProfile')

@section('LeaveFormContent')


<div class="container">
<div class="panel panel-default" style="width:120%;height:100%">
      <div class="panel-heading"><center>Leave Application</center></div>
      <div class="panel-body">


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


<form class="form-horizontal" method="POST" action="{{url('Home/emp/EmpProfile/ApplyLeaves')}}">
            {{csrf_field() }}

  <table width="98%">
    <tr>
        <td>   <label  class="text-muted">Emp ID</label>
        <div class="form-group">
        <div class ="col-sm-8">
        <input type="text" name="emp_id" class="form-control" placeholder="Emp ID"/>
        </div>
</div></td>

<td>
<label  class="text-muted">Dep ID</label>
<div class="form-group">
        <div class ="col-sm-8">
        <input type="text" name="dep_id" class="form-control" placeholder="Dep ID"/>
        </div>
</div>
</td>

<td>  
<label  class="text-muted">HoD ID</label>
<div class="form-group">

<div class ="col-sm-8">
<input type="text" name="hod_id" class="form-control" placeholder="HoD ID"/>
</div>
</div>

</td>

<td>
<label class="text-muted"> designation</label>
<div class="form-group">

        <div class ="col-sm-11">
        <input type="text" name="e_designation" class="form-control" placeholder="Employee designation" />
        </div>
</div>

</td>
    </tr>
  </table>


<table width=100%>

<tr>
  <td>
  <label  class="text-muted">Emp Name</label>
<div class="form-group">

<div class ="col-sm-11">
<input type="text" name="e_name" class="form-control" placeholder="Employee name" />
</div>

</div>
  </td>


  <td>
  <label class="text-muted">Email</label>
<div class="form-group">

<div class ="col-sm-11">
<input type="text" name="e_email" class="form-control" placeholder="Employee email" />
</div>

</div>
  </td>

</tr>

</table>
 
<label class="text-muted"> Leave Type </label> <br>
<div class="form-group">
    </label>
    <div class ="col-sm-11">
    <label class="radio-inline">
      <input type="radio" name="optradio">Casual Leaves
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Sick Leaves
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Short Leaves
    </label>
    </div>

</div>

<table width=100%>

<tr>
  <td>
  <label  class="text-muted">From Date</label>
<div class="form-group">

<div class ="col-sm-11">
<input type="text" name="fromdate" class="form-control" placeholder="From Date" />
</div>

</div>
  </td>


  <td>
  <label class="text-muted">To Date</label>
<div class="form-group">

<div class ="col-sm-11">
<input type="text" name="todate" class="form-control" placeholder="To Date" />
</div>

</div>
  </td>

</tr>

</table>

<table width=100%>

<tr>
  <td>
  <label  class="text-muted">From Time</label>
<div class="form-group">

<div class ="col-sm-11">
<input type="text" name="fromtime" class="form-control" placeholder="From Time" />
</div>

</div>
  </td>


  <td>
  <label class="text-muted">To Date</label>
<div class="form-group">

<div class ="col-sm-11">
<input type="text" name="totime" class="form-control" placeholder="To Time" />
</div>

</div>
  </td>

</tr>
</table>

<div class="form-group">
<div class ="col-sm-11">
  <label for="reason" class="text-muted">Resason</label>
  <textarea class="form-control" rows="5" id="reason"></textarea>
</div>
</div>





<div class="form-group">

<div class ="col-sm-11">
<input type="submit" name="submit" class="btn btn-primary" value="Submit" />
</div>
           

        </form>
      

</div>

      
      </div>


@endsection