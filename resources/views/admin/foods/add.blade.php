@extends('layouts.app')
@section('content')
    <div class=" justify-content-center">
    <form method="post" action="{{ route('admin.foods.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên món ăn</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="description">Mô tả</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="form-group">
            <label for="type">Loại món ăn</label>
            <input type="text" class="form-control" name="type">
        </div>
        <div class="form-group">
            <label for="cooker">Người làm</label>
            <input type="text" class="form-control" name="cooker">
            <div class="form-group">
                <label for="price">Giá</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="rating">Đánh giá</label>
                <input type="text" class="form-control" name="rating">
            </div>
            <div class="form-group">
                <label for="status">Tình trạng</label>
                <input type="text" class="form-control" name="status">
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
                       name="inputFile">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
@endsection
