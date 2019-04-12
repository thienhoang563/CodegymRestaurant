@extends('layouts.app')
@section('content')
    <div class=" justify-content-center">
    <form method="post" action="{{ route('admin.foods.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Tên món ăn</label>
            <label>
                <input type="text" class="form-control" name="name" placeholder="Enter name">
            </label>
        </div>
        <div class="form-group">
            <label for="description">Mô tả</label>
            <label>
                <input type="text" class="form-control" name="description">
            </label>
        </div>
        <div class="form-group">
            <label for="type">Loại món ăn</label>
            <label>
                <input type="text" class="form-control" name="type">
            </label>
        </div>
        <div class="form-group">
            <label for="cooker">Người làm</label>
            <label>
                <input type="text" class="form-control" name="cooker">
            </label>
            <div class="form-group">
                <label for="price">Giá</label>
                <label>
                    <input type="text" class="form-control" name="price">
                </label>
            </div>
            <div class="form-group">
                <label for="rating">Đánh giá</label>
                <label>
                    <input type="text" class="form-control" name="rating">
                </label>
            </div>
            <div class="form-group">
                <label for="status">Tình trạng</label>
                <label>
                    <input type="text" class="form-control" name="status">
                </label>
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
