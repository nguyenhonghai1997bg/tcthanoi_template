@extends('base')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/detail_product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customer/categories_list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customer/products_list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/libraries/owl.carousel.min.css') }}">
@endsection
@section('content')
    <div class="slide-show">
        <div class="col-md-3">
            <ul class="categories-list-slide-show">
                <li><a href="#">Hàng bán chạy</a></li>
                <li><a href="#">Hàng khuyến mại</a></li>
                <li><a href="#">Máy tính xách tay</a></li>
                <li><a href="#">Phụ kiện - Thiết bị số</a></li>
                <li><a href="#">Đồ điện - Đồ gia dụng</a></li>
                <li><a href="#">Thời trang nam nữ</a></li>
                <li><a href="#">Phụ kiện - Thiết bị số</a></li>
                <li><a href="#">Đồ điện - Đồ gia dụng</a></li>
                <li><a href="#">Thời trang nam nữ</a></li>
            </ul>
        </div>
    </div>

    {{--content--}}
    <div class="content mt-5">
        <div class="col-md-9 col-sm-12 col-xs-12 float-left">
            <div class="product">
                <div class="col-md-6 col-sm-6 col-xs-12 image-product float-left">
                    <img src="https://lh4.googleusercontent.com/-SBmspm_W5Ag/WWyCQk0pVxI/AAAAAAAABPY/g301zAKept8buNDfFekAzel4CZF_ZuffwCLcBGAs/s1600/sp7.jpg" width="100%">
                    <div class="more-images mt-2">
                        <script src="{{ asset('js/libraries/owl.carousel.min.js') }}"></script>
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <div class="item"><img src="https://lh4.googleusercontent.com/-SBmspm_W5Ag/WWyCQk0pVxI/AAAAAAAABPY/g301zAKept8buNDfFekAzel4CZF_ZuffwCLcBGAs/s1600/sp7.jpg" alt="The Last of us" width="100%"></div>
                            <div class="item"><img src="https://lh4.googleusercontent.com/-SBmspm_W5Ag/WWyCQk0pVxI/AAAAAAAABPY/g301zAKept8buNDfFekAzel4CZF_ZuffwCLcBGAs/s1600/sp7.jpg" alt="The Last of us" width="100%"></div>
                            <div class="item"><img src="https://lh4.googleusercontent.com/-SBmspm_W5Ag/WWyCQk0pVxI/AAAAAAAABPY/g301zAKept8buNDfFekAzel4CZF_ZuffwCLcBGAs/s1600/sp7.jpg" alt="The Last of us" width="100%"></div>
                            <div class="item"><img src="https://lh4.googleusercontent.com/-SBmspm_W5Ag/WWyCQk0pVxI/AAAAAAAABPY/g301zAKept8buNDfFekAzel4CZF_ZuffwCLcBGAs/s1600/sp7.jpg" alt="The Last of us" width="100%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 description-product float-left">
                    <div class="product-title"><h1>VITAMIN A OIL</h1></div>
                    <div class="product-code mt-3">MÃ SỐ SẢN PHẨM : MS0010</div>
                    <div class="product-price mt-2">300,000₫</div>
                    <div class="product-quantity mt-4">
                        <span>SỐ LƯỢNG: </span>
                        <input type="number" min="0" class="quantity ml-1" value="0">
                    </div>
                    <div class="product-description mt-3">
                        <span>Với kiểu dáng trẻ trung cùng thiết kế mặt số dạ quang sáng tạo và gam vàng thanh lịch. Đồng hồ đeo tay của thương hiệu Zilandi sẽ đem lại vẻ ngoài thời trang và năng động cho các bạn. Hãy kết hợp các trang phục cùng màu ton sur ton để bạn trông cá tính và phong cách hơn nữa. Chất liệu nhựa tổng hợp, màu trắng. Quai có thiết kế khe hở dùng để điều chỉnh kích thước đeo tay. Mặt tròn to bản. Có 1 nút chỉnh giờ và 4 nút đèn dạ...</span>
                    </div>

                    <div class="add-to-cart mt-3">
                        <div class="btn btn-lg btn-success">Thêm vào giỏ hàng</div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="product-detail mt-4">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active bg-white" id="nav-home-tab">Chi tiết sản phẩm</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-product-detail">
                        Hỗ trợ với template này:
                    </div>
                </div>
            </div>
            <div class="mt-5"></div>
            {{--box product--}}
            <div class="box-products">
                <h2 class="title-box">
                    <span>PHÂN BÓN LÁ</span>
                </h2>
                <a href="#" class="view-all">Xem tất cả</a>
            </div>
            <div class="products">
                @for($i = 1; $i < 5; $i++)
                    <div class="product col-lg-3 col-md-3 col-sm-6 col-xs-6 float-left">
                        <div class="item">
                            <div class="image">
                                <img src="https://lh4.googleusercontent.com/-sJTpaNUY3X8/WWyC7MM3-bI/AAAAAAAABPg/T7zk0tC1QvEVg0zBY-iVGgBMGKgnUl7yQCLcBGAs/s1600/sp9.jpg">
                            </div>
                            <div class="product-content">
                                <h3 class="title mt-4 text-truncate"><a href="#">Vitamin A Oil</a></h3>
                                <div class="price">490,000₫</div>
                                <div class="add-to-cart-btn mt-2">
                                    <div class="btn btn-success">Mua hàng</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
                <div class="clearfix"></div>
            </div>
            {{--end box products--}}
        </div>

        <div class="col-md-3 col-sm-12 col-xs-12 float-right">
            @include('customer/nav-right')
        </div>
        <div class="clearfix"></div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/hide_categories_menu.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem:true,
                items : 3,
                dots: true,
                autoplay: true,
                nav: true,
                navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            });
        });
    </script>
@endsection
