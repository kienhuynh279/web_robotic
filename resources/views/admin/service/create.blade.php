@extends('layouts.backend')

@section('title')
Create Serve
@endsection

@section('content')
<form action="{{route("admin.service.store")}}" method="post">
    @csrf
   @include("admin.service.inc._form-control")
</form>
@endsection

@section('js_after')
@endsection