<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

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
        sizes="32x32" />
    <link rel="apple-touch-icon" href="{{asset("images/logo.png")}}" />

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Dmitry Volkov" />
    <title>
        Đum Đúm - Quên mật khẩu
    </title>
</head>

<body>
    <div class="sign section--full-bg" data-bg="img/bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sign__content">
                        <!-- authorization form -->
                        <form action="{{ route('reset-password.update') }}" class="sign__form" method="post">
                            <a href="{{ route('index') }}" class="sign__logo">
                                <img src="{{asset("images/logo.png")}}" alt="" />
                            </a>
                            @csrf
                            <div class="sign__group">
                                <input type="email" name="email" class="sign__input" placeholder="Email của bạn" value="{{ old('email', $email) }}" required readonly>
                                
                            </div>
                            <div class="sign__group">
                                <input type="password" name="password" class="sign__input" placeholder="Mật khẩu mới" required>
                                
                            </div>
                            
                            <div class="sign__group">
                                <input type="password" name="password_confirmation" class="sign__input" placeholder="Xác nhận mật khẩu mới" required>
                                
                            </div>
                            




                            <div class="sign__group sign__group--checkbox">
                                <input
                                    id="remember"
                                    name="remember"
                                    type="checkbox"
                                    checked="checked" />
                                <label for="remember">Tôi đồng ý với
                                    <a href="privacy.html">Chính sách bảo mật</a></label>
                            </div>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            <button class="sign__btn" type="submit">
                                Gửi
                            </button>

                        </form>
                        <!-- end authorization form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.shared.loader')
    @include('layouts.shared.message')
    <script src="{{asset("js/jquery-3.5.1.min.js")}}"></script>
    <script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("js/owl.carousel.min.js")}}"></script>
    <script src="{{asset("js/slider-radio.js")}}"></script>
    <script src="{{asset("js/select2.min.js")}}"></script>
    <script src="{{asset("js/smooth-scrollbar.js")}}"></script>
    <script src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>
    <script src="{{asset("js/plyr.min.js")}}"></script>
    <script src="{{asset("js/main.js")}}"></script>
</body>
</html>