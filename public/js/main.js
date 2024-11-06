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

    $('.modal__btn--apply').on('click', function(e) {
        e.preventDefault();
        $.magnificPopup.close();
    });
    $('.modal__btn--dismiss').on('click', function(e) {
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

if(document.querySelector(".page-404__btn")){
    document.querySelector(".page-404__btn").addEventListener("click",()=>{
        window.history.back();
    })
}
if(document.querySelector('form') != null){
	document.querySelector('form').addEventListener('submit', function(event) {
        document.querySelector('#loader').style.display = 'flex';
	});
}

if(document.querySelector('.message_box') !== null){
    const hide_message = document.querySelector('.hide_message');
    const message_box = document.querySelector('.message_box');
    hide_message.addEventListener('click',() => {
        message_box.style.display = "none";
    })
    message_box.addEventListener("animationend",()=>{
        message_box.style.display = "none";
    })
}

if(document.querySelector('.watch__later__button') != null){
    const watch__later__button = document.querySelectorAll('.watch__later__button');
    watch__later__button.forEach((button) => {
        button.addEventListener('click', () => {
            document.querySelector('#loader').style.display = 'flex';
            let id = button.getAttribute('id_movie');
            fetch(`/movie/watch_later/${id}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {

                    if(data.check > 0){
                        button.classList = "home__add watch__later__button";
                        button.title = "Thêm vào danh sách xem sau";
                    }else{
                        button.classList = "home__add watch__later__button active";
                        button.title = "Xoá khỏi xem sau";
                    }

                    document.querySelector('#loader').style.display = 'none';
                } else {
                    console.log("fail");
                }
            })
            .catch(error => {
                console.error(error);
            });
        });
    })
}


if (document.querySelector('#copy__url')) {
    const copy__url__button = document.querySelector('#copy__url');
    copy__url__button.addEventListener('click',(e)=>{
        navigator.clipboard.writeText(window.location.href)
        .then(() => {
            copy__url__button.innerHTML = "";
            copy__url__button.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m438-240 226-226-58-58-169 169-84-84-57 57 142 142ZM240-80q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h320l240 240v480q0 33-23.5 56.5T720-80H240Zm280-520v-200H240v640h480v-440H520ZM240-800v200-200 640-640Z"/></svg>
            Đã sao chép vô Clipboard!
            `;
        })
        .catch(error => {
            console.error("Lỗi khi sao chép URL: ", error);
        });
    })
}

if(document.querySelector('#like__button') != null){
    const like__button = document.querySelector('#like__button');
    like__button.addEventListener('click', () => {
        
        document.querySelector('#loader').style.display = 'flex';
        let id = document.querySelector("#information__movie").getAttribute('id_movie');
        fetch(`/movie/like/${id}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                if(data.check > 0){
                    like__button.className = "";
                    like__button.title = "Thích video này";
                    document.querySelector("#likes").innerText = data.likes;
                }else{
                    like__button.className = "active";
                    like__button.title = "Bỏ thích video này";
                    document.querySelector("#likes").innerText = data.likes;
                }
                document.querySelector('#loader').style.display = 'none';
            } else {
                console.log("fail");
            }
        })
        .catch(error => {
            console.error(error);
        });
    });
}

if(document.querySelector('#watch__later__button') != null){
    const watch__later__button = document.querySelector('#watch__later__button');
    watch__later__button.addEventListener('click', () => {

        document.querySelector('#loader').style.display = 'flex';
        let id = document.querySelector("#information__movie").getAttribute('id_movie');
        fetch(`/movie/watch_later/${id}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {

                if(data.check > 0){
                    watch__later__button.className = "";
                    watch__later__button.title = "Thêm vào danh sách xem sau";
                    document.querySelector("#watch__later__text").innerText = "Xem sau";
                }else{
                    watch__later__button.className = "active";
                    watch__later__button.title = "Xoá khỏi xem sau";
                    document.querySelector("#watch__later__text").innerText = "Đã thêm xem sau";
                }

                document.querySelector('#loader').style.display = 'none';
            } else {
                console.log("fail");
            }
        })
        .catch(error => {
            console.error(error);
        });
    });
}


if (document.querySelector('.remove__btn') != null) {
    let id_remove = null;
    let type_remove = null;

    document.querySelectorAll('.remove__btn').forEach((button) => {
        button.addEventListener('click', () => {
            id_remove = button.getAttribute('id_remove');
            type_remove = button.getAttribute('type_remove');
        });
    });

    function remove() {
        if (!id_remove || !type_remove) return;

        document.querySelector('#loader').style.display = 'flex';

        fetch(`/${type_remove}/remove/${id_remove}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                let item = document.querySelector(`.item__remove[id_remove="${id_remove}"][type_remove="${type_remove}"]`);
                if (item) item.remove();
                document.querySelector('#loader').style.display = 'none';
            } else {
                console.log("Xóa không thành công");
            }
            id_remove = null;
            type_remove = null;
        })
        .catch(error => {
            console.error(error);
        });
    }

    document.querySelector('#modal__remove__btn').addEventListener('click', remove);
}

if (document.querySelector(".comment__submit__btn")) {
    let comment__submit__btn = document.querySelector(".comment__submit__btn");
    let comment__content = document.querySelector("#comment__content");
    let comment__error = document.querySelector("#comment__error");
    let comments__list = document.querySelector(".comments__list");
    let comment__count = document.querySelector(".comment__count");
    comment__submit__btn.addEventListener("click",(button)=>{
        let id = button.target.getAttribute('id_movie');

        if(comment__content.value != ""){
            comment__error.style.display = "none";

            fetch(`/movie/${id}/comment/add`,{
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ comment__content: comment__content.value })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    let template = `<li class="comments__item">
                                        <div class="comments__autor">
                                            <img
                                                class="comments__avatar"
                                                src="../images/users/${data.user.image}"
                                                alt=""
                                            />
                                            <span class="comments__name"
                                                >${data.user.name}</span
                                            >
                                            <span class="comments__time"
                                                >${data.comment.created_at}</span
                                            >
                                        </div>
                                        <p class="comments__text">
                                            ${data.comment.content}
                                        </p>
                                        <div class="comments__actions">
                                            

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
                                                ><span>Trả Lời</span>
                                            </button>
                                        </div>
                                    </li>`;
                    comments__list.insertAdjacentHTML('afterbegin', template);
                    let newComment = comments__list.querySelector('.comments__item');
                    newComment.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center',    
                        inline: 'nearest'      
                    });
                    comment__count.innerText = parseInt(comment__count.textContent) + 1;
                    comment__content.value = "";
                }else{
                    console.log("Thêm bình luận không thành công");
                }
            })
            .catch(error => {
                console.error(error);
            });

        }else{
            comment__error.style.display = "block";
            comment__error.innerText = "Nội dung không được để trống!"
        }
    })
}