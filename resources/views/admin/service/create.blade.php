@extends('layouts.backend')

@section('title')
Trang tạo dịch vụ
@endsection

@section('content')
<form action="{{route("admin.service.store")}}" method="post">
    @csrf
   @include("admin.service.inc._form-control")
</form>
@endsection

@section('js_after')
@endsection