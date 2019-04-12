@extends('admin')
@section('content')
<div class="justify-content-center">
    <div class="row">
    <form action="{{route('admin.users.update', $user->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <h4>Cập nhật thông tin</h4>
        <div class="form-group">
            <label for="name">Tên Khách Hàng</label>
            <input type="text" class="form-control" name="name" value="{{$user['name']}}" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="email" class="form-control" name="email" value="{{$user['email']}}" placeholder="Enter Email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    </div>
</div>
@endsection
