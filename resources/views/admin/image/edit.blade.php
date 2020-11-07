@extends('layouts.backend')

@section('title')
Chỉnh sửa ảnh
@endsection

@section('content')
<form action="{{route("admin.image.update", $image->ImageId)}}" method="post">
    @csrf
    @method("PUT")
   @include("admin.image.inc._form-control")</form>
@endsection

@section('js_after')
@endsection