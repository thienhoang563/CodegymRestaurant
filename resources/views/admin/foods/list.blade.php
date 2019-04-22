@extends('layouts.app')
@section('page-content')
    <div class="col-12 col-md-12">
        <h1>Danh sách món ăn</h1>
        <table class="table table-striped">
            <h5><a href="{{route('admin.foods.add')}}" class="btn btn-primary">ADD</a></h5>
            @if(\Illuminate\Support\Facades\Session::has('success'))
                <div class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('success')}}</div>
            @endif
            @if(\Illuminate\Support\Facades\Session::has('error'))
                <div class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('error')}}</div>
            @endif
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên món ăn</th>
                <th scope="col">Loại món</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Đánh giá</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
@forelse($foods as $food)
    <tr>
        <td>{{ $food['food_id'] }}</td>
        <td>{{ $food['food_name'] }}</td>
        <td>
            @if($food['food_type'] == \App\Http\Controllers\FoodType::RAU)
                {{'Rau'}}
            @endif
        </td>
        <td>{{ $food['food_description'] }}</td>
        <td>
            <img src="{{asset('storage/ '. $food['food_image'])}}" alt="" width="50">
        </td>
        <td>{{ $food['food_price'] }}</td>
        <td>{{ $food['food_rating'] }}</td>
        <td>
            <a href="{{route('admin.foods.edit', $food['food_id'])}}" class="btn btn-primary"><i
                        class="far fa-edit"></i></a>
            <a href="{{route('admin.foods.destroy',$food['food_id'])}}" class="btn btn-danger"
               onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></a>
        </td>
    </tr>

    @empty
        <tr>
            <td>{{'No data!'}}</td>
        </tr>
    @endforelse
{{--            @if(count($foods) == 0)--}}
{{--                <tr>--}}
{{--                    <td colspan="11" style="color: red">Không có dữ liệu</td>--}}
{{--                </tr>--}}
{{--            @else--}}
{{--                @foreach($foods as $key=>$food)--}}
{{--                    <tr>--}}
{{--                        <th scope="row">{{ ++$key }}</th>--}}
{{--                        <td>{{$food['food_name'] }}</td>--}}
{{--                        <td>{{$food['food_type']}}</td>--}}
{{--                        <td>{{$food['food_description']}}</td>--}}
{{--                        <td><img src="{{asset('storage/images/'.$food['food_image'])}}" alt="" width="100px"--}}
{{--                                 height="100px"></td>--}}
{{--                        <td>{{$food['food_price']}}</td>--}}
{{--                        <td>{{$food['food_rating']}}</td>--}}
{{--                        <td><a class="btn btn-info" href="{{route('admin.foods.edit',$food->id)}}">sửa</a></td>--}}
{{--                        <td><a href="{{route('admin.foods.destroy', $food->id)}}" class="btn btn-danger"--}}
{{--                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--            @endif--}}
            </tbody>
        </table>
    </div>
@endsection
