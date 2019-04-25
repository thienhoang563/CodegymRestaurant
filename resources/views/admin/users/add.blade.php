@extends('layouts.app')
@section('page-content')
<h1>Register</h1>
<hr>
    <div class="col-12 col-md-12">
                    <form method="POST" action="{{Route('admin.users.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">{{ __('Name') }}</label>

                            <div class="col-sm-5">
                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                        required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">{{ __('E-Mail Address') }}</label>
                            <div class="col-sm-5">
                                <input  type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                       placeholder="Enter the email" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-sm-2 col-form-label">{{ __('Password') }}</label>

                            <div class="col-sm-5">
                                <input type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control-file" name="image">
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-sm-2 col-form-label pt-0">Role</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="role" value="{{\App\Http\Controllers\RoleAdmin::ADMIN}}" checked>
                                        <label class="form-check-label" for="exampleCheck1">Admin</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="role" value="{{\App\Http\Controllers\RoleAdmin::MEMBER}}">
                                        <label class="form-check-label" for="exampleCheck1">Member</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group row">
                            <label class="col-form-label col-sm-2"></label>
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
