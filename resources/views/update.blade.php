<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Document</title>
    <style>
            .forma{
                width:50%;
                height:500;
                margin: 0 auto;
                margin-top:60px;
            }
            .but2{
                float: right;
                padding: 12;
            }
            </style>
</head>
<body>
    
<form action="{{route('/update',['id'=>$savedata->id])}}" method="POST" class="forma">
            <div class="form-group">
                <label>First Name:</label>
                <input type="text" class="form-control" name="newfirstname" value="{{$savedata->firstname}}">
                @foreach($errors->get('newfirstname') as $message)
                    <div class="alert alert-warning" role="alert">
                    <strong> {{$message}}</strong> 
                    </div>
                    @endforeach  
                
            </div>
            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" class="form-control" name="newlastname" value="{{$savedata->lastname}}">
                @foreach($errors->get('newlastname') as $message)
                    <div class="alert alert-warning" role="alert">
                    <strong> {{$message}}</strong> 
                    </div>
                    @endforeach 
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input type="text" class="form-control" name="newaddress" value="{{$savedata->address}}">
                @foreach($errors->get('newaddress') as $message)
                    <div class="alert alert-warning" role="alert">
                    <strong> {{$message}}</strong> 
                    </div>
                    @endforeach 
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="newemail" value="{{$savedata->email}}">
                @foreach($errors->get('newemail') as $message)
                    <div class="alert alert-warning" role="alert">
                    <strong> {{$message}}</strong> 
                    </div>
                    @endforeach  
            </div>
            <div class="form-group">
                <label>Number:</label>
                <input type="number" class="form-control" name="newnumber" value="{{$savedata->number}}">
                @foreach($errors->get('newnumber') as $message)
                    <div class="alert alert-warning" role="alert">
                    <strong> {{$message}}</strong> 
                    </div>
                    @endforeach  
                
            </div>
            {{csrf_field()}}
            <button type="submit" class="btn btn-primary but2">Update</button>
        </form>

</body>
</html>