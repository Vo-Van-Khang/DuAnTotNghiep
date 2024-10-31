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
                    <!-- biểu mẫu chi tiết -->

                        <form action="{{route('admin.movie.add')}}" enctype="multipart/form-data" class="sign__form sign__form--profile sign__form--first" method="post">
                            @csrf 
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="sign__title">Chi tiết</h4>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label">Tiêu đề</label>
                                        <input type="text" name="title" class="sign__input" placeholder="Tiêu đề" value="{{old('title')}}">
                                        @error('title')
                                            <span style="color: #df4a32">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label">Hình ảnh</label>
                                        <input type="file" name="thumbnail_add" class="sign__input">
                                        @error('thumbnail_add')
                                            <span style="color: #df4a32">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label">Diễn viên</label>
                                        <input type="text" name="cast" class="sign__input" placeholder="Diễn viên" value="{{old('cast')}}">
                                        @error('cast')
                                            <span style="color: #df4a32">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label">Đạo diễn</label>
                                        <input type="text" name="director" class="sign__input" placeholder="Đạo diễn" value="{{old('director')}}">
                                        @error('director')
                                            <span style="color: #df4a32">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label">Năm phát hành</label>
                                        <input type="number " name="release_year" class="sign__input" placeholder="Năm phát hành" value="{{old('release_year')}}">
                                        @error('release_year')
                                            <span style="color: #df4a32">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label">Quốc gia</label>
                                        <input type="text" name="country" class="sign__input" placeholder="Quốc gia" value="{{old('country')}}">
                                        @error('country')
                                        <span style="color: #df4a32">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label">Thời lượng (phút)</label>
                                        <input type="number " name="duration" class="sign__input" placeholder="Thời lượng" value="{{old('duration')}}">
                                        @error('duration')
                                            <span style="color: #df4a32">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label" for="status">Tình trạng</label>
                                        <select class="js-example-basic-single" id="status" name="status">
                                            <option value="1">Hiển thị</option>
                                            <option value="0">Ẩn</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label" for="id_category">ID Danh mục</label>
                                        <select class="js-example-basic-single" id="id_category" name="id_category">
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-12">
                                    <div class="sign__group">
                                        <label class="sign__label">Mô tả</label>
                                        <textarea class="sign__textarea" name="description" id="" cols="30" rows="10" placeholder="Mô tả">{{old('description')}}</textarea>
                                        @error('description')
                                            <span style="color: #df4a32">{{$message}}</span>
                                        @enderror
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
                                        <div class="col-12 col-md-6 col-lg-12 col-xl-12">
                                            <div class="sign__group">
                                                <label class="sign__label">Video</label>
                                                <input type="file" name="url[]" class="sign__input" value="{{old('url[]')}}">
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="sign__btn" type="submit">Lưu</button>
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
