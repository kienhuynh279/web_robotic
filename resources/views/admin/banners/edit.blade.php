@extends('layouts.backend')

@section('title')
Edit Banner
@endsection

@section('content')
<form action="{{route("admin.banners.update", $banner->BannerId)}}" method="post">
    @csrf
    @method("PUT")
   @include("admin.banners.inc._form-control")</form>
@endsection

@section('js_after')
@endsection