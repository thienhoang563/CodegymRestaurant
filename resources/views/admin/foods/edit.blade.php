@extends('layouts.app')
@section('page-content')
    <div class="col-12 col-md-12">
        <h1>Edit Food</h1>
        <hr>
        <form method="post" action="{{route('admin.foods.update', $food->food_id)}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="name">Food name:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="food_name" value="{{$food->food_name }}"
                           placeholder="Enter name">
                    @if($errors->has('food_name'))
                        <span class="help-block">
                            <strong>{{$errors->first('food_name')}}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="name">Food type:</label>
                <div class="col-sm-8">
                    <select class="form-control" name="food_type">
                        <option value="{{\App\Http\Controllers\FoodType::RAU}}">Rau</option>
                        <option value="{{\App\Http\Controllers\FoodType::THIT}}">Thit</option>
                        <option value="{{\App\Http\Controllers\FoodType::DOUONG}}">Đồ uống</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="name">Description</label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="food_description" cols="30" rows="5">{{$food->food_description }}</textarea>
                    @if($errors->has('food_description'))
                        <span class="help-block">
                            <strong>{{$errors->first('food_description')}}</strong>
                        </span>
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
                <label class="col-sm-2 col-form-label" for="name">Food price:</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="food_price" value="{{$food->food_price }}"
                           placeholder="Enter price">
                    @if($errors->has('food_price'))
                        <span class="help-block">
                            <strong>{{$errors->first('food_price')}}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="name">Food rating:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="food_rating" value="{{$food->food_rating }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary mb-2" onclick="return confirm('Bạn chắc chắn muốn thay đổi?')">Update</button>
                    <a href="{{route('admin.foods.list')}}" class="btn btn-dark mb-2">Back</a>
                </div>
            </div>
        </form>
    </div>
@endsection
