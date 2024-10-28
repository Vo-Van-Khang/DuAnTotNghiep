@extends('layouts.layout-admin')
@section('content')
	<div class="container-fluid">
			<div class="row">
				<!-- tiêu đề chính -->
				<div class="col-12">
					<div class="main__title">
						<h2>Người dùng</h2>

					</div>
				</div>

				<!-- users -->
				<div class="col-12">
					<div class="main__table-wrap">
						<table class="main__table">
							<thead>
								<tr>
									<th>TÊN</th>
									<th>EMAIL</th>
									<th>HÌNH ẢNH</th>
									<th>TÌNH TRANG</th>
									<th>PREMIUM</th>
									<th>VAI TRÒ</th>
									<th>HÀNH ĐỘNG</th>
								</tr>
							</thead>

							<tbody>
                                @foreach ($users as $user)

								<tr>
									<td>
										<div class="main__table-text">{{$user->name}}</div>
									</td>

									<td>
										<div class="main__table-text">{{$user->email}}</div>
									</td>

									<td>
										<div class="main__table-text"><img src="{{ asset($user->image) }}" alt=""></div>
									</td>

									<td>
                                        @if ($user->status == 0)
										<div class="main__table-text main__table-text--green">Hoạt động</div>

                                        @else
										<div class="main__table-text main__table-text--red">Bị cấm</div>

                                        @endif
									</td>

									<td>
                                        @if ($user->premium == 0)
										<div class="main__table-text main__table-text--green">Có</div>

                                        @else
										<div class="main__table-text main__table-text--red">Không</div>

                                        @endif
									</td>

									<td>
										<div class="main__table-text">{{$user->role}}</div>
									</td>

									<td>
										<div class="main__table-btns">
											<a href="/admin/user/update/{{$user->id}}" class="main__table-btn main__table-btn--edit">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22,7.24a1,1,0,0,0-.29-.71L17.47,2.29A1,1,0,0,0,16.76,2a1,1,0,0,0-.71.29L13.22,5.12h0L2.29,16.05a1,1,0,0,0-.29.71V21a1,1,0,0,0,1,1H7.24A1,1,0,0,0,8,21.71L18.87,10.78h0L21.71,8a1.19,1.19,0,0,0,.22-.33,1,1,0,0,0,0-.24.7.7,0,0,0,0-.14ZM6.83,20H4V17.17l9.93-9.93,2.83,2.83ZM18.17,8.66,15.34,5.83l1.42-1.41,2.82,2.82Z"/></svg>
                                            </a>
                                            <a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/></svg>
                                              </a>
										</div>
									</td>
                                    <!-- modal delete -->
                                <div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
                                    <h6 class="modal__title">Xóa mục</h6>

                                    <p class="modal__text">Bạn có chắc chắn muốn xóa mục này vĩnh viễn không?</p>

                                    <div class="modal__btns">
                                        <button href="{{route('admin.user.delete',$user->id)}}" class="modal__btn modal__btn--apply" type="button">Xóa</button>
                                        <button class="modal__btn modal__btn--dismiss" type="button">Bỏ qua</button>
                                    </div>
                                </div>
                                <!-- end modal delete -->
                                    @endforeach
							</tbody>
						</table>
					</div>

	</div>
				<!-- end users -->

				<!-- paginator -->
				<div class="col-12">
					<div class="paginator">
						<span class="paginator__pages">10 từ 14 452</span>

						<ul class="paginator__paginator">
							<li>
								<a href="#">
									<svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.75 5.36475L13.1992 5.36475" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.771 10.1271L0.749878 5.36496L5.771 0.602051" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
								</a>
							</li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li>
								<a href="#">
									<svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.1992 5.3645L0.75 5.3645" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.17822 0.602051L13.1993 5.36417L8.17822 10.1271" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- end paginator -->
			</div>
		</div>

	<!-- end main content -->


@endsection
