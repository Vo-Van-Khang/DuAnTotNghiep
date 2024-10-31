$(document).ready(function() {
    "use strict"; // start of use strict

    /*==============================
    Header
    ==============================*/
    var mainHeader = $('.header--hidden');
    var scrolling = false,
        previousTop = 0,
        currentTop = 0,
        scrollDelta = 10,
        scrollOffset = 140;

    var scrolling = false;
    $(window).on('scroll', function() {
        if (!scrolling) {
            scrolling = true;
            (!window.requestAnimationFrame) ?
            setTimeout(autoHideHeader, 250): requestAnimationFrame(autoHideHeader);
        }
    });
    $(window).trigger('scroll');

    function autoHideHeader() {
        var currentTop = $(window).scrollTop();
        checkSimpleNavigation(currentTop);
        previousTop = currentTop;
        scrolling = false;
    }

    function checkSimpleNavigation(currentTop) {
        if (previousTop - currentTop > scrollDelta) {
            mainHeader.removeClass('header--scroll');
        } else if (currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
            mainHeader.addClass('header--scroll');
        }
    }

    function disableScrolling() {
        var x = window.scrollX;
        var y = window.scrollY;
        window.onscroll = function() {
            window.scrollTo(x, y);
        };
    }

    function enableScrolling() {
        window.onscroll = function() {};
    }

    $('.header__menu').on('click', function() {
        $('.header__menu').toggleClass('header__menu--active');
        $('.header').toggleClass('header--menu');
        $('.header__nav').toggleClass('header__nav--active');

        if ($('.header__nav').hasClass('header__nav--active')) {
            disableScrolling();
        } else {
            enableScrolling();
        }
    });

    $('.header__search, .header__form-close').on('click', function() {
        $('.header__form').toggleClass('header__form--active');
    });

    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 0) {
            $('.header--fixed').addClass('header--active');
        } else {
            $('.header--fixed').removeClass('header--active');
        }
    });
    $(window).trigger('scroll');

    /*==============================
    Multi level dropdowns
    ==============================*/
    $('ul.dropdown-menu [data-toggle="dropdown"]').on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();

        $(this).siblings().toggleClass('show');
    });

    $(document).on('click', function(e) {
        $('.dropdown-menu').removeClass('show');
    });

    /*==============================
    Home carousel
    ==============================*/
    $('.home__carousel').owlCarousel({
        mouseDrag: true,
        touchDrag: true,
        dots: true,
        loop: true,
        autoplay: true,
        smartSpeed: 600,
        margin: 20,
        autoHeight: true,
        autoWidth: true,
        responsive: {
            0: {
                items: 2,
            },
            576: {
                items: 2,
                margin: 20,
            },
            768: {
                items: 2,
                margin: 30,
                center: true,
            },
            1200: {
                items: 3,
                margin: 30,
                center: true,
                mouseDrag: false,
                dots: false,
                startPosition: 1,
                slideBy: 1,
            },
        }
    });

    /*==============================
    Select
    ==============================*/
    $('.catalog__select').select2({
        minimumResultsForSearch: Infinity
    });
    /*==============================
    Carousel
    ==============================*/
    $('.section__carousel').owlCarousel({
        mouseDrag: true,
        touchDrag: true,
        dots: true,
        loop: true,
        autoplay: false,
        smartSpeed: 600,
        margin: 20,
        autoHeight: true,
        responsive: {
            0: {
                items: 2,
            },
            576: {
                items: 3,
            },
            768: {
                items: 3,
                margin: 30,
            },
            992: {
                items: 4,
                margin: 30,
            },
            1200: {
                items: 6,
                margin: 30,
                dots: false,
                mouseDrag: false,
                slideBy: 6,
                smartSpeed: 400,
            },
        }
    });

    /*==============================
    Interview
    ==============================*/
    $('.section__interview').owlCarousel({
        mouseDrag: true,
        touchDrag: true,
        dots: true,
        loop: true,
        autoplay: false,
        smartSpeed: 600,
        margin: 20,
        autoHeight: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 2,
                margin: 30,
            },
            992: {
                items: 3,
                margin: 30,
            },
            1200: {
                items: 3,
                margin: 30,
                dots: false,
                mouseDrag: false,
                slideBy: 3,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
            },
        }
    });

    /*==============================
    Series
    ==============================*/
    $('.section__series').owlCarousel({
        mouseDrag: true,
        touchDrag: true,
        dots: true,
        loop: true,
        autoplay: false,
        smartSpeed: 600,
        margin: 20,
        autoHeight: true,
        responsive: {
            0: {
                items: 2,
            },
            576: {
                items: 3,
            },
            768: {
                items: 3,
                margin: 20,
            },
            992: {
                items: 4,
                margin: 20,
            },
            1200: {
                items: 5,
                margin: 20,
                dots: false,
                mouseDrag: false,
            },
            1440: {
                items: 5,
                margin: 20,
                dots: false,
                mouseDrag: false,
            },
        }
    });

    /*==============================
    Live
    ==============================*/
    $('.section__live').owlCarousel({
        mouseDrag: true,
        touchDrag: true,
        dots: true,
        loop: true,
        autoplay: false,
        smartSpeed: 600,
        margin: 20,
        autoHeight: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 2,
            },
            768: {
                items: 2,
                margin: 30,
            },
            992: {
                items: 3,
                margin: 30,
            },
            1200: {
                items: 3,
                margin: 30,
                dots: false,
                mouseDrag: false,
                slideBy: 3,
            },
        }
    });

    /*==============================
    Partners
    ==============================*/
    $('.partners').owlCarousel({
        mouseDrag: false,
        touchDrag: false,
        dots: false,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        smartSpeed: 600,
        margin: 20,
        responsive: {
            0: {
                items: 2,
            },
            576: {
                items: 2,
                margin: 30,
            },
            768: {
                items: 3,
                margin: 30,
            },
            992: {
                items: 4,
                margin: 30,
            },
            1200: {
                items: 6,
                margin: 30,
            },
        }
    });

    /*==============================
    Navigation
    ==============================*/
    $('.section__nav--prev, .home__nav--prev').on('click', function() {
        var carouselId = $(this).attr('data-nav');
        $(carouselId).trigger('prev.owl.carousel');
    });
    $('.section__nav--next, .home__nav--next').on('click', function() {
        var carouselId = $(this).attr('data-nav');
        $(carouselId).trigger('next.owl.carousel');
    });

    /*==============================
    Bg
    ==============================*/
    $('.section--full-bg').each(function() {
        if ($(this).attr("data-bg")) {
            $(this).css({
                'background': 'url(' + $(this).data('bg') + ')',
                'background-position': 'center center',
                'background-repeat': 'no-repeat',
                'background-size': 'cover'
            });
        }
    });

    $('.section__bg').each(function() {
        if ($(this).attr("data-bg")) {
            $(this).css({
                'background': 'url(' + $(this).data('bg') + ')',
                'background-position': 'top center',
                'background-repeat': 'no-repeat',
                'background-size': 'cover'
            });
        }
    });

    /*==============================
    Player
    ==============================*/
    function initializePlayer() {
        if ($('#player').length) {
            const player = new Plyr('#player',{
                i18n: {
                    quality: 'Chất lượng',
                    speed: 'Tốc độ',
                    normal: 'Bình thường'
                }
            });
        } else {
            return false;
        }
        return false;
    }
    $(window).on('load', initializePlayer());

    /*==============================
    Modal
    ==============================*/
    $('.open-video').magnificPopup({
        disableOn: 500,
        fixedContentPos: true,
        type: 'iframe',
        preloader: false,
        removalDelay: 300,
        mainClass: 'mfp-fade',
        callbacks: {
            open: function() {
                if ($(window).width() > 1200) {
                    $('.header').css('margin-left', "-" + (getScrollBarWidth() / 2) + "px");
                }
            },
            close: function() {
                if ($(window).width() > 1200) {
                    $('.header').css('margin-left', 0);
                }
            }
        }
    });

    $('.open-modal').magnificPopup({
        fixedContentPos: true,
        fixedBgPos: true,
        overflowY: 'auto',
        type: 'inline',
        preloader: false,
        focus: '#username',
        modal: false,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in',
    });

    $('.modal__close').on('click', function(e) {
        e.preventDefault();
        $.magnificPopup.close();
    });

    function getScrollBarWidth() {
        var $outer = $('<div>').css({
                visibility: 'hidden',
                width: 100,
                overflow: 'scroll'
            }).appendTo('body'),
            widthWithScroll = $('<div>').css({
                width: '100%'
            }).appendTo($outer).outerWidth();
        $outer.remove();
        return 100 - widthWithScroll;
    };

    /*==============================
    Scrollbar
    ==============================*/
    var Scrollbar = window.Scrollbar;

    if ($('.header__nav-menu--scroll').length) {
        Scrollbar.init(document.querySelector('.header__nav-menu--scroll'), {
            damping: 0.1,
            renderByPixels: true,
            alwaysShowTracks: true,
            continuousScrolling: true
        });
    }

    if ($('.dashbox__table-wrap--1').length) {
        Scrollbar.init(document.querySelector('.dashbox__table-wrap--1'), {
            damping: 0.1,
            renderByPixels: true,
            alwaysShowTracks: true,
            continuousScrolling: true
        });
    }

    if ($('.dashbox__table-wrap--2').length) {
        Scrollbar.init(document.querySelector('.dashbox__table-wrap--2'), {
            damping: 0.1,
            renderByPixels: true,
            alwaysShowTracks: true,
            continuousScrolling: true
        });
    }


});

