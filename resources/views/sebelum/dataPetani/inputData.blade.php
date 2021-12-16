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
                            <li ><a href="{{route ('dataPetani.index')}}">Data Penerima Subsidi</a></li>
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
                        <h2>Tambah Data Petani</h2>
                        <div class="breadcrumb__option">
                            <a href="{{'home'}}">Home</a>
                            <span>Tambah Data Petani</span>
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
                        <h2>Tambah Data Petani</h2>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <form method="post" action="{{ route('dataPetani.store') }}" id="myForm">
                        @csrf
                        <div class="featured__controls">
                            <div class="form-group">
                                <label for="id">Id Petani : </label>
                                <input type="text" name="id" class="form-control" id="id" aria-describedby="id" >
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="nama" name="nama" class="form-control" id="nama" aria-describedby="nama" >
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="alamat" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" >
                            </div>

                            <div class="form-group">
                                <label for="no_tlpn">No Telepon</label>
                                <input type="no_tlpn" name="no_tlpn" class="form-control" id="no_tlpn" aria-describedby="no_tlpn" >
                            </div>

                            <br><br>
                            <button type="submit" class="btn btn-primary">Submit</button>


                        </div>
                    </div>
                </div>


    {{-- Input Data section end --}}
