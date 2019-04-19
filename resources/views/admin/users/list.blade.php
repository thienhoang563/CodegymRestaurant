
@extends('layouts.app')
@section('page-content')
    <div class="container">
        <h1>Danh Sách Khách Hàng</h1>
    </div>
    <div>
        @if(Session::has('success'))
            <p class="text-success">
                <i class="fa fa-check" aria-hidden="true"></i>{{Session::get('success')}}
            </p>
        @endif
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Email</th>
            <th scope="col">Image</th>
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
                    <td><img src="{{asset('storage/images/'.$user['image'])}}" alt="" width="100px"
                             height="100px"></td>
                    <td>
                        <a href="{{route('admin.users.delete', $user->id)}}" class="btn btn-danger"
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa
                        </a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection

