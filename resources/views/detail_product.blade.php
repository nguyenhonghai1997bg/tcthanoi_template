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
                    <img src="https://lh4.googleusercontent.com/-SBmspm_W5Ag/WWyCQk0pVxI/AAAAAAAABPY/g301zAKept8buNDfFekAzel4CZF_ZuffwCLcBGAs/s1600/sp7.jpg" width="100%" id="image-show">
                    <div class="more-images mt-2">
                        <script src="{{ asset('js/libraries/owl.carousel.min.js') }}"></script>
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <div class="item"><img src="data:image/jpeg;base64,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" alt="The Last of us" width="100%"></div>
                            <div class="item"><img src="https://lh4.googleusercontent.com/-SBmspm_W5Ag/WWyCQk0pVxI/AAAAAAAABPY/g301zAKept8buNDfFekAzel4CZF_ZuffwCLcBGAs/s1600/sp7.jpg" alt="The Last of us" width="100%"></div>
                            <div class="item"><img src="https://lh4.googleusercontent.com/-SBmspm_W5Ag/WWyCQk0pVxI/AAAAAAAABPY/g301zAKept8buNDfFekAzel4CZF_ZuffwCLcBGAs/s1600/sp7.jpg" alt="The Last of us" width="100%"></div>
                            <div class="item"><img src="https://lh4.googleusercontent.com/-w7BxdhqFiC0/WWyB-HdXZBI/AAAAAAAABPU/V-4aLwbzGHc2-e350_ZMLtyANzWDhcfbQCLcBGAs/s1600/sp4.jpg" alt="The Last of us" width="100%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 description-product float-left">
                    <div class="product-title"><h1>VITAMIN A OIL</h1></div>
                    <div class="product-code mt-3">MÃ SỐ SẢN PHẨM : MS0010</div>
                    <div class="product-price mt-2">300,000₫</div>
                    <div class="product-quantity mt-4">
                        <span>SỐ LƯỢNG: </span>
                        <input type="number" min="1" class="quantity ml-1" value="1">
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
                loop: true,
                navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            });
        });
    </script>

    <script>
        $('.owl-carousel .item').click(function () {
            var src_img = $(this).children().attr('src');
            $('#image-show').attr('src', src_img);
        });
    </script>
@endsection
