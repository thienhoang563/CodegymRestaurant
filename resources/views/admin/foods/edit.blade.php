@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Thay đổi thông tin món ăn</h1>
        <hr>
        <div class="row">
            <div class="col-md-7">
                <form method="post" action="{{route('admin.foods.update', $food['id'])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên món ăn</label>
                        <input type="text" class="form-control" name="name" value="{{$food['food_name'] }}"
                               placeholder="Enter name" required>
                        @if($errors->has('food_name'))
                            <span class="help-block">
                                            <strong>{{$errors->first('food_name')}}</strong>
                                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <input type="text" class="form-control" value="{{$food['food_description']}}"
                               name="description" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Loại món ăn</label>
                        <input type="text" class="form-control" value="{{$food['food_type']}}" name="type" required>
                    </div>
                    <div class="form-group">
                        <label for="cooker">Người làm</label>
                        <input type="text" class="form-control" value="{{$food['food_cook']}}" name="cooker" required>
                        <div class="form-group">
                            <label for="price">Giá</label>
                            <input type="text" class="form-control" value="{{$food['food_price']}}" name="price">
                        </div>
                        <div class="form-group">
                            <label for="rating">Đánh giá</label>
                            <input type="text" class="form-control" value="{{$food['food_rating']}}" name="rating" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Tình trạng</label>
                            <input type="text" class="form-control" value="{{$food['food_status']}}" name="status" required>
                        </div>
                        <div class="form-group">
                            <label for="inputFileName">Ten File</label>
                            <input type="text"
                                   class="form-control"
                                   id="inputFileName"
                                   name="inputFileName">
                            <input type="file"
                                   class="form-control-file"
                                   id="inputFile"
                                   value="{{$food['food_picture_url']}}"
                                   name="inputFile" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{route('home')}}" class="btn btn-dark">Back</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
