@extends('layouts.app')
@section('page-content')
    <div class="col-12 col-md-12">
        <h1>Add new food</h1>
        <hr>
        <form method="post" action="{{ route('admin.foods.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="name">Food name:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="food_name" placeholder="Enter name">
                    @if($errors->has('food_name'))
                        <strong>{{$errors->first('food_name')}}</strong>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="name">Food type:</label>
                <div class="col-sm-2">
                    <select class="form-control" name="food_type">
                        <option value="{{\App\Http\Controllers\FoodType::RAU}}">Rau</option>
                        <option value="{{\App\Http\Controllers\FoodType::THIT}}">Thịt</option>
                        <option value="{{\App\Http\Controllers\FoodType::DOUONG}}">Đồ uống</option>
                        <option value="{{\App\Http\Controllers\FoodType::COM}}">Cơm</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="name">Description:</label>
                <div class="col-sm-8">
                    <textarea name="food_description" cols="20" rows="5" class="form-control"></textarea>
                    @if($errors->has('food_description'))
                                            <strong>{{$errors->first('food_description')}}</strong>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Food Image</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control-file" name="food_image">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="name">Price:</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="food_price">
                    @if($errors->has('food_price'))
                                            <strong>{{$errors->first('food_price')}}</strong>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="name">Rating:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="food_rating">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary mb-2" onclick="confirm('Bạn chắc chắn muốn thêm món ăn này vào danh sách!')">Add</button>
                    <a href="{{route('admin.foods.list')}}" class="btn btn-dark mb-2">Back</a>
                </div>
            </div>
        </form>
    </div>
@endsection
