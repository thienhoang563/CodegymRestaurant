@extends('layouts.app')
@section('content')
        <div class="row">
            <div class="col-sm-6 offset-sm-3 text-center">
                <img src="https://previews.123rf.com/images/sergeypykhonin/sergeypykhonin1707/sergeypykhonin170700052/81892309-restaurant-logo-icon-or-symbol-for-design-menu-eatery-canteen-or-cafe-lettering-vector-illustration.jpg" width="100px" height="100px"
                     style="justify-content: center" alt="hinh anh">
            </div>
        </div>
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('login')}}">
                        @csrf
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <label for="email"></label><input id="email" type="email"
                                                              class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                              name="email" value="{{ old('email') }}" placeholder="Enter email" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <label for="password"></label><input id="password" type="password"
                                                                 class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                                 name="password" placeholder="Enter password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="row align-items-center remember">
                            <label for="remember"></label><input type="checkbox" name="remember"
                                                                 id="remember" {{ old('remember') ? 'checked' : '' }} >Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
{{--                <div class="card-footer">--}}
{{--                    <div class="d-flex justify-content-center links">--}}
{{--                        Don't have an account?<a href="{{ route('register') }}">Sign Up</a>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <a href="#">Forgot your password?</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
@endsection


