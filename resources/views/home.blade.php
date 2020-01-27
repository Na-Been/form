<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="{{ asset('js/custom.js')}}"></script>
    <title>Homepage</title>
    <style>
         .but3{
            float:right;
            padding:12;
            margin-top:20px;
            margin-right:-75px;
            }
    </style>
</head>
<body>

<div>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">{{$user->firstname}}</a>
  
 
  
  <form action="{{route('/logout')}}" method="GET">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log-out</button>
  <form>
 </div>
 </body>
</html>

