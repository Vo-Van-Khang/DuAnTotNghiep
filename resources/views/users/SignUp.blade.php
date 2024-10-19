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
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sign__content">
                        <!-- registration form -->
                        <form action="#" class="sign__form">
                            <a href="index.html" class="sign__logo">
                                <img src="{{asset("images/logo.png")}}" alt="" />
                            </a>

                            <div class="sign__group">
                                <input
                                    type="text"
                                    class="sign__input"
                                    placeholder="Tên"
                                />
                            </div>

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
                                <label for="remember"
                                    >Tôi đồng ý với
                                    <a href="privacy.html"
                                        >Chính sách bảo mật</a
                                    ></label
                                >
                            </div>

                            <button class="sign__btn" type="button">
                                Đăng ký
                            </button>

                            <span class="sign__text"
                                >Đã có tài khoản?
                                <a href="signin.html">Đăng nhập!</a></span
                            >
                        </form>
                        <!-- registration form -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
