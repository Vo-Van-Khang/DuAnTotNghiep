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

	$('#subscription, #rights,#status,#id_category,#payment,#isSeries').select2();

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

if(document.querySelector('#add__url') != null){
	const submit__btn = document.querySelector('.submit__btn');
	let data_saved = false;
	document.querySelector('#add__url').addEventListener('click', function() {
		const container = document.querySelector('#url__items');
		const resolution__select = document.querySelectorAll('.resolution__select');

		let selectedResolutions = [];
		resolution__select.forEach(select => {
			selectedResolutions.push(select.value)
		});

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
					<div class="d-flex justify-content-between">
						<label class="sign__label label__video__input">Video</label>
						<div class="d-flex">
							<div class="d-flex mr-2">
								<label class="sign__text" style="margin: 0 10px 0 0">Tải lên file</label>
								<input type="radio" class="sign__input--radio change__video__input" checked name="change__video__input" value="file">
							</div>
							<div class="d-flex">
								<label class="sign__text" style="margin: 0 10px 0 0">Tự điền</label>
								<input type="radio" class="sign__input--radio change__video__input" name="change__video__input" value="url">
							</div>
						</div>
					</div>
					<input type="file" name="url[]" class="sign__input video__input">
					<span style="color: #df4a32" class="video__input__error"></span>
				</div>
			</div>
			<input type="hidden" class="video__uploaded">
			<div class="col-12 col-md-6 col-lg-12 col-xl-6">
				<div class="sign__group">
					<label class="sign__label">Độ phân giải</label>
					<select class="sign__select resolution__select" name="resolution[]">
					${['360', '480', '720', '1080', '2160'].map(resolution => {
						const resolutionCount = selectedResolutions.filter(r => r === resolution).length;
						if (resolutionCount < 3) {
							return `<option value="${resolution}">${resolution}p</option>`;
						}
					}).filter(option => option !== undefined).join('')}
					</select>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-12 col-xl-6">
				<div class="sign__group">
					<label class="sign__label">Premium</label>
					<select class="sign__select premium__select" name="premium[]">
						<option value="1">Có</option>
						<option value="0" selected>Không</option>
					</select>
				</div>
			</div>
			<div class="col-12">
				<div class="upload__progress__container">
					<div class="upload__progress__bar">0%</div>
				</div>
				<button class="sign__btn sign__btn--upload" type="button">Tải lên</button>
			</div>
		`;

		container.appendChild(newItem);
		document.getElementById('add__url').disabled = true;
		checkSubmitButton();
	});

	document.addEventListener('click', (event) => {
		

		if(event.target && event.target.closest('.change__video__input')){
			let item__url = event.target.closest('.change__video__input').closest('.item__url');
			let button =  item__url.querySelector('.sign__btn--upload');
			let label__video__input = item__url.querySelector('.label__video__input');
			let change__video__input = item__url.querySelectorAll('.change__video__input');
			let video__input = item__url.querySelector('.video__input');
			let video__input__error = item__url.querySelector('.video__input__error');

			video__input__error.innerText = "";

			let selectedType = item__url.querySelector('.change__video__input:checked').value;

			if (selectedType === "url") {
				video__input.type = "url";
				video__input.placeholder = "Nhập Url";
				button.innerText = "Kiểm tra";
				label__video__input.innerText = "Đường dẫn";
			} else {
				video__input.type = "file";
				button.innerText = "Tải lên";
				label__video__input.innerText = "Video";
			}
		}

		if (event.target && event.target.closest('.sign__btn--upload')) {
			let button = event.target.closest('.sign__btn--upload');
			let item__url = button.closest('.item__url');
			let video__input = item__url.querySelector('.video__input');
			let change__video__input = item__url.querySelectorAll('.change__video__input');
			let video__uploaded = item__url.querySelector('.video__uploaded');
			let resolution__select = item__url.querySelector('.resolution__select');
			let premium__select = item__url.querySelector('.premium__select');
			let video__input__error = item__url.querySelector('.video__input__error');
			let upload__progress__container = item__url.querySelector('.upload__progress__container');
			let upload__progress__bar = item__url.querySelector('.upload__progress__bar');
			let remove__url__item = item__url.querySelector('.remove__url__item');

			if(video__input.type == "file"){
				if (video__input.files && video__input.files.length > 0) {
					uploadVideoUrl()
				} else {
					video__input__error.innerHTML = "Video là bắt buộc!";
				}
			}else{
				const urlValue = video__input.value;
				if (urlValue) {
					if (urlValue.startsWith("http://") || urlValue.startsWith("https://")) {
						video__input.classList.add("sign__input--validated");
						uploadVideoUrl();
					} else {
						video__input__error.innerHTML = "Url của bạn nhập không đúng định dạng!";
					}
				} else {
					video__input__error.innerHTML = "Url là bắt buộc!";
				}
			}
			

			function uploadVideoUrl() {
				video__input__error.innerHTML = "";
				if (video__input.type == "file" && !isVideoFile(video__input.files[0])) {
					video__input__error.innerHTML = "Video không hợp lệ!";
					return;
				}
				
				let formData = new FormData();
				if(video__input.type == "file"){
					formData.append('video', video__input.files[0]);
				}else{
					formData.append('video', video__input.value);
				}

				upload__progress__container.style.display = "block";
				let percent = 0;
				let progress = setInterval(() => {
					if (percent < 99) {
						percent++;
						upload__progress__bar.style.width = percent + '%';
						upload__progress__bar.innerText = percent + '%';
					} else {
						clearInterval(progress);
					}
				}, 200); 
				
				change__video__input.forEach((e)=>{
					if(e.checked){
						e.classList.add("sign__input--radio-checked");
					}
					e.removeAttribute("name");
					e.disabled = true;
				})
				video__input.disabled = true;
				resolution__select.disabled = true;
				premium__select.disabled = true;
				button.disabled = true;
				if(video__input.type == "file"){
					button.innerText = "Đang tải lên...";
				}

				checkSubmitButton();

				if(remove__url__item) remove__url__item.remove();

				let resolution__selects = document.querySelectorAll('.resolution__select');
				if (resolution__selects.length == 5) {
					document.querySelector('#add__url').disabled = true;
				} else {
					document.querySelector('#add__url').disabled = false;
				}

				fetch('/admin/movie/url/add', {
					method: 'POST',
					headers: {
						'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
					},
					body: formData
				})
				.then(response => response.json())
				.then(data => {
					if (data.success) {
						clearInterval(progress);
						upload__progress__bar.style.width = '100%';
						upload__progress__bar.innerText = '100%';
						button.setAttribute("uploaded",true)
						if(video__input.type == "file"){
							button.innerText = "Đã tải lên";
						}
						video__uploaded.value = data.url;
						checkSubmitButton();
					}
				})
				.catch(error => {
					console.error("Upload failed:", error);
				});
			}
		}
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
						document.querySelector('#add__url').disabled = false;
						checkSubmitButton();
					}
				}
			}
		});
	});

	const input__data = document.querySelectorAll(".input__data");
	const input__error = document.querySelectorAll(".input__error");
	let oldMsg = [];

	input__data.forEach((item, index)=>{
		oldMsg.push(input__error[index].textContent);
		item.addEventListener('input',()=>{
			if(validateForm(item, index)){
				item.classList = "sign__input sign__input--validated input__data";
			}else{
				item.classList = "sign__input input__data";
			}
		})
	})

	function validateForm(item, index) {
		let isValid = true;
		let message = ""; 
	
		input__error[index].innerText = "";

		if (item.type === "file" && item.files.length > 0 && !isImageFile(item.files[0])) {
			message = "Tệp phải là hình ảnh và thuộc kiểu png, webp, jpg, svg, hoặc jpeg.";
		} 
		else if (item.value.trim() === "") {
			message = oldMsg[index]; // Thông báo mặc định nếu trống.
		} 
		else if (item.name === "title") {
			if (item.value.length < 8 || item.value.length > 255) {
				message = "Tiêu đề phải từ 8 đến 255 ký tự.";
			}
		} 
		else if (item.name === "cast") {
			if (item.value.length < 8 || item.value.length > 255) {
				message = "Diễn viên phải từ 8 đến 255 ký tự.";
			}
		} 
		else if (item.name === "director") {
			if (item.value.length < 2 || item.value.length > 50) {
				message = "Đạo diễn phải từ 2 đến 50 ký tự.";
			}
		} 
		else if (item.name === "country") {
			if (item.value.length < 2 || item.value.length > 50) {
				message = "Quốc gia phải từ 2 đến 50 ký tự.";
			}
		} 
		else if (item.name === "description") {
			if (item.value.length < 20) {
				message = "Mô tả phải từ 20 ký tự trở lên.";
			}
		} 
		else if (item.name === "release_year") {
			if (isNaN(item.value) || item.value < 1900 || item.value > new Date().getFullYear()) {
				message = "Năm phát hành phải từ 1900 đến năm hiện tại.";
			}
		} 
		else if (item.name === "duration") {
			if (isNaN(item.value) || item.value < 1) {
				message = "Thời lượng phải là số và lớn hơn 0.";
			}
		}
		else if (item.name === "episode") {
			if (isNaN(item.value) || item.value < 2) {
				message = "Tập phim phải là số và từ 2 trở lên.";
			}
		}

		if (message) {
			input__error[index].innerText = message;
			item.focus();
			isValid = false;
		}

		return isValid;
	}
	submit__btn.addEventListener('click',()=>{
		const video__uploaded = document.querySelectorAll(".video__uploaded");
		const resolution__select = document.querySelectorAll(".resolution__select");
		const premium__select = document.querySelectorAll(".premium__select");

		let isFormValid = true;

		for (let i = input__data.length - 1; i >= 0; i--) {
			if (!validateForm(input__data[i], i)) {
				isFormValid = false;
			}
		}		

		if(isFormValid){
			let formData = new FormData();

			input__data.forEach((item)=>{
				if(item.type == "file"){
					formData.append(item.getAttribute('name'), item.files[0]);
				}else{
					formData.append(item.getAttribute('name'), item.value);
				}
			})

			video__uploaded.forEach((item)=>{
				formData.append("urls[]", item.value);
			})
			resolution__select.forEach((item)=>{
				formData.append("resolutions[]", item.value);
			})
			premium__select.forEach((item)=>{
				formData.append("premiums[]", item.value);
			})

			document.querySelector('#loader').style.display = 'flex';
			let type = submit__btn.getAttribute("type__add");
			let id_movie = "";
			if(type == "episode"){
				id_movie = submit__btn.getAttribute("id_movie")
			}

			fetch(`/admin/${type}/add/${id_movie}`, {
				method: 'POST',
				headers: {
					'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
				},
					body: formData
				})
			.then(response =>  response.json())
			.then(data => {
				if(data.success){
					data_saved = true;
					if(type == "episode"){
						window.location = `/admin/episode/add/${id_movie}`
					}else{
						window.location = "/admin/movie/list"
					}
				}
			})
			.catch(error => {
				console.error("Có lỗi xảy ra:", error);
			});
		}
	})

	window.addEventListener('beforeunload', function(event) {
		if(!data_saved){
			const video__uploaded = document.querySelectorAll(".video__uploaded");
			let formData = new FormData();
			
			// Thêm các URLs vào formData
			video__uploaded.forEach((item) => {
				formData.append("urls[]", item.value);
			});
		
			// Lấy CSRF token
			const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
			formData.append('_token', token);
		
			// Gửi dữ liệu với sendBeacon
			navigator.sendBeacon('/video/remove', formData);
		}
	});
	
}
function checkSubmitButton(){
	const submit__btn = document.querySelector('.submit__btn');
	let sign__btn__upload = document.querySelectorAll('.sign__btn--upload');
	if(Array.from(sign__btn__upload).every(item => item.getAttribute("uploaded") === "true")){
		submit__btn.disabled = false;
	}else{
		submit__btn.disabled = true;
	}
}

function isVideoFile(file) {
    const videoTypes = ['mp4', 'avi', 'mov', 'mkv', 'webm'];
    const fileType = file.name.split('.').pop().toLowerCase();
    return videoTypes.includes(fileType);
}

function isImageFile(file) {
    const ImageTypes = ['png', 'webp', 'jpg', 'svg', 'jpeg'];
    const fileType = file.name.split('.').pop().toLowerCase();
    return ImageTypes.includes(fileType);
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
            }
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


