<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="{{ asset('js/custom.js')}}"></script>
    <title>Display Saved Data</title>
</head>
<body>
      @if($message=Session::get('success'))
        <div class="alert alert-success alert-block" id="message">
	        <button type="button" class="close" data-dismiss="alert" onclick="myFunction()">×</button>	
                <strong>{{ $message }}</strong> 
        </div>
         @endif

         @if($message=Session::get('delete'))
        <div class="alert alert-success alert-block" id="deletedata">
	        <button type="button" class="close" data-dismiss="alert" onclick="deleteData()">×</button>	
                <strong>{{ $message }}</strong> 
        </div>
         @endif


    <div class="table-responsive-sm-md-lg-xl">
     <table class="table">
     <thead>
            <tr><th colspan="8" style='text-align: center'>Here are your available data</th></tr>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Number</th>
                <th scope="col">Edit</th>
                <th sccope="col">Delete</th>
            </tr>
    </thead>
        <tbody>
      
            @if(isset($savedata))
                @foreach($savedata as $show)
                    <tr>
                        <td>{{$show->id}}</td>
                        <td>{{$show->firstname}}</td>
                        <td>{{$show->lastname}}</td>
                        <td>{{$show->address}}</td>
                        <td>{{$show->email}}</td>
                        <td>{{$show->number}}</td>
                        <td>
                         <a href="{{route('/edit',['id'=>$show->id])}}"><button type="button"  name="edit" class="btn btn-primary">Edit</button></a>
                        </td>
                        <td>
                            <a href="{{route('/delete',['id'=>$show->id])}}"><button type="button" name="delete" class="btn btn-danger">Delete</button><br> </a>
                        </td>
                    </tr>
                @endforeach
            @endif

            @if(isset($dataid))
                    <tr>
                        <td>{{$dataid->id}}</td>
                        <td>{{$dataid->firstname}}</td>
                        <td>{{$dataid->lastname}}</td>
                        <td>{{$dataid->address}}</td>
                        <td>{{$dataid->email}}</td>
                        <td>{{$dataid->number}}</td>
                        <td>
                         <a href="{{route('/edit',['id'=>$dataid->id])}}"><button type="button"  name="edit" class="btn btn-primary">Edit</button></a>
                        </td>
                        <td>
                            <a href="{{route('/delete',['id'=>$dataid->id])}}"><button type="button" name="delete" class="btn btn-danger">Delete</button><br> </a>
                        </td>
                    </tr>
            @endif

            @if(isset($dataname))
                @foreach($dataname as $showname)
                    <tr>
                        <td>{{$showname->id}}</td>
                        <td>{{$showname->firstname}}</td>
                        <td>{{$showname->lastname}}</td>
                        <td>{{$showname->address}}</td>
                        <td>{{$showname->email}}</td>
                        <td>{{$showname->number}}</td>
                        <td>
                         <a href="{{route('/edit',['id'=>$showname->id])}}"><button type="button"  name="edit" class="btn btn-primary">Edit</button></a>
                        </td>
                        <td>
                            <a href="{{route('/delete',['id'=>$showname->id])}}"><button type="button" name="delete" class="btn btn-danger">Delete</button><br> </a>
                        </td>
                    </tr>
                @endforeach
            @endif






        </tbody>
</table>
</div>  



</body>
</html>