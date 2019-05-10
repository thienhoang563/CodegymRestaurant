<body background="{{asset('background/bg005.jpg')}}">
@include('home-page.header')
@include('home-page.fb-chat')
<div class="container" style="border: black; width: 100%">
    <div class="row" style="height: 130px"></div>
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-5">
            <img src="{{asset('storage/'. $food->food_image)}}" class="img-thumbnail" style="width: 450px" alt="...">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title" style="color: rgba(255,0,0,0.7)">{{$food->food_name}}</h5>
                <p class="card-text">Mô tả: {{$food->food_description}}</p>
                <p class="card-text">Loại:
                    @if($food->food_type == \App\Http\Controllers\FoodType::RAU)
                        {{'Rau'}}
                    @elseif($food->food_type == \App\Http\Controllers\FoodType::THIT)
                        {{'Thịt'}}
                    @elseif($food->food_type == \App\Http\Controllers\FoodType::DOUONG)
                        {{'Đồ uống'}}
                    @elseif($food->food_type == \App\Http\Controllers\FoodType::COM)
                        {{'Cơm'}}
                    @endif
                </p>
                <p class="card-text">Giá tiền: {{$food->food_price}} Việt Nam Đồng</p>
                <p class="card-text">
                    <small class="text-muted">Cập nhật lúc: {{$food->updated_at}}</small>
                </p>
            </div>
        </div>
    </div>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Video</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <iframe width="1024" height="576" src="https://www.youtube.com/embed/77rJ8gObg58" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>
    </div>
</div>
</div>
</body>
@include('home-page.footer')
