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
                        <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="name">Food type:</label>
                        <div class="col-sm-2">
                                <select class="form-control" name="type">
                                    <option value="{{\App\Http\Controllers\FoodType::RAU}}">Rau</option>
                                    <option value="{{\App\Http\Controllers\FoodType::THIT}}">Thit</option>
                                    <option>Do uong</option>
                                </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="name">Description:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="description" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Food Image</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="name">Price:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="price" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="name">Rating:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="rating">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary mb-2">Update</button>
                            <a href="{{route('admin.foods.list')}}" class="btn btn-dark mb-2">Back</a>
                        </div>
                    </div>
                </form>
    </div>
@endsection
