@extends('layouts.layout')
@section('content')
 <div class="container">
    <h1 style="color: aliceblue">Kết quả tìm kiếm :  </h1>
 </div>
        <div class="catalog">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="catalog__nav">
                            <div class="catalog__select-wrap">
                                <select class="catalog__select" name="genres">
                                    <option value="All genres">
                                        Tất cả thể loại
                                    </option>
                                    <option value="Action/Adventure">
                                        Hành động/Phiêu lưu
                                    </option>
                                    <option value="Animals">Con vật</option>
                                    <option value="Animation">Hoạt hình</option>
                                    <option value="Biography">Tiểu sử</option>
                                    <option value="Comedy">Comedy</option>
                                    <option value="Cooking">Nấu ăn</option>
                                    <option value="Dance">Nhảy</option>
                                    <option value="Documentary">
                                        Phim tài liệu
                                    </option>
                                    <option value="Drama">Kịch</option>
                                    <option value="Education">Giáo dục</option>
                                    <option value="Entertainment">
                                        Giải trí
                                    </option>
                                    <option value="Family">Gia đình</option>
                                    <option value="Fantasy">Tưởng tượng</option>
                                    <option value="History">Lịch sử</option>
                                    <option value="Horror">Kinh dị</option>
                                    <option value="Independent">Độc lập</option>
                                    <option value="International">
                                        Quốc tế
                                    </option>
                                    <option value="Kids & Family">
                                        Trẻ em & Gia đình
                                    </option>
                                    <option value="Medical">Về y học</option>
                                    <option value="Military/War">
                                        Quân sự/Chiến tranh
                                    </option>
                                    <option value="Music">Music</option>
                                    <option value="Mystery/Crime">
                                        Bí ẩn/Tội ác
                                    </option>
                                    <option value="Nature">Thiên nhiên</option>
                                    <option value="Paranormal">Huyền bí</option>
                                    <option value="Politics">Chính trị</option>
                                    <option value="Racing">Đua xe</option>
                                    <option value="Romance">Lãng mạn</option>
                                    <option value="Sci-Fi/Horror">
                                        Sci-Fi/Horror
                                    </option>
                                    <option value="Science">Science</option>
                                    <option value="Science Fiction">
                                        Khoa học viễn tưởng
                                    </option>
                                    <option value="Science/Nature">
                                        Khoa học/Tự nhiên
                                    </option>
                                    <option value="Travel">Du lịch</option>
                                    <option value="Western">Phương Tây</option>
                                </select>

                                <select class="catalog__select" name="years">
                                    <option value="All the years">
                                        Tất cả các năm
                                    </option>
                                    <option value="1">'50s</option>
                                    <option value="2">'60s</option>
                                    <option value="3">'70s</option>
                                    <option value="4">'80s</option>
                                    <option value="5">'90s</option>
                                    <option value="6">2000-10</option>
                                    <option value="7">2010-20</option>
                                    <option value="8">2021</option>
                                </select>
                            </div>

                            <div class="slider-radio">
                                <input
                                    type="radio"
                                    name="grade"
                                    id="featured"
                                    checked="checked"
                                /><label for="featured">Nổi bật</label>
                                <input
                                    type="radio"
                                    name="grade"
                                    id="popular"
                                /><label for="popular">Phố biển</label>
                                <input
                                    type="radio"
                                    name="grade"
                                    id="newest"
                                /><label for="newest">Mới nhất</label>
                            </div>
                        </div>

                        <div class="row row--grid">
                            @if($movies->isEmpty())
                <h4>Không tìm thấy sản phẩm nào phù hợp.</h4>
                        @else
                            @foreach ($movies as $movie)
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-3">
                                <div class="card">

                                    <a href="{{route('movie',$movie->id)}}" class="card__cover">
                                        <img src="{{ asset($movie->thumbnail) }}" alt="" />
                                        <svg
                                            width="22"
                                            height="22"
                                            viewBox="0 0 22 22"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                    </a>
                                    <h3 class="card__title">
                                        <a href="/detail" >{{$movie->title}}</a>
                                    </h3>
                                    <ul class="card__list">
                                    <li>{{$movie->category ? $movie->category->name : 'Không có danh mục'}}</li>
                                        <li>{{$movie->release_year}}</li>
                                    </ul>


                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>


            </div>
        </div>

@endsection

