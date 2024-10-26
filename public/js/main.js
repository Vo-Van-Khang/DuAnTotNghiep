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
// function check_watch_later() {
//     let id = parseInt(document.querySelector("#information__movie").getAttribute('id_movie'));  
//     fetch(`/ajax/watch_later/check/${id}`, {
//         method: 'GET',
//         headers: {
//             'Content-Type': 'application/json',
//         }
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.success) {
//             const watchLaterButtonHTML = data.check_watch_later > 0
//                 ? `<button id="remove__watch__later" title="Xóa khỏi danh sách xem sau" type="button">
//                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
//                             <path d="M280-440h400v-80H280v80ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-320Z"/>
//                         </svg>
//                         Xóa khỏi xem sau
//                     </button>`
//                 : `<button id="add__to__watch__later" title="Thêm vào danh sách xem sau" type="button">
//                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
//                             <path d="m612-292 56-56-148-148v-184h-80v216l172 172ZM480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z"/>
//                         </svg>
//                         Xem sau
//                     </button>`;

//             const articleAdditional = document.querySelector('.article__additional');

//             // Xóa các nút cũ và thêm nút mới
//             articleAdditional.querySelectorAll("#remove__watch__later, #add__to__watch__later").forEach(btn => btn.remove());
//             articleAdditional.insertAdjacentHTML('beforeend', watchLaterButtonHTML);

//             add_click_event();
//         } else {
//             console.log("fail");
//         }
//     })
//     .catch(error => console.error("Lỗi:", error));
// }

// function check_like() {
//     let id = parseInt(document.querySelector("#information__movie").getAttribute('id_movie'));  
//     fetch(`/ajax/like/check/${id}`, {
//         method: 'GET',
//         headers: {
//             'Content-Type': 'application/json',
//         }
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.success) {
//             const likeButtonHTML = data.check_like > 0
//                 ? `<button id="remove__like" class="active" title="Bỏ thích video này" type="button">
//                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/></svg>
//                         <span id="likes">${data.likes}</span>
//                     </button>`
//                 : `<button id="add__to__like" title="Thích video này" type="button">
//                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M720-120H280v-520l280-280 50 50q7 7 11.5 19t4.5 23v14l-44 174h258q32 0 56 24t24 56v80q0 7-2 15t-4 15L794-168q-9 20-30 34t-44 14Zm-360-80h360l120-280v-80H480l54-220-174 174v406Zm0-406v406-406Zm-80-34v80H160v360h120v80H80v-520h200Z"/></svg>
//                         <span id="likes">${data.likes}</span>
//                     </button>`;

//             const articleAdditional = document.querySelector('.article__additional');

//             // Xóa các nút cũ và thêm nút mới
//             articleAdditional.querySelectorAll("#remove__like, #add__to__like").forEach(btn => btn.remove());
//             articleAdditional.insertAdjacentHTML('afterbegin', likeButtonHTML);

//             add_like_click_event();
//         } else {
//             console.log("fail");
//         }
//     })
//     .catch(error => console.error("Lỗi:", error));
// }

// function add_click_event() {
//     if (document.querySelector('#add__to__watch__later') != null) {
//         document.querySelector('#add__to__watch__later').addEventListener('click', () => {
//             let id = document.querySelector("#information__movie").getAttribute('id_movie');
//             fetch('/watch_later/fetch/add', {
//                 method: 'POST',
//                 headers: {
//                     'Content-Type': 'application/json',
//                     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//                 },
//                 body: JSON.stringify({ id_movie: id })
//             })
//             .then(response => response.json())
//             .then(data => {
//                 if (data.success) {
//                     check_watch_later();
//                 } else {
//                     console.log("fail");
//                 }
//             })
//             .catch(error => console.error(error));
//         });
//     }

//     if (document.querySelector('#remove__watch__later') != null) {
//         document.querySelector('#remove__watch__later').addEventListener('click', () => {
//             let id = document.querySelector("#information__movie").getAttribute('id_movie');
//             fetch('/watch_later/fetch/remove', {
//                 method: 'DELETE',
//                 headers: {
//                     'Content-Type': 'application/json',
//                     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//                 },
//                 body: JSON.stringify({ id_movie: id })
//             })
//             .then(response => response.json())
//             .then(data => {
//                 if (data.success) {
//                     check_watch_later();
//                 } else {
//                     console.log("fail");
//                 }
//             })
//             .catch(error => console.error(error));
//         });
//     }
// }

// function add_like_click_event() {
//     if (document.querySelector('#add__to__like') != null) {
//         document.querySelector('#add__to__like').addEventListener('click', () => {
//             let id = document.querySelector("#information__movie").getAttribute('id_movie');
//             fetch('/like/fetch/add', {
//                 method: 'POST',
//                 headers: {
//                     'Content-Type': 'application/json',
//                     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//                 },
//                 body: JSON.stringify({ id_movie: id })
//             })
//             .then(response => response.json())
//             .then(data => {
//                 if (data.success) {
//                     check_like();
//                 } else {
//                     console.log("fail");
//                 }
//             })
//             .catch(error => console.error(error));
//         });
//     }

//     if (document.querySelector('#remove__like') != null) {
//         document.querySelector('#remove__like').addEventListener('click', () => {
//             let id = document.querySelector("#information__movie").getAttribute('id_movie');
//             fetch('/like/fetch/remove', {
//                 method: 'DELETE',
//                 headers: {
//                     'Content-Type': 'application/json',
//                     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//                 },
//                 body: JSON.stringify({ id_movie: id })
//             })
//             .then(response => response.json())
//             .then(data => {
//                 if (data.success) {
//                     check_like();
//                 } else {
//                     console.log("fail");
//                 }
//             })
//             .catch(error => console.error(error));
//         });
//     }
// }

// document.addEventListener("DOMContentLoaded", () => {
//     check_watch_later();
//     check_like();
// });
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