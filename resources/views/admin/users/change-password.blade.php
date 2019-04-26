@extends('layouts.app')
@section('page-content')
    <div class="col-12 col-md-12">
        <h1>Change Password</h1>
        <hr>
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
            <div class="form-group{{$errors->has('current-password') ? 'has-error' : ''}} row">

                <label class="col-sm-2 col-form-label" for="new-password">Current Password</label>
                <div class="col-sm-6">
                    <label for="current-password">

                    </label><input type="password" id="current-password" class="form-control"
                                                                 name="current-password" required>
                </div>
                @if($errors->has('current-password'))
                    <span class="help-block">
                                            <strong>{{$errors->first('current-password')}}</strong>
                                        </span>
                @endif

            </div>
            <div class="form-group{{$errors->has('new-password') ? 'has-error' : ''}} row">

                <label class="col-sm-2 col-form-label" for="new-password">New Password</label>
                <div class="col-sm-6"><input type="password" id="new-password" class="form-control" name="new-password"
                                             required>
                    @if($errors->has('new-password'))
                        <span class="help-block">
                                                <strong>{{$errors->first('new-password')}}</strong>
                                            </span>
                    @endif
                </div>


            </div>
            <div class="form-group{{$errors->has('new-password-confirm') ? 'has-error' : ''}} row">
                <label class="col-sm-2 col-form-label" for="new-password-confirm">Confirm New Password</label>
                <div class="col-sm-6">
                    <input type="password" id="new-password-confirm" class="form-control"
                           name="new-password-confirmation" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>

                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                    <a href="{{route('home')}}" class="btn btn-dark">Back</a>
                </div>
            </div>
        </form>
    </div>


@endsection
