@extends('sebelum.layouts.app')

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <h2 class="gold-text tm-welcome-header-2">
                            <span style="color: 7FAD39">PENGUMUMAN</span>

                        </h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            {{-- <li class="active"><a href="{{'/'}}">Home</a></li> --}}
                            <li ><a href="{{'/'}}">Home</a></li>
                            <li ><a href="{{'/contact'}}">Contact</a></li>
                            <li ><a href="{{'dataPetani/tampil'}}">Data Penerima Subsidi</a></li>
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

    {{-- content --}}
    {{-- @extends('sebelum.layouts') --}}

    {{-- @section('content') --}}
        <div class="row g-2">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mt-2">
                </div>

                <!-- Form Search -->

                <div class="float-left my-3 mx-5">
                    <form action="{{route('pengumuman.index')}}" class="row g-3" method="GET">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Search</button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- End Form Search -->

                
        <div class="col-xl-12 col-md-2">
    <table class="table table-bordered">
        <tr>
            <th>Id Petani</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            {{-- <th width="250px">Action</th> --}}
        </tr>
        @foreach ($datas as $data)
        <tr>

            <td>{{ $data->id }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->no_tlpn }}</td>
        </tr>
        @endforeach
        </table>
    {{-- @endsection --}}

        <!-- Footer Section Begin -->
        <footer class="footer spad" style="background-color: #f3faf6; ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-10 col-sm-12 my-5">
                        <div class="footer__about">
                            <div class="footer__about__logo">
                                <h2 class="gold-text tm-welcome-header-2">
                                    <span style="color: #7FAD39">PETANI</span>
                                    <span style="color: black">KU</span>
                                </h2>
                            </div>
                            <ul>

                                Phone: +62865172819 (pak hadi)
                                Email: Petaniku@gmail.com
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 offset-lg-1 my-5">
                        <div class="footer__widget">
                            <h6>EXPLORE</h6>
                            <ul style="list-style:none;">
                                <li><a href="{{'/'}}">Home</a></li>
                                <li><a href="{{'/contact'}}">Contact</a></li>
                                <li><a href="{{'/data'}}">Data</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 my-5">
                        <div class="footer__widget">
                            <h6>CONTACT</h6>
                            <ul class="align-center"> Desa Gondanglor
                                Kabupaten Lamongan
                                Provinsi Jawa Timur
                                62256
                            </ul>
                            <div class="pull-left" style="margin-top: 20px">
                                <div class="footer__widget__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__copyright">
                            <div class="footer__copyright__text"><p>
      Copyright &copy; by PETANIKU
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
