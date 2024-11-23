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

    $(document).on('click', '.modal__btn--apply, .modal__btn--dismiss', function(e) {
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

function messageBySession() {
	if(sessionStorage.getItem("message")){
		let storedMessage = JSON.parse(sessionStorage.getItem("message"));
		let msg = storedMessage[0];
		let status = storedMessage[1];
		
		let template = `
			<div class="message_box ${status}">
			${msg}
			<svg class="hide_message" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
			</div>
		`
		document.querySelector('.message__container').insertAdjacentHTML('beforeend', template)
	}
	
	if(document.querySelector('.message_box')){
		const hide_message = document.querySelectorAll('.hide_message');
		const message_box = document.querySelectorAll('.message_box');
		hide_message.forEach((e,index)=>{
			e.addEventListener("click",()=>{
				message_box[index].remove();
				if(sessionStorage.getItem("message")) sessionStorage.removeItem("message")
			})
		})
		message_box.forEach((e)=>{
			e.addEventListener("animationend",()=>{
				e.remove();
				if(sessionStorage.getItem("message")) sessionStorage.removeItem("message")
			})
		})
	}
}
messageBySession();

function add__notification(message, status) {
    sessionStorage.setItem('message', JSON.stringify([message, status]));
    messageBySession();
}
if(document.querySelector('.isLogin__false')){
    document.querySelectorAll('.isLogin__false').forEach((e)=>{
        e.addEventListener('click',()=>{
            add__notification("Vui lòng đăng nhập để sử dụng tính năng này!", "error")
        })
    })
}
if(document.querySelector('.change__server__btn')){
    let change__server__btn = document.querySelectorAll('.change__server__btn');
    change__server__btn.forEach((e)=>{
        e.addEventListener('click',()=>{
            let server = e.getAttribute("server");
            let currentUrl = new URL(window.location.href);

            if (server !== 'server 1') {
                currentUrl.searchParams.set('server', server);
                window.location.href = currentUrl.toString();
            } else {
                currentUrl.searchParams.delete('server');
                window.location.href = currentUrl.toString();
            }
        })
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

if (document.querySelector('.remove__btn')) {
    let id_remove = null;
    let type_remove = null;

    document.addEventListener('click', (event) => {
        let button = event.target.closest('.remove__btn');
        if (button) {
            id_remove = button.getAttribute('id_remove');
            type_remove = button.getAttribute('type_remove');
        }
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
                
                if (item) {
                    if (type_remove === "comment" && item.nextElementSibling) {
                        item.nextElementSibling.remove();                    
                    }
                    item.remove();
                    comment__count();                    
                }

            } else {
                console.log("Xóa không thành công.");
            }
        })
        .catch(error => {
            console.error("Lỗi khi xóa:", error);
        })
        .finally(() => {
            document.querySelector('#loader').style.display = 'none';
            id_remove = null;
            type_remove = null;
        });
    }

    document.querySelector('#modal__remove__btn').addEventListener('click', remove);
}

if(document.querySelector('.views__movie')){
    let count = document.querySelector('.views__movie');
    let id_movie = document.querySelector('#information__movie').getAttribute("id_movie");
    setTimeout(()=>{
        fetch(`/movie/update-view/${id_movie}`,{
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                count.innerText = Number(count.textContent) + 1;
            }
        })
        .catch(error => {
            console.error(error);
        });
    }, 10000)
}

if (document.querySelector(".comment__submit__btn")) {
    let comment__submit__btn = document.querySelector(".comment__submit__btn");
    let reply__comment__submit__btn = document.querySelector(".reply__comment__submit__btn");
    let comment__content = document.querySelector("#comment__content");
    let comment__error = document.querySelector("#comment__error");
    let comments__list = document.querySelector(".comments__list");
    comment__count();

    comment__submit__btn.addEventListener("click",(button)=>{
        let id = button.target.getAttribute('id_movie');

        if(comment__content.value != ""){
            comment__error.style.display = "none";
            document.querySelector('#loader').style.display = 'flex';

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
                    let template = `<li class="comments__item item__remove" id_remove="${data.comment.id}" type_remove="comment">
                                        <div class="comments__autor">
                                            <div>
                                                <img
                                                    class="comments__avatar"
                                                    src="${data.user.image}"
                                                    alt=""
                                                />
                                                <span class="comments__name"
                                                    >${data.user.name}</span
                                                >
                                                <span class="comments__time"
                                                    >${data.comment.created_at}</span
                                                >
                                            </div>
                                            <a href="#modal-delete" class="open-modal comments__delete__btn remove__btn"  id_remove="${data.comment.id}" type_remove="comment">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                            </a>
                                        </div>
                                        <p class="comments__text">
                                            ${data.comment.content}
                                        </p>
                                        <div class="comments__actions">
                                            

                                            <button type="button" class="reply__comment__btn" name_user=" ${data.user.name}" id_user=" ${data.user.id}" id_comment=" ${data.comment.id}">
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
                                    </li>
                                    <div class="reply__comments__container"></div>`;
                    comments__list.insertAdjacentHTML('afterbegin', template);
                    let newComment = comments__list.querySelector('.comments__item');
                    newComment.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center',    
                        inline: 'nearest'      
                    });
                    comment__count();
                    comment__content.value = "";
                }else{
                    console.log("Thêm bình luận không thành công");
                }
            })
            .catch(error => {
                console.error(error);
            })
            .finally(() => {
                document.querySelector('#loader').style.display = 'none';
            });

        }else{
            comment__error.style.display = "block";
            comment__error.innerText = "Nội dung không được để trống!"
        }
    })

    let user__reply__btn = document.querySelector('.user__reply__btn');
    let user__reply = document.querySelector('.user__reply');

    comments__list.addEventListener('click', (event) => {
        let button = event.target.closest('.reply__comment__btn');
        if (button) {
            let item = button;
            let name_user = item.getAttribute("name_user");
            user__reply.innerText = name_user;
            user__reply__btn.style.display = "flex";
            comment__submit__btn.style.display = "none";
            reply__comment__submit__btn.setAttribute('id_user', item.getAttribute('id_user'));
            reply__comment__submit__btn.setAttribute('id_comment', item.getAttribute('id_comment'));
            reply__comment__submit__btn.style.display = "flex";
            comment__content.scrollIntoView({
                behavior: 'smooth',
                block: 'center',
                inline: 'nearest'
            });
            comment__content.focus({ preventScroll: true });
        }
        if (event.target.closest('.open-modal')) {
            $(event.target.closest('.open-modal')).magnificPopup({
                type: 'inline',
                mainClass: 'my-mfp-zoom-in',
            }).magnificPopup('open');
        }
    });

    user__reply__btn.addEventListener('click',()=>{
        user__reply__btn.style.display = "none"
        comment__submit__btn.style.display = "flex"
        reply__comment__submit__btn.style.display = "none"
    })

    reply__comment__submit__btn.addEventListener('click', (button)=>{
        let id = button.target.getAttribute('id_movie');
        let id__user__reply = button.target.getAttribute('id_user');
        let id__comment = button.target.getAttribute('id_comment');
        if(comment__content.value != ""){
            comment__error.style.display = "none";
            document.querySelector('#loader').style.display = 'flex';

            fetch(`/movie/${id}/reply_comment/add`,{
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ 
                    id__user__reply: id__user__reply,
                    id__comment: id__comment,
                    comment__content: comment__content.value 
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    let commentParent = comments__list.querySelector(`.reply__comment__btn[id_comment="${id__comment}"]`).closest('.comments__item');
                    let replyContainer = commentParent.nextElementSibling;
                    let template = `  <li
                                        class="comments__item comments__item--answer item__remove"
                                        id_remove="${data.reply_comment.id}" type_remove="reply_comment"
                                        >
                                        <div class="comments__autor">
                                            <div>
                                                <img
                                                    class="comments__avatar"
                                                    src="${data.user.image}"
                                                    alt=""
                                                />
                                                <span class="comments__name"
                                                    >${data.user.name}</span
                                                >
                                                <span class="comments__time"
                                                    >${data.reply_comment.created_at}</span
                                                >
                                            </div>
                                            <a href="#modal-delete" class="open-modal comments__delete__btn remove__btn"  id_remove="${data.reply_comment.id}" type_remove="reply_comment">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                            </a>
                                        </div>
                                        <p class="comments__text">
                                            <span>@${data.name_user}</span>
                                            ${data.reply_comment.content}
                                        </p>
                                        <div class="comments__actions">

                                            <button type="button" class="reply__comment__btn" name_user="${data.user.name}" id_user="${data.user.id}" id_comment="${id__comment}">
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
                                    </li>`
                    replyContainer.insertAdjacentHTML('beforeend', template);

                    let newReplyComment = replyContainer.lastElementChild;
                    newReplyComment.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center',
                        inline: 'nearest'
                    });
                    comment__content.value = "";
                    user__reply__btn.click();
                    comment__count();
                }else{
                    console.log("Thêm bình luận không thành công");
                }
            })
            .catch(error => {
                console.error(error);
            })
            .finally(() => {
                document.querySelector('#loader').style.display = 'none';
            });

        }else{
            comment__error.style.display = "block";
            comment__error.innerText = "Nội dung không được để trống!"
        }
    })
}
function comment__count() {
    let comment__count = document.querySelector(".comment__count");
    if(comment__count) comment__count.innerText = document.querySelectorAll(".remove__btn").length
}

