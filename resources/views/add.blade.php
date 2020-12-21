

<!doctype html>
<html>
<head>
    <title>Authentication Signup Form Flat Responsive widget Template :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Validation Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- fonts -->
    <link href="{{asset('backend//fonts.googleapis.com/css?family=Muli:300,400')}}" rel="stylesheet">
    <!-- /fonts -->
    <!-- css -->
    <link href="{{asset('backend/css/bootstrap.css')}}" rel="stylesheet" type='text/css' media="all" />
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" type='text/css' media="all" />
    <!-- /css -->
</head>
<body>
<h1 class="w3ls">Thêm Danh Sách Khách Hàng </h1>

<div class="content-agileits">
    <form action="{{route('customer.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group w3layouts w3 w3l">



            <label for="firstname" class="control-label">First Name</label>
            <input type="text" class="form-control" name="name" placeholder="name" data-error="Enter Your First Name" required>
            <div class="help-block with-errors"></div>
        </div>


        <div class="form-group agileits w3layouts w3">
            <label for="lastname" class="control-label">Age</label>
            <input type="text" class="form-control" name="age" placeholder="age" data-error="Enter Your Last Name" required>
            <div class="help-block with-errors"></div>
        </div>


        <div class="form-group w3l agileinfo wthree w3-agileits">
            <label for="inputEmail" class="control-label">Phone</label>
            <input type="number" class="form-control" name="phone" placeholder="Phone" data-error="This email address is invalid" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group agileinfo wthree w3-agileits agile">
            <label for="Phone" class="control-label">Image</label>
            <input type="file" name="img" class="form-control-file" placeholder="img" data-error="Enter Your Phone Number" required>
            <div class="help-block with-errors"></div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-lg">Thêm Thông tin ^^</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </div>
    </form>
</div>
<p class="copyright-w3ls">© 2017 All Rights Reserved | Nguyễn Đình Tuấn 1999 <a href="https://www.google.com.vn/?hl=vi" target="_blank">google</a></p>
<!-- js files -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.min.js"></script>
<!-- /js files -->
</body>
</html>

