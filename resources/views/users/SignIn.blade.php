<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset("css/bootstrap-reboot.min.css")}}" />
        <link rel="stylesheet" href="{{asset("css/bootstrap-grid.min.css")}}" />
        <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}" />
        <link rel="stylesheet" href="{{asset("css/slider-radio.css")}}" />
        <link rel="stylesheet" href="{{asset("css/select2.min.css")}}" />
        <link rel="stylesheet" href="{{asset("css/magnific-popup.css")}}" />
        <link rel="stylesheet" href="{{asset("css/plyr.css")}}" />
        <link rel="stylesheet" href="{{asset("css/main.css")}}" />

        <!-- Favicons -->
        <link
            rel="icon"
            type="image/png"
            href="{{asset("images/logo.png")}}"
            sizes="32x32"
        />
        <link rel="apple-touch-icon" href="{{asset("images/logo.png")}}" />

        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Dmitry Volkov" />
        <title>
            Đum Đúm - Đăng Nhập
        </title>
    </head>
    <body>
        <!-- sign in -->
        <div class="sign section--full-bg" data-bg="{{asset('images/background.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="sign__content">
                            <!-- authorization form -->
                            <form action="#" class="sign__form">
                                <a href="index.html" class="sign__logo">
                                    <img src="{{asset("images/logo.png")}}" alt="" />
                                </a>

                                <div class="sign__group">
                                    <input
                                        type="text"
                                        class="sign__input"
                                        placeholder="Email"
                                    />
                                </div>

                                <div class="sign__group">
                                    <input
                                        type="password"
                                        class="sign__input"
                                        placeholder="Mật khẩu"
                                    />
                                </div>

                                <div class="sign__group sign__group--checkbox">
                                    <input
                                        id="remember"
                                        name="remember"
                                        type="checkbox"
                                        checked="checked"
                                    />
                                    <label for="remember">Nhớ tôi cho lần đăng nhập sau?</label>
                                </div>

                                <button class="sign__btn" type="button">
                                    Đăng nhập
                                </button>

                                <span class="sign__text"
                                    >Bạn chưa có tài khoản?
                                    <a href="{{route("signup")}}">Đăng ký!</a></span
                                >

                                <span class="sign__text"
                                    ><a href="{{route("forgot")}}"
                                        >Quên mật khẩu?</a
                                    ></span
                                >
                            </form>
                            <!-- end authorization form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end sign in -->

        <!-- JS -->
    </body>
</html>
