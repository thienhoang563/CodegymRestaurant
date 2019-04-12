@extends('layouts.app')
@section('content')
    <h1>Thay đổi thông tin món ăn</h1>
    <div class=" justify-content-center">
        <form method="post" action="{{route('admin.foods.update', $food['id'])}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Tên món ăn</label>
                <input type="text" class="form-control" name="name" value="{{$food['food_name'] }}"
                       placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <input type="text" class="form-control" value="{{$food['food_description']}}" name="description">
            </div>
            <div class="form-group">
                <label for="type">Loại món ăn</label>
                <input type="text" class="form-control" value="{{$food['food_type']}}" name="type">
            </div>
            <div class="form-group">
                <label for="cooker">Người làm</label>
                <input type="text" class="form-control" value="{{$food['food_cook']}}" name="cooker">
                <div class="form-group">
                    <label for="price">Giá</label>
                    <input type="text" class="form-control" value="{{$food['food_price']}}" name="price">
                </div>
                <div class="form-group">
                    <label for="rating">Đánh giá</label>
                    <input type="text" class="form-control" value="{{$food['food_rating']}}" name="rating">
                </div>
                <div class="form-group">
                    <label for="status">Tình trạng</label>
                    <input type="text" class="form-control" value="{{$food['food_status']}}" name="status">
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
                               name="inputFile">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
