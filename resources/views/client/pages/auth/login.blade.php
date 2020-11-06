@extends('layouts.simple')

@section('title')
    Trang đăng nhập
@endsection

@section('content')

<div class="row no-gutters justify-content-center bg-body-dark">
    <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
        <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image"
            style="background-image: url('{{asset('/media/photos/photo20@2x.jpg')}}');">
            <div class="row no-gutters">
                <div class="col-md-6 order-md-1 bg-white">
                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                        <div class="mb-2 text-center">
                            <a class="link-fx font-w700 font-size-h1" href="/">
                                <span class="text-dark">Web</span><span class="text-primary"> Robotic</span>
                            </a>
                            <p class="text-uppercase font-w700 font-size-sm text-muted">Sign In</p>
                        </div>
                        <form class="js-validation-signin" action="{{route("auth.handle_login")}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text"
                                    class="form-control form-control-alt @error('email') is-invalid @enderror"
                                    id="login-email" name="email" placeholder="Email" value="{{old('email') ?? "test@gmail.com"}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password"
                                    class="form-control form-control-alt @error('password') is-invalid @enderror"
                                    id="login-password" name="password" placeholder="Password" value="{{old('password') ?? "123Qweasdzxc"}}">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-hero-primary">
                                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 order-md-0 bg-primary-dark-op d-flex align-items-center">
                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                        <div class="media">
                            <a class="img-link mr-3" href="javascript:void(0)">
                                <img class="img-avatar img-avatar-thumb" src="{{asset("/media/avatars/avatar16.jpg")}}"
                                    alt="">
                            </a>
                            <div class="media-body">
                                <p class="text-white font-w600 mb-1">
                                    Amazing framework with tons of options! It helped us build our project!
                                </p>
                                <a class="text-white-75 font-w600" href="javascript:void(0)">Web Developer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection