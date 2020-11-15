@extends('layouts.backend')

@section('title')
Add CateGory Product
@endsection

@section('content')
<form action="{{route("admin.categories.store")}}" method="post">
    @csrf
   @include("admin.categories.inc._form-control")
</form>
@endsection

@section('js_after')
@endsection