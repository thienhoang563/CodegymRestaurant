
@extends('admin')
@section('contentadmin')
    <div class="container">
        <h1>Danh Sách Khách Hàng</h1>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Email</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($users) == 0)
            <tr>
                <td colspan="4">Không có dữ liệu</td>
            </tr>
        @else
            @foreach($users as $key => $user)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $user['name'] }}</td>
                    <td>{{$user['email']}}</td>
                    <td><a class="btn btn-dark" href="{{route('admin.users.edit', $user->id)}}">
                            Cập nhật thông tin
                        </a>
                        <a class="btn btn-dark" href="{{route('admin.users.password',$user->id)}}">
                            Đổi mật khẩu
                        </a>
                    <a href="{{route('admin.users.delete', $user->id)}}" class="btn btn-danger"
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection

