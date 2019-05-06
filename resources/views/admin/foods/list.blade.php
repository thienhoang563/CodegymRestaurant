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
            <?php $soThuTu = 1; ?>
            @forelse($foods as $food)
                <tr>
                    <td>{{ $soThuTu++ }}</td>
                    <td>{{ $food->food_name }}</td>
                    <td>
                        @if($food->food_type == \App\Http\Controllers\FoodType::RAU)
                            {{'Rau'}}
                        @endif
                    </td>
                    <td>{{ $food->food_description }}</td>
                    <td>
                        @if($food->food_image)
                            <img src="{{asset('storage/'. $food->food_image)}}" alt="" width="90">
                        @else
                            {{'Chưa có ảnh'}}
                        @endif
                    </td>
                    <td>{{ $food->food_price }}</td>
                    <td>{{ $food->food_rating }}</td>
                    <td>
                        <a href="{{route('admin.foods.edit', $food->food_id)}}" class="btn btn-primary"
                           ><i class="far fa-edit"></i></a>
                        <a href="{{route('admin.foods.destroy',$food->food_id)}}" class="btn btn-danger"
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" style="color: red;text-align: center">{{'No data found!'}}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        <div class="col-12">
            <div class="pagination float-right">
                {{ $foods->appends(request()->query()) }}
            </div>
        </div>
    </div>
@endsection
