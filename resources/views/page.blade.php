@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset("css/home.css") }}">
    <link rel="stylesheet" href="{{ asset("css/page.css") }}">
@endsection



@section('content')
@include('navbar.navbar')

<section class="page">
    <div class="container-xl">
        <div class="row">
            <div class="images-top">
                <img src="{{asset('images/bg-image.png') }}" alt="images">
            </div>
        </div>
        <div class="row">
            <div class="subtitle">sad</div>
        </div>
    </div>

</section>


@include('footer.footer')
@endsection