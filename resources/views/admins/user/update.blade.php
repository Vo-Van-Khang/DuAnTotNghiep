@extends('layouts.layout-admin')
@section('content')
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="main__title">
					<h2>Chỉnh sửa người dùng</h2>
				</div>
			</div>
			<div class="col-12">
						<div class="profile__content">
							<!-- người dùng hồ sơ -->
							<div class="profile__user">
								<div class="profile__avatar">
									<img src="https://cdn-icons-png.flaticon.com/512/219/219986.png" alt="">
								</div>
								<!-- hoặc đỏ -->
								<div class="profile__meta profile__meta--green">
									<h3>Tên người dùng <span>(Đã phê duyệt)</span></h3>
									<span>ID FlixTV: 23562</span>
								</div>
							</div>
							<!-- kết thúc người dùng hồ sơ -->
						</div>
			</div>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
			<div class="col-12">
				<div class="sign__wrap">
					<div class="">
						<!-- biểu mẫu chi tiết -->
						<div class="">
							<form action="#" class="sign__form sign__form--profile sign__form--first">
								<div class="row">
									<div class="col-12">
										<h4 class="sign__title">Chi tiết hồ sơ</h4>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="username">Đăng nhập</label>
											<input id="username" type="text" name="username" class="sign__input" placeholder="User123">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="email">Email</label>
											<input id="email" type="text" name="email" class="sign__input" placeholder="email@email.com">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="firstname">Tên</label>
											<input id="firstname" type="text" name="firstname" class="sign__input" placeholder="John">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="lastname">Họ</label>
											<input id="lastname" type="text" name="lastname" class="sign__input" placeholder="Doe">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="subscription">Gói đăng ký</label>
											<select class="js-example-basic-single" id="subscription">
												<option value="Basic">Cơ bản</option>
												<option value="Premium">Nâng cao</option>
												<option value="Cinematic">Điện ảnh</option>
											</select>
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="rights">Quyền hạn</label>
											<select class="js-example-basic-single" id="rights">
												<option value="User">Người dùng</option>
												<option value="Moderator">Người điều hành</option>
												<option value="Admin">Quản trị viên</option>
											</select>
										</div>
									</div>

									<div class="col-12">
										<button class="sign__btn" type="button">Lưu</button>
									</div>
								</div>
							</form>
						</div>
						<!-- kết thúc biểu mẫu chi tiết -->
				</div>
					<!-- end content tabs -->
			</div>
		</div>
	</div>
	<!-- end main content -->
@endsection
