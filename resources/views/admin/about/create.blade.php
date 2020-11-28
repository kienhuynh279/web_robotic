@extends('layouts.backend')

@section('title')
Create Application
@endsection

@section('content')
<form action="{{route("admin.about.store")}}" method="post">
    @csrf
   @include("admin.about.inc._form-control")
</form>
@endsection

@section('js_after')
@endsection