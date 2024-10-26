@extends('layouts.layout')
@section('content')
        <!-- details -->
        <section
            class="section section--head section--head-fixed section--gradient section--details-bg"
        >
            <div class="section__bg" data-bg="img/details.jpg"></div>
            <div class="container">
                <!-- article -->
                <div class="article" id="information__movie" id_movie="{{$movie->id}}">
                    <div class="row">
                        <div class="col-12 col-xl-8">
                            <!-- article content -->
                            <div class="article__content">
                                <h1>{{$movie->title}}</h1>

                                <ul class="list">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
                                        {{$movie->views}}
                                    </li>
                                    <li>Hành động</li>
                                    <li>{{$movie->release_year}}</li>
                                    <li>{{$movie->duration}}</li>
                                </ul>
                            </div>
                            <!-- end article content -->
                        </div>

                        <!-- video player -->
                        <div class="col-12 col-xl-12">
                            @yield('type')
                            <div class="article__actions article__actions--details">
                                @yield('download')
                                <div class="article__additional">
                                    <!-- add .active class -->
                                    @if ($check_like > 0)
                                        <button id="remove__like" class="active"
                                            title="Bỏ thích video này"
                                            type="button"
                                        >
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/></svg>
                                            <span id="likes">{{$likes}}</span>
                                        </button>
                                    @else
                                        <button id="add__to__like"
                                            title="Thích video này"
                                            type="button"
                                        >
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/></svg>
                                            <span id="likes">{{$likes}}</span>
                                        </button>
                                    @endif
                                    @if ($check_watch_later > 0)
                                        <button id="remove__watch__later" class="active"
                                            title="Xóa khỏi danh sách xem sau"
                                            type="button"
                                        >
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>
                                            Đã thêm xem sau
                                        </button>
                                    @else
                                        <button id="add__to__watch__later"
                                            title="Thêm vào danh sách xem sau"
                                            type="button"
                                        >
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>
                                            Xem sau
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- end video player -->

                        {{-- information --}}
                        <div class="row p-4">
                            <div class="col-12 col-xl-7">
                                <p class="mb-0" style="color: #fff;">{{$movie->description}}</p>
                            </div>
                            <div class="col-12 col-xl-5"  style="border-left:1px solid #fff">
                                <div class="row" style="color: #fff">
                                    <p class="col-12 col-xl-3">Diễn viên:</p>
                                    <p class="col-12 col-xl-9">{{$movie->cast}}</p>
                                </div>
                                <div class="row" style="color: #fff">
                                    <p class="col-12 col-xl-3">Đạo diễn:</p>
                                    <p class="col-12 col-xl-9">{{$movie->director}}</p>
                                </div>
                            </div>
                        </div>
                        {{-- end information --}}
                        <!-- series -->
                        <div class="col-12">
                            <div class="series-wrap">
                                <h3 class="series-wrap__title">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"
                                        />
                                    </svg>
                                    Các tập
                                </h3>
                                <div class="episodes">
                                    @if ($episode_focus->episode == 1)
                                        <button class="item active">Tập 1</button>  
                                    @else
                                        <a href="{{ route('movie', $movie->id) }}" class="item">Tập 1</a> 
                                    @endif
                                    @foreach ($episodes as $episode)
                                        @if ($episode->episode == $episode_focus->episode)
                                            <button class="item active">Tập {{$episode->episode}}</button>  
                                        @else
                                            <a href="{{ route('episode', [$movie->id, $episode->id]) }}" class="item">Tập {{$episode->episode}}</a> 
                                        @endif
                                    @endforeach
                                </div>                                
                            </div>
                        </div>
                        <!-- end series -->
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <div class="col-12 col-xl-8">
                            <!-- categories -->
                            <div class="categories">
                                <h3 class="categories__title">Thể loại</h3>
                                <a
                                    href="../html/category.html"
                                    class="categories__item"
                                    >Hành động</a
                                >
                                <a
                                    href="../html/category.html"
                                    class="categories__item"
                                    >Giật gân</a
                                >
                                <a
                                    href="../html/category.html"
                                    class="categories__item"
                                    >Tội phạm</a
                                >
                            </div>
                            <!-- end categories -->

                            <!-- share -->
                            <div class="share">
                                <h3 class="share__title">Chia sẻ</h3>
                                <a href="#" class="share__link share__link--fb"
                                    ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M360-240q-33 0-56.5-23.5T280-320v-480q0-33 23.5-56.5T360-880h360q33 0 56.5 23.5T800-800v480q0 33-23.5 56.5T720-240H360Zm0-80h360v-480H360v480ZM200-80q-33 0-56.5-23.5T120-160v-560h80v560h440v80H200Zm160-240v-480 480Z"/></svg>
                                    Sao chép đường dẫn</a
                                >
                            </div>
                            <!-- end share -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <!-- comments and reviews -->
                            <div class="comments">
                                <!-- tabs nav -->
                                <ul
                                    class="nav nav-tabs comments__title comments__title--tabs"
                                    id="comments__tabs"
                                    role="tablist"
                                >
                                    <li class="nav-item">
                                        <a
                                            class="nav-link active"
                                            data-toggle="tab"
                                            href="#tab-1"
                                            role="tab"
                                            aria-controls="tab-1"
                                            aria-selected="true"
                                        >
                                            <h4>Bình luận</h4>
                                            <span>5</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- end tabs nav -->

                                <!-- tabs -->
                                <div class="tab-content">
                                    <!-- comments -->
                                    <div
                                        class="tab-pane fade show active"
                                        id="tab-1"
                                        role="tabpanel"
                                        >
                                        <ul class="comments__list">
                                            <li class="comments__item">
                                                <div class="comments__autor">
                                                    <img
                                                        class="comments__avatar"
                                                        src="../img/avatar.svg"
                                                        alt=""
                                                    />
                                                    <span class="comments__name"
                                                        >Phương Thảo</span
                                                    >
                                                    <span class="comments__time"
                                                        >01.01.2024, 17:53</span
                                                    >
                                                </div>
                                                <p class="comments__text">
                                                    Hay hay dở dở dở dở hay hay
                                                    mập mờ !!!!!!!!!!!
                                                </p>
                                                <div class="comments__actions">
                                                    <div class="comments__rate">
                                                        <button type="button">
                                                            <svg
                                                                width="22"
                                                                height="22"
                                                                viewBox="0 0 22 22"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M11 7.3273V14.6537"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    d="M14.6667 10.9905H7.33333"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                            12
                                                        </button>

                                                        <button type="button">
                                                            7
                                                            <svg
                                                                width="22"
                                                                height="22"
                                                                viewBox="0 0 22 22"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M14.6667 10.9905H7.33333"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <button type="button">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="512"
                                                            height="512"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <polyline
                                                                points="400 160 464 224 400 288"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <path
                                                                d="M448,224H154C95.24,224,48,273.33,48,332v20"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            /></svg
                                                        ><span>Hồi đáp</span>
                                                    </button>
                                                    <button type="button">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="512"
                                                            height="512"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <polyline
                                                                points="320 120 368 168 320 216"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <path
                                                                d="M352,168H144a80.24,80.24,0,0,0-80,80v16"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <polyline
                                                                points="192 392 144 344 192 296"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <path
                                                                d="M160,344H368a80.24,80.24,0,0,0,80-80V248"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            /></svg
                                                        ><span>Trích dẫn</span>
                                                    </button>
                                                </div>
                                            </li>

                                            <li
                                                class="comments__item comments__item--answer"
                                            >
                                                <div class="comments__autor">
                                                    <img
                                                        class="comments__avatar"
                                                        src="../img/avatar.svg"
                                                        alt=""
                                                    />
                                                    <span class="comments__name"
                                                        >Thanh Thùy</span
                                                    >
                                                    <span class="comments__time"
                                                        >24.08.2024, 16:41</span
                                                    >
                                                </div>
                                                <p class="comments__text">
                                                    Thanh Thùy thấy Phương Thảo
                                                    đẹp gái quá trời luôn á
                                                    hihihi ngại quá chòi >w<
                                                </p>
                                                <div class="comments__actions">
                                                    <div class="comments__rate">
                                                        <button type="button">
                                                            <svg
                                                                width="22"
                                                                height="22"
                                                                viewBox="0 0 22 22"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M11 7.3273V14.6537"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    d="M14.6667 10.9905H7.33333"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                            10
                                                        </button>

                                                        <button type="button">
                                                            0
                                                            <svg
                                                                width="22"
                                                                height="22"
                                                                viewBox="0 0 22 22"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M14.6667 10.9905H7.33333"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <button type="button">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="512"
                                                            height="512"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <polyline
                                                                points="400 160 464 224 400 288"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <path
                                                                d="M448,224H154C95.24,224,48,273.33,48,332v20"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            /></svg
                                                        ><span>Hồi đáp</span>
                                                    </button>
                                                    <button type="button">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="512"
                                                            height="512"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <polyline
                                                                points="320 120 368 168 320 216"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <path
                                                                d="M352,168H144a80.24,80.24,0,0,0-80,80v16"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <polyline
                                                                points="192 392 144 344 192 296"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <path
                                                                d="M160,344H368a80.24,80.24,0,0,0,80-80V248"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            /></svg
                                                        ><span>Trích dẫn</span>
                                                    </button>
                                                </div>
                                            </li>

                                            <li
                                                class="comments__item comments__item--quote"
                                            >
                                                <div class="comments__autor">
                                                    <img
                                                        class="comments__avatar"
                                                        src="../img/avatar.svg"
                                                        alt=""
                                                    />
                                                    <span class="comments__name"
                                                        >Văn Khang</span
                                                    >
                                                    <span class="comments__time"
                                                        >11.08.2024, 11:11</span
                                                    >
                                                </div>
                                                <p class="comments__text">
                                                    <span
                                                        >Phim thì hay Phương
                                                        Thảo thì dễ thương</span
                                                    >
                                                    >Tuyệt cà là vời
                                                </p>
                                                <div class="comments__actions">
                                                    <div class="comments__rate">
                                                        <button type="button">
                                                            <svg
                                                                width="22"
                                                                height="22"
                                                                viewBox="0 0 22 22"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M11 7.3273V14.6537"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    d="M14.6667 10.9905H7.33333"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                            9
                                                        </button>

                                                        <button type="button">
                                                            2
                                                            <svg
                                                                width="22"
                                                                height="22"
                                                                viewBox="0 0 22 22"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M14.6667 10.9905H7.33333"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <button type="button">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="512"
                                                            height="512"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <polyline
                                                                points="400 160 464 224 400 288"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <path
                                                                d="M448,224H154C95.24,224,48,273.33,48,332v20"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            /></svg
                                                        ><span>Hồi đáp</span>
                                                    </button>
                                                    <button type="button">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="512"
                                                            height="512"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <polyline
                                                                points="320 120 368 168 320 216"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <path
                                                                d="M352,168H144a80.24,80.24,0,0,0-80,80v16"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <polyline
                                                                points="192 392 144 344 192 296"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <path
                                                                d="M160,344H368a80.24,80.24,0,0,0,80-80V248"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            /></svg
                                                        ><span>Trích dẫn</span>
                                                    </button>
                                                </div>
                                            </li>

                                            <li class="comments__item">
                                                <div class="comments__autor">
                                                    <img
                                                        class="comments__avatar"
                                                        src="../img/avatar.svg"
                                                        alt=""
                                                    />
                                                    <span class="comments__name"
                                                        >Duy Đẳng</span
                                                    >
                                                    <span class="comments__time"
                                                        >07.08.2024, 14:33</span
                                                    >
                                                </div>
                                                <p class="comments__text">
                                                    Phim này thì hay !!!! Đẳng
                                                    thì ngồi coi phim hay :>
                                                </p>
                                                <div class="comments__actions">
                                                    <div class="comments__rate">
                                                        <button type="button">
                                                            <svg
                                                                width="22"
                                                                height="22"
                                                                viewBox="0 0 22 22"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M11 7.3273V14.6537"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    d="M14.6667 10.9905H7.33333"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                            7
                                                        </button>

                                                        <button type="button">
                                                            4
                                                            <svg
                                                                width="22"
                                                                height="22"
                                                                viewBox="0 0 22 22"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M14.6667 10.9905H7.33333"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <button type="button">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="512"
                                                            height="512"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <polyline
                                                                points="400 160 464 224 400 288"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <path
                                                                d="M448,224H154C95.24,224,48,273.33,48,332v20"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            /></svg
                                                        ><span>Hồi đáp</span>
                                                    </button>
                                                    <button type="button">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="512"
                                                            height="512"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <polyline
                                                                points="320 120 368 168 320 216"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <path
                                                                d="M352,168H144a80.24,80.24,0,0,0-80,80v16"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <polyline
                                                                points="192 392 144 344 192 296"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <path
                                                                d="M160,344H368a80.24,80.24,0,0,0,80-80V248"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            /></svg
                                                        ><span>Hồi đáp</span>
                                                    </button>
                                                </div>
                                            </li>

                                            <li class="comments__item">
                                                <div class="comments__autor">
                                                    <img
                                                        class="comments__avatar"
                                                        src="../img/avatar.svg"
                                                        alt=""
                                                    />
                                                    <span class="comments__name"
                                                        >Phúc Nguyên</span
                                                    >
                                                    <span class="comments__time"
                                                        >02.08.2024, 15:24</span
                                                    >
                                                </div>
                                                <p class="comments__text">
                                                    Phim đáng sợ quá, ngủ không
                                                    được!
                                                </p>
                                                <div class="comments__actions">
                                                    <div class="comments__rate">
                                                        <button type="button">
                                                            <svg
                                                                width="22"
                                                                height="22"
                                                                viewBox="0 0 22 22"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M11 7.3273V14.6537"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    d="M14.6667 10.9905H7.33333"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                            2
                                                        </button>

                                                        <button type="button">
                                                            17
                                                            <svg
                                                                width="22"
                                                                height="22"
                                                                viewBox="0 0 22 22"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    d="M14.6667 10.9905H7.33333"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z"
                                                                    stroke-width="1.5"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                ></path>
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <button type="button">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="512"
                                                            height="512"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <polyline
                                                                points="400 160 464 224 400 288"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <path
                                                                d="M448,224H154C95.24,224,48,273.33,48,332v20"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            /></svg
                                                        ><span>Hồi đáp</span>
                                                    </button>
                                                    <button type="button">
                                                        <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            width="512"
                                                            height="512"
                                                            viewBox="0 0 512 512"
                                                        >
                                                            <polyline
                                                                points="320 120 368 168 320 216"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <path
                                                                d="M352,168H144a80.24,80.24,0,0,0-80,80v16"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <polyline
                                                                points="192 392 144 344 192 296"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            />
                                                            <path
                                                                d="M160,344H368a80.24,80.24,0,0,0,80-80V248"
                                                                style="
                                                                    fill: none;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 32px;
                                                                "
                                                            /></svg
                                                        ><span>Trích dẫn</span>
                                                    </button>
                                                </div>
                                            </li>
                                        </ul>

                                        <div
                                            class="catalog__paginator-wrap catalog__paginator-wrap--comments"
                                        >
                                            <span class="catalog__pages"
                                                >5 đến 16</span
                                            >

                                            <ul class="catalog__paginator">
                                                <li>
                                                    <a href="#">
                                                        <svg
                                                            width="14"
                                                            height="11"
                                                            viewBox="0 0 14 11"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M0.75 5.36475L13.1992 5.36475"
                                                                stroke-width="1.2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M5.771 10.1271L0.749878 5.36496L5.771 0.602051"
                                                                stroke-width="1.2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">1</a>
                                                </li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li>
                                                    <a href="#">
                                                        <svg
                                                            width="14"
                                                            height="11"
                                                            viewBox="0 0 14 11"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                d="M13.1992 5.3645L0.75 5.3645"
                                                                stroke-width="1.2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                            <path
                                                                d="M8.17822 0.602051L13.1993 5.36417L8.17822 10.1271"
                                                                stroke-width="1.2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                            />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <form action="#" class="comments__form">
                                            <div class="sign__group">
                                                <textarea
                                                    id="text"
                                                    name="text"
                                                    class="sign__textarea"
                                                    placeholder="Thêm bình luận"
                                                ></textarea>
                                            </div>
                                            <button
                                                type="button"
                                                class="sign__btn"
                                            >
                                                Gửi
                                            </button>
                                        </form>
                                    </div>
                                    <!-- end comments -->
                                </div>
                                <!-- end tabs -->
                            </div>
                            <!-- end comments and reviews -->
                        </div>
                    </div>
                </div>
                <!-- end article -->
            </div>
        </section>
        <!-- end details -->

        <!-- similar -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section__title">
                            <a href="../html/category.html"
                                >Phim và phim truyền hình tương tự</a
                            >
                        </h2>
                    </div>

                    <div class="col-12">
                        <div class="section__carousel-wrap">
                        
                            <div class="section__carousel owl-carousel" id="similar">

                                @foreach ($similars as $similar)
                                <div class="card">
                                    <a
                                        href="{{route('movie',$similar->id)}}"
                                        class="card__cover"
                                    >
                                        <img src="{{$similar->thumbnail}}" alt="" />
                                        <svg
                                            width="22"
                                            height="22"
                                            viewBox="0 0 22 22"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                            >
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                    </a>
                                    <button class="card__add" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>
                                    </button>
                                    <span class="card__rating"
                                        ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
                                        {{$similar->views}}
                                    </span>
                                    <h3 class="card__title">
                                        <a href="../html/details.html"
                                            >  {{$similar->title}}</a
                                        >
                                    </h3>
                                    <ul class="card__list">
                                        @foreach ($categories as $category)
                                            @if ($category->id == $movie->id_category)
                                                <li>{{$category->name}}</li>
                                            @endif
                                        @endforeach
                                        <li>{{$similar->release_year}}</li>
                                    </ul>
                                </div>
                                
                            @endforeach
                            </div>
                            <button
                                class="section__nav section__nav--cards section__nav--prev"
                                data-nav="#similar"
                                type="button"
                            >
                                <svg
                                    width="17"
                                    height="15"
                                    viewBox="0 0 17 15"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M1.25 7.72559L16.25 7.72559"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </button>
                            <button
                                class="section__nav section__nav--cards section__nav--next"
                                data-nav="#similar"
                                type="button"
                            >
                                <svg
                                    width="17"
                                    height="15"
                                    viewBox="0 0 17 15"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M15.75 7.72559L0.75 7.72559"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end similar -->
@endsection