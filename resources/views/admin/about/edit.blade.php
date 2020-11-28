@extends('layouts.backend')

@section('title')
Edit Application
@endsection

@section('content')
<form action="{{route("admin.about.update", $about->id)}}" method="post">
    @csrf
    @method("PUT")
   @include("admin.about.inc._form-control")</form>
@endsection

@section('js_after')
@endsection