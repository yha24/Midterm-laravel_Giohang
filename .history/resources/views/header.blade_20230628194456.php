<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BDB4G4WZEP"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-BDB4G4WZEP');
</script>
<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href="" style="text-decoration: none;color:black"><i
                                class="fa fa-home"></i> 90B Lê Thị Riêng, Lê Hữu Trác, Quận Sơn
                            Trà</a></li>
                    <li><a href="" style="text-decoration: none;color:black"><i
                                class="fa fa-phone"></i> 0913 136 778</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    @if (Session::has('user'))
                    <li><a href="logout" style="text-decoration: none;color:black">
                            <ion-icon name="log-out-outline"></ion-icon>{{ Session('user')->name }}
                        </a></li>
                    @else
                    <li><a href="register">Đăng kí</a></li>
                    <li><a href="login">Đăng nhập</a></li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="index.html" id="logo"><img src="source/assets/dest/images/logo-cake.png"
                        width="200px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                {{-- <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="/">
                        <input type="text" value="" name="s" id="s"
                            placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div> --}}

                {{-- gio hang --}}
                <div class="beta-comp">
                    @if (Session::has('cart'))
                    <div class="cart">
                        <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if
                            (Session::has('cart'))
                            {{ Session('cart')->totalQty }}
                            @else
                            Trong
                            @endif) <i class="fa fa-chevron-down"></i></div>
                        <div class="beta-dropdown cart-body">
                            @foreach ($product_cart as $products)
                            <div class="cart-item" id="cart-item{{ $products['item']['id'] }}">
                                <a class="cart-item-delete"
                                    href="del-cart/{{ $products['item']['id'] }}"
                                    value="{{ $products['item']['id'] }}"
                                    soluong="{{ $products['qty'] }}"><i class="fa fa-times"></i></a>
                                <div class="media">
                                    <a class="pull-left" href="#"><img
                                            src="source/image/product/{{ $products['item']['image'] }}"
                                            alt=""></a>
                                    <div class="media-body">
                                        <span
                                            class="cart-item-title">{{ $products['item']['name'] }}</span>
                                        <span
                                            class="cart-item-amount">{{ $products['item']['qty'] }}*<span>{{ $products['item']['unit_price'] }}</span></span>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="cart-caption">

                                <div class="cart-total text-right">Tổng tiền: <span
                                        class="cart-total-value">{{ number_format(Session('cart')->totalPrice) }}
                                        đồng</span></div>
                                <div class="clearfix"></div>

                                <div class="center">
                                    <div class="space10">&nbsp;</div>
                                    <a href="checkout" class="beta-btn primary text-center">Đặt hàng
                                        <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--.cart-->
                    @endif
                </div>

                {{-- Wishlish --}}
                <div>
                    <a href="wishlist" class="beta-btn primary fa fa-heart">WISHLIST</a>
                </div>

            </div>

            <div class="clearfix"></div>

        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span
                    class='beta-menu-toggle-text'>Menu</span>
                <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{ url('/page') }}">Trang chủ</a></li>
                    <li><a href="#">Loại sản phẩm</a>
                        <ul class="sub-menu">
                            @foreach ($loai_sp as $loai)
                            <li><a href="{{ url('/loaisanpham', $loai->id) }}">{{ $loai->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ url('/gioithieu') }}">Giới thiệu</a></li>
                    <li><a href="{{ url('/lienhe') }}">Liên hệ</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->