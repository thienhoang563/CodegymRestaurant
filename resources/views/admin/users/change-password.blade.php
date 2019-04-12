@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                    <div class="card-header text-center">Đổi mật khẩu</div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{session('error')}}
                            </div>
                        @endif
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        <form action="" method="post">
                            @csrf
                            <div class="form-group{{$errors->has('current-password') ? 'has-error' : ''}}">
                                <div class="col-md-12">
                                    <label for="new-password">Current Password</label>
                                    <input type="password" id="current-password" class="form-control"
                                           name="current-password" required>

                                    @if($errors->has('current-password'))
                                        <span class="help-block">
                                            <strong>{{$errors->first('current-password')}}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{$errors->has('new-password') ? 'has-error' : ''}}">
                                <div class="col-md-12">
                                    <label for="new-password">New Password</label>
                                    <input type="password" id="new-password" class="form-control" name="new-password"
                                           required>

                                    @if($errors->has('new-password'))
                                        <span class="help-block">
                                                <strong>{{$errors->first('new-password')}}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-sm-12">
                                    <label for="new-password-confirm">Confirm New Password</label>

                                    <input type="password" id="new-password-confirm" class="form-control"
                                           name="new-password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection
