@extends('layouts.backend')

@section('title')
Add News
@endsection

@section('content')
<form action="{{route("admin.news.store")}}" method="post">
    @csrf
   @include("admin.news.inc._form-control")
</form>
@endsection

@section('js_after')
@endsection