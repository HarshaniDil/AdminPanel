<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 750px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 80%;
    }

    .alert{
      width: 83%;
    }

    .admin{
        color: blue;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 776px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>

<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      @if(isset(Auth::user()->email))
        <div  class="admin" >
        <br>
            <strong><center class="text-primary">Super Admin <br> {{Auth::user()->name}} </center> </strong>
            <br />    
        </div>
       @else
       <script>window.location="/main";</script>
       
         @endif
         
         <div class="sidenav">
         <ul class="nav nav-pills nav-stacked">
                
                <li ><a href="/main/AdminPanel">Home</a></li>
                <li ><a href="/main/Department/">Department</a></li>
                <li ><a href="/main/Head/">HoD</a></li>
                <li><a href="/main/Employee/">Employee</a></li>
                <li><a href="/main/Leaveinfor/">Leaves</a></li>
                <li><a href="/main/Comment">Comments</a></li>
                <li><a href="#section9">Summery Report</a></li>
                <li><a href="{{ url('/main/logout')}}">Log Out</a></li>
            </ul><br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Here..">
                <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                </span>
            </div>
         </div>



    </div>

    <div class="col-sm-9">
    @yield('MainContent')
    @yield('AddDepcontent')
    @yield('ManageDepcontent')
    @yield('editDepcontent')
    @yield('AddEmpcontent')
    @yield('ManageEmpcontent')
    @yield('editEmpcontent')
    @yield('AddHeadcontent')
    @yield('ManageHeadcontent')
    @yield('editHeadcontent')
    @yield('AddLeaveinfocontent')
    @yield('ManageLeaveinfocontent')
    @yield('editLeaveinfocontent')
    @yield('Showcomment')
    </div>
    </div>
    </div>


    </body>

    </html>