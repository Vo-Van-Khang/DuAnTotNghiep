$(document).ready(function () {
	"use strict"; // start of use strict

	/*==============================
	Menu
	==============================*/
	$('.header__btn').on('click', function() {
		$(this).toggleClass('header__btn--active');
		$('.header').toggleClass('header--active');
		$('.sidebar').toggleClass('sidebar--active');
	});

	/*==============================
	Filter
	==============================*/
	$('.filter__item-menu li').each( function() {
		$(this).attr('data-value', $(this).text().toLowerCase());
	});

	$('.filter__item-menu li').on('click', function() {
		var text = $(this).text();
		var item = $(this);
		var id = item.closest('.filter').attr('id');
		$('#'+id).find('.filter__item-btn input').val(text);
	});

	/*==============================
	Tabs
	==============================*/
	$('.profile__mobile-tabs-menu li').each( function() {
		$(this).attr('data-value', $(this).text().toLowerCase());
	});

	$('.profile__mobile-tabs-menu li').on('click', function() {
		var text = $(this).text();
		var item = $(this);
		var id = item.closest('.profile__mobile-tabs').attr('id');
		$('#'+id).find('.profile__mobile-tabs-btn input').val(text);
	});

	/*==============================
	Modal
	==============================*/
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

	$('.modal__btn--dismiss').on('click', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});

	/*==============================
	Select2
	==============================*/
	$('#quality').select2({
		placeholder: "Choose quality",
		allowClear: true
	});

	$('#country').select2({
		placeholder: "Choose country / countries"
	});

	$('#genre').select2({
		placeholder: "Choose genre / genres"
	});

	$('#subscription, #rights,#status,#id_category,#payment').select2();

	/*==============================
	Upload cover
	==============================*/
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('#form__img').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$('#form__img-upload').on('change', function() {
		readURL(this);
	});

	/*==============================
	Upload video
	==============================*/
	$('.form__video-upload').on('change', function() {
		var videoLabel  = $(this).attr('data-name');

		if ($(this).val() != '') {
			$(videoLabel).text($(this)[0].files[0].name);
		} else {
			$(videoLabel).text('Upload video');
		}
	});

	/*==============================
	Upload gallery
	==============================*/
	$('.form__gallery-upload').on('change', function() {
		var length = $(this).get(0).files.length;
		var galleryLabel  = $(this).attr('data-name');

		if( length > 1 ){
			$(galleryLabel).text(length + " files selected");
		} else {
			$(galleryLabel).text($(this)[0].files[0].name);
		}
	});

	/*==============================
	Scrollbar
	==============================*/
	var Scrollbar = window.Scrollbar;

	if ($('.sidebar__nav').length) {
		Scrollbar.init(document.querySelector('.sidebar__nav'), {
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

	if ($('.dashbox__table-wrap--3').length) {
		Scrollbar.init(document.querySelector('.dashbox__table-wrap--3'), {
			damping: 0.1,
			renderByPixels: true,
			alwaysShowTracks: true,
			continuousScrolling: true
		});
	}

	if ($('.dashbox__table-wrap--4').length) {
		Scrollbar.init(document.querySelector('.dashbox__table-wrap--4'), {
			damping: 0.1,
			renderByPixels: true,
			alwaysShowTracks: true,
			continuousScrolling: true
		});
	}

	if ($('.main__table-wrap').length) {
		Scrollbar.init(document.querySelector('.main__table-wrap'), {
			damping: 0.1,
			renderByPixels: true,
			alwaysShowTracks: true,
			continuousScrolling: true
		});
	}

	/*==============================
	Bg
	==============================*/
	$('.section--bg').each( function() {
		if ($(this).attr("data-bg")){
			$(this).css({
				'background': 'url(' + $(this).data('bg') + ')',
				'background-position': 'center center',
				'background-repeat': 'no-repeat',
				'background-size': 'cover'
			});
		}
	});

});
if(document.querySelector("#modal__delete__btn") != null){
    document.querySelector("#modal__delete__btn").addEventListener("click", ()=>{
        document.querySelectorAll(".remove__user")
        let id = document.querySelector("#modal__delete__btn").getAttribute("id_user");
        window.location = `/admin/user/delete/${id}`;
    })
}
document.getElementById('add__url').addEventListener('click', function() {
    const container = document.getElementById('url__items');

    // Create a new item__url div
    const newItem = document.createElement('div');
    newItem.className = 'row item__url';
    newItem.innerHTML = `
        <div class="col-12 d-flex">
            <h4 class="sign__title-small">Đường dẫn ${container.children.length + 1}</h4>
            <button class="btn remove__url__item">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                    <path d="M200-440v-80h560v80H200Z"/>
                </svg>
            </button>
        </div>
        <div class="col-12 col-md-6 col-lg-12 col-xl-6">
            <div class="sign__group">
                <label class="sign__label">Video</label>
                <input type="file" name="url[]" class="sign__input">
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-12 col-xl-6">
            <div class="sign__group">
                <label class="sign__label">Độ phân giải</label>
                <select class="sign__select" name="resolution[]">
                    <option value="360">360p</option>
                    <option value="480">480p</option>
                    <option value="720">720p</option>
                    <option value="1080">1080p</option>
                    <option value="2160">2160p</option>
                </select>
            </div>
        </div>
    `;

    // Append the new item to the container
    container.appendChild(newItem);
});

document.addEventListener('DOMContentLoaded', function() {
    // Thêm sự kiện click cho các nút xóa
    document.getElementById('url__items').addEventListener('click', function(event) {
        // Kiểm tra xem nút nhấn có phải là nút xóa không
        if (event.target.closest('.remove__url__item')) {
            // Tìm item__url cha và xóa nó
            const itemUrl = event.target.closest('.item__url');
            if (itemUrl) {
                itemUrl.remove();
            }
        }
    });
});

