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
                            <li ><a href="{{'/'}}">Home</a></li>
                            <li ><a href="{{'/contact'}}">Contact</a></li>
                            <li class="active"><a href="{{'/inputData'}}">Data Penerima Subsidi</a></li>
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
                        <h2>Input Data Petani</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Input Data Petani</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    {{-- Input Data section begin --}}
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Input Data Petani</h2>
                    </div>
                    <div class="featured__controls">
                        <div class="form-group">
                            <label for="IdPenerima">Id Penerima : </label>
                            <input type="text" name="IdPenerima" class="form-control" id="IdPenerima" aria-describedby="IdPenerima" >
                        </div>

                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="Nama" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" >
                        </div>

                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="Alamat" name="Alamat" class="form-control" id="Alamat" aria-describedby="Alamat" >
                        </div>

                        <div class="form-group">
                            <label for="NoTelepon">No Telepon</label>
                            <input type="NoTelepon" name="NoTelepon" class="form-control" id="NoTelepon" aria-describedby="NoTelepon" >
                        </div>

                        <br><br>
                        <button type="submit" class="btn btn-primary">Submit</button>


                    </div>
                </div>
            </div>


    {{-- Input Data section end --}}
