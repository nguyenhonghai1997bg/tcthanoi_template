<link rel="stylesheet" href="{{ asset('css/customer/nav-right.css') }}">

<div class="nav-right">
    <div class="right-box pb-3 mb-5">
        <div class="title">HỖ TRỢ TRỰC TUYẾN</div>
        <div class="content mt-3">
            <div class="icon col-2 float-left"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
            <div class="contact col-10 float-right">
                <div class="contact-title">Tư vấn bán hàng 1</div>
                <div>Mr. Thiên: (+84) 916726959</div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="content mt-3">
            <div class="icon col-2 float-left"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <div class="contact col-10 float-right">
                <div class="contact-title">Tư vấn bán hàng 1</div>
                <div>Mr. Thiên: (+84) 916726959</div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="right-box mb-5 list">
        <div class="title">SẢN PHẨM BÁN CHẠY</div>
        @for($i = 1; $i < 5; $i++)
        <div class="product pb-3 mt-3 mb-2 pr-2">
            <div class="product-image float-left">
                <img src="https://lh4.googleusercontent.com/-sJTpaNUY3X8/WWyC7MM3-bI/AAAAAAAABPg/T7zk0tC1QvEVg0zBY-iVGgBMGKgnUl7yQCLcBGAs/s1600/sp9.jpg" width="100%">
            </div>
            <div class="describe float-right pt-2">
                <a href="#" class="name">Thuốc chắc xương HH2</a>
                <div class="price mt-1">7,500,000₫</div>
            </div>
            <div class="clearfix"></div>
        </div>
        @endfor
    </div>

    <div class="right-box mb-5 list">
        <div class="title">TIN TỨC</div>
        @for($i = 1; $i < 5; $i++)
            <div class="news pb-3 mt-3 mb-2 pr-2">
                <div class="product-image float-left">
                    <img src="https://lh4.googleusercontent.com/-sJTpaNUY3X8/WWyC7MM3-bI/AAAAAAAABPg/T7zk0tC1QvEVg0zBY-iVGgBMGKgnUl7yQCLcBGAs/s1600/sp9.jpg" width="100%">
                </div>
                <div class="describe float-right pt-2">
                    <a href="#" class="mt-1 font-weight-bold text-dark">Người Việt mua gần 8.000 chiếc iPhone 6s, 6s Plus một ngày</a>
                </div>
                <div class="clearfix"></div>
            </div>
        @endfor
    </div>
</div>
