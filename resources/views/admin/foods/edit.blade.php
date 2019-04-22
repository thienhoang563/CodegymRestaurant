@extends('layouts.app')
@section('page-content')
    <div class="col-12 col-md-12">
        <h1>Edit Food</h1>
        <hr>
        <form method="post" action="{{route('admin.foods.update', $food['food_id'])}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="name">Food name:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="name" value="{{$food['food_name'] }}"
                           placeholder="Enter name" required>
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
                    <select class="form-control" name="type">
                        <option value="{{\App\Http\Controllers\FoodType::RAU}}">Rau</option>
                        <option>Thit</option>
                        <option>Do uong</option>
                    </select>
{{--                    <input type="" class="form-control" name="type" value="{{$food['food_type'] }}"--}}
{{--                           placeholder="Enter name" required>--}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="name">Description</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="description" value="{{$food['food_description'] }}"
                           required>
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
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="name">Food price:</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="price" value="{{$food['food_price'] }}"
                           placeholder="Enter price" required>
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
                    <input type="text" class="form-control" name="rating" value="{{$food['food_rating'] }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary mb-2">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
