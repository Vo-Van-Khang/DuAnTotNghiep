@extends('layouts.layout-admin')
@section('content')
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="main__title">
					<h2>Chỉnh sửa danh mục</h2>
				</div>
			</div>
			<div class="col-12">
						<div class="profile__content">
							<!-- người dùng hồ sơ -->
							<div class="profile__user">
								<!-- hoặc đỏ -->
								<div class="profile__meta profile__meta--green">
									<h3>ID: 2</h3>
									<span>Nội dung: hoạt hình</span>
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
										<h4 class="sign__title">Chi tiết</h4>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="username">ID</label>
											<input id="username" type="text" disabled class="sign__input" value="2">
										</div>
									</div>
									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="firstname">Nội dung</label>
											<input id="firstname" type="text" name="firstname" class="sign__input" placeholder="John">
										</div>
									</div>
									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="username">Ngày tạo</label>
											<input id="username" type="text" disabled class="sign__input" value="2/2/2022">
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
