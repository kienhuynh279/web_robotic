@extends('layouts.backend')

@section('title')
Create Banner
@endsection

@section('content')
<form action="{{route("admin.banners.store")}}" method="post">
    @csrf
   @include("admin.banners.inc._form-control")
</form>
@endsection

@section('js_after')
@endsection