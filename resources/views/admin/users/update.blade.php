@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Edit Profile</h1>
        <hr>
        <div class="row">
            {{--left column--}}
            <div class="col-md-3">
            </div>

            {{--edit form column--}}
            <div class="col-md-9 personal-info">
                <h3>Personal Info</h3>
                <form action="{{route('admin.users.update', $user['id'])}}" method="post" enctype="multipart/form-data"
                      class="form-horizontal" role="form">
                    @csrf
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Name:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                   value="{{$user['name']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input type="email" class="form-control" placeholder="Enter Email" name="email"
                                   value="{{$user['email']}}">
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label class="col-lg-3 control-label" for="inputFileName">Ten File</label>
                        <div class="col-lg-8">
                            <input type="text"
                                   class="form-control"
                                   id="inputFileName"
                                   name="inputFileName">
                        </div>
                        <div class="col-lg-8">
                            <input type="file"
                                   class="form-control-file"
                                   id="inputFile"
                                   value="{{$user['image']}}"
                                   name="inputFile">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                            <a href="{{route('home')}}" class="btn btn-dark">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
