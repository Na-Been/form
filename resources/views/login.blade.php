<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="{{ asset('js/custom.js')}}"></script>
    <title>Document</title>
    <style>
            .fire{
                width:30%;
                height:500;
                margin: 0 auto;
                margin-top:60px;
            }
            .but2{
                float: right;
                padding: 12;
            }
            .but3{
                float:right;
                padding:12;
                margin-top:20px;
                margin-right:-75px;
            }
            </style>
</head>
<body>

@if(session()->has('check'))
    <div class="alert alert-success alert-block" id="register">
	    <button type="button" class="close" data-dismiss="alert" onclick="registersuccess()">×</button>	
        <strong>{{session()->get('check')}}</strong> 
    </div>
@endif

@if(session()->has('message'))
    <div class="alert alert-success alert-block" id="error">
    <button type="button" class="close" data-dismiss="alert" onclick="errormessage()">×</button>	
    <strong>{{session()->get('message')}}</strong> 
    </div>
@endif

  <form action="{{route('/enteruser')}}" method="POST" class="fire was-validated">
            <div class="form-group">
            <label>Email:</label>
                <input type="email" class="form-control" name="email" palceholder="enter your  email">
                    @foreach($errors->get('email') as $message)
                    <div class="alert alert-warning" role="alert">
                    <strong> {{$message}}</strong> 
                    </div>
                    @endforeach  
            </div>
 
            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" name="password" palceholder="enter your password">
                @foreach($errors->get('password') as $message)
                    <div class="alert alert-warning" role="alert">
                    <strong> {{$message}}</strong> 
                    </div>
                    @endforeach 
            </div>
  </div>
  
  {{csrf_field()}}
    <button type="submit" class="btn btn-primary but2" name="login">login</button>
</form>
<br>
<div class="but3">
        <form action="{{route('/newuser')}}">
            <button type="sumit" class="btn btn-secondary" name="savedata">Register as new user</button>
        </form>
        </div>
</body>
</html>