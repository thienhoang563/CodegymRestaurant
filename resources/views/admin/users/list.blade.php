@extends('layouts.app')
@section('content')
    <h1>Danh Sách Khách Hàng</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Email</th>
            <th></th>
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
                    <td>
                        <a class="btn btn-info" href="#">Cap nhat thong tin</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="#">Thay doi mat khau</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="#">Xóa</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection

