@extends('layouts.backend')

@section('title')
Chỉnh sửa tài khoản
@endsection

@section('content')
<form action="{{route("admin.service.update", $service->ServiceId)}}" method="post">
    @csrf
    @method("PUT")
   @include("admin.service.inc._form-control")</form>
@endsection

@section('js_after')
@endsection