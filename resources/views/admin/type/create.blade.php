@extends('layouts.backend')

@section('title')
Create Type Service
@endsection

@section('content')
<form action="{{route("admin.type.store")}}" method="post">
    @csrf
   @include("admin.type.inc._form-control")
</form>
@endsection

@section('js_after')
@endsection