@extends('layouts.backend')

@section('title')
Chỉnh sửa tài khoản
@endsection

@section('content')
<form action="{{route("admin.application.update", $application->ApplicationId)}}" method="post">
    @csrf
    @method("PUT")
   @include("admin.application.inc._form-control")</form>
@endsection

@section('js_after')
@endsection