@extends('layouts.app')


@section('styles')
    <link rel="stylesheet" href="{{ asset("css/home.css") }}">
@endsection



@section('content')
@include('navbar.navbar')

<div class="top-img">
    <div class="container">
        <img src="{{asset('images/bg-image.png') }}" alt="top-img" class="img">
    </div>
</div>

<section class="photodiary">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="subtitle" id="photodiary">photodiary</div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <h2 class="title"><a href="#">The perfect weekend getaway</a></h2>
            </div>
        </div>
        <div class="row">
            <div class="col ">
                <div class="dscr">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </div>
            </div>

        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="subtitle">
                    <a href="#" class="subtitle_link">
                        Leave a comment
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lifestyle">
    <div class="container">
      

        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('images/lifestyle_1.jpg') }}" alt="lifestyle_1" class="img">
                <div class="subtitle mt-3">Lifestyle</div>
                <h2 class="title mt-3"><a href="#">More than just a music festival</a></h2>
                <div class="dscr mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
            <div class="col-lg-6 ">
                <img src="{{asset('images/lifestyle_2.jpg') }}" alt="lifestyle_2" class="img">
                <div class="subtitle mt-3">Lifestyle</div>
                <h2 class="title mt-3"><a href="#">Life tastes better with coffee</a></h2>
                <div class="dscr mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('images/photodiary_1.png') }}" alt="lifestyle_1" class="img">
                <div class="subtitle mt-3">photodiary</div>
                <h2 class="title mt-3"><a href="#">American dream</a></h2>
                <div class="dscr mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
            <div class="col-lg-6 ">
                <img src="{{asset('images/photodiary_2.png') }}" alt="lifestyle_2" class="img">
                <div class="subtitle mt-3">photodiary</div>
                <h2 class="title mt-3"><a href="#">A day exploring the Alps</a></h2>
                <div class="dscr mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
        </div>
    </div>
</section>

<section class="newsletter">
    <div class="container">
        <div class="row">
            <h2>Sign up for our newsletter!</h2>
        </div>
        <div class="row">
            <div class="col">
                <div class="block">
                    <form method="POST" action="{{ route('send_email') }}">
                        @csrf
                        <input type="email" name="email"  placeholder="Enter a valid email address" required autocomplete="on" maxlength="50">
                        <button type="submit"><img src="{{asset('images/send_icon.png') }}" alt="send" class="img"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="more">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <img src="{{asset('images/more_2.png') }}" alt="more_2" class="img">
                <div class="subtitle mt-3">Lifestyle</div>
                <h2 class="title mt-3"><a href="#">Top 10 song for running</a></h2>
                <div class="dscr mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
            <div class="col-lg-6 ">
                <img src="{{asset('images/more_1.jpg') }}" alt="more_1" class="img">
                <div class="subtitle mt-3">Lifestyle</div>
                <h2 class="title mt-3"><a href="#">Cold winter days</a></h2>
                <div class="dscr mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
            </div>
        </div>
    </div>
    <div class="btn_more">
       <button type="button" class="bt_more" id="btn_more" > Load more</button>
    </div>

    <div id="more_cont"  class="cont_more container animate__animated animate__flash animate__faster  hidden">
        <div class="row " style="margin-top: 100px">
            <div class="row">
                @foreach ($posts as $item)
                    @include('elements.block_home')
                @endforeach
            </div>
        </div>
    </div>
    


</section>
    @include('footer.footer')
@endsection