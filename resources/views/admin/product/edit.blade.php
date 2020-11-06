@extends('layouts.backend')

@section('title')
Chỉnh sửa sản phẩm
@endsection

@section('content')
<form action="{{route("admin.product.update", $product->ProductId)}}" method="post">
    @csrf
    @method("PUT")
   @include("admin.product.inc._form-control")</form>
@endsection

@section('js_after')
@endsection