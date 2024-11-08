@extends('layouts.layout-admin')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="main__title">
				<h2>Thêm Thanh Toán</h2>
			</div>
		</div>

		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
				<div class="col-12">
					<div class="sign__wrap">
						<div class="">
							<!-- biểu mẫu chi tiết -->
							<div class="">
								<form action="/admin/payment/add" class="sign__form sign__form--profile sign__form--first" method="post">
									@csrf
									<div class="row">
										<div class="col-12">
											<h4 class="sign__title">Chi tiết</h4>
										</div>

										<div class="col-12 col-md-6 col-lg-12 col-xl-6">
											<div class="sign__group">
												<label class="sign__label" for="username">Tên</label>
												<input id="username" type="text" class="sign__input" name="name">
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-12 col-xl-6">
											<div class="sign__group">
												<label class="sign__label">Gói</label>
												<div>
													<select name="duration" id="">
														<option value="1">1</option>
														<option value="3">3</option>
														<option value="6">6</option>
													</select>
													<!-- <label for="duration">Chọn gói:</label><br>
													<input type="radio" id="1" name="duration" value="1">
													<label for="1">1</label><br>
													<input type="radio" id="3" name="duration" value="3">
													<label for="3">3</label><br>
													<input type="radio" id="khac" name="duration" value="6">
													<label for="6">6</label><br><br> -->
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-12 col-xl-6">
											<div class="sign__group">
												<label class="sign__label" for="price">Giá</label>
												<input id="price" type="number" class="sign__input" name="price">
											</div>
										</div>
										<div class="col-12 col-md-6 col-lg-12 col-xl-6">
											<div class="sign__group">
												<label class="sign__label" for="username">Ngày tạo</label>
												<input id="username" type="date" class="sign__input" name="created_at">
											</div>
										</div>
										<div class="col-12">
											<button class="sign__btn" type="submit">Thêm</button>
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