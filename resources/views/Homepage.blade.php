
<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>SLMS-SUSL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h1 {
    margin: 10px 0 30px 0;
    letter-spacing: 6px;      
    font-size: 30px;
    color: #111;
  }

  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 4px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
 
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
<body id="Home" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="Home">SUSL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">HOME</a></li>
        <li><a href="#aboutus">ABOUT US</a></li>
        <li><a href="#contact">CONTACT US</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">LOG IN
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">HoD</a></li>
            <li><a href="#">Employee</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>



<!-- Container (The Band Section) -->
<div id="home" class="container text-center">
@if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>
                </div>
            @endif

  <h1>Staff Leave Management System</h1>
  <h3> Faculty of Applied Sciences</h3>
  <h3>Sabaragamuwa University of Sri Lanka</h3>
  <img src="img/2.png" alt="Logo">
  <p><em>Our Vision!</em></p>
  <p>
The main objective of this system to decrease the paperwork, properly maintain the records and decrease the waiting time to submit the leave application. This staff leave management system can be accessed by the Super Admin, Head of Department, and Employees (temporary lecturers, instructors, demonstrators and non-academic staff related to the faculty). This System automates the existing system regarding the work-flow of leave application and their approval or rejection.
</p>
  <br>
</div>

<!-- Container (ABOUT US Section) -->
<div id="aboutus" class="bg-1">
  <div class="container">
    <h3 class="text-center">ABOUT US</h3>
    <p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
    <p>In the current scenario related to leaving management in the faculty of Applied Sciences, Sabaragamuwa University of Sri Lanka, staff needs to submit their leaves manually to their respective Head of Department (HoD). Then after he or she has to approve or reject their Leave application. Marinating the staff leaves manually became tedious and it increases the paperwork. Further, if the HoD is not available the staff may get inconvenience related to their leave procedures.
</p>
<p>I would like to mention our sincere gratitude toward Dr. Priyan (Head of Department and Senior Lecture) and Mr. Kalinga Gunawardana (Lecture, Mini Project Coordinator), Department of Computing and Information Systems, Faculty of Applied Sciences, Sabaragamuwa University of Sri Lanka for giving us the opportunity to carry out our project.
As well as I would like to express my heart full gratitude towards my mentor  Mr Banujan Kuhaneswaran (Lecturer - Department of Computing and Information Systems, Faculty of Applied Sciences, Sabaragamuwa University Of Sri Lanka) for his invaluable advice for the successful completion of this dissertation. As well as I would like to extend my gratitude to Ms. Kalani Amarasinghe (Executive Information System Auditor) Pan Asia (pvt) Ltd for Support me
</p>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">CONTACT US</h3>
  <p class="text-center"><em>We care always!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p><span class="glyphicon glyphicon-map-marker"></span>Sabaragamuwa University of Sri Lanka,<br>&nbsp&nbsp&nbsp&nbsp P.O. Box 02,<br>&nbsp&nbsp&nbsp&nbsp Belihuloya</p>
      <p><span class="glyphicon glyphicon-phone"></span> Customer Center: +94 453454582 <br>&nbsp&nbsp&nbsp&nbsp  Dean/Faculty: +94 453454212 <br>&nbsp&nbsp&nbsp&nbsp  Head/ Dep. CIS: +94 453454519 <br>&nbsp&nbsp&nbsp&nbsp Head/ Dep. FS: +94 453454214 <br>&nbsp&nbsp&nbsp&nbsp Head/ Dep. PST: +94 453454527 <br>&nbsp&nbsp&nbsp&nbsp Head/ Dep. SSP: +94 453609845 <br>&nbsp&nbsp&nbsp&nbsp Head/ Dep. NR: +94 453454328
      </p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: Superadmin.slms@appsc.sab.ac.lk</p>
    </div>
    <div class="col-md-8">
      <div class="row">

        <div class="col-sm-6 form-group">

        <form action="{{url('main/Comment1')}}" method="POST" >
         {{csrf_field() }}
         <input class="form-control" id="emp_no" name="emp_no" placeholder="Emp No" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comment" name="comment" placeholder="Comment" rows="8" required></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit" name="send">Send</button>
        </div>
</form>
      </div>
    </div>
  </div>

</body>
</html>
