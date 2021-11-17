@extends('sebelum.layouts.app')

    <!-- Header Section Begin -->
@include('sebelum.layouts.header')
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Post Content</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Post Content</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    {{-- post content section begin --}}
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Post Content</h2>
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
                <form method="post" action="{{ route('content.update', $content->id) }}" id="myForm" enctype="multipart/form-data">
                @csrf
                @method('PUT') 
                    <div class="featured__controls">
                    <div class="form-group">
                            <label for="Judul">Judul</label>
                            <input type="text" name="Judul" class="form-control" id="Judul" value="{{ $content->Judul}}" aria-describedby="Judul" >
                        </div>

                        <div class="form-group">
                            <label for="Image">Foto</label>
                            <input type="file" name="Image" class="form-control" id="Image" value="{{ $content->Image}}" aria-describedby="Image" ></br>
                        </div>
                        <div class="form-group">
                            <label for="Pengertian">Pengertian</label>
                            <input type="Penyebab" name="Pengertian" class="form-control" id="Pengertian" value="{{ $content->Pengertian}}" aria-describedby="Pengertian" >
                        </div>

                        <div class="form-group">
                            <label for="Penyebab">Penyebab</label>
                            <input type="Penyebab" name="Penyebab" class="form-control" id="Penyebab" value="{{ $content->Penyebab}}" aria-describedby="Penyebab" >
                        </div>

                        <div class="form-group">
                            <label for="Pencegahan">Pencegahan</label>
                            <input type="Pencegahan" name="Pencegahan" class="form-control" id="Pencegahan" value="{{ $content->Pencegahan}}" aria-describedby="Pencegahan" >
                        </div>

                        <div class="form-group">
                            <label for="Tips">Tips</label>
                            <input type="Tips" name="Tips" class="form-control" id="Tips" value="{{ $content->Tips}}" aria-describedby="Tips" >
                        </div>

                        <br><br>
                        <button type="submit" class="btn btn-primary">Submit</button>


                    </div>
                </div>
            </div>
        </section>
    {{-- post content section end --}}
