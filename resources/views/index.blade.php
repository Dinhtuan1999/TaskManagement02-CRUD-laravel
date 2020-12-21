<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</head>

<body>

<h1>danh sach</h1>
<div class="container-fixed">
    <div class="table">
        <a class="btn btn-success" href="{{route('customer.create')}}">Add</a>
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Image</th>
                <th></th>

            </tr>
            </thead>
            <tbody>
            @foreach($customers as $key=>$customer)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->age}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>
                         <img src="{{asset('storage/'.$customer->img) }}" alt="" style="width: 100px">
                    </td>
                    <td>
                        <a href="{{route('customer.edit',$customer->id)}}"> Edit</a>
                        <a href="{{route('customer.destroy',$customer->id)}}"> Delete </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
