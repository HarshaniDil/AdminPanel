@extends('Employee.EmpProfile')

@section('MyProfileContent')


<div class="container">
<div class="panel panel-default" style="width:120%;height:100%">
      <div class="panel-heading"><center>My Profile</center></div>
      <div class="panel-body">
     <label>Name:</label> {{Auth::user()->name}} <br>
      <label>Email:</label>{{Auth::user()->email}}

      
      </div>
</div>

</div>

@endsection