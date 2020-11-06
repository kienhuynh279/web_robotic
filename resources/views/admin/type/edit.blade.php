@extends('layouts.backend')

@section('title')
Chỉnh sửa loại dịch vụ
@endsection

@section('content')
<form action="{{route("admin.type.update", $type->TypeId)}}" method="post">
    @csrf
    @method("PUT")
   @include("admin.type.inc._form-control")</form>
@endsection

@section('js_after')
@endsection