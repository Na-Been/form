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
    @if(session()->has('message'))
    <div class="alert alert-success alert-block" id="adddata">
	        <button type="button" class="close" data-dismiss="alert" onclick="mySuccess()">×</button>	
                <strong>{{session()->get('message')}}</strong> 
        </div>
       
    @endif

    <form action="{{route('/finddata')}}" method="POST" class="search">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search">
      <button class="btn btn-primary but1" type="submit">Search</button>
      {{csrf_field()}}
    </form>

        <form action="{{route('/getdata')}}" method="POST" class="forma was-validated">
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
                <label>Address:</label>
                <input type="text" class="form-control" name="address" palceholder="enter your  address">
                    @foreach($errors->get('address') as $message)
                    <div class="alert alert-warning" role="alert">
                    <strong> {{$message}}</strong> 
                    </div>
                    @endforeach  
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" palceholder="enter your email">
                @foreach($errors->get('email') as $message)
                    <div class="alert alert-warning" role="alert">
                    <strong> {{$message}}</strong> 
                    </div>
                    @endforeach  
                
            </div>
            <div class="form-group">
                <label>Number:</label>
                <input type="number" class="form-control" name="number" palceholder="enter your number">
                @foreach($errors->get('number') as $message)
                    <div class="alert alert-warning" role="alert">
                    <strong> {{$message}}</strong> 
                    </div>
                    @endforeach  
               
            </div>
            {{csrf_field()}}
            <button type="submit" class="btn btn-primary but2">Submit</button>
        </form>
        <br>

            <div class="but3">
        <form action="{{route('/viewdata')}}">
            <button type="sumit" class="btn btn-secondary" name="savedata">Press here to view Data</button>
        </form>
        </div>
    </body>
</html>