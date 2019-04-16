@extends('layouts.app')
@section('content')
    <div class="container">

<div class="row justify-content-center">
    <div class="row">
    <form action="{{route('admin.users.update', $user['id'])}}" method="post" enctype="multipart/form-data">
        @csrf
        <h2>CẬP NHẬT THÔNG TIN</h2>
        <div class="form-group">
            <label for="name">Tên Khách Hàng</label>
            <input type="text" class="form-control" name="name" value="{{$user['name']}}" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="form-control" name="email" value="{{$user['email']}}" placeholder="Enter Email">
        </div>
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </form>
    </div>
</div>
    </div>
@endsection
