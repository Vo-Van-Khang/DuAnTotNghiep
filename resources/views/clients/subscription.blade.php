@extends('layouts.layout')
@section('content')
 <!-- head -->
 <section class="section section--head section--head-fixed">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6">
                <h1 class="section__title section__title--head">
                    Đăng ký gói premium
                </h1>
            </div>

            <div class="col-12 col-xl-6">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item">
                        <a href="index.html">Trang chủ</a>
                    </li>
                    <li
                    class="breadcrumb__item breadcrumb__item--active"
                >
                    Mua gói
                </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end head -->

<!-- contacts -->
<section class="section section--pb0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8">
                <form
                    action="#"
                    class="sign__form sign__form--contacts"
                >
                    <div class="row">
                        <div class="col-12 col-xl-6">
                            <div class="sign__group">
                                <label for="" class="sign__label">Số tiền</label>
                                <input
                                    type="text"
                                    name="name"
                                    class="sign__input"
                                    disabled
                                    value="96.000vnđ"
                                />
                            </div>
                        </div>
                        
                        <div class="col-12 col-xl-6">
                            <div class="sign__group">
                                <label for="" class="sign__label">Số ngày</label>
                                <input
                                    type="text"
                                    name="name"
                                    class="sign__input"
                                    disabled
                                    value="30 Ngày"
                                />
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="sign__group">
                                <label class="sign__label" for="payment">Phương thức thanh toán</label>
                                <select class="sign__select" id="payment">
                                    <option value="Momo">Momo</option>
                                    <option value="Paypal">Paypal</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-xl-3">
                            <button type="button" class="sign__btn">
                                Mua
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-12 col-lg-5 col-xl-4">
                <h2 class="section__title section__title--sidebar">
                    Quyền lợi
                </h2>
                <p class="section__text" style="margin-bottom: 20px">
                    Với gói Premium bạn sẽ có những quyền lợi sau:
                </p>
                <ul class="plan__list">
                    <li class="green_sub">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#29b474"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                        Xem phim với độ phân giải lên đến 1080p!
                    </li>
                    <li class="green_sub">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#29b474"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                        Tải phim với độ phân giải lên đến 1080p!
                    </li>
                    <li class="green_sub">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#29b474"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                        Những huy hiệu đặc biệt khi bình luận!
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end contacts -->
@endsection