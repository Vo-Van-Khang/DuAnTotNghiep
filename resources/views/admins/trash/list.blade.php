@extends('layouts.layout-admin')
@section('content')

<div class="container-fluid">
  <div class="row">
    <!-- tiêu đề chính -->
    <div class="col-12">
      <div class="main__title">
        <h2>Thùng rác</h2>
      </div>
    </div>

    <!-- Movies -->
    <div class="col-12">
        <div class="col-12 main__title--table">
            <span>Phim</span>
            <button data-toggle="collapse" aria-controls="collapseTrash" data-target="#collapseTrashMovie">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m480-500 160-160H320l160 160Zm280-340q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560ZM200-320v120h560v-120H200Zm560-80v-360H200v360h560Zm-560 80v120-120Z"/></svg>
            </button>
        </div>
        <div class="main__table-wrap collapse show" id="collapseTrashMovie">
            <table class="main__table">
            <thead>
                <tr>
                    <th> Tiêu đề </th>
                    <th> Hình ảnh </th>
                    <th> Lượt xem </th>
                    <th> Tình trạng </th>
                    <th> Danh mục </th>
                    <th> Ngày tạo </th>
                    <th> Hành động </th>
                </tr>
            </thead>

            <tbody>
                @if ($movies->count() > 0)
                @foreach ($movies as $movie)
                <tr class="tr__trash" id_trash="{{$movie->id}}" type_trash="movie">
                    <td>
                    <div class="main__table-text"><a target="_blank" class="limit__text" href="{{route('movie',$movie->id)}}">{{$movie->title}}</a></div>
                    </td>
                    <td>
                    <div class="main__table-text"><img src="{{asset($movie->thumbnail)}}" alt=""></div>
                    </td>
                    <td>
                    <div class="main__table-text">{{$movie->views}}</div>
                    </td>
                    <td>
                    @if ($movie->status == 1)
                        <div title="Hiển thị" class="status__item__update main__table-text main__table-text--green">Hiển thị</div>
                    @else
                        <div title="Ẩn" class="status__item__update main__table-text main__table-text--red">Ẩn</div>    
                    @endif
                    </td>
                    <td>
                    <div class="main__table-text">{{$movie->get_categories->name}}</div>
                    </td>
                    <td>
                    <div class="main__table-text limit__text">{{$movie->created_at}}</div>
                    </td>
                    <td>
                    <div class="main__table-btns">
                        <a title="Phục hồi" href="#modal-restore" class="main__table-btn main__table-btn--banned open-modal trash__restore__btn" id_trash="{{$movie->id}}" type_trash="movie">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M160-160v-80h110l-16-14q-52-46-73-105t-21-119q0-111 66.5-197.5T400-790v84q-72 26-116 88.5T240-478q0 45 17 87.5t53 78.5l10 10v-98h80v240H160Zm400-10v-84q72-26 116-88.5T720-482q0-45-17-87.5T650-648l-10-10v98h-80v-240h240v80H690l16 14q49 49 71.5 106.5T800-482q0 111-66.5 197.5T560-170Z"/></svg>                    
                        </a>
                        <a title="Xóa vĩnh viễn" href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal trash__remove__btn" id_trash="{{$movie->id}}" type_trash="movie">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/></svg>
                        </a>
                    </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="main__table-text">Không có dữ liệu</td>
                </tr>
                @endif
            </tbody>
            </table>
        </div>
    </div>
    
    {{-- Users --}}
    <div class="col-12">
        <div class="col-12 main__title--table">
            <span>Người dùng</span>
            <button data-toggle="collapse" aria-controls="collapseTrash" data-target="#collapseTrashUser">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m480-500 160-160H320l160 160Zm280-340q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560ZM200-320v120h560v-120H200Zm560-80v-360H200v360h560Zm-560 80v120-120Z"/></svg>
            </button>
        </div>
        <div class="main__table-wrap collapse show" id="collapseTrashUser">
            <table class="main__table">
                <thead>
                    <tr>
                        <th>TÊN</th>
                        <th>EMAIL</th>
                        <th>HÌNH ẢNH</th>
                        <th>TÌNH TRẠNG</th>
                        <th>PREMIUM</th>
                        <th>VAI TRÒ</th>
                        <th>HÀNH ĐỘNG</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($users->count() > 0)
                    @foreach ($users as $user)
                    <tr class="tr__trash" id_trash="{{$user->id}}" type_trash="user">
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
                                <a title="Phục hồi" href="#modal-restore" class="main__table-btn main__table-btn--banned open-modal trash__restore__btn" id_trash="{{$user->id}}" type_trash="user">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M160-160v-80h110l-16-14q-52-46-73-105t-21-119q0-111 66.5-197.5T400-790v84q-72 26-116 88.5T240-478q0 45 17 87.5t53 78.5l10 10v-98h80v240H160Zm400-10v-84q72-26 116-88.5T720-482q0-45-17-87.5T650-648l-10-10v98h-80v-240h240v80H690l16 14q49 49 71.5 106.5T800-482q0 111-66.5 197.5T560-170Z"/></svg>                    
                                </a>
                                <a title="Xóa vĩnh viễn" href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal trash__remove__btn" id_remove="{{$user->id}}" type_remove="user">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/></svg>
                                </a>
                            </div>
                        </td>
                    @endforeach
                    @else
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="main__table-text">Không có dữ liệu</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </div>

    {{-- Comments --}}
    <div class="col-12">
        <div class="col-12 main__title--table">
            <span>Bình luận</span>
            <button data-toggle="collapse" aria-controls="collapseTrash" data-target="#collapseTrashComment">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m480-500 160-160H320l160 160Zm280-340q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560ZM200-320v120h560v-120H200Zm560-80v-360H200v360h560Zm-560 80v120-120Z"/></svg>
            </button>
        </div>
        <div class="main__table-wrap collapse show" id="collapseTrashComment">
            <table class="main__table">
                <thead>
                    <tr>
                        <th>NỘI DUNG</th>
                        <th>ID PHIM</th>
                        <th>ID NGƯỜI DÙNG</th>
                        <th>TÌNH TRẠNG</th>
                        <th>HÀNH ĐỘNG</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($comments->count() > 0)
                    @foreach ($comments as $comment)
                    <tr class="tr__trash" id_trash="{{$comment->id}}" type_trash="comment">
                        <td>
                            <div class="main__table-text">{{$comment->content}}</div>
                        </td>

                        <td>
                            <div class="main__table-text">{{$comment->id_movie}}</div>
                        </td>
                        
                        <td>
                            <div class="main__table-text">{{$comment->id_user}}</div>
                        </td>

                        <td>
                            @if ($comment->status == 0)
                            <div class="main__table-text main__table-text--green">Hiển thị</div>

                            @else
                            <div class="main__table-text main__table-text--red">Ẩn</div>

                            @endif
                        </td>


                        <td>
                            <div class="main__table-btns">
                                <a title="Phục hồi" href="#modal-restore" class="main__table-btn main__table-btn--banned open-modal trash__restore__btn" id_trash="{{$comment->id}}" type_trash="comment">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M160-160v-80h110l-16-14q-52-46-73-105t-21-119q0-111 66.5-197.5T400-790v84q-72 26-116 88.5T240-478q0 45 17 87.5t53 78.5l10 10v-98h80v240H160Zm400-10v-84q72-26 116-88.5T720-482q0-45-17-87.5T650-648l-10-10v98h-80v-240h240v80H690l16 14q49 49 71.5 106.5T800-482q0 111-66.5 197.5T560-170Z"/></svg>                    
                                </a>
                                <a title="Xóa vĩnh viễn" href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal trash__remove__btn" id_remove="{{$comment->id}}" type_remove="comment">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/></svg>
                                </a>
                            </div>
                        </td>
                    @endforeach
                    @else
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="main__table-text">Không có dữ liệu</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </div>
    
    {{-- Comments --}}
    <div class="col-12">
        <div class="col-12 main__title--table">
            <span>Thông báo</span>
            <button data-toggle="collapse" aria-controls="collapseTrash" data-target="#collapseTrashNotification">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m480-500 160-160H320l160 160Zm280-340q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560ZM200-320v120h560v-120H200Zm560-80v-360H200v360h560Zm-560 80v120-120Z"/></svg>
            </button>
        </div>
        <div class="main__table-wrap collapse show" id="collapseTrashNotification">
            <table class="main__table">
                <thead>
                    <tr>
                        <th>NỘI DUNG</th>
                        <th>ID NGƯỜI GỬI</th>
                        <th>ID NGƯỜI NHẬN</th>
                        <th>TÌNH TRẠNG</th>
                        <th>HÀNH ĐỘNG</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($notifications->count() > 0)
                    @foreach ($notifications as $notification)
                    <tr class="tr__trash" id_trash="{{$notification->id}}" type_trash="notification">
                        <td>
                            <div class="main__table-text">{{$notification->content}}</div>
                        </td>

                        <td>
                            <div class="main__table-text">{{$notification->id_send_user}}</div>
                        </td>
                        
                        <td>
                            <div class="main__table-text">{{$notification->id_receive_user}}</div>
                        </td>

                        <td>
                            @if ($notification->status == 0)
                            <div class="main__table-text main__table-text--red">Chưa xem</div>

                            @else
                            <div class="main__table-text main__table-text--green">Đã xem</div>

                            @endif
                        </td>

                        <td>
                            <div class="main__table-btns">
                                <a title="Phục hồi" href="#modal-restore" class="main__table-btn main__table-btn--banned open-modal trash__restore__btn" id_trash="{{$notification->id}}" type_trash="notification">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M160-160v-80h110l-16-14q-52-46-73-105t-21-119q0-111 66.5-197.5T400-790v84q-72 26-116 88.5T240-478q0 45 17 87.5t53 78.5l10 10v-98h80v240H160Zm400-10v-84q72-26 116-88.5T720-482q0-45-17-87.5T650-648l-10-10v98h-80v-240h240v80H690l16 14q49 49 71.5 106.5T800-482q0 111-66.5 197.5T560-170Z"/></svg>                    
                                </a>
                                <a title="Xóa vĩnh viễn" href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal trash__remove__btn" id_remove="{{$notification->id}}" type_remove="notification">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/></svg>
                                </a>
                            </div>
                        </td>
                    @endforeach
                    @else
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="main__table-text">Không có dữ liệu</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </div>

    <!-- modal restore -->
     <div id="modal-restore" class="zoom-anim-dialog mfp-hide modal">
       <h6 class="modal__title">Phục hồi mục</h6>

       <p class="modal__text">Bạn có chắc chắn muốn phục hồi mục này không?</p>

       <div class="modal__btns">
          <button class="modal__btn modal__btn--apply" id="modal__restore__btn" type="button">Có</button>
          <button class="modal__btn modal__btn--dismiss" type="button">Bỏ qua</button>
       </div>
     </div>
     <!-- end modal restore -->

    <!-- modal delete -->
     <div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
       <h6 class="modal__title">Xóa mục</h6>

       <p class="modal__text">Bạn có chắc chắn muốn xóa mục này vĩnh viễn không?</p>

       <div class="modal__btns">
          <button class="modal__btn modal__btn--apply" id="modal__remove__btn" type="button">Xóa</button>
          <button class="modal__btn modal__btn--dismiss" type="button">Bỏ qua</button>
       </div>
     </div>
     <!-- end modal delete -->
    @endsection
    
