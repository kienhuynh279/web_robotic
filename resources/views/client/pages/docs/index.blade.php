@extends('layouts.client')

@section('title')
Trang tài liệu
@endsection

@section('content')
@include('client.components.banner')

<div class="container px-0">
    <div class="row py-5">
        <div class="col-md-6 mb-5">
            <div class="card">
                    <img class="card-img-top" src="{{ asset('assets/client/img/595x483/01.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">5 Top robotics Solutions Impacting Hospital Care During A</h4>
                    </div>
            </div>
        </div>
        <div class="col-md-6 mb-5">
            <div class="card">
                <img class="card-img-top" src="{{ asset('assets/client/img/595x483/01.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">5 Top robotics Solutions Impacting Hospital Care During A</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-5">
            <div class="card">
                <img class="card-img-top" src="{{ asset('assets/client/img/595x483/01.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">5 Top robotics Solutions Impacting Hospital Care During A</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-5">
            <div class="card">
                <img class="card-img-top" src="{{ asset('assets/client/img/595x483/01.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">5 Top robotics Solutions Impacting Hospital Care During A</h4>
                </div>
            </div>
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