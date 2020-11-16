@extends('layouts.backend')

@section('title')
Edit Account
@endsection

@section('content')
<form action="{{route("admin.users.update", $user->UserId)}}" method="post">
    @csrf
    @method("PUT")
   @include("admin.users.inc._form-control")</form>
@endsection

@section('js_after')
@endsection