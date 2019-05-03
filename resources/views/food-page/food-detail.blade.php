<body background="{{asset('background/blur-background01.jpg')}}">
@include('home-page.header')
@include('home-page.fb-chat')
<div class="row">
    <div class="col-md-8 offset-2">
        <div class="card mb-3 bg-transparent" style="max-width: 720px; padding-top: 120px">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{asset('storage/'. $food->food_image)}}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$food->food_name}}</h5>
                        <p class="card-text">{{$food->food_description}}</p>
                        <p class="card-text">Loại: {{$food->food_type}}</p>
                        <p class="card-text">Giá tiền: {{$food->food_price}}</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Large modal -->
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

@include('home-page.back-to-top-button')
{{--@include('home-page.footer')--}}
