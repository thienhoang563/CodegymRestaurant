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
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>{{Session::get('error')}}
                </p>
            @endif
    </div>
    <table class="table table-striped">
        <h5><a href="{{route('admin.users.add')}}" class="btn btn-primary">ADD</a></h5>
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
            @forelse($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <img src="{{asset('image'.$user->image)}}" alt="" width="100px"
                             height="100px">
                    </td>
                    <td>@if($user->role == \App\Http\Controllers\RoleAdmin::ADMIN)
                            {{'Admin'}}
                        @else
                            {{'Member'}}
                        @endif</td>
                    <td>
                    @if($user->id == '1' || $user->id == \Illuminate\Support\Facades\Auth::user()->id)
                        <td></td>
                    @else
                        <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-primary"><i
                                    class="far fa-edit"></i></a>
                        <a href="{{route('admin.users.delete',$user->id)}}" class="btn btn-danger"
                           onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        @endif
                </tr>

                @empty
                <tr>
                    <td>{{'No data!'}}</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    </div>

@endsection

