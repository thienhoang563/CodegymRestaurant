@include('home-page.header')<br/><br/><br/><br/><br/><br/>
<body background="{{asset('background/blur-background01.jpg')}}">
<div class="col-12 col-md-12">
        <h1>Danh sách món ăn</h1>
        <table class="table table-striped">
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
            <tbody>
            @forelse($foods as $food)
                <tr>
                    <td>{{ $food->food_id }}</td>
                    <td>{{ $food->food_name }}</td>
                    <td>
                        @if($food->food_type == \App\Http\Controllers\FoodType::RAU)
                            {{'Rau'}}
                            @elseif($food->food_type == \App\Http\Controllers\FoodType::THIT)
                            {{'Thịt'}}
                            @else
                            {{'Đồ uống'}}
                        @endif
                    </td>
                    <td>{{ $food->food_description }}</td>
                    <td>
                        <img src="{{asset('storage/'. $food->food_image)}}" alt="" width="150px">
                    </td>
                    <td>{{ $food->food_price }}</td>
                    <td>{{ $food->food_rating }}&nbsp;<i class="far fa-star"></i></td>
                </tr>

            @empty
                <tr>
                    <td>{{'No data!'}}</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</body>
@include('home-page.footer')
