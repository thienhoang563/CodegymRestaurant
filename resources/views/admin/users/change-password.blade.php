<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="container">
    <h4>Đổi mật khẩu</h4>
    <div class="row">
        <form action="{{route('admin.users.change-password',$user->id)}}" method="post" enctype="multipart/form-data"></form>
        <div class="col-sm-4">
            <label>Current Password</label>
            <div class="form-group">
                <input type="password" id="password" value="{{$user['password']}}" class="form-control" placeholder="Current Password">
            </div>
            <label>New Password</label>
            <div class="form-group">
                <input type="password" id="new-password" class="form-control" placeholder="New Password">
            </div>
            <label>Confirm Password</label>
            <div class="form-group">
                <input type="password" id="confirm-password" class="form-control" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