function movie__ajax(id) {
    const comments__list = document.querySelector(".comments__list");
    const views = document.querySelector('.views__movie');
    fetch(`/movie/ajax/${id}`,{
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.querySelector('#likes').innerText = data.likes;
            views.innerText = data.views;
            comments__list.innerHTML = "";

            data.comments.forEach(comment => {
                const isOwner = data.user_id === comment.user.id; 
                const commentItem = `
                    <li class="comments__item item__remove" id_remove="${comment.id}" type_remove="comment">
                        <div class="comments__autor">
                            <div>
                                <img class="comments__avatar" src="${comment.user.image}" alt="" />
                                <span class="comments__name">
                                    ${comment.user.name}
                                    ${comment.user.premium ? `
                                        <svg class="svg__premium" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffe600">
                                            <path d="m387-412 35-114-92-74h114l36-112 36 112h114l-93 74 35 114-92-71-93 71ZM240-40v-309q-38-42-59-96t-21-115q0-134 93-227t227-93q134 0 227 93t93 227q0 61-21 115t-59 96v309l-240-80-240 80Zm240-280q100 0 170-70t70-170q0-100-70-170t-170-70q-100 0-170 70t-70 170q0 100 70 170t170 70ZM320-159l160-41 160 41v-124q-35 20-75.5 31.5T480-240q-44 0-84.5-11.5T320-283v124Zm160-62Z"/>
                                        </svg>
                                    `  : ""}
                                </span>
                                <span class="comments__time">${comment.created_at}</span>
                            </div>
                            ${data.user_login && isOwner ? `
                                <a href="#modal-delete" class="open-modal comments__delete__btn remove__btn" id_remove="${comment.id}" type_remove="comment">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                        <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                                    </svg>
                                </a>
                            `:""}
                        </div>
                        <p class="comments__text">${comment.content}</p>
                        <div class="comments__actions">
                            <button type="button" class="reply__comment__btn" name_user="${comment.user.name}" id_user="${comment.user.id}" id_comment="${comment.id}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
                                    <polyline points="400 160 464 224 400 288" style="fill: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 32px;" />
                                    <path d="M448,224H154C95.24,224,48,273.33,48,332v20" style="fill: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 32px;" />
                                </svg>
                                <span>Trả Lời</span>
                            </button>
                        </div>
                    </li>
                    <div class="reply__comments__container">
                        ${comment.reply_comments
                            .map(
                                reply => `
                                    <li class="comments__item comments__item--answer item__remove" id_remove="${reply.id}" type_remove="reply_comment">
                                        <div class="comments__autor">
                                            <div>
                                                <span class="comments__name">
                                                    ${reply.user.name}
                                                    ${reply.user.premium ? `
                                                        <svg class="svg__premium" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffe600">
                                                            <path d="m387-412 35-114-92-74h114l36-112 36 112h114l-93 74 35 114-92-71-93 71ZM240-40v-309q-38-42-59-96t-21-115q0-134 93-227t227-93q134 0 227 93t93 227q0 61-21 115t-59 96v309l-240-80-240 80Zm240-280q100 0 170-70t70-170q0-100-70-170t-170-70q-100 0-170 70t-70 170q0 100 70 170t170 70ZM320-159l160-41 160 41v-124q-35 20-75.5 31.5T480-240q-44 0-84.5-11.5T320-283v124Zm160-62Z"/>
                                                        </svg>
                                                    `  : ""}
                                                </span>
                                                <img class="comments__avatar" src="${reply.user.image}" alt="" />
                                                <span class="comments__time">${reply.created_at}</span>
                                            </div>
                                            ${data.user_login && data.user_id === reply.user.id ? `
                                                <a href="#modal-delete" class="open-modal comments__delete__btn remove__btn" id_remove="${reply.id}" type_remove="reply_comment">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                                                        <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                                                    </svg>
                                                </a>
                                            ` : ""}
                                        </div>
                                        <p class="comments__text">
                                            <span ${reply.user_reply.premium ? `class="comments__text--premium"`:""}>
                                                @${reply.user_reply.name}
                                            </span> 
                                            ${reply.content}
                                        </p>
                                        <div class="comments__actions">
                                            <button type="button" class="reply__comment__btn" name_user="${reply.user.name}" id_user="${reply.user.id}" id_comment="${comment.id}">
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
                                    </li>
                                `
                            )
                            .join("")}
                    </div>
                `;
                comments__list.innerHTML += commentItem;
            });
        }
    })
    .catch(error => {
        console.error(error);
    });
}

if(document.querySelector(".comments__list")){
    setInterval(()=>{
        let id = document.querySelector(".comments__list").getAttribute('id_movie')
        movie__ajax(id);
    },2000)
}

if(document.querySelector(".payment__information")){
    const subscription__item = document.querySelectorAll(".subscription__item");
    const subscription__item__radio = document.querySelectorAll(".subscription__item--radio");
    const subscription__duration = document.querySelector(".subscription__duration");
    const subscription__price = document.querySelector(".subscription__price");
    const subscription__name = document.querySelector(".subscription__name");
    const subscription__total = document.querySelector(".subscription__total");

    subscription__item.forEach((e, index)=>{
        e.addEventListener("click",()=>{
            subscription__item__radio[index].checked = true;
            subscription__duration.innerText = subscription__item__radio[index].getAttribute("duration") + " Ngày";
            subscription__price.innerText = Number(subscription__item__radio[index].getAttribute("price")).toLocaleString('vi-VN') + " VND";
            subscription__name.innerText = subscription__item__radio[index].getAttribute("subscription__name");
            subscription__total.innerText = Number(subscription__item__radio[index].getAttribute("price")).toLocaleString('vi-VN') + " VND";
        })
    })
}