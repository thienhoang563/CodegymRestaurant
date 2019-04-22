<link href="{{ asset('css/header.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar fixed-top menu">
    <div class="logo"><a href="{{ url('/') }}">
            <img src="{{asset('icons/apple-icon-72x72.png')}}" alt="" width="72" height="72"></a>
        &#160;&#160;&#160;&#160;
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link fas fa-home" href="{{ url('/') }}">&#160;Trang chủ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link fas fa-plus" href="{{ url('/') }}">&#160;Đặt bàn ngay<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link fas fa-list" href="{{ url('/') }}">&#160;Danh sách món ăn<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link fas fa-phone-volume" href="{{ url('/') }}">&#160;Liên hệ<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Tìm món ăn" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
        </form>
    </div>
</nav>
