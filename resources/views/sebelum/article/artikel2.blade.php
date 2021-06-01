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

                        <div class="blog__sidebar__item">
                            <h4>Artikel terbaru</h4>
                            <div class="blog__sidebar__recent">
                                <a href="{{ url('/artikel1') }}" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/artikel1.jpg" alt="" height="80px" width="70px">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Peluang, Tantangan, dan Strategi<br /> Dalam Pengembangan Sistem Pertanian Organik</h6>
                                        <ul>
                                            <li>
                                                <span>Juni 01, 2021</span> </br>
                                                <i class="fa fa-eye" aria-hidden="false" href="#">
                                            </i>
                                        </ul>
                                    </div>
                                </a>
                                <a href="{{ url('/artikel2') }}" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/artikel2.jpg" alt="" height="80px" width="70px">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Tikus Sawah (Rattus-Rattus Argentiventer) dan<br /> Pengaruhnya Terhadap Pola Kerusakan Padi</h6>
                                        <ul>
                                            <li>
                                                <span>Juni 01, 2021</span> </br>
                                                <i class="fa fa-eye" aria-hidden="false" href="#">
                                            </i>
                                        </ul>
                                    </div>
                                </a>
                                <a href="{{ url('/artikel3') }}" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/artikel3.jpg" alt="" height="80px" width="70px">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Petunjuk Lapangan Pengendalian<br />Hama Wereng Coklat</h6>
                                        <ul>
                                            <li>
                                                <span>Juni 01, 2021</span> </br>
                                                <i class="fa fa-eye" aria-hidden="false" href="#">
                                            </i>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                      
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

                    <div class="blog__details__text">
                        <img src="img/blog/details/artikel2.jpg" alt="Popular" class="tm-popular-item-img" height="300px" width="1000px">
                        <div class="tm-popular-item-description">
                    <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">
                    </span>Tikus Sawah (Rattus-Rattus Argentiventer) dan Pengaruhnya Terhadap Pola Kerusakan Padi</h3><hr class="tm-popular-item-hr">
                    <p align="justify">Salah satu kendala utama dalam budidaya tanaman padi adalah adanya serangan hama tikus (Rattus-rattus spp.), terutama pada musim tanam gadu atau musim kemarau. Berdasarkan peringkat 
                                       yang dibuat oleh Gedes (Singleton & Petch, 1994) hama tikus di Indonesia menempati urutan pertama pada pertanaman padi, kemudian diikuti oleh penggerek batang, wereng coklat, dan walang 
                                       sangit. Peringkat tersebut juga memperlihatkan bahwa di Asia Tenggara tikus juga menempati urutan pertama, diikuti oleh hama-hama utama yang lain dengan peringkat yang hampir sama. 
                                       Berdasarkan laporan dari Laboratorioum pengamatan Hama dan Penyakit Trimurjo (1999), di Lampung Tengah dari musim tanam 1989/1990 sampai 1999/2000 ada 20 musim tanam, ternyata 19 musim 
                                       tanam di antaranya terserang tikus dengan intensitas ringan sampai puso. Dengan kata lain, pada hampir semua musim tanam serangan tikus menjadi masalah dalam budidaya padi. Selanjutnya 
                                       dilaporkan bahwa dari 19 musim tanam tersebut memang tidak semua kecamatan terserang, tetapi hal ini mengindikasikan bahwa serangan hama tikus pada pertanaman padi perlu untuk dikaji lebih lanjut. 
                                       Kerugian yang diakibatkan oleh serangan tikus.<br></p>
                    <p align="justify">Pada pengamatan adaptasi berbagai varietas padi di tanah rawa tahun 2000 diperoleh hasil berupa pola kerusakan hasil yang khas yang disebabkan oleh serangan tikus sawah. Pertanaman yang 
                                       terdiri atas enam varietas padi pada beberapa petak tersebut menunjukkan adanya pola kerusakan yang selalu mengikuti jenis atau varietas padi Dodokan. Varietas padi yang ditanam adalah Atomita, 
                                       Cempo Lombok, IR64, Ciliwung, Dodokan, dan Cianjur.</br></p>
                    <p align="justify">Pada tingkat serangan yang tinggi, tikus hanya menyisakan tanaman selebar satu meter dari pematang mengikuti arah pematang tersebut. Pola kerusakan yang ditimbulkan masih mirip dengan pola kerusakan 
                                       yang umum (mirip stadion). Pernah terjadi hal yang menarik ketika varietas Dodokan ditanam membentuk satu baris lurus ternyata kerusakan oleh tikus terjadi sampai dengan rumpun yang berdekatan dengan 
                                       pematang. Artinya tikus ternyata juga mau menyerang rumpun padi yang berada dekat dengan pematang kemungkinan karena tikus menyenangi varietas Dodokan. Bahkan yang lebih menarik adalah, pada musim tanam gadu 2002, 
                                       di Lampung Tengah khususnya Kecamatan Punggur, serangan tikus pada fase vegetatif tidak menyisakan tanaman sama sekali (puso). Berdasarkan fakta di atas maka sangat mungkin untuk melakukan rekayasa terhadap perilaku 
                                       tikus dalam menyerang atau merusak pertanaman padi, misalnya apakah pola umum kerusakan tanaman padi memang tetap (konsisten) menyerupai stadion sepakbola jika di suatu petak ditanami lebih dari satu varietas. 
                                       Artinya apakah perilaku tikus sawah dalam merusak pertanaman padi bisa dipengaruhi oleh faktor yang lain, misalnya saja adalah kesukaan (preferensi) terhadap varietas tertentu<br></p>
                    <p align="justify">Tikus lebih menyenangi daerah tengah petakan karena lebih aman dari pengganggu, contohnya adalah predator, kucing misalnya. Kucing dan beberapa predator lainnya tidak akan masuk ke dalam petakan sawah jika kondisi petakan 
                                       berair. Pernah terjadi hal yang menarik pada musim tanam gadu 2002, serangan tikus tidak menyisakan tanaman (rumpun) sama sekali, jadi serangan sampai di daerah pinggir pematang. Penyebab mengapa tikus memperlihatkan perilaku 
                                       makan yang demikian perlu diteliti lebih lanjut. Bisa saja hal ini disebabkan oleh kondisi pengairan yang kurang mencukupi untuk pertanaman padi. Kedua, Serangan tikus yang terjadi di rumpun padi yang berada di bagian tengah petakan 
                                       sawah mungkin disebabkan oleh pengaruh (kadar) CO2 yang lebih tinggi di bagian tersebut. Tanaman menghasilkan gas CO2 pada malam hari dan gas ini akan terperangkap oleh rimbunnya pertanaman padi karena terjadinya turbulensi udara, berbeda 
                                       keadaannya dengan daerah sekitar pematang yang sangat mudah bagi CO2 untuk bergerak. Berdasarkan hasil penelitian, tikus sangat sensitif terhadap kandungan dan laju aliran CO2 di suatu tempat (Niel et al., 2008), bahkan terhadap tipe atau 
                                       kualitas air (Holm & Ladewig, 2006) sehingga tempat tersebut menjadi disenangi atau justru tidak disenangi oleh tikus. </br></p>
                        </div>
                    </div>

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
