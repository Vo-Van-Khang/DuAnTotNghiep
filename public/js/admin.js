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

	$('.modal__btn--apply').on('click', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
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

window.addEventListener('load',()=>{
    document.querySelector('#loader').style.display = "none";
})
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

const limitText = document.querySelectorAll(".limit__text");
limitText.forEach((i)=>{
	if(i.textContent.length > 30){
		i.title = i.textContent;
		i.innerText = i.textContent.slice(0,30) + "...";
	}
})

if(document.getElementById('add__url') != null){
	document.getElementById('add__url').addEventListener('click', function() {
		const container = document.getElementById('url__items');

		// Create a new item__url div
		const newItem = document.createElement('div');
		newItem.className = 'row item__url';
		newItem.innerHTML = `
			<div class="col-12 d-flex">
				<h4 class="sign__title-small">Đường dẫn ${container.children.length + 1}</h4>
				<button class="btn remove__url__item" type="button">
					<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
						<path d="M200-440v-80h560v80H200Z"/>
					</svg>
				</button>
			</div>
			<div class="col-12 col-md-6 col-lg-12 col-xl-12">
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
			<div class="col-12 col-md-6 col-lg-12 col-xl-6">
				<div class="sign__group">
					<label class="sign__label">Premium</label>
					<select class="sign__select" name="premium[]">
						<option value="1">Có</option>
						<option value="0" selected>Không</option>
					</select>
				</div>
			</div>
		`;

		// Append the new item to the container
		container.appendChild(newItem);
	});

	document.addEventListener('DOMContentLoaded', function() {
		document.getElementById('url__items').addEventListener('click', function(event) {
			if (event.target.closest('.remove__url__item')) {
				// Tìm item__url cha và xóa nó
				const itemUrlRemove = event.target.closest('.item__url');
				if (itemUrlRemove) {
					const itemUrl = itemUrlRemove.closest('.item__url');
					if(itemUrl.getAttribute("id_url")){
						let id = itemUrl.getAttribute("id_url");
						let type = itemUrl.getAttribute("type__url");
						// return console.log(type);
						if(confirm("Bạn có muốn xóa đường dẫn này không?")){
							document.querySelector('#loader').style.display = 'flex';

							fetch(`/admin/${type}/url/remove/${id}`,{
								method: 'DELETE',
								headers: {
									'Content-Type': 'application/json',
									'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
								}
							})
							.then(response => response.json())
							.then(data => {
								if(data.success){
									itemUrlRemove.remove();
									document.querySelector('#loader').style.display = 'none';
								}else{
									console.log("Xóa url thất bại");
								}
							})
							.catch(error => {
								console.error(error);
							});
						}
					}else{
						
						itemUrlRemove.remove();
					}
				}
			}
		});
	});
}

if(document.querySelector('.status__update__btn') != null){
	document.querySelectorAll('.status__update__btn').forEach((button,index)=>{
		let status__item__update = document.querySelectorAll(`.status__item__update`);
		let id = button.getAttribute('id_status');
		let type_status = button.getAttribute('type_status');
		
		button.addEventListener('click',()=>{
			document.querySelector('#loader').style.display = 'flex';

			fetch(`/admin/${type_status}/status/update/${id}`,{
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
				}
			})
			.then(response => response.json())
			.then(data =>{
				if(data.success){
					if(type_status != "user"){
						if(data.show){
							status__item__update[index].innerText = "Hiển thị";
							status__item__update[index].classList = "status__item__update main__table-text main__table-text--green";
							
							document.querySelector('#loader').style.display = 'none';
						}else{
							status__item__update[index].innerText = "Ẩn";
							status__item__update[index].classList = "status__item__update main__table-text main__table-text--red";
							
							document.querySelector('#loader').style.display = 'none';
						}
					}else{
						if(!data.ban){
							status__item__update[index].innerText = "Hoạt động";
							status__item__update[index].classList = "status__item__update main__table-text main__table-text--green";
							
							document.querySelector('#loader').style.display = 'none';
						}else{
							status__item__update[index].innerText = "Bị cấm";
							status__item__update[index].classList = "status__item__update main__table-text main__table-text--red";
							
							document.querySelector('#loader').style.display = 'none';
						}
					}
				}else{
					console.log("Sửa không thành công");
				}
			})
			.catch(error => {
				console.error(error);
			});
		})
	})
}

if (document.querySelector('.remove__btn__ajax') != null) {
    let id_remove = null;
    let type_remove = null;

    document.querySelectorAll('.remove__btn__ajax').forEach((button) => {
        button.addEventListener('click', () => {
            id_remove = button.getAttribute('id_remove');
            type_remove = button.getAttribute('type_remove');
        });
    });

    function adminRemove() {
        if (!id_remove || !type_remove) return;

        document.querySelector('#loader').style.display = 'flex';

        fetch(`/admin/${type_remove}/delete/${id_remove}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                let item = document.querySelector(`.tr__remove[id_remove="${id_remove}"]`);
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

    document.querySelector('#modal__remove__btn').addEventListener('click', adminRemove);
}


if (document.querySelector('.trash__restore__btn') != null) {
    let id_trash = null;
    let type_trash = null;
    
    document.querySelectorAll('.trash__restore__btn').forEach((button) => {
        button.addEventListener('click', () => {
            id_trash = button.getAttribute('id_trash');
            type_trash = button.getAttribute('type_trash');
        });
    });

    function trashRestore() {
        if (!id_trash || !type_trash) return;

        document.querySelector('#loader').style.display = 'flex';
        
        fetch(`/admin/trash/restore/${id_trash}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ type_trash: type_trash })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                let item = document.querySelector(`.tr__trash[id_trash="${id_trash}"][type_trash="${type_trash}"]`);
                if (item) item.remove();
                document.querySelector('#loader').style.display = 'none';
            } else {
                console.log("Phục hồi không thành công");
            }
            id_trash = null;
            type_trash = null;
        })
        .catch(error => {
            console.error(error);
        });
    }

    document.querySelector('#modal__restore__btn').addEventListener('click', trashRestore);
}


if(document.querySelector('.trash__remove__btn') != null){
	let id_trash = null
	let type_trash = null
	document.querySelectorAll('.trash__remove__btn').forEach((button)=>{
		button.addEventListener('click',()=>{
			id_trash = button.getAttribute('id_trash');
			type_trash = button.getAttribute('type_trash');
		})
	})
	function trashRemove() {
		if (!id_trash || !type_trash) return;

		document.querySelector('#loader').style.display = 'flex';
			fetch(`/admin/trash/${type_trash}/remove/${id_trash}`,{
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
				}
			})
			.then(response => response.json())
			.then(data =>{
				if(data.success){
					let item = document.querySelector(`.tr__trash[id_trash="${id_trash}"][type_trash="${type_trash}"]`);
					if (item) item.remove(); document.querySelector('#loader').style.display = 'none';
				}else{
					console.log("Xóa không thành công");
				}
			})
			.catch(error => {
				console.error(error);
			});
	}
    document.querySelector('#modal__remove__btn').addEventListener('click', trashRemove);
}

