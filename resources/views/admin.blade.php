@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="sidebar navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.users.list')}}">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <h4>Danh sách khách hàng</h4>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('admin.foods.list')}}">
                            <i class="fas fa-fw fa-table"></i>
                            <h4>Thông tin món ăn</h4></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                @yield('contentadmin')
            </div>
        </div>
    </div>
@endsection

