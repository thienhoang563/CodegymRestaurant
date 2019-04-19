@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Thêm mới món ăn</h1>
        <hr>
        <div class="row">
            <div class="col-md-7">
                <form method="post" action="{{ route('admin.foods.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên món ăn</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <input type="text" class="form-control" name="description" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Loại món ăn</label>
                        <input type="text" class="form-control" name="type" required>
                    </div>
                    <div class="form-group">
                        <label for="cooker">Người làm</label>
                        <input type="text" class="form-control" name="cooker" required>
                        <div class="form-group">
                            <label for="price">Giá</label>
                            <input type="text" class="form-control" name="price" required>
                        </div>
                        <div class="form-group">
                            <label for="rating">Đánh giá</label>
                            <input type="text" class="form-control" name="rating" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Tình trạng</label>
                            <input type="text" class="form-control" name="status" required>
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
                        <a href="{{route('home')}}" class="btn btn-dark">Back</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
