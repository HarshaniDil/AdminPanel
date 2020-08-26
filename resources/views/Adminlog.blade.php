<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
 <style type="text/css">

.box{
    width: 600px;
    margin: 0 auto;
    border:1px solid #ccc;
}
 </style>
<title>Document</title>
</head>

<body>
<br>
<br>
    <div class ="container box">
        <h3 class="text-secondary"><center> <br>  Admin Log-In</center></h3><br />
        @if(isset(Auth::user()->email))
            <script>window.location="/main/AdminPanel";</script>
        @endif

        @if($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        @if(count($errors)>0)
            <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{url('/main/checklogin')}}">
            {{csrf_field() }}
            <div class="form-group">
                <label  class="text-dark">email</label>
                <input type="email" name="email" class="form-control" />
            </div>
            <div class="from-group">
                <label  class="text-dark"> Password </label>
                <input type="password" name="password" class="form-control"><br>
            </div>

            <div class="form-group">
                <input type="submit" name="login" class="btn btn-primary" value="Login" />
            </div>
        </form>

    </div>   
    
</body>
</html>