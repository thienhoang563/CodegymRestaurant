<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="header fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: goldenrod;">
        <a class="navbar-brand" href="#">
            <img src="data:image/png;base64,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" width="50" height="50" class="d-inline-block align-center" alt="">
            CODEGYM
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse justify-content-center navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">TRANG CHỦ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">THỰC ĐƠN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">KHUYẾN MẠI</a>
                </li>
            </ul>
        </div>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="#">ĐĂNG NHẬP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ĐĂNG KÝ</a>
            </li>
        </ul>
    </nav>
</div>

<div class="container">
    <div class="row">

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
