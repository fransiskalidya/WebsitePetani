@extends('sebelum.layouts.app')

    <!-- Humberger End -->

    <!-- Header Section Begin -->
@include('sebelum.layouts.header')
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Keranjang Transaksi</h2>
                        <div class="breadcrumb__option">
                            <a href="{{'/home'}}">Home</a>
                            <span>Keranjang Transaksi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Pemesanan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
								@foreach($barangs as $barang)
                                    <td class="shoping__cart__item">
									<img class="img-responsive" src="{{url('cart')}}/{{$barang->image}}" style="width: 400px; height: 380px" alt="product-img" />
                                        <h5>{{$barang->nama_barang}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
									Rp. {{ number_format($barang->harga)}}
                                    </td>
                                    <td class="shoping__cart__quantity">
									{{ $barang->stok }}
                                    </td>
                                    <td class="shoping__cart__pemesanan">
									<a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Pesan</a>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                            </tbody>
							@endforeach
                        </table>
                    </div>
                </div>
            </div>
    </section>
    <!-- Shoping Cart Section End -->
