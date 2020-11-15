@extends('layouts.backend')

@section('title')
Create Application
@endsection

@section('content')
<form action="{{route("admin.application.store")}}" method="post">
    @csrf
   @include("admin.application.inc._form-control")
</form>
@endsection

@section('js_after')
@endsection