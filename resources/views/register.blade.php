@extends('layouts.app')
@section('title', 'Đăng ký')
@section('content')
    <div class="bodywrap">
        <section class="bread-crumb"
            style="background: linear-gradient(0deg, rgba(0,0,0,0.8), rgba(0,0,0,0.3)),  url(//bizweb.dktcdn.net/100/487/743/themes/912230/assets/breadcrumb.jpg?1710378319730) no-repeat center;">

            <div class="container">
                <div class="title-bread-crumb">

                    Đăng ký tài khoản

                </div>
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="/"><span>Trang chủ</span></a>
                        <span class="mr_lr">&nbsp;<svg aria-hidden="true" focusable="false" data-prefix="fas"
                                data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                                <path fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                                    class=""></path>
                            </svg>&nbsp;</span>
                    </li>

                    <li><strong><span>Đăng ký tài khoản</span></strong></li>

                </ul>
            </div>
        </section>
        <section class="section">
            <div class="container ">
                <div class="wrap_background_aside  page_login">
                    <div class="wrap_background_aside">
                        <div class="row">
                            <div style="    margin: auto;"
                                class="col-lg-4 col-md-6 col-sm-12 col-12 col-xl-4 offset-xl-4 offset-lg-4 offset-md-3 offset-xl-3">
                                <div class="row no-margin align-items-center" style="background: #fff;border-radius: 5px;">
                                    <div class=" page-login pagecustome clearfix no-padding">
                                        <div class="wpx">

                                            <ul class="auth-block__menu-list">
                                                <li>
                                                    <a href="login.php" title="Đăng nhập">Đăng nhập</a>
                                                </li>
                                                <li class="active">
                                                    <a href="register.php" title="Đăng ký">Đăng ký</a>
                                                </li>
                                            </ul>
                                            <h1 class="title_heads a-center"><span>Đăng ký</span></h1>
                                            <div id="login" class="section">
                                                <form method="post" action="/account/register" id="customer_register"
                                                    accept-charset="UTF-8"><input name="FormType" type="hidden"
                                                        value="customer_register"><input name="utf8" type="hidden"
                                                        value="true"><input type="hidden"
                                                        id="Token-aa7fb4cf31944d789e8fa4d3c637412f" name="Token"
                                                        value="03AFcWeA7HMcYalmTZov6wIVb_UieirWgKAB6dS5CtqanbYapBueHoKmwp2x2P35DAyvLmaVajXcT3vdO1hKzp79yar7rjURI-Go_dR3GdYxqqhZL90_nyASuuMWHCEa7BF8B6notyyDXC5OuHTsD0-fCBRhmNz-Xcx4ET1HkCD6DFrfih-TaIKpbuzyZG3XClDYswvC2qp02bDWI-4gj9KY1NhTbeXexAHkmr12SKKLCWk_yr7Xuloadyhugq8WJx6cTx9QTrk_ZkoocmN3LITuuL5ehaieLZefTFl-wRchOWf2jBtbf6ZYcIJUzOVqpFaTJThFOEEWWlBlz7WGFSKxa3Ej8DAdKLz253_zxW0XQsk3BP7glzKCFAkND4TXrRDd7AkRDPEx_AvPwKzTI7yzYn62tFDGlsGLcZLMyNhWIdpkT62p1F4yMcvmryMSEknqiM-fgj3AnKqnaCkmAOGZ4CzalOdwyV6qnI3nK-Np3yikC9DsazYIwhUDv_8WxDS7Wy65uurLgJLe2SZQZTCqwAYVtDqbxxFAEn537qLXsNnFyDFVvKveQGopFIgt7ChDGUZv7cZWwGxluDcSvZY_Bm_-Zxtr5Cr9VR_qIaPIbl7rs-UBJNpX3RWDG2TO3ZYUsXkQWRDtLVA_rG7LQP-Jei-DEITiOX_r6bzA651VrZ0D2cp2LUs5s">
                                                    <script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
                                                    <script>
                                                        grecaptcha.ready(function() {
                                                            grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {
                                                                action: "customer_register"
                                                            }).then(function(token) {
                                                                document.getElementById("Token-aa7fb4cf31944d789e8fa4d3c637412f").value = token
                                                            });
                                                        });
                                                    </script>
                                                    <div class="form-signup " style="color:red;">

                                                    </div>
                                                    <div class="form-signup clearfix">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                                <fieldset class="form-group">
                                                                    <input type="text"
                                                                        class="form-control form-control-lg" value=""
                                                                        name="lastName" id="lastName" placeholder="Họ"
                                                                        required="">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                                <fieldset class="form-group">
                                                                    <input type="text"
                                                                        class="form-control form-control-lg" value=""
                                                                        name="firstName" id="firstName" placeholder="Tên"
                                                                        required="">
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                                <fieldset class="form-group">
                                                                    <input type="email"
                                                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                                        class="form-control form-control-lg" value=""
                                                                        name="email" id="email" placeholder="Email"
                                                                        required="">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                                <fieldset class="form-group">
                                                                    <input placeholder="Số điện thoại" type="text"
                                                                        pattern="\d+"
                                                                        class="form-control form-control-comment form-control-lg"
                                                                        name="PhoneNumber" required="">
                                                                </fieldset>
                                                            </div>
                                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                                <fieldset class="form-group">
                                                                    <input type="password"
                                                                        class="form-control form-control-lg" value=""
                                                                        name="password" id="password"
                                                                        placeholder="Mật khẩu" required="">
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                        <div class="section">
                                                            <button type="submit" value="Đăng ký"
                                                                class="btn  btn-style btn_50">Đăng ký</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="block social-login--facebooks margin-top-15">
                                                    <p class="a-center">
                                                        Hoặc đăng nhập bằng
                                                    </p>
                                                    <script>
                                                        function loginFacebook() {
                                                            var a = {
                                                                    client_id: "947410958642584",
                                                                    redirect_uri: "https://store.mysapo.net/account/facebook_account_callback",
                                                                    state: JSON.stringify({
                                                                        redirect_url: window.location.href
                                                                    }),
                                                                    scope: "email",
                                                                    response_type: "code"
                                                                },
                                                                b = "https://www.facebook.com/v3.2/dialog/oauth" + encodeURIParams(a, !0);
                                                            window.location.href = b
                                                        }

                                                        function loginGoogle() {
                                                            var a = {
                                                                    client_id: "997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com",
                                                                    redirect_uri: "https://store.mysapo.net/account/google_account_callback",
                                                                    scope: "email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
                                                                    access_type: "online",
                                                                    state: JSON.stringify({
                                                                        redirect_url: window.location.href
                                                                    }),
                                                                    response_type: "code"
                                                                },
                                                                b = "https://accounts.google.com/o/oauth2/v2/auth" + encodeURIParams(a, !0);
                                                            window.location.href = b
                                                        }

                                                        function encodeURIParams(a, b) {
                                                            var c = [];
                                                            for (var d in a)
                                                                if (a.hasOwnProperty(d)) {
                                                                    var e = a[d];
                                                                    null != e && c.push(encodeURIComponent(d) + "=" + encodeURIComponent(e))
                                                                } return 0 == c.length ? "" : (b ? "?" : "") + c.join("&")
                                                        }
                                                    </script>
                                                    <a href="javascript:void(0)" class="social-login--facebook"
                                                        onclick="loginFacebook()"><img width="129px" height="37px"
                                                            alt="facebook-login-button"
                                                            src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
                                                    <a href="javascript:void(0)" class="social-login--google"
                                                        onclick="loginGoogle()"><img width="129px" height="37px"
                                                            alt="google-login-button"
                                                            src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
