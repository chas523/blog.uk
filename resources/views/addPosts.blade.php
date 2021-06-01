@extends('layouts.app')



@section('styles')
    <link rel="stylesheet" href="{{ asset("css/home.css") }}">
    <link rel="stylesheet" href="{{ asset("css/page.css") }}">
@endsection



@section('content')
@include('navbar.navbar')

<section class="sendPost">
    <div class="container">
        <div class="row">
            <h1>Upload your post</h1>
        </div>
        <form action="/addPost" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-4 offset-lg-4 mt-4">
                    <input class="input" name="title" type="title" placeholder="title" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 offset-lg-4 mt-4">
                    <textarea name="describe" cols="30" rows="10" required placeholder="describe"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 offset-lg-4 mt-4">
                    <input class="input" name="tags" list="tags" type="text" required  placeholder="tags">
                    <datalist id="tags">
                        <option value="Photodiary"></option>
                        <option value="Music"></option>
                        <option value="Lifestyle"></option>
                    </datalist>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 offset-lg-4 mt-4">
                    <input class="input_file" type="file" name="image" required>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-4 offset-lg-4">
                    <button type="submit">Send</button>
                </div>
            </div>
        </form>
    </div>
</section>
<hr>
<section class="remove">
    <div class="container">
        <div class="row">
            <form action="/remove" method="post" >
                @csrf 
                <div class="col-lg-4 offset-lg-4">
                    <input type="text" name="id_post" placeholder="enter id for remove" required>
                    <button value="submit">Remove post</button>
                </div>
            </form>
        </div>
    </div>
</section>
<hr>
<section class="update">
    <div class="container">
        <h2 style="text-align: center">Update</h2>
        <div class="row">
            <form action="/update" method="post" enctype="multipart/form-data">
                @csrf 
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 mt-4">
                        <input class="input" name="id_post"  required placeholder="id" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 mt-4">
                        <input class="input" name="title" type="title" placeholder="title" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 mt-4">
                        <textarea name="describe" cols="30" rows="10"  placeholder="describe" required> </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 mt-4">
                        <input class="input" name="tags" list="tags" type="text" placeholder="tags" required>
                        <datalist id="tags">
                            <option value="Photodiary"></option>
                            <option value="Music"></option>
                            <option value="Lifestyle"></option>
                        </datalist>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 mt-4">
                        <input class="input_file" type="file" name="image">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-4 offset-lg-4">
                        <button type="submit">update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<hr>

@include('footer.footer')
@endsection