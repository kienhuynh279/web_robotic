@extends('layouts.simple')

@section('title')
    Trang đăng nhập
@endsection

@section('content')
<div class="bg-image" style="background-image: url('{{asset("/media/photos/photo9@2x.jpg")}}');">
    <div class="row no-gutters justify-content-center bg-black-75">
        <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
            <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-white">
                    <div class="mb-2 text-center">
                        <a class="link-fx text-danger font-w700 font-size-h1" href="index.html">
                            <span class="text-dark">Dash</span><span class="text-danger">mix</span>
                        </a>
                        <p class="text-uppercase font-w700 font-size-sm text-muted">Account Lock Screen</p>
                    </div>
                    <div class="text-center push">
                        <div class="d-inline-block p-4 rounded bg-body">
                            <img class="img-avatar img-avatar-thumb" src="{{asset("media/avatars/avatar15.jpg")}}" alt="">
                            <a class="d-block font-w600 mt-2" href="javascript:void(0)">Tài khoản: {{Auth::user()->username}}</a>
                            <div class="font-size-sm font-w600 text-black-50">{{Auth::user()->firstname." ".Auth::user()->lastname}}</div>
                        </div>
                    </div>
                    <form class="js-validation-lock" action="{{route(session()->get("intended"), session()->get("intended_with_id"))}}" method="POST">
                        @csrf
                        @method("DELETE")

                        <div class="form-group">
                                <x-input-form
                                    type="password"
                                    label="Nhập lại mật khẩu"
                                    name="password"
                                    placeholder="Mật khẩu của bạn"
                                />
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-hero-danger">
                                <i class="fa fa-fw fa-lock-open mr-1"></i> Unlock
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection