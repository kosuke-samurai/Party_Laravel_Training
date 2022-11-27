@extends('layouts.default')
@section('title', 'トップページ')

@section('content')

    <main id="main">




        <div class="color__navi z-depth-1">
            <nav class="container z-depth-0 px-0" aria-label="メインメニュー">
                <ul class="row mb-0 pl-0 text-center no-gutters list-unstyled">
                    <li class="col-3 col-md-2"> <a class="navi-text py-3 d-block hoverable" href=""> <img
                                src="/img/glonavi/chair32.jpg" alt="" class="global_navigation_icon_img"><br> 席次表
                        </a> </li>
                    <li class="col-3 col-md-2"> <a class="navi-text py-3 d-block hoverable" href=""> <img
                                src="/img/glonavi/menu32.jpg" alt="" class="global_navigation_icon_img"><br>メニュー
                        </a> </li>
                    <li class="col-3 col-md-2"> <a class="navi-text py-3 d-block hoverable" href=""> <img
                                src="/img/glonavi/toilet32.jpg" alt="" class="global_navigation_icon_img"><br>トイレ
                        </a> </li>
                    <li class="col-3 col-md-2"> <a class="navi-text py-3 d-block hoverable" href=""> <img
                                src="/img/glonavi/baby32.jpg" alt="" class="global_navigation_icon_img"><br>授乳 </a>
                    </li>
                    <li class="col-3 col-md-2"> <a class="navi-text py-3 d-block hoverable" href=""> <img
                                src="/img/glonavi/tabaco32.jpg" alt="" class="global_navigation_icon_img"><br>喫煙所
                        </a> </li>
                    <li class="col-3 col-md-2"> <a class="navi-text py-3 d-block hoverable"
                            href="https://weather.yahoo.co.jp/weather/jp/40/8210.html" target="_blank"> <img
                                src="/img/glonavi/wether32.jpg" alt="" class="global_navigation_icon_img"><br>天気
                        </a> </li>
                    <li class="col-3 col-md-2"> <a class="navi-text py-3 d-block hoverable" href=""> <img
                                src="/img/glonavi/bar32.jpg" alt="" class="global_navigation_icon_img"><br>二次会
                        </a> </li>
                    <li class="col-3 col-md-2"> <a class="navi-text py-3 d-block hoverable"
                            href="https://transit.yahoo.co.jp/?from=%E8%A5%BF%E9%89%84%E7%A6%8F%E5%B2%A1&to=&fromgid=&togid=&flatlon=%2C%2C28273&tlatlon=&via=&viacode=&y=2022&m=11&d=18&hh=12&m1=0&m2=1&type=1&ticket=ic&expkind=1&userpass=1&ws=3&s=0&al=1&shin=1&ex=1&hb=1&lb=1&sr=1"
                            target="_blank"> <img src="/img/glonavi/train32.jpg" alt=""
                                class="global_navigation_icon_img"><br>帰路 </a> </li>
                </ul>
            </nav>
        </div>



        <div class="tab_container">
            <input id="tab1" type="radio" name="tab_item" checked>
            <label class="tab_item" for="tab1">トピックス</label>
            <input id="tab2" type="radio" name="tab_item">
            <label class="tab_item" for="tab2">思い出</label>
            <input id="tab3" type="radio" name="tab_item">
            <label class="tab_item" for="tab3">未来</label>


            <div class="tab_content" id="tab1_content">
                <div class="tab_content_description">

                    <!--ワイド用
                                                        <a class="hl-midashi" href="/article/atama">
                                                            <article class="wide_article">
                                                                <div>
                                                                    <img src="/img/ring_photo.jpg" alt="" class="wide_article_img">
                                                                </div>

                                                                <div class="wide_topi">
                                                                    <h1 class="topi_title">浜辺美波が第一子女児を妊娠した</h1>
                                                                    <p class="topi_time">11/17（金）17:29</p>
                                                                </div>
                                                            </article>
                                                        </a>
                                                        -->

                    <a class="hl-midashi" href="">
                        <article class="article">
                            <div>
                                <img src="/img/article_photo.jpg" alt="" class="article_img">
                            </div>

                            <div class="topi">
                                <h1 class="topi_title">W杯が開幕 がんばれ日本最後まで</h1>
                                <p class="topi_time">11/17（金）17:29</p>
                            </div>
                        </article>
                    </a>

                    <a class="hl-midashi" href="">
                        <article class="article">
                            <div>
                                <img src="/img/article_photo.jpg" alt="" class="article_img">
                            </div>

                            <div class="topi">
                                <h1 class="topi_title">W杯が開幕 がんばれ日本最後まで</h1>
                                <p class="topi_time">11/17（金）17:29</p>
                            </div>
                        </article>
                    </a>

                    <a class="hl-midashi" href="">
                        <article class="article">
                            <div>
                                <img src="/img/article_photo.jpg" alt="" class="article_img">
                            </div>

                            <div class="topi">
                                <h1 class="topi_title">W杯が開幕 がんばれ日本最後まで</h1>
                                <p class="topi_time">11/17（金）17:29</p>
                            </div>
                        </article>
                    </a>

                    <a class="hl-midashi" href="">
                        <article class="article">
                            <div>
                                <img src="/img/article_photo.jpg" alt="" class="article_img">
                            </div>

                            <div class="topi">
                                <h1 class="topi_title">W杯が開幕 がんばれ日本最後まで</h1>
                                <p class="topi_time">11/17（金）17:29</p>
                            </div>
                        </article>
                    </a>

                    <a class="hl-midashi" href="">
                        <article class="article">
                            <div>
                                <img src="/img/article_photo.jpg" alt="" class="article_img">
                            </div>

                            <div class="topi">
                                <h1 class="topi_title">W杯が開幕 がんばれ日本最後まで</h1>
                                <p class="topi_time">11/17（金）17:29</p>
                            </div>
                        </article>
                    </a>

                    <a class="hl-midashi" href="/article/special">
                        <article class="article">
                            <div>
                                <img src="{{ asset('storage/' . \Auth::user()->hl_image) }}" alt=""
                                    class="article_img">
                            </div>

                            <div class="topi">
                                <h1 class="topi_title">{{ \Auth::user()->title }}</h1>
                                <p class="topi_time_special">11/17（金）17:29</p>
                            </div>
                        </article>
                    </a>

                </div>
            </div>



            <div class="tab_content" id="tab2_content">
                <div class="tab_content_description">
                    @include('tab.timelinetest')
                </div>
            </div>
            <div class="tab_content" id="tab3_content">
                <div class="tab_content_description">
                    @include('tab.texttest')
                </div>
            </div>
        </div>



    </main>
@endsection
