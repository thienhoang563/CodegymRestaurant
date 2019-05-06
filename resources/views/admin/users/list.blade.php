@extends('layouts.app')
@section('page-content')
    <div class="col-12 col-md-12">
        <h1>Danh Sách Khách Hàng</h1>
    <div>
        @if(Session::has('success'))
            <p class="text-success">
                <i class="fa fa-check" aria-hidden="true"></i>{{Session::get('success')}}
            </p>
        @endif
            @if(Session::has('error'))
                <p class="text-dark">
                    <i class="fa fa-check" aria-hidden="true"></i>{{Session::get('error')}}
                </p>
            @endif
    </div>
    <table class="table table-striped">
        @can('role','1')
        <h5><a href="{{route('admin.users.add')}}" class="btn btn-primary">ADD</a></h5>
        @endcan
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Email</th>
            <th scope="col">Image</th>
            <th scope="col">Role</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php $soThuTu = 1; ?>
            @forelse($users as $user)
                <tr>
                    <th scope="row">{{ $soThuTu++ }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if($user->image)
                            <img src="{{asset('storage/'. $user->image)}}" alt="" width="90">
                        @else
                            {{'Chưa có ảnh'}}
                        @endif
                    </td>
                    <td>@if($user->role == \App\Http\Controllers\RoleAdmin::ADMIN)
                            {{'Admin'}}
                        @else
                            {{'Member'}}
                        @endif</td>
                    <td>
                        @can('role','1')
                        <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-primary"><i
                                    class="far fa-edit"></i></a>
                        <a href="{{route('admin.users.delete',$user->id)}}" class="btn btn-danger"
                           onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        @endcan
                </tr>

                @empty
                <tr>
                    <td colspan="5" style="text-align: center; color: red;">{{'No data found!'}}</td>
                </tr>
            @endforelse
        </tbody>
    </table>
        <div class="col-12">
            <div class="pagination float-right">
                {{ $users->appends(request()->query()) }}
            </div>
        </div>
    </div>

@endsection

