<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{'Restaurant'}}</title>

</head>
<body background="{{asset('background/blur-background02.jpg')}}">
<HEADER>
    @include('home-page.header')
</HEADER>
    @include('home-page.body')
</body>
@include('home-page.fb-chat')
@include('home-page.back-to-top-button')
@include('home-page.address')
@include('home-page.footer')
</html>