window.addEventListener('load',()=>{
    document.querySelector('#loader').style.display = "none";
})

function add_like_click_event() {
    const addLikeButton = document.querySelector('#add__to__like');
    if (addLikeButton) {
        addLikeButton.addEventListener('click', () => {
            let id = document.querySelector("#information__movie").getAttribute('id_movie');
            fetch('/like/fetch/add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ id_movie: id })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const likeButtonHTML = `
                        <button id="remove__like" class="active" title="Bỏ thích video này" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                <path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/>
                            </svg>
                            <span id="likes">${data.likes}</span>
                        </button>`;

                    const articleAdditional = document.querySelector('.article__additional');
                    addLikeButton.remove();
                    articleAdditional.insertAdjacentHTML('afterbegin', likeButtonHTML);
                    
                    add_like_click_event();
                } else {
                    console.log("fail");
                }
            })
            .catch(error => {
                console.error(error);
            });
        });
    }

    const removeLikeButton = document.querySelector('#remove__like');
    if (removeLikeButton) {
        removeLikeButton.addEventListener('click', () => {
            let id = document.querySelector("#information__movie").getAttribute('id_movie');
            fetch('/like/fetch/remove', {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ id_movie: id })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const likeButtonHTML = `
                        <button id="add__to__like" title="Thích video này" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                <path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/>
                            </svg>
                            <span id="likes">${data.likes}</span>
                        </button>`;

                    const articleAdditional = document.querySelector('.article__additional');
                    removeLikeButton.remove();
                    articleAdditional.insertAdjacentHTML('afterbegin', likeButtonHTML);
                    
                    add_like_click_event();
                } else {
                    console.log("fail");
                }
            })
            .catch(error => {
                console.error(error);
            });
        });
    }
}
function add_watch_later_click_event() {
    const addWatchLaterButton = document.querySelector('#add__to__watch__later');
    if (addWatchLaterButton) {
        addWatchLaterButton.addEventListener('click', () => {
            let id = document.querySelector("#information__movie").getAttribute('id_movie');
            fetch('/watch_later/fetch/add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ id_movie: id })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const WatchLaterButtonHTML = `
                            <button id="remove__watch__later" class="active"
                                title="Xóa khỏi danh sách xem sau"
                                type="button"
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>
                                Đã thêm xem sau
                            </button>`;

                    const articleAdditional = document.querySelector('.article__additional');
                    addWatchLaterButton.remove();
                    articleAdditional.insertAdjacentHTML('beforeend', WatchLaterButtonHTML);
                    add_watch_later_click_event();
                } else {
                    console.log("fail");
                }
            })
            .catch(error => {
                console.error(error);
            });
        });
    }

    const removeWatchLaterButton = document.querySelector('#remove__watch__later');
    if (removeWatchLaterButton) {
        removeWatchLaterButton.addEventListener('click', () => {
            let id = document.querySelector("#information__movie").getAttribute('id_movie');
            fetch('/watch_later/fetch/remove', {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ id_movie: id })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const WatchLaterButtonHTML = `
                                <button id="add__to__watch__later"
                                    title="Thêm vào danh sách xem sau"
                                    type="button"
                                >
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/></svg>
                                    Xem sau
                                </button>`;

                    const articleAdditional = document.querySelector('.article__additional');
                    removeWatchLaterButton.remove();
                    articleAdditional.insertAdjacentHTML('beforeend', WatchLaterButtonHTML);
                    add_watch_later_click_event();
                } else {
                    console.log("fail");
                }
            })
            .catch(error => {
                console.error(error);
            });
        });
    }
}


document.addEventListener("DOMContentLoaded", () => {
    add_like_click_event();
    add_watch_later_click_event();
});

const container = document.querySelector(".watch__later__container");
function attachRemoveEvent() {
    const remove__watch__later__id__button = document.querySelectorAll('.remove__watch__later__id');
    remove__watch__later__id__button.forEach((button) => {
        button.addEventListener('click', () => {
            if (confirm("Bạn có muốn xóa phim xem sau này không?")) {
                let id = button.getAttribute("id_watch_later");
                fetch(`/watch_later/remove/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log(data);
                        container.innerHTML = ''; // Xóa nội dung cũ
                        
                        data.movies.forEach(movie => {
                            const watchLater = data.watch_laters.find(wl => wl.id_movie === movie.id);
                            const Category = data.categories.find(c => c.id === movie.id_category);
                            const template = `
                                <div class="col-6 col-sm-4 col-lg-3 col-xl-3">
                                    <div class="card card--favorites">
                                        <a href="/movie/${movie.id}" class="card__cover">
                                            <img src="${movie.thumbnail}" alt="" />
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
                                        <button class="card__add remove__watch__later__id" type="button" id_watch_later="${watchLater.id}">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m376-300 104-104 104 104 56-56-104-104 104-104-56-56-104 104-104-104-56 56 104 104-104 104 56 56Zm-96 180q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520Zm-400 0v520-520Z"/></svg>
                                        </button>
                                        <span class="card__rating">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg>
                                            ${movie.views}
                                        </span>
                                        <h3 class="card__title">
                                            <a href="/movie/${movie.id}">${movie.title}</a>
                                        </h3>
                                        <ul class="card__list">
                                            <li>${Category.name}</li>
                                            <li>${movie.release_year}</li>
                                        </ul>
                                    </div>
                                </div>`;
                            
                            container.innerHTML += template; // Thêm template vào container
                        });

                        // Gán lại sự kiện cho các nút xóa
                        attachRemoveEvent();
                    } else {
                        console.log("fail");
                    }
                })
                .catch(error => {
                    console.error(error);
                });
            }
        });
    });
}

// Gán sự kiện khi trang được tải
attachRemoveEvent();
