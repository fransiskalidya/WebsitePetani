@extends('sebelum.layouts.app')

    <!-- Header Section Begin -->
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
                            <li><a href="{{'/'}}">Home</a></li>
                            <li class="active"><a href="{{'/contact'}}">Contact</a></li>
                            <li><a href="{{route('dataPetani.tampil')}}">Data Penerima Subsidi</a></li>
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    {{-- about us section begin --}}
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>About Us</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            {{-- <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-4 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="width: 8cm; height: 8cm; margin-left: 1cm" data-setbg="img/featured/feature-1.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"></a>Design</h6>
                            <h5>Ardila Lukita</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mix vegetables fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="width: 8cm; height: 8cm; margin-left: 1cm" data-setbg="img/featured/feature-3.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"></a>Design</h6>
                            <h5>Fitri Mutiara</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mix fastfood oranges">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="width: 8cm; height: 8cm; margin-left: 1cm" data-setbg="img/featured/feature-4.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"></a>Design</h6>
                            <h5>Fransiska Lidya</h5>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row featured__filter">
                <div class="col-lg-6 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="width: 8cm; height: 8cm; margin-left: 3cm" data-setbg="img/featured/feature-1.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"></a>Design</h6>
                            <h5>Devi Puspitasari</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="width: 8cm; height: 8cm; margin-left: 3cm" data-setbg="img/featured/feature-2.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"></a>Design</h6>
                            <h5>Zalna Rahma</h5>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>

    {{-- about us section end --}}
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>+62865172819 (pak hadi)</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>Desa Gondanglor
                            Kabupaten Lamongan
                            Provinsi Jawa Timur
                            62256</p>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p>10:00 am to 23:00 pm</p>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>petaniku@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31666.641988142652!2d112.24696485850745!3d-7.20311158995994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77f567a5f83f69%3A0xcc30fa028e186261!2sGondang%20Lor%2C%20Sugio%2C%20Lamongan%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1619658117143!5m2!1sen!2sid"
         width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>GondangLor</h4>
                <ul>
                    <li>Phone: +62865172819</li>
                    <li>Add: GondangLor, Lamongan, Jatim</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Tinggalkan Pesan</h2>
                    </div>
                </div>
            </div>

            {{-- form saran  --}}

            <form method="post" action="{{route('saran.store')}}">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="nama" placeholder="Nama" required>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea name="pesan" placeholder="Pesan" required></textarea>
                        <button type="submit" class="site-btn">Kirim Pesan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
