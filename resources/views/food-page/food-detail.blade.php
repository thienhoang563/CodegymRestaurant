{{--@extends('layouts.app')--}}
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

<div class="container-fluid">
    <div class="col-sm-4 offset-sm-4">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <div class="addthis_inline_share_toolbox_l7op"></div>
    </div>
</div>


@include('home-page.back-to-top-button')
@include('home-page.footer')
