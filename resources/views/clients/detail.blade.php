@extends('layouts.layout')
@section('content')
        <!-- details -->
        <section
            class="section section--head section--head-fixed section--gradient section--details-bg"
        >
            <div class="section__bg" data-bg="img/details.jpg"></div>
            <div class="container">
                <!-- article -->
                <div class="article">
                    <div class="row">
                        <div class="col-12 col-xl-8">
                            <!-- article content -->
                            <div class="article__content">
                                <h1>The Fast and the Furious</h1>

                                <ul class="list">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/></svg>
                                        178
                                    </li>
                                    <li>Hành động</li>
                                    <li>2021</li>
                                    <li>1 giờ 42 phút</li>
                                </ul>
                            </div>
                            <!-- end article content -->
                        </div>

                        <!-- video player -->
                        <div class="col-12 col-xl-12">
                            <video
                                controls
                                crossorigin
                                playsinline
                                poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg"
                                id="player"
                            >
                                <!-- Video files -->
                                <source
                                    src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                    type="video/mp4"
                                    size="576"
                                />
                                <source
                                    src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4"
                                    type="video/mp4"
                                    size="720"
                                />
                                <source
                                    src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4"
                                    type="video/mp4"
                                    size="1080"
                                />

                                <!-- Caption files -->
                                <track
                                    kind="captions"
                                    label="English"
                                    srclang="en"
                                    src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
                                    default
                                />
                                <track
                                    kind="captions"
                                    label="Français"
                                    srclang="fr"
                                    src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt"
                                />

                                <!-- Fallback for browsers that don't support the <video> element -->
                                <a
                                    href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                                    download
                                    >Tải về</a
                                >
                                >
                            </video>

                            <div
                                class="article__actions article__actions--details"
                            >
                                <div class="article__download">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#2f80ed"><path d="M590-300h60v-60h30q17 0 28.5-11.5T720-400v-160q0-17-11.5-28.5T680-600H560q-17 0-28.5 11.5T520-560v160q0 17 11.5 28.5T560-360h30v60Zm-350-60h60v-80h80v80h60v-240h-60v100h-80v-100h-60v240Zm340-60v-120h80v120h-80ZM160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-480H160v480Zm0 0v-480 480Z"/></svg>
                                    Chất lượng:
                                    <a href="#" >480p</a>
                                    <a href="#" >720p</a>
                                    <a href="#" ><svg class="svg__premium" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffe600"><path d="m387-412 35-114-92-74h114l36-112 36 112h114l-93 74 35 114-92-71-93 71ZM240-40v-309q-38-42-59-96t-21-115q0-134 93-227t227-93q134 0 227 93t93 227q0 61-21 115t-59 96v309l-240-80-240 80Zm240-280q100 0 170-70t70-170q0-100-70-170t-170-70q-100 0-170 70t-70 170q0 100 70 170t170 70ZM320-159l160-41 160 41v-124q-35 20-75.5 31.5T480-240q-44 0-84.5-11.5T320-283v124Zm160-62Z"/></svg>1080p</a>
                                </div>

                                <!-- add .active class -->
                                <button
                                    class="article__favorites"
                                    type="button"
                                >
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>
                                    Thêm vào xem sau
                                </button>
                            </div>
                        </div>
                        <!-- end video player -->

                        {{-- information --}}
                        <div class="row p-4">
                            <div class="col-12 col-xl-7">
                                <p class="mb-0" style="color: #fff;">Một thực tế đã được chứng minh từ lâu là độc giả sẽ bị phân tâm bởi nội dung có thể đọc được của một trang khi nhìn vào bố cục của nó. các điểm của việc sử dụng Lorem Ipsum là nó có sự phân bố chữ cái ít nhiều bình thường, trái ngược với việc sử dụng 'Nội dung ở đây, nội dung đây', làm cho nó trông giống như tiếng Anh có thể đọc được.</p>
                            </div>
                            <div class="col-12 col-xl-5"  style="border-left:1px solid #fff">
                                <div class="row" style="color: #fff">
                                    <p class="col-12 col-xl-3">Diễn viên:</p>
                                    <p class="col-12 col-xl-9">Seth Rogen, Angelina Jolie, Jackie Chan, Dustin Hoffman, Jack Black, Ian McShane</p>
                                </div>
                                <div class="row" style="color: #fff">
                                    <p class="col-12 col-xl-3">Đạo diễn:</p>
                                    <p class="col-12 col-xl-9">Seth Rogen</p>
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
                                    <a href="" class="item active">Tập 1</a>
                                    <a href="" class="item">Tập 2</a>
                                    <a href="" class="item">Tập 3</a>
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
                            <div
                                class="section__carousel owl-carousel"
                                id="similar"
                            >
                                <div class="card">
                                    <a
                                        href="../html/details.html"
                                        class="card__cover"
                                    >
                                        <img src="../img/card/1.png" alt="" />
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
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"
                                            />
                                        </svg>
                                    </button>
                                    <span class="card__rating"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                                            />
                                        </svg>
                                        8.3</span
                                    >
                                    <h3 class="card__title">
                                        <a href="../html/details.html"
                                            >The Good Lord Bird</a
                                        >
                                    </h3>
                                    <ul class="card__list">
                                        <li>Miễn phí</li>
                                        <li>Hành động</li>
                                        <li>2019</li>
                                    </ul>
                                </div>

                                <div class="card">
                                    <a
                                        href="../html/details.html"
                                        class="card__cover"
                                    >
                                        <img src="../img/card/2.png" alt="" />
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
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"
                                            />
                                        </svg>
                                    </button>
                                    <span class="card__rating"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                                            />
                                        </svg>
                                        8.1</span
                                    >
                                    <h3 class="card__title">
                                        <a href="../html/details.html"
                                            >The Dictator</a
                                        >
                                    </h3>
                                    <ul class="card__list">
                                        <li>Miễn phí</li>
                                        <li>Hài kịch</li>
                                        <li>2012</li>
                                    </ul>
                                </div>

                                <div class="card">
                                    <a
                                        href="../html/details.html"
                                        class="card__cover"
                                    >
                                        <img src="../img/card/3.png" alt="" />
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
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"
                                            />
                                        </svg>
                                    </button>
                                    <span class="card__rating"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                                            />
                                        </svg>
                                        7.9</span
                                    >
                                    <h3 class="card__title">
                                        <a href="../html/details.html"
                                            >12 Years a Slave</a
                                        >
                                    </h3>
                                    <ul class="card__list">
                                        <li>Miễn phí</li>
                                        <li>Lịch sử</li>
                                        <li>2013</li>
                                    </ul>
                                </div>

                                <div class="card">
                                    <a
                                        href="../html/details.html"
                                        class="card__cover"
                                    >
                                        <img src="../img/card/4.png" alt="" />
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
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"
                                            />
                                        </svg>
                                    </button>
                                    <span class="card__rating"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                                            />
                                        </svg>
                                        8.8</span
                                    >
                                    <h3 class="card__title">
                                        <a href="../html/details.html"
                                            >Get On Up</a
                                        >
                                    </h3>
                                    <ul class="card__list">
                                        <li>Miễn phí</li>
                                        <li>Tiểu sử</li>
                                        <li>2014</li>
                                    </ul>
                                </div>

                                <div class="card">
                                    <a
                                        href="../html/details.html"
                                        class="card__cover"
                                    >
                                        <img src="../img/card/5.png" alt="" />
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
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"
                                            />
                                        </svg>
                                    </button>
                                    <span class="card__rating"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                                            />
                                        </svg>
                                        7.1</span
                                    >
                                    <h3 class="card__title">
                                        <a href="../html/details.html"
                                            >Interview With the Vampire</a
                                        >
                                    </h3>
                                    <ul class="card__list">
                                        <li>Miễn phí</li>
                                        <li>Kinh dị</li>
                                        <li>1994</li>
                                    </ul>
                                </div>

                                <div class="card">
                                    <a
                                        href="../html/details.html"
                                        class="card__cover"
                                    >
                                        <img src="../img/card/6.png" alt="" />
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
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"
                                            />
                                        </svg>
                                    </button>
                                    <span class="card__rating"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                                            />
                                        </svg>
                                        8.6</span
                                    >
                                    <h3 class="card__title">
                                        <a href="../html/details.html"
                                            >Pawn Sacrifice</a
                                        >
                                    </h3>
                                    <ul class="card__list">
                                        <li>Miễn phí</li>
                                        <li>Lịch sử</li>
                                        <li>2015</li>
                                    </ul>
                                </div>

                                <div class="card">
                                    <a
                                        href="../html/details.html"
                                        class="card__cover"
                                    >
                                        <img src="../img/card/7.png" alt="" />
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
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"
                                            />
                                        </svg>
                                    </button>
                                    <span class="card__rating"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                                            />
                                        </svg>
                                        7.0</span
                                    >
                                    <h3 class="card__title">
                                        <a href="../html/details.html"
                                            >Operation Finale</a
                                        >
                                    </h3>
                                    <ul class="card__list">
                                        <li>Miễn phí</li>
                                        <li>Kịch</li>
                                        <li>2018</li>
                                    </ul>
                                </div>

                                <div class="card">
                                    <a
                                        href="../html/details.html"
                                        class="card__cover"
                                    >
                                        <img src="../img/card/8.png" alt="" />
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
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"
                                            />
                                        </svg>
                                    </button>
                                    <span class="card__rating"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                                            />
                                        </svg>
                                        7.5</span
                                    >
                                    <h3 class="card__title">
                                        <a href="../html/details.html"
                                            >Denial</a
                                        >
                                    </h3>
                                    <ul class="card__list">
                                        <li>Miễn phí</li>
                                        <li>Kịch</li>
                                        <li>2016</li>
                                    </ul>
                                </div>

                                <div class="card">
                                    <a
                                        href="../html/details.html"
                                        class="card__cover"
                                    >
                                        <img src="../img/card/9.png" alt="" />
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
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"
                                            />
                                        </svg>
                                    </button>
                                    <span class="card__rating"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                                            />
                                        </svg>
                                        7.2</span
                                    >
                                    <h3 class="card__title">
                                        <a href="../html/details.html">Luce</a>
                                    </h3>
                                    <ul class="card__list">
                                        <li>Miễn phí</li>
                                        <li>Kịch</li>
                                        <li>2019</li>
                                    </ul>
                                </div>

                                <div class="card">
                                    <a
                                        href="../html/details.html"
                                        class="card__cover"
                                    >
                                        <img src="../img/card/13.png" alt="" />
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
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"
                                            />
                                        </svg>
                                    </button>
                                    <span class="card__rating"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                                            />
                                        </svg>
                                        7.1</span
                                    >
                                    <h3 class="card__title">
                                        <a href="../html/details.html"
                                            >Infamous</a
                                        >
                                    </h3>
                                    <ul class="card__list">
                                        <li>Miễn phí</li>
                                        <li>Giật gân</li>
                                        <li>2020</li>
                                    </ul>
                                </div>

                                <div class="card">
                                    <a
                                        href="../html/details.html"
                                        class="card__cover"
                                    >
                                        <img src="../img/card/14.png" alt="" />
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
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"
                                            />
                                        </svg>
                                    </button>
                                    <span class="card__rating"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                                            />
                                        </svg>
                                        7.2</span
                                    >
                                    <h3 class="card__title">
                                        <a href="../html/details.html"
                                            >Above the Shadows</a
                                        >
                                    </h3>
                                    <ul class="card__list">
                                        <li>Miễn phí</li>
                                        <li>Khoa học viễn tưởng</li>
                                        <li>2019</li>
                                    </ul>
                                </div>

                                <div class="card">
                                    <a
                                        href="../html/details.html"
                                        class="card__cover"
                                    >
                                        <img src="../img/card/17.png" alt="" />
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
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M16,2H8A3,3,0,0,0,5,5V21a1,1,0,0,0,.5.87,1,1,0,0,0,1,0L12,18.69l5.5,3.18A1,1,0,0,0,18,22a1,1,0,0,0,.5-.13A1,1,0,0,0,19,21V5A3,3,0,0,0,16,2Zm1,17.27-4.5-2.6a1,1,0,0,0-1,0L7,19.27V5A1,1,0,0,1,8,4h8a1,1,0,0,1,1,1Z"
                                            />
                                        </svg>
                                    </button>
                                    <span class="card__rating"
                                        ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"
                                            />
                                        </svg>
                                        8.5</span
                                    >
                                    <h3 class="card__title">
                                        <a href="../html/details.html"
                                            >The Midnight Man</a
                                        >
                                    </h3>
                                    <ul class="card__list">
                                        <li>Miễn phí</li>
                                        <li>Giật gân</li>
                                        <li>2018</li>
                                    </ul>
                                </div>
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