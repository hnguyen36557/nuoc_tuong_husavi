@extends('layouts.client.master')
@section('content')

    <div id="container">

        <!-- WEBSITE SEARCH STARTS HERE -->
        <div class="top-search clearfix">
            <h3 class="head-pet"><span>Tìm Kiếm Sản Phẩm</span></h3>
            <form action="#" id="searchform" method="post">
                <p>
                    <input type="text" name="2" id="s" class="field" value="Search for" />
                    <input type="submit" name="s_submit" id="s-submit" value="" />
                </p>
            </form>
            <p class="statement"><span class="fireRed">Hương Sắc Việt :</span> <a href="#">Doanh nghiệp làm
                    tăng thêm hương vị, chứa đựng tình cảm chân thành</a></p>
        </div><!-- end of top-search div-->

        <!-- ============= CONTENT AREA STARTS HERE ============== -->
        <div id="content">

            <!-- SLIDER STARTS HERE -->
            @include('layouts.client.include.slider')<!-- end of Slider div -->
            <!-- SLIDER AREA ENDS HERE -->

            <div id="whats-hot">
                <h2 class="w-bot-border">Sản Phẩm <span>Mới Cập Nhật</span></h2>

                <ul class="cat-list clearfix">
                    @foreach($product as $item)
                    <li>
                        <h3><a href="#">{{ $item->name }}</a></h3>
                        <a href="#" class="img-box"><img src="{{ asset('public/upload/product/'.$item->featured_image) }}" alt="Recipe Collections" /></a>
                        <h4><a href="#">{{ $item->name }} //</a></h4>
                        <p> Giá: {{ number_format($item->price,0,",",".") }}.000 VND</p>
                        <p> Trọng Lượng: 1 LÍT </p></br>
                        <p>
                            <a href="#" class="readmore">Liên Hệ</a>
                            <a href="#" class="readmore">Chi Tiết</a>
                            <a href="{{ route('cart.edit', $item->id) }}" class="readmore">Mua</a>
                        </p>
                    </li>
                    @endforeach
                </ul>

            </div><!-- end of whats-hot div -->

            <span class="w-pet-border"></span>

            <div id="home-infos" class="clearfix">

                <div class="wk-special clearfix">
                    <h2 class="w-bot-border">Weekly <span>Special</span></h2>
                    <div class="img-box">
                        <img src="{{ URL::To('public/client/images/') }}hot-recipes/special.jpg" alt="Weekly Special" />
                    </div>
                    <h4><a href="#">Heading text goes here //</a></h4>
                    <p>or every fine wine, there’s the perfect pairing of olives and cheese. Discover oodles of great tips and pairings in our idea center. Mouth water recipes and <a href="#">...more</a></p>
                    <span class="clearfix"></span><br />
                    <a href="#" class="readmore">Recent Weekly Specials</a>
                </div>

                <div class="newsEvent">
                    <h2 class="w-bot-border">News <span>&amp; Events</span></h2>
                    <ul class="list">

                        <li>
                            <h5><a href="#">Heading will be appear here</a></h5>
                            <p>For every fine wine, there’s the perfect pairing of oli ves and cheese. Discover oodles of great tips and pairings in our idea center<a href="#">...more</a></p>
                        </li>

                        <li>
                            <h5><a href="#">Heading will be appear here</a></h5>
                            <p>For every fine wine, there’s the perfect pairing of oli ves and cheese. Discover oodles of great tips and pairings in our idea center<a href="#">...more</a></p>
                        </li>

                    </ul>
                </div><!-- end of news div -->

                <div class="fav-recipes">
                    <h2 class="w-bot-border">Favourite <span>Recipes</span></h2>
                    <div class="bot-border">&nbsp;</div>
                    <div class="tabed">
                        <ul class="tabs clearfix">
                            <li class="current">Popular</li>
                            <li>Recent</li>
                            <li>Random</li>
                        </ul>
                        <div class="block current">
                            <ul class="highest">
                                <li>
                                    <a href="#" class="img-box"><img src="{{ URL::To('public/client/images/') }}tiny-images/tiny_1.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">Best Indian Green Pepper Recipe</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="#" class="img-box"><img src="{{ URL::To('public/client/images/') }}tiny-images/tiny_2.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">Contest Winner Chinees Soup</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="#" class="img-box"><img src="{{ URL::To('public/client/images/') }}tiny-images/tiny_3.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">Best Vegitable Recipe</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                            </ul>
                        </div><!-- end of block div -->

                        <div class="block">
                            <ul class="recent">
                                <li>
                                    <a href="#" class="img-box"><img src="{{ URL::To('public/client/images/') }}tiny-images/tiny_4.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">Lorem Ipsum World's Best Recipe</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="#" class="img-box"><img src="{{ URL::To('public/client/images/') }}tiny-images/tiny_5.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">Dolar It Somit Dolar Li Recipe</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="#" class="img-box"><img src="{{ URL::To('public/client/images/') }}tiny-images/tiny_6.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">The World's Best Winning Recipe</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                            </ul>
                        </div><!-- end of block div -->

                        <div class="block">
                            <ul class="recent">
                                <li>
                                    <a href="#" class="img-box"><img src="{{ URL::To('public/client/images/') }}tiny-images/tiny_7.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">The World's Best Sndwich Recipes here</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="#" class="img-box"><img src="{{ URL::To('public/client/images/') }}tiny-images/tiny_8.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">The World's Best Bakery Recipes here</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="off"></span>
                                        <span class="off"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                                <li>
                                    <a href="#" class="img-box"><img src="{{ URL::To('public/client/images/') }}tiny-images/tiny_9.jpg" alt="Hotest" /></a>
                                    <h5><a href="#">The World's Best Sandwich</a></h5>
                                    <p class="rate">
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        <span class="on"></span>
                                        (4.0 / 5)
                                    </p>
                                </li>
                            </ul>
                        </div><!-- end of block div -->

                    </div><!-- end of tabed div -->
                </div><!-- end of fav-recipes div -->

                <div class="ads-642x79">
                    <img src="{{ URL::To('public/client/images/') }}adv.jpg" alt="ads" />
                </div>

            </div><!-- end of home-infos div -->

        </div><!-- end of content div -->

        <!-- CONTENT ENDS HERE -->


    </div>

@endsection