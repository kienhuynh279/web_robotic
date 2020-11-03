@extends('layouts.client')

@section('title')
Trang tài liệu
@endsection

@section('content')
@include('client.components.banner')

<style>
    img {
        width: 100%;
        vertical-align: middle;
        margin: 10px;
    }
</style>

<div class="container px-0">
    <div class="d-flex py-5">
        <div class="column pr-2" style="flex: 1">
            <a href="#">
                <img src="http://127.0.0.1:8000/assets/client/img/595x240/02.jpg" alt="">
            </a>
            <a href="#">
                <img src="https://c4.wallpaperflare.com/wallpaper/210/941/242/samurai-katana-warrior-fantasy-art-wallpaper-preview.jpg" alt="">
            </a>
            <a href="#">
                <img src="http://127.0.0.1:8000/assets/client/img/595x240/02.jpg" alt="">
            </a>
        </div>

        <div class="column pl-2" style="flex: 1">
            <a href="#">
                <img src="https://wallpaperaccess.com/full/87215.jpg" alt="">
            </a>
            <a href="#">
                <img src="https://i.imgur.com/pj0h7aO.jpg" alt="">
            </a>
            <a href="#">
                <img src="https://wallpaperaccess.com/full/87215.jpg" alt="">
            </a>
        </div>
    </div>

    <div class="text-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection

@section('js_after')

@endsection