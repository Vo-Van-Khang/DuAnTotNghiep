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
								<input type="radio" class="sign__input--radio sign__input--radio-checked change__video__input" value="file">
							</div>
							<div class="d-flex">
								<label class="sign__text" style="margin: 0 10px 0 0">Tự điền</label>
								<input type="radio" class="sign__input--radio change__video__input" value="url">
							</div>
						</div>
					</div>
					<input type="file" name="url[]" class="sign__input video__input">
					<span style="color: #df4a32" class="video__input__error"></span>
				</div>
			</div>
			<input type="hidden" class="video__uploaded">
			<div class="col-12 col-md-4 col-lg-12 col-xl-4">
				<div class="sign__group">
					<label class="sign__label">Server</label>
					<select class="sign__select server__select" name="server[]">
						<option value="">Chưa chọn</option>
						<option value="server 1">Server 1</option>
						<option value="server 2">Server 2</option>
						<option value="server 3">Server 3</option>
					</select>
					<span style="color: #df4a32;text-transform: capitalize" class="server__select__error"></span>
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-12 col-xl-4">
				<div class="sign__group">
					<label class="sign__label">Độ phân giải</label>
					<select class="sign__select resolution__select" name="resolution[]" disabled>
						<option value="">Chọn server trước</option>
					</select>
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-12 col-xl-4">
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

		document.querySelectorAll(".resolution__selected").forEach((e)=>{
			e.closest('.item__url').classList.add("item__url--disabled");
		})
	});

	document.addEventListener('change', (event) => {
		if (event.target && event.target.closest('.server__select')) {
			let item__url = event.target.closest('.server__select').closest('.item__url');
			let serverSelect = item__url.querySelector('.server__select');
			let resolutionSelect = item__url.querySelector('.resolution__select');
			if (serverSelect.value) {
				resolutionSelect.disabled = false;
				updateResolutions(resolutionSelect, serverSelect.value, resolutionSelect.value);
			} else {
				resolutionSelect.disabled = true;
				resolutionSelect.innerHTML = '<option value="">Chọn server trước</option>';
			}
		}
	});

	function updateResolutions(resolutionSelect, server, currentResolution) {
		const allResolutions = ['360', '480', '720', '1080', '2160'];
	
		// Lấy tất cả resolution đã chọn cho server hiện tại (ngoại trừ currentResolution)
		let selectedResolutions = [];
		document.querySelectorAll('.server__select').forEach((serverSelect, index) => {
			if (serverSelect.value === server) {
				const resolution = document.querySelectorAll('.resolution__select')[index].value;
				if (resolution && resolution !== currentResolution) {
					selectedResolutions.push(resolution);
				}
			}
		});
	
		// Cập nhật danh sách resolution, giữ lại currentResolution
		resolutionSelect.innerHTML = allResolutions
			.filter(res => !selectedResolutions.includes(res) || res === currentResolution)
			.map(res => `<option value="${res}" ${res === currentResolution ? 'selected' : ''}>${res}p</option>`)
			.join('');
	}

	document.addEventListener('click', (event) => {

		if(event.target && event.target.closest('.change__video__input')){
			let item__url = event.target.closest('.change__video__input').closest('.item__url');
			let button =  item__url.querySelector('.sign__btn--upload');
			let label__video__input = item__url.querySelector('.label__video__input');
			let change__video__input = item__url.querySelectorAll('.change__video__input');
			let video__input = item__url.querySelector('.video__input');
			let video__input__error = item__url.querySelector('.video__input__error');

			video__input__error.innerText = "";

			change__video__input.forEach((e)=>{
				if(e.classList.contains("sign__input--radio-checked")){
					e.classList.remove("sign__input--radio-checked");
				}else{
					e.classList.add("sign__input--radio-checked");
				}
			})

			let selectedType = item__url.querySelector('.change__video__input.sign__input--radio-checked').value;

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
			let server__select = item__url.querySelector('.server__select');
			let server__select__error = item__url.querySelector('.server__select__error');
			let video__input__error = item__url.querySelector('.video__input__error');
			let upload__progress__container = item__url.querySelector('.upload__progress__container');
			let upload__progress__bar = item__url.querySelector('.upload__progress__bar');
			let remove__url__item = item__url.querySelector('.remove__url__item');
			let old__video = item__url.querySelector('.old__video');
			let resolution__selected = document.querySelectorAll(".resolution__selected");
			let server__selected = document.querySelectorAll(".server__selected");

			if(server__select.value){
				server__select__error.innerHTML = "";
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
			}else{
				server__select__error.innerHTML = "Server là bắt buộc!";
			}
			

			function uploadVideoUrl() {
				video__input__error.innerHTML = "";
				item__url.classList.remove("item__url--error");
				if (video__input.type == "file" && !isVideoFile(video__input.files[0])) {
					video__input__error.innerHTML = "Video không hợp lệ!";
					return;
				}
				
				if(server__select.getAttribute("isUpdate") !== "true"){
					// Lặp qua các server__select mới và kiểm tra trùng resolution
					let check = false;
					document.querySelectorAll(".server__select").forEach((serverSelect, index) => {
						const newServer = serverSelect.value;
						const newResolution = document.querySelectorAll(".resolution__select")[index].value;
						if (newServer) {
							// Lấy tất cả các resolution đã chọn cũ cho server này
							let selectedResolutionsForServer = [];
							
							server__selected.forEach((selectedServer, selectedIndex) => {
								const selectedServerValue = selectedServer.value;
								const selectedResolution = resolution__selected[selectedIndex].value;
					
								// Nếu server trùng thì thêm resolution vào danh sách đã chọn
								if (selectedServerValue === newServer) {
									selectedResolutionsForServer.push(selectedResolution);
								}
							});
					
							// Kiểm tra nếu resolution đã được chọn cho server này rồi
							if (selectedResolutionsForServer.includes(newResolution)) {
								check = true;
							}
						}
					});
					if (check) {
						server__select__error.innerText = `${server__select.value} đã có độ phân giải này`;
						return; 
					}
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
					if (percent < 94) {
						let randomPercent = Math.floor(Math.random() * 5) + 1;
						percent += randomPercent;

						if (percent > 94) {
							percent = 94;
						}

						upload__progress__bar.style.width = percent + '%';
						upload__progress__bar.innerText = percent + '%';
					} else {
						clearInterval(progress);
					}
				}, 700); 
				
				change__video__input.forEach((e)=>{
					e.disabled = true;
				})
				video__input.disabled = true;
				resolution__select.disabled = true;
				premium__select.disabled = true;
				server__select.disabled = true;
				button.disabled = true;
				button.removeAttribute("uploaded");
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

				// formData.forEach((value, key) => {
				// 	console.log(`${key}:`, value);
				// });
				// return;
				fetch(`/admin/movie/url/add`, {
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

						resolution__selected.forEach((e)=>{
							e.closest('.item__url').classList.remove("item__url--disabled");
						})

						if(item__url.querySelector('.server__selected')) item__url.querySelector('.server__selected').value = "";
						if(item__url.querySelector('.resolution__selected')) item__url.querySelector('.resolution__selected').value = "";
						item__url.classList.add("item__url--editing");
						item__url.classList.add("item__url--success");
						document.querySelector('#add__url').disabled = false;
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
						document.querySelectorAll(".resolution__selected").forEach((e)=>{
							e.closest('.item__url').classList.remove("item__url--disabled");
						})
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
			if(item.name != "thumbnail"){
				message = oldMsg[index]; // Thông báo mặc định nếu trống.
			}
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
			}else{
				for (const e of document.querySelectorAll("div.episode__td")) {
					if (e.textContent == item.value) {
						message = "Tập phim này đã tồn tại.";
						break;
					}
				}
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
		const server__select = document.querySelectorAll(".server__select");
		const resolution__selected = document.querySelectorAll(".resolution__selected");
		const premium__selected = document.querySelectorAll(".premium__selected");
		const server__selected = document.querySelectorAll(".server__selected");
		const url_ids = document.querySelectorAll(".url_id");

		let isFormValid = true;

		for (let i = input__data.length - 1; i >= 0; i--) {
			if (!validateForm(input__data[i], i)) {
				isFormValid = false;
			}
		}		

		if(isFormValid){
			let formData = new FormData();
			let serverResolutionMap = {}; 
			let check = false; 
			let errorMessage = '';
			let serverFound;

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
			// Giả sử bạn có 2 mảng `server__selected` và `resolution__selected`
			server__selected.forEach((serverItem, index) => {
				let serverValue = serverItem.value;
				let resolutionValue = resolution__selected[index]?.value;

				if (serverValue && resolutionValue) {
					// Nếu chưa có server này trong mảng, khởi tạo
					if (!serverResolutionMap[serverValue]) {
						serverResolutionMap[serverValue] = [];
					}

					// Thêm độ phân giải vào mảng của server tương ứng
					serverResolutionMap[serverValue].push(resolutionValue);
				}
			});

			// Giả sử phần tử đang sửa có attribute `data-server` và `data-resolution` để nhận diện
			let editingServer = document.querySelector(".item__url--editing"); // Lấy phần tử đang sửa
			let editedServerValue = editingServer.querySelector(".server__select").value;
			let editedResolutionValue = editingServer.querySelector(".resolution__select").value;

			// Kiểm tra xem resolution đã chọn có trùng với server đã chọn không
			if (serverResolutionMap[editedServerValue] && serverResolutionMap[editedServerValue].includes(editedResolutionValue)) {
				check = true;
				errorMessage = `Độ phân giải ${editedResolutionValue}p đã có trên ${editedServerValue}!`;
				serverFound = editingServer.querySelector(".server__select");
			}
		
			if (check) {
				sessionStorage.setItem('message', JSON.stringify([errorMessage, "error"]));
				messageBySession();

				let serverFound__item__url = serverFound.closest(".item__url");
				let serverFound__resolution__select = serverFound__item__url.querySelector(".resolution__select");
				let serverFound__premium__select = serverFound__item__url.querySelector(".premium__select");
				let serverFound__video__input = serverFound__item__url.querySelector(".video__input");
				let serverFound__button = serverFound__item__url.querySelector(".sign__btn--upload");

				serverFound.disabled = false;
				serverFound__resolution__select.disabled = false;
				serverFound__premium__select.disabled = false;
				serverFound__video__input.disabled = false;
				serverFound__button.disabled = false;
				document.querySelector("#add__url").disabled = true;
				serverFound__item__url.querySelector(".upload__progress__bar").style.width = '0%';
				serverFound__item__url.querySelector(".upload__progress__bar").innerText = '0%';
				serverFound__item__url.querySelector(".upload__progress__container").style.display = "none";

				serverFound__item__url.classList.remove("item__url--success");
				serverFound__item__url.classList.add("item__url--error");

				serverFound.scrollIntoView({
					behavior: 'smooth',
					block: 'center',
					inline: 'nearest'
				});;
				serverFound__button.removeAttribute("uploaded");
				// console.log();
				return;
			}
			
			server__select.forEach((item, index) => {
				let value = item.value || server__selected[index].value;
				formData.append("servers[]", value);
			});

			resolution__select.forEach((item, index) => {
				let value = item.value || resolution__selected[index].value;
				formData.append("resolutions[]", value);
			});

			premium__select.forEach((item, index) => {
				let value = item.value || premium__selected[index].value;
				formData.append("premiums[]", value);
			});
			
			url_ids.forEach((item) => {
				let value = item.value;
				formData.append("url_ids[]", value);
			});

			document.querySelector('#loader').style.display = 'flex';
			let isAdd = submit__btn.getAttribute("is__add");
			// formData.forEach((value, key) => {
			// 	console.log(`${key}:`, value);
			// });
			// return;
			if(isAdd === "true"){
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
						sessionStorage.setItem('message', JSON.stringify([data.message, data.status]));
						
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
			}else{
				let type = submit__btn.getAttribute("type__update");
				let id = submit__btn.getAttribute("id__upload")

				fetch(`/admin/${type}/update/${id}`, {
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
						sessionStorage.setItem('message', JSON.stringify([data.message, data.status]));
						
						if(type == "episode"){
							window.location = `/admin/episode/update/${id}`
						}else{
							window.location = `/admin/movie/update/${id}`
						}
					}
				})
				.catch(error => {
					console.error("Có lỗi xảy ra:", error);
				});
			}
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


