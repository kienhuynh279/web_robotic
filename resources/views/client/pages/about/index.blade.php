@extends('layouts.client')

@section('title')
Trang tài liệu
@endsection

@section('content')
@include('client.components.banner')

<div class="container px-0">
    <div class="py-5">
        <div class="mb-3">
            <h1 class="text-uppercase text-center">with goals</h1>
            
            <div></div>
        </div>

        <div class="mb-3">
            <h1 class="text-uppercase text-center">OUR missions</h1>
            
            <div></div>
        </div>

        <div class="mb-3">
            <h1 class="text-uppercase text-center">OUR clients</h1>
            
            <div></div>
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