@extends('layouts.backend')

@section('title')
Edit Category Product
@endsection

@section('content')
<form action="{{route("admin.categories.update", $category->CategoryId)}}" method="post">
    @csrf
    @method("PUT")
   @include("admin.categories.inc._form-control")</form>
@endsection

@section('js_after')
@endsection