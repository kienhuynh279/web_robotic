@extends('layouts.backend')

@section('title')
Tranh tạo tài khoản
@endsection

@section('content')
<form action="{{route("admin.users.store")}}" method="post">
    @csrf
   @include("admin.users.inc._form-control")
</form>
@endsection

@section('js_after')
@endsection