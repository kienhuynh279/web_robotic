@extends('layouts.backend')

@section('title')
Edit Application
@endsection

@section('content')
<form action="{{route("admin.application.update", $application->ApplicationId)}}" method="post">
    @csrf
    @method("PUT")
   @include("admin.application.inc._form-control")</form>
@endsection

@section('js_after')
@endsection