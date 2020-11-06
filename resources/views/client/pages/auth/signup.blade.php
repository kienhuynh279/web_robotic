@extends('layouts.simple')

@section('title')
    Trang đăng ký
@endsection

@section('content')
<div class="row no-gutters justify-content-center bg-body-dark">
    <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
        <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image"
            style="background-image: url('{{asset("/media/photos/photo12.jpg")}}');">
            <div class="row no-gutters">
                <div class="col-md-6 order-md-1 bg-white">
                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                        <div class="mb-2 text-center">
                            <a class="link-fx text-success font-w700 font-size-h1" href="/">
                                <span class="text-dark">Laravel</span><span class="text-success">Kit</span>
                            </a>
                            <p class="text-uppercase font-w700 font-size-sm text-muted">Create New Account</p>
                        </div>
                        <form class="js-validation-signup" action="{{route("auth.handle_signup")}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <input type="text"
                                    class="form-control form-control-alt @error('username') is-invalid @enderror"
                                    id="signup-username" name="username" placeholder="Username"
                                    value="{{old('username')}}">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="email"
                                    class="form-control form-control-alt @error('email') is-invalid @enderror"
                                    id="signup-email" name="email" placeholder="Email" value="{{old('email')}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="password"
                                    class="form-control form-control-alt @error('password') is-invalid @enderror"
                                    id="signup-password" name="password" placeholder="Password" value="{{old('password')}}">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <input type="password"
                                    class="form-control form-control-alt @error('confirm_password') is-invalid @enderror"
                                    id="signup-confirm_password" name="confirm_password" placeholder="Confirm password"
                                    value="{{old('confirm_password')}}">
                                @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox custom-control-primary">
                                    <input type="checkbox" class="custom-control-input" id="signup-terms"
                                        name="auto-login">
                                    <label class="custom-control-label" for="signup-terms">
                                        <small>Thực hiện đăng nhập, sau khi đăng ký</small>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-hero-success">
                                    <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 order-md-0 bg-xeco-op d-flex align-items-center">
                    <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                        <div class="media">
                            <a class="img-link mr-3" href="javascript:void(0)">
                                <img class="img-avatar img-avatar-thumb" src="{{asset("media/avatars/avatar4.jpg")}}"
                                    alt="">
                            </a>
                            <div class="media-body">
                                <p class="text-white font-w600 mb-1">
                                    The service was a valuable asset to improve our conversions and marketing efforts!
                                    Thank you!
                                </p>
                                <a class="text-white-75 font-w600" href="javascript:void(0)">Laura Carr, CEO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Fade -->
<div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna
                        accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie
                        vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum
                        venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque
                        nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus
                        massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate
                        nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna
                        accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie
                        vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum
                        venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque
                        nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus
                        massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate
                        nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection