{{--@extends('layouts.app')--}}
<body background="{{asset('background/blur-background01.jpg')}}">
@include('home-page.header')
@include('home-page.fb-chat')
<div class="container">
    <h3 style="margin-top:120px ;text-align:center">{{$food->food_name}}</h3>
    <p style="text-align:center">{{$food->food_description}}</p>
    <p style="text-align:center">{{$food->food_image}}</p>
    <p style="text-align:center">Loại: {{$food->food_type}}</p>
    <p style="text-align:center">Giá tiền: {{$food->food_price}}</p>
</div>

<!-- Go to www.addthis.com/dashboard to customize your tools -->

{{--<div class="container-fluid">--}}
{{--    <div class="col-sm-4 offset-sm-4">--}}
{{--        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp--}}
{{--        <div class="addthis_inline_share_toolbox_l7op"></div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="container" style="justify-content: center">--}}


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
@include('home-page.footer')
