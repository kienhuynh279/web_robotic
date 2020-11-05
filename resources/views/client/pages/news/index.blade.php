@extends('layouts.client')

@section('title')
Trang tài liệu
@endsection

@section('content')
@include('client.components.banner')

<div class="container px-0">
    <h2 style="margin-top:20px" class="text-center">News</h2>
    <div class="row py-5">
        <div class="col-md-4 mb-5">
            <div class="card">
                <a href="{{ route('detailNew') }}">
                    <img class="card-img-top" src="{{ asset('assets/client/img/595x483/01.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">5 Top robotics Solutions Impacting Hospital Care During A</h4>
                        <small class="font-sm mb-3 d-block text-secondary">By techgroupadmin | May 29, 2020 | News, press</small>
                        <p class="card-text font-italic">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
            <a href="{{ route('detailNew') }}">
                <img class="card-img-top" src="{{ asset('assets/client/img/595x483/01.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">5 Top robotics Solutions Impacting Hospital Care During A</h4>
                    <small class="font-sm mb-3 d-block text-secondary">By techgroupadmin | May 29, 2020 | News, press</small>
                    <p class="card-text font-italic">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </a>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
            <a href="{{ route('detailNew') }}">
                <img class="card-img-top" src="{{ asset('assets/client/img/595x483/01.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">5 Top robotics Solutions Impacting Hospital Care During A</h4>
                    <small class="font-sm mb-3 d-block text-secondary">By techgroupadmin | May 29, 2020 | News, press</small>
                    <p class="card-text font-italic">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </a>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
            <a href="{{ route('detailNew') }}">
                <img class="card-img-top" src="{{ asset('assets/client/img/595x483/01.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">5 Top robotics Solutions Impacting Hospital Care During A</h4>
                    <small class="font-sm mb-3 d-block text-secondary">By techgroupadmin | May 29, 2020 | News, press</small>
                    <p class="card-text font-italic">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </a>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
            <a href="{{ route('detailNew') }}">
                <img class="card-img-top" src="{{ asset('assets/client/img/595x483/01.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">5 Top robotics Solutions Impacting Hospital Care During A</h4>
                    <small class="font-sm mb-3 d-block text-secondary">By techgroupadmin | May 29, 2020 | News, press</small>
                    <p class="card-text font-italic">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </a>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="card">
            <a href="{{ route('detailNew') }}">
                <img class="card-img-top" src="{{ asset('assets/client/img/595x483/01.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">5 Top robotics Solutions Impacting Hospital Care During A</h4>
                    <small class="font-sm mb-3 d-block text-secondary">By techgroupadmin | May 29, 2020 | News, press</small>
                    <p class="card-text font-italic">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </a>
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