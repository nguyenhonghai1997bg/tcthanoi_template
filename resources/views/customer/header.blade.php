{{--style--}}
<link rel="stylesheet" href="{{ asset('css/customer/header.css') }}">

<div class="header">
    <div class="col-md-3 float-left">
        <a href="{{ route('home') }}"><img src="{{ asset('storage/images/logo.png') }}"></a>
    </div>
    <div class="col-md-5 float-left mt-4 mr-4">
        <div class="input-group">
            <input type="text" class="form-control search-header" placeholder="Tìm kiếm...." aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="button" id="button-addon2">Tìm kiếm</button>
            </div>
        </div>
    </div>
    <div class="com-md-2 float-left mt-4">
        <div class="col-md-3 float-left">
            <img src="{{ asset('storage/images/mobile.png') }}">
        </div>
        <div class="col-md-9 float-left support-header">
            <span>Hỗ trợ <br>0123465789</span>
        </div>
    </div>
    <div class="col-md-2 float-left mt-4 header-cart">
        <div class="col-md-3 float-left">
            <img src="{{ asset('storage/images/cart.png') }}">
        </div>
        <div class="col-md-9 float-left mt-2">
            <a href="#"><span>Giỏ hàng <span class="text-success">(5)</span></span></a>
        </div>

        <div class="header-cart-content">
            <div class="cart-header">
                <div class="float-left pl-2">Số sản phẩm: 10</div>
                <div class="float-right pr-2">Tổng số lượng: 100</div>
                <div class="clearfix"></div>
            </div>
            <div class="cart-content mt-3">
                <div class="cart-product-image float-left col-md-3">
                    <img src="https://lh4.googleusercontent.com/-sJTpaNUY3X8/WWyC7MM3-bI/AAAAAAAABPg/T7zk0tC1QvEVg0zBY-iVGgBMGKgnUl7yQCLcBGAs/s1600/sp9.jpg" width="100%">
                </div>
                <div class="float-left col-md-9 mb-3">
                    <div class="float-left">
                        <a href="#">Thuốc diệt cỏ (10)</a>
                        <div> x 100,000 đ</div>
                    </div>
                    <div class="float-right"><i class="fa fa-trash remove-item-cart" aria-hidden="true"></i></div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="cart-content mt-3">
                <div class="cart-product-image float-left col-md-3">
                    <img src="https://lh4.googleusercontent.com/-sJTpaNUY3X8/WWyC7MM3-bI/AAAAAAAABPg/T7zk0tC1QvEVg0zBY-iVGgBMGKgnUl7yQCLcBGAs/s1600/sp9.jpg" width="100%">
                </div>
                <div class="float-left col-md-9 mb-3">
                    <div class="float-left">
                        <a href="#">Thuốc diệt cỏ (10)</a>
                        <div> x 100,000 đ</div>
                    </div>
                    <div class="float-right"><i class="fa fa-trash remove-item-cart" aria-hidden="true"></i></div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="cart-footer">
                <div class="float-left"><a href="#" class="btn btn-success text-light">Thanh toán</a></div>
                <div class="float-right amount">Số tiền: 10000000 đ</div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
