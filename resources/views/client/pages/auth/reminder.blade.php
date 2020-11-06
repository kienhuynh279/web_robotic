@extends('layouts.simple')

@section('content')
<div class="row no-gutters justify-content-center bg-body-dark">
    <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
        <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image" style="background-image: url('{{asset("media/photos/photo19.jpg")}}');">
            <div class="row no-gutters">
                <div class="col-md-6 order-md-1 bg-white">
                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                        <div class="mb-2 text-center">
                            <a class="link-fx text-warning font-w700 font-size-h1" href="index.html">
                                <span class="text-dark">Laravel</span><span class="text-warning">Kit</span>
                            </a>
                            <p class="text-uppercase font-w700 font-size-sm text-muted">Password Reminder</p>
                        </div>
                        <form class="js-validation-reminder" action="{{route("auth.handle_reminder")}}" method="POST">
                            @csrf
                            
                            <div class="form-group">
                                <input type="text" class="form-control form-control-alt @error('email') is-invalid @enderror" id="reminder-credential" name="email" placeholder="Username or Email" value="{{old("email")}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-block btn-hero-warning">
                                    <i class="fa fa-fw fa-reply mr-1"></i> Reset Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 order-md-0 bg-gd-sun-op d-flex align-items-center">
                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6 text-center">
                        <p class="font-size-h2 font-w700 text-white mb-0">
                            Don’t worry of failure..
                        </p>
                        <p class="font-size-h3 font-w600 text-white-75 mb-0">
                            ..but learn from it!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection