@extends('master')
@section('content')
    <div class="rev-slider">
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <div class="bannercontainer">
                    <div>
                        <div class="banner">
                            <ul>
                                @foreach ($slide as $sl)
                                    <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                                        style="width: 100%; height: 100%; overflow: hidden; z-index: 18;">
                                        <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                            data-zoomstart="undefined" data-zoomend="undefined"
                                            data-rotationstart="undefined" data-rotationend="undefined"
                                            data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined"
                                            data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                                            data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                            <img class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                                data-bgposition="center center" data-bgrepeat="no-repeat"
                                                data-lazydone="undefined" src="source/image/slide/{{ $sl->image }}"
                                                style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; 
								                background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                            />
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="tp-bannertimer"></div>
                </div>
            </div>
        </div>
    </div>
    <!--slider-->
    </div>

    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>New Products</h4>
                            <div class="beta-products-details">
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                @foreach ($new_product as $new)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            @if ($new->promition_price != 0)
                                                <div class="ribbon-wraper">
                                                    <div class="ribbon sale">I love you</div>
                                                </div>
                                            @endif
                                            <div class="single-item-header">
                                                <a href="detail/{{ $new->id }}"><img
                                                        src="source/image/product/{{ $new->image }}" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{ $new->name }}</p>
                                                <p class="single-item-price">
                                                    @if ($new->promotion_price != 0)
                                                        <span class="flash-sale">{{ $new->unit_price }} đồng</span>
                                                    @else
                                                        <span class="flash-del">{{ $new->unit_price }} đồng</span>
                                                        <span class="flash-sale">{{ $new->promotion_price }} đồng</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div cflass="single-item-caption">
                                                <a class="add-to-cart pull-left"
                                                    href="{{ route('themgiohang', $new->id) }}">
                                                    <i class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="detail/{{ $new->id }}">Details 
                                                    <i class="fa fa-chevron-right"></i></a>
                                                <a class="beta-btn primary" href="{{ route('WishListShow', $new->id) }}">
                                                    <i class="fa fa-heart" ></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div> <!-- .beta-products-list -->

                            {{-- <div class="space50">&nbsp;</div> --}}

                            <div class="beta-products-list">
                                <h4>Top Products</h4>
                                <div class="beta-products-details">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach ($sanpham_khuyenmai as $spkm)
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                <div class="single-item-header">
                                                    <a href="product.html"><img
                                                            src="source/image/product/{{ $new->image }}"
                                                            alt=""></a>
                                                </div>
                                                <div class="single-item-body">
                                                    <p class="single-item-title">{{ $spkm->name }}</p>
                                                    <p class="single-item-price">
                                                        <span class="flash-sale">{{ $spkm->unit_price }} đồng</span>
                                                        <span class="flash-sale">{{ $spkm->promotion_price }} đồng</span>
                                                    </p>
                                                </div>
                                                <div cflass="single-item-caption">
                                                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                                    <a class="beta-btn primary" href="detail/{{ $new->id }}">Details
                                                        <i class="fa fa-chevron-right"></i></a>
                                                    <a class="beta-btn primary" href="{{ route('WishListShow', $new->id) }}">
                                                        <i class="fa fa-heart" ></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div> <!-- .beta-products-list -->
                        </div>
                    </div> <!-- end section with sidebar and main content -->


                </div> <!-- .main-content -->
            </div> <!-- #content -->
        </div> <!-- .container -->
    @endsection

    