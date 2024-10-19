@extends('layouts.layout-admin')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Thêm Phim</h4>
            <form class="forms-sample">
            <div class="form-group">
                <label>Tiêu đề</label>
                <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label>Diễn viên</label>
                <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Đạo diễn</label>
                <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Nước sản xuất</label>
                <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Năm sản xuất</label>
                <input type="number" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Tình trạng</label>
                <select class="form-select">
                <option selected>Hiển thị</option>
                <option>Ẩn</option>
                </select>
            </div>
            <div class="form-group">
                <label>Danh mục</label>
                <select class="form-select">
                <option selected>Hoạt hình</option>
                <option>Hành động</option>
                </select>
            </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" name="img[]" class="file-upload-default">
                <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-gradient-primary py-3" type="button">Upload</button>
                </span>
                </div>
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Thêm mới</button>
            </form>
        </div>
        </div>
    </div>   
@endsection
