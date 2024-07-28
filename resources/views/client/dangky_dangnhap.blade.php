@extends('client.layouts.default')

@section('content')

<main class="bg_gray">
    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active</li>
                </ul>
            </div>
            <h1>Sign In or Create an Account</h1>
        </div>
        <!-- /page_header -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="box_account">
                    <h3 class="client">Already Client</h3>
                    <div class="form_container">
                        <form action="{{ route('postLogin') }}" method="POST">
                            @csrf
                            <div class="row no-gutters">
                                <div class="col-lg-6 pr-lg-1">
                                    <a href="#0" class="social_bt facebook">Login with Facebook</a>
                                </div>
                                <div class="col-lg-6 pl-lg-1">
                                    <a href="#0" class="social_bt google">Login with Google</a>
                                </div>
                            </div>
                            <div class="divider"><span>Or</span></div>
							@if(session('message'))
        					 	<p>{{ session('message') }}</p>
        					@endif
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password*">
                            </div>
                            <div class="clearfix add_bottom_15">
                                <div class="checkboxes float-start">
                                    <label class="container_check">Remember me
                                        <input type="checkbox" name="remember">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="float-end"><a id="forgot" href="javascript:void(0);">Lost Password?</a></div>
                            </div>
                            <div class="text-center"><input type="submit" value="Đăng nhập" class="btn_1 full-width"></div>
                        </form>
                        <div id="forgot_pw">
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email_forgot" id="email_forgot" placeholder="Type your email">
                                </div>
                                <p>A new password will be sent shortly.</p>
                                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                            </form>
                        </div>
                    </div>
                    <!-- /form_container -->
                </div>
                <!-- /box_account -->
                <div class="row">
                    <div class="col-md-6 d-none d-lg-block">
                        <ul class="list_ok">
                            <li>Find Locations</li>
                            <li>Quality Location check</li>
                            <li>Data Protection</li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-none d-lg-block">
                        <ul class="list_ok">
                            <li>Secure Payments</li>
                            <li>H24 Support</li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="box_account">
                    <h3 class="new_client">New Client</h3> <small class="float-right pt-2">* Required Fields</small>
                    <div class="form_container">
                        <form action="{{route('register')}}" method="POST">
                            @csrf
							<div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="name*">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email_2" placeholder="Email*">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password_in_2" value="" placeholder="Password*">
                            </div>
                            <hr>
                            <!-- /private -->
                            
                            <!-- /company -->
                            <hr>
                            <div class="form-group">
                                <label class="container_check">Accept <a href="#0">Terms and conditions</a>
                                    <input type="checkbox" name="terms">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="text-center"><input type="submit" value="Đăng ký" class="btn_1 full-width"></div>
                        </form>
                    </div>
                    <!-- /form_container -->
                </div>
                <!-- /box_account -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>

@endsection
