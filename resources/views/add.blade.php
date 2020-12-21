<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</head>
<body>
{{--    <form method="post" action="{{route('customer.store')}}" enctype="multipart/form-data">--}}
{{--        @csrf--}}
{{--        Name:<input type="text" name="name">--}}
{{--        Age:<input type="text" name="age">--}}
{{--        Phone:<input type="text" name="phone">--}}
{{--        <div class="form-group">--}}
{{--            <label for="inputFileName">File Name</label>--}}
{{--            <input type="text"--}}
{{--                   class="form-control"--}}
{{--                   id="inputFileName"--}}
{{--                   name="inputFileName">--}}
{{--            <input type="file"--}}
{{--                   class="form-control-file"--}}
{{--                   id="inputFile"--}}
{{--                   name="inputFile">--}}
{{--        </div>--}}
{{--        <input type="submit">--}}
{{--    </form>--}}
{{--</body>--}}
{{--</html>--}}
<div class="container">
    <div class="card">
        <div class="card-header" style="background-color: deeppink">
            <h3>Thêm Danh Sach </h3>
        </div>
        <div class="card-body">

<form action="{{route('customer.store')}}" method="post" enctype="multipart/form-data">
    <div class="form-group">
        @csrf
        <label>Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="number" class="form-control" name="age" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="number" class="form-control" name="phone" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="inputFileName">File Name</label>
       <input type="file" name="img" class="form-control-file">
    </div>
    <input type="submit" class="btn btn-primary" value="Thêm mới">
    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>

</form>
        </div>
    </div>
</div>
</body>