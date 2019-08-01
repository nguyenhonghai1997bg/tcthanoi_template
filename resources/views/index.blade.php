@extends('base')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/libraries/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customer/categories_list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customer/products_list.css') }}">
@endsection

@section('content')
    <div class="slide-show">
        <div class="col-md-3 float-left">
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
        <div class="col-md-9 float-left mt-4 slide-show-image">
            <script src="{{ asset('js/libraries/owl.carousel.min.js') }}"></script>
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item"><img src="https://lh4.googleusercontent.com/-EEOkrwIm4lw/WWw3xnYyN6I/AAAAAAAABOc/F2SazbfTOh8TGZmPiEQL-UISzT0JYqJfwCLcBGAs/s1600/img_coverage2.jpg" alt="The Last of us" width="100%"></div>
                <div class="item"><img src="https://lh4.googleusercontent.com/-fqnC0ppCB3g/WWw3xgObnDI/AAAAAAAABOg/Q4H9Z8MLGow4oSGbjYStbj4_Y2eMUn9LgCLcBGAs/s1600/img_coverage3.jpg" alt="GTA V" width="100%"></div>
                <div class="item"><img src="https://lh4.googleusercontent.com/-EEOkrwIm4lw/WWw3xnYyN6I/AAAAAAAABOc/F2SazbfTOh8TGZmPiEQL-UISzT0JYqJfwCLcBGAs/s1600/img_coverage2.jpg" alt="Mirror Edge" width="100%"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    {{--content--}}
    <div class="content mt-5">

        {{--box product--}}
        <div class="box-products">
            <h2 class="title-box">
                <span>PHÂN BÓN LÁ</span>
            </h2>
            <a href="#" class="view-all">Xem tất cả</a>
        </div>
        <div class="products">
            @for($i = 1; $i < 10; $i++)
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

        {{--box product--}}
        <div class="box-products mt-4">
            <h2 class="title-box">
                <span>PHÂN BÓN LÁ</span>
            </h2>
            <a href="#" class="view-all">Xem tất cả</a>
        </div>
        <div class="products">
            @for($i = 1; $i < 10; $i++)
                <div class="product col-lg-3 col-md-3 col-sm-6 col-xs-6 float-left">
                    <div class="item">
                        <div class="image">
                            <img src="https://lh4.googleusercontent.com/-sJTpaNUY3X8/WWyC7MM3-bI/AAAAAAAABPg/T7zk0tC1QvEVg0zBY-iVGgBMGKgnUl7yQCLcBGAs/s1600/sp9.jpg">
                        </div>
                        <div class="product-content">
                            <h3 class="title mt-4 text-truncate"><a href="#">Vitamin A Oil Vitamin A Oil Vitamin A Oil</a></h3>
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

        {{--box product--}}
        <div class="box-products mt-4">
            <h2 class="title-box">
                <span>THUỐC TRỪ NẤM BỆNH</span>
            </h2>
            <a href="#" class="view-all">Xem tất cả</a>
        </div>
        <div class="products">
            @for($i = 1; $i < 10; $i++)
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
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem:true,
                loop: true,
                items : 1,
                dots: true,
                autoplay: true,
                nav: true,
                navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            });
        });
    </script>
@endsection
