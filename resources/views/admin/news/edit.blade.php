@extends('layouts.backend')

@section('title')
Chỉnh sửa tài khoản
@endsection

@section('content')
<form action="{{route("admin.news.update", $news->NewId)}}" method="post">
    @csrf
    @method("PUT")
   @include("admin.news.inc._form-control")</form>
@endsection

@section('js_after')
@endsection