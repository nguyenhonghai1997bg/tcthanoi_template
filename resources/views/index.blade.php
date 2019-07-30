@extends('base')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/libraries/owl.carousel.min.css') }}">
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
            </ul>
        </div>
        <div class="col-md-9 float-left mt-4 slide-show-image" style="width: 100%;">
            <style>
                #owl-demo .item img{
                    display: block;
                    width: 100%;
                    height: auto;
                }
                .owl-carousel {
                    width: 100%;
                }
            </style>
            <script src="{{ asset('js/libraries/owl.carousel.min.js') }}"></script>
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item"><img src="https://lh4.googleusercontent.com/-EEOkrwIm4lw/WWw3xnYyN6I/AAAAAAAABOc/F2SazbfTOh8TGZmPiEQL-UISzT0JYqJfwCLcBGAs/s1600/img_coverage2.jpg" alt="The Last of us" width="100%"></div>
                <div class="item"><img src="https://lh4.googleusercontent.com/-fqnC0ppCB3g/WWw3xgObnDI/AAAAAAAABOg/Q4H9Z8MLGow4oSGbjYStbj4_Y2eMUn9LgCLcBGAs/s1600/img_coverage3.jpg" alt="GTA V" width="100%"></div>
                <div class="item"><img src="https://lh4.googleusercontent.com/-EEOkrwIm4lw/WWw3xnYyN6I/AAAAAAAABOc/F2SazbfTOh8TGZmPiEQL-UISzT0JYqJfwCLcBGAs/s1600/img_coverage2.jpg" alt="Mirror Edge" width="100%"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation : true, // Show next and prev buttons
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem:true,
                loop: true,
                items : 1,
                itemsDesktop : false,
                itemsDesktopSmall : false,
                itemsTablet: false,
                itemsMobile : false,
                dots: true,
                autoplay: true,

            });
        });
    </script>
@endsection
