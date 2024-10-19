@extends('layouts.layout-admin')
@section('content')
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="main__title">
					<h2>Sửa lọc bình luận</h2>
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
											<label class="sign__label">ID</label>
											<input disabled type="text" name="" class="sign__input" placeholder="Auto">
										</div>
									</div>
                                    
									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="">Nội dung</label>
											<input type="text" name="" class="sign__input">
										</div>
									</div>				

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label">Ngày tạo</label>
											<input disabled type="text" name="" class="sign__input" placeholder="Auto">
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
