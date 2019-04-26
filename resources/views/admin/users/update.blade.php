@extends('layouts.app')
@section('page-content')
    <div class="col-12 col-md-12">
        <h1>Edit Profile</h1>
        <hr>
        <form action="{{route('admin.users.update',$user->id)}}" method="post" enctype="multipart/form-data">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-6">
                    <label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name"
                               value="{{$user['name']}}">
                    </label>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-6">
                    <label>
                        <input type="email" class="form-control" name="email"
                               value="{{$user['email']}}" disabled>
                    </label>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-5">
                    <div class="form-check">
                        <label>
                            <input type="radio" class="form-check-input" name="role"
                                   value="{{ \App\Http\Controllers\RoleAdmin::ADMIN }}"
                                   @if($user->role == \App\Http\Controllers\RoleAdmin::ADMIN)
                                   checked
                                    @endif>
                        </label>
                        <label class="form-check-label">Admin</label>
                    </div>
                    <div class="form-check">
                        <label>
                            <input type="radio" class="form-check-input" name="role"
                                   value="{{\App\Http\Controllers\RoleAdmin::MEMBER}}"
                                   @if($user->role == \App\Http\Controllers\RoleAdmin::MEMBER)
                                   checked
                                    @endif>
                        </label>
                        <label class="form-check-label">Member</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary mb-2">Update</button>
                    <a href="{{route('home')}}" class="btn btn-dark mb-2">Back</a>
                </div>
            </div>
        </form>
    </div>
@endsection
