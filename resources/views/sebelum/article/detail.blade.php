@extends('sebelum.layouts.app')

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <h2 class="gold-text tm-welcome-header-2">
                        <span style="color: 7FAD39">PETANI</span>
                        <span style="color: black">KU</span>
                    </h2>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        {{-- <li class="active"><a href="{{'/'}}">Home</a></li> --}}
                        <li class="active"><a href="{{'/'}}">Home</a></li>
                        <li ><a href="{{'/contact'}}">Contact</a></li>
                        <li><a href="{{'/inputData'}}">Data Penerima Subsidi</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Pengumuman</span>
                        </div>
                        <ul>
                            <li><a href="#">Sosialisasi Penanaman Lombok</a></li>
                            <li><a href="#">Sosialisasi Alat Perontok Padi</a></li>
                            <li><a href="#">Jadwal Pembagian Pupuk bulan Mei</a></li>
                            {{-- <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        {{-- <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__item">
                            <h4>Widget cuaca</h4>
                            <div id="ml_5fa291f9">
                                <div style="padding:0;margin:0;" id="ml_5fa291f9_i" v='1.1' a='{"t":"v","lang":"id","ids":[],"a_dt_bg":"rgba(127,173,57,1)","a_dt_c":"#FFFFFF","a_wn_bg":"rgba(100,130,53,1)","a_wn_c":"#FFFFFF","a_wi_bg":"rgba(127,173,57,1)","a_wi_c":"#FFFFFF","p_w":235}'>
                                </div>
                                <div id="ml_5fa291f9_c" style="padding:0;margin:0;padding:7px 5px;">
                                    <img src="https://cuacalab.id/assets/img/logo_z_b.svg" style="width:15px;opacity:0.7;margin-right:5px;position:relative;top:1px;display:inline-block;">
                                    <a href="https://cuacalab.id/cuaca_surabaya/hari_ini/" style="color:grey;font-size:12px;text-decoration:none;" target="_blank" id="ml_5fa291f9_u">Cuaca Hari ini</a>
                                </div>
                            </div>
                            <script async src="https://app.cuacalab.id/js/?id=ml_5fa291f9"></script>
                            {{-- <ul>
                                <li><a href="#">A</a></li>
                                <li><a href="#">B (20)</a></li>
                                <li><a href="#">C (5)</a></li>
                                <li><a href="#">D (9)</a></li>
                                <li><a href="#">E (10)</a></li>
                            </ul> --}}
                        </div>
                        @foreach $article as $content)
                        <div class="blog__sidebar__item">
                            <h4>Artikel terbaru</h4>
                            <div class="blog__sidebar__recent">
                                <a href="{{ route('content.index',$content->id) }}" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-1.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Teknologi Budaya Stroberi<br /> di Lahan sempit</h6>
                                        <ul>
                                            <li>
                                                <span>MAR 05, 2019</span> </br>
                                                <i class="fa fa-eye" aria-hidden="false" href="{{ route('article.show',$article->id) }}">
                                            </i>
                                        </ul>
                                    </div>
                                </a>
                                <a href="{{ route('content.index',$content->id) }}" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-2.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Kapan Waktu yang Tepat<br /> Menanam Bibit Buah?</h6>
                                        <ul>
                                            <li>
                                                <span>MAR 05, 2019></span> </br>
                                                <i class="fa fa-eye" aria-hidden="false" href="{{ route('article.show',$article->id) }}">
                                            </i>
                                        </ul>
                                    </div>
                                </a>
                                <a href="{{ route('content.index',$content->id) }}" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-3.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Menjerat Si Hama Jambu<br />Merah</h6>
                                        <ul>
                                            <li>
                                                <span>MAR 05, 2019</span> </br>
                                                <i class="fa fa-eye" aria-hidden="false" href="{{ route('article.show',$article->id) }}">
                                            </i>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="blog__sidebar__item">
                            <h4>Search By</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Apple</a>
                                <a href="#">Beauty</a>
                                <a href="#">Vegetables</a>
                                <a href="#">Fruit</a>
                                <a href="#">Healthy Food</a>
                                <a href="#">Lifestyle</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">

                    

                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="img/blog/details/details-author.jpg" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6>Supardi</h6>
                                        <span>Admin</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Categories:</span> Food</li>
                                        <li><span>Tags:</span> All, Trending, Cooking, Healthy Food, Life Style</li>
                                    </ul>
                                    <div class="blog__details__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>Artikel Populer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">pupuk baru untuk jagung</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Alat siram tanaman untuk efisiensi waktu</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Harga lombok tinggi menjelang lebaran</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>