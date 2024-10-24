@extends('layouts.layout-admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="main__title">
                <h2>Thêm phim</h2>
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
                                        <label class="sign__label">Tiêu đề</label>
                                        <input type="text" name="" class="sign__input" placeholder="Tiêu đề">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label">Hình ảnh</label>
                                        <input type="file" name="" class="sign__input">
                                    </div>
                                </div>
                                
                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label">Diễn viên</label>
                                        <input type="text" name="" class="sign__input" placeholder="Diễn viên">
                                    </div>
                                </div>
                                
                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label">Đạo diễn</label>
                                        <input type="text" name="" class="sign__input" placeholder="Đạo diễn">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label">Năm phát hành</label>
                                        <input type="number " name="" class="sign__input" placeholder="Năm phát hành">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label">Nước sản xuất</label>
                                        <input type="text" name="" class="sign__input" placeholder="Nước sản xuất">
                                    </div>
                                </div>

                               <div class="col-12 col-md-6 col-lg-12 col-xl-12">
                                    <div class="sign__group">
                                        <label class="sign__label">Mô tả</label>
                                        <textarea class="sign__textarea" name="" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label" for="status">Tình trạng</label>
                                        <select class="js-example-basic-single" id="status">
                                            <option value="Basic">Hiển thị</option>
                                            <option value="Premium">Ẩn</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label" for="id_category">ID Danh mục</label>
                                        <select class="js-example-basic-single" id="id_category">
                                            <option value="User">1</option>
                                            <option value="Moderator">2</option>
                                            <option value="Admin">3</option>
                                        </select>
                                    </div>
                                </div>

                             
                            </div>
                            <div class="row">
                                <div class="col-12 d-flex" style="padding-right: 0">
                                    <h2 class="sign__title" style="width: fit-content;margin-right:auto">Đường dẫn</h2>
                                    <button class="btn" style="height: fit-content" id="add__url" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
                                    </button>
                                </div>
                                <div id="url__items" style="width:100%">
                                    <div class="row item__url">
                                        <div class="col-12 d-flex">
                                            <h4 class="sign__title-small">Đường dẫn 1</h4>
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="sign__btn" type="button">Lưu</button>
                            </div>
                        </form>
                    </div>
                    <!-- kết thúc biểu mẫu chi tiết -->
            </div>
                <!-- end content tabs -->
        </div>
    </div>
</div>
@endsection
