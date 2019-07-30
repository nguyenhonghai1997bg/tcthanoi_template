{{--style--}}
<link rel="stylesheet" href="{{ asset('css/customer/header.css') }}">

<div class="header">
    <div class="col-md-3 float-left">
        <img src="{{ asset('storage/images/logo.png') }}">
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
    <div class="col-md-2 float-left mt-4">
        <div class="col-md-3 float-left">
            <img src="{{ asset('storage/images/cart.png') }}">
        </div>
        <div class="col-md-9 float-left support-header cart-header">
            <span>Giỏ hàng</span>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
