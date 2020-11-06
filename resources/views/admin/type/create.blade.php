@extends('layouts.backend')

@section('title')
Trang tạo loại dịch vụ
@endsection

@section('content')
<form action="{{route("admin.type.store")}}" method="post">
    @csrf
   @include("admin.type.inc._form-control")
</form>
@endsection

@section('js_after')
@endsection