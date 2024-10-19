@extends('layouts.layout-admin')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Phim</h4>
        <table class="table table-striped">
          <thead>
            <tr>
              <th title="Tiêu đề"> Tiêu đề </th>
              <th title="Mô tả"> Mô tả </th>
              <th title="Hình ảnh"> Hình ảnh </th>
              <th title="Năm sản xuất"> Năm sản xuất </th>
              <th title="Nước sản xuất"> Nước sản xuất </th>
              <th title="Lượt xem"> Lượt xem </th>
              <th title="Tình trạng"> Tình trạng </th>
              <th title="ID danh mục"> ID danh mục </th>
              <th title="Ngày tạo"> Ngày tạo </th>
              <th title="Hành động"> Hành động </th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td> Tiêu đề </td>
                <td> Mô tả</td>
                <td class="py-1">
                  <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                </td>
                <td> Năm sx </td>
                <td> Nước sx </td>
                <td> 923 </td>
                <td> <label class="badge badge-success"> Hiển thị </label> </td>
                <td> 4 </td>
                <td> 12/4/2024 </td>
                <td class="td-action"> 
                    <a class="action" href="">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                    <button class="action">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td> Tiêu đề </td>
                <td> Mô tả</td>
                <td class="py-1">
                  <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                </td>
                <td> Năm sx </td>
                <td> Nước sx </td>
                <td> 923 </td>
                <td> <label class="badge badge-danger"> Hiển thị </label> </td>
                <td> 4 </td>
                <td> 12/4/2024 </td>
                <td class="td-action"> 
                    <a class="action" href="">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                    <button class="action">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td> Tiêu đề </td>
                <td> Mô tả</td>
                <td class="py-1">
                  <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                </td>
                <td> Năm sx </td>
                <td> Nước sx </td>
                <td> 923 </td>
                <td> <label class="badge badge-success"> Hiển thị </label> </td>
                <td> 4 </td>
                <td> 12/4/2024 </td>
                <td class="td-action"> 
                    <a class="action" href="">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                    <button class="action">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td> Tiêu đề </td>
                <td> Mô tả</td>
                <td class="py-1">
                  <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                </td>
                <td> Năm sx </td>
                <td> Nước sx </td>
                <td> 923 </td>
                <td> <label class="badge badge-danger"> Hiển thị </label> </td>
                <td> 4 </td>
                <td> 12/4/2024 </td>
                <td class="td-action"> 
                    <a class="action" href="">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                    <button class="action">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
          </tbody>
        </table>
        <a href="/admin/movie/add" class="btn btn-success mt-3 p-2 fs-6">Thêm mới</a>
      </div>
    </div>
  </div>
@endsection
