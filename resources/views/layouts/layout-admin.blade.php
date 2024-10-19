
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">
	
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/admin.css')}}">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{asset('images/logo.png')}}" sizes="32x32">
	<link rel="apple-touch-icon" href="{{asset('images/logo.png')}}">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Đum Đúm – Phim & Chương trình truyền hình, Mẫu HTML rạp chiếu phim trực tuyến</title>

</head>
<body>
	<!-- tiêu đề -->
	<header class="header">
		<div class="header__content">
			<!-- logo tiêu đề -->
			<a href="index.html" class="header__logo">
				<img src="{{asset('images/logo.png')}}" alt="">
			</a>
			<!-- kết thúc logo tiêu đề -->

			<!-- nút menu tiêu đề -->
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<!-- kết thúc nút menu tiêu đề -->
		</div>
	</header>
	<!-- kết thúc tiêu đề -->

	<!-- thanh bên -->
	<div class="sidebar">
		<!-- logo thanh bên -->
		<a href="/" class="sidebar__logo">
			<img src="{{asset('images/logo.png')}}" alt="">
		</a>
		<!-- kết thúc logo thanh bên -->
		
		<!-- người dùng thanh bên -->
		<div class="sidebar__user">
			<div class="sidebar__user-img">
				<img src="img/user.svg" alt="">
			</div>

			<div class="sidebar__user-title">
				<span>Quản trị viên</span>
				<p>John Doe</p>
			</div>

			<button class="sidebar__user-btn" type="button">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z"/></svg>
			</button>
		</div>

		<!-- kết thúc người dùng thanh bên -->

		<!-- thanh điều hướng bên -->
		<ul class="sidebar__nav">
			<li class="sidebar__nav-item">
				<a data-toggle="collapse" href="#collapseMenuCategory" class="sidebar__nav-link sidebar__nav-link--active"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10,13H3a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,20H4V15H9ZM21,2H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,9H15V4h5Zm1,4H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,21,13Zm-1,7H15V15h5ZM10,2H3A1,1,0,0,0,2,3v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,10,2ZM9,9H4V4H9Z"/></svg> <span>Danh mục</span></a>
				<ul class="collapse sidebar__menu" id="collapseMenuCategory">
					<li><a href="/admin/category/list">Danh sách</a></li>
					<li><a href="/admin/category/add">Thêm</a></li>
				</ul>
			</li>

			<li class="sidebar__nav-item">
				<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenuMovie" role="button" aria-expanded="false" aria-controls="collapseMenu"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m160-800 80 160h120l-80-160h80l80 160h120l-80-160h80l80 160h120l-80-160h120q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800Zm0 240v320h640v-320H160Zm0 0v320-320Z"/></svg><span>Phim</span></a>
				<ul class="collapse sidebar__menu" id="collapseMenuMovie">
					<li><a href="/admin/slides/list">Danh sách</a></li>
					<li><a href="/admin/slides/add">Thêm</a></li>
				</ul>
			</li>

			<li class="sidebar__nav-item">
				<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenuUser" role="button" aria-expanded="false" aria-controls="collapseMenu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"/></svg><span>Người dùng</span></a>

				<ul class="collapse sidebar__menu" id="collapseMenuUser">
					<li><a href="/admin/user/list">Danh sách</a></li>
					<li><a href="/admin/user/add">Thêm</a></li>
				</ul>
			</li>

			<li class="sidebar__nav-item">
				<a href="binhluan.html" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8,11a1,1,0,1,0,1,1A1,1,0,0,0,8,11Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,12,11Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,16,11ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,.3-.71,1,1,0,0,0-.3-.7A8,8,0,1,1,12,20Z"/></svg> <span>Bình luận</span></a>
			</li>
			
			<li class="sidebar__nav-item">
				<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenuCommentFilter" role="button" aria-expanded="false" aria-controls="collapseMenu"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M440-160q-17 0-28.5-11.5T400-200v-240L168-736q-15-20-4.5-42t36.5-22h560q26 0 36.5 22t-4.5 42L560-440v240q0 17-11.5 28.5T520-160h-80Zm40-308 198-252H282l198 252Zm0 0Z"/></svg><span>Lọc bình luận</span></a>
				<ul class="collapse sidebar__menu" id="collapseMenuCommentFilter">
					<li><a href="/admin/user/list">Danh sách</a></li>
					<li><a href="/admin/user/add">Thêm</a></li>
				</ul>
			</li>
			
			<li class="sidebar__nav-item">
				<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenuCommentStatistic" role="button" aria-expanded="false" aria-controls="collapseMenu"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M640-160v-280h160v280H640Zm-240 0v-640h160v640H400Zm-240 0v-440h160v440H160Z"/></svg><span>Thống kê</span></a>
				<ul class="collapse sidebar__menu" id="collapseMenuCommentStatistic">
					<li><a href="">Đánh giá phim</a></li>
					<li><a href="">Tài chính</a></li>
				</ul>
			</li>
			
			<li class="sidebar__nav-item">
				<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenuSlides" role="button" aria-expanded="false" aria-controls="collapseMenu"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m380-300 280-180-280-180v360ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/></svg><span>Slides</span></a>
				<ul class="collapse sidebar__menu" id="collapseMenuSlides">
					<li><a href="/admin/slides/list">Danh sách</a></li>
					<li><a href="/admin/slides/add">Thêm</a></li>
				</ul>
			</li>
			
			<li class="sidebar__nav-item">
				<a class="sidebar__nav-link" data-toggle="collapse" href="#collapseMenuPay" role="button" aria-expanded="false" aria-controls="collapseMenu"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M560-440q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM280-320q-33 0-56.5-23.5T200-400v-320q0-33 23.5-56.5T280-800h560q33 0 56.5 23.5T920-720v320q0 33-23.5 56.5T840-320H280Zm80-80h400q0-33 23.5-56.5T840-480v-160q-33 0-56.5-23.5T760-720H360q0 33-23.5 56.5T280-640v160q33 0 56.5 23.5T360-400Zm440 240H120q-33 0-56.5-23.5T40-240v-440h80v440h680v80ZM280-400v-320 320Z"/></svg><span>Thanh toán</span></a>
				<ul class="collapse sidebar__menu" id="collapseMenuPay">
					<li><a href="/admin/slides/list">Danh sách</a></li>
					<li><a href="/admin/slides/add">Thêm</a></li>
				</ul>
			</li>
			
			<li class="sidebar__nav-item">
				<a href="thongbao.html" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 0c-17.7 0-32 14.3-32 32l0 19.2C119 66 64 130.6 64 208l0 18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416l384 0c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8l0-18.8c0-77.4-55-142-128-156.8L256 32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3l-64 0-64 0c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/></svg> <span>Thông báo</span></a>
			</li>
		</ul>
		<!-- kết thúc thanh điều hướng bên -->
		
		
	</div>
	<!-- kết thúc thanh bên -->
	<!-- nội dung chính -->
	<main class="main">
		@yield('content')
	</main>
	<!-- kết thúc nội dung chính -->

	<!-- JS -->
	<script src="{{asset("js/jquery-3.5.1.min.js")}}"></script>
	<script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>
	<script src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>
	<script src="{{asset("js/smooth-scrollbar.js")}}"></script>
	<script src="{{asset("js/select2.min.js")}}"></script>
	<script src="{{asset("js/admin.js")}}"></script>
</body>
</html>