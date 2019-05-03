@include('home-page.header')
<body background="{{asset('background/blur-background01.jpg')}}">
<div class="container">
    <h1 class="text-center" style="padding-top: 80px">Thực Đơn</h1>
    <div class="container">
        <div class="row">
            @forelse($foods as $food)
                <div class="col-12 col-md-4">
                    <div class="card">
                        <a style="text-decoration: none; color: black" class="image"
                           href="{{route('food.show', $food->food_id)}}">
                            @if($food->food_image)
                                <img style="width: 100%;height: 250px;cursor: pointer" class=" image"
                                     src="{{asset('storage/'. $food->food_image)}}" alt="">
                            @else
                                {{'Chưa có ảnh'}}
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">Tên món: {{ $food->food_name }}</h5>
                                <p>Mô tả: {{ $food->food_description }}</p>
                                <span style="color: #b93026;">Giá:{{ $food->food_price }} VND</span>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <p colspan="7" style="color: red; text-align: center">{{'No data found!'}}</p>
            @endforelse
        </div>
    </div>
</div>
</body>
@include('home-page.fb-chat')
@include('home-page.footer')
@include('home-page.back-to-top-button')

