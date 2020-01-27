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
            .forma{
                width:50%;
                height:500;
                margin: 0 auto;
                margin-top:60px;
            }

            .search{
                width:35%;
                margin: 0 auto;
                margin-top:25px;
            }
            .but1{
                float: right;
                padding:12;
                margin-top:20px;
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
    
        <form action="{{route('/addnewuser')}}" method="POST" class="forma was-validated">
            <div class="form-group">
                <label>First Name:</label>
                <input type="text" class="form-control" name="firstname" palceholder="first name">
                @foreach($errors->get('firstname') as $message)
                    <div class="alert alert-warning" role="alert">
                    <strong> {{$message}}</strong> 
                    </div>
                    @endforeach 
                
            </div>
            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" class="form-control" name="lastname" palceholder="last name">
                @foreach($errors->get('lastname') as $message)
                    <div class="alert alert-warning" role="alert">
                    <strong> {{$message}}</strong> 
                    </div>
                    @endforeach 
               
            </div>
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
            
            {{csrf_field()}}
            <button type="submit" class="btn btn-primary but2">SignUp</button>
        </form>
    </body>
</html>