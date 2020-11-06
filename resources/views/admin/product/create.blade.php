@extends('layouts.backend')

@section('title')
Trang tạo sản phẩm
@endsection

@section('content')
<form action="{{route("admin.product.store")}}" method="post">
    @csrf
   @include("admin.product.inc._form-control")
</form>
@endsection

@section('js_after')
@endsection