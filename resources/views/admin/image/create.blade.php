@extends('layouts.backend')

@section('title')
Add Gallery
@endsection

@section('content')
<form action="{{route("admin.image.store")}}" method="post">
    @csrf
   @include("admin.image.inc._form-control")
</form>
@endsection

@section('js_after')
@endsection