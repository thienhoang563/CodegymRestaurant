@extends('layouts.app')
@section('content')
    <div class="row">
        <h1>Danh sách món ăn</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên món ăn</th>
                <th scope="col">Loại món</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Người làm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Đánh giá</th>
                <th scope="col">Tình trạng</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(count($foods) == 0)
                <tr>
                    <td colspan="11" style="color: red">Không có dữ liệu</td>
                </tr>
            @else
                @foreach($foods as $key=>$food)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{$food['food_name'] }}</td>
                        <td>{{$food['food_type']}}</td>
                        <td>{{$food['food_description']}}</td>
                        <td>{{$food['food_cook']}}</td>
                        <td><img src="{{asset('storage/images/'.$food['food_picture_url'])}}" alt="" width="100px"
                                 height="100px"></td>
                        <td>{{$food['food_price']}}</td>
                        <td>{{$food['food_rating']}}</td>
                        <td>
                            @if($food['food_status'] == 1)
                                <span class="text-success">{{'còn'}}</span>
                            @else
                                {{'het'}}
                            @endif
                        </td>
{{--                        <td><a class="btn btn-info" href="{{route('admin.foods.edit',$food['id'])}}">sửa</a></td>--}}
{{--                        <td><a href="{{route('admin.foods.destroy', $food['id'])}}" class="btn btn-danger"--}}
{{--                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>--}}
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection
