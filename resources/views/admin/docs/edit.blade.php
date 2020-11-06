@extends('layouts.backend')

@section('title')
Chỉnh sửa tin tức
@endsection

@section('content')
<form action="{{route("admin.docs.update", $docs->DocId)}}" method="post">
    @csrf
    @method("PUT")
   @include("admin.docs.inc._form-control")</form>
@endsection

@section('js_after')
@endsection