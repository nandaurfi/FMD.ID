@extends('layout.app')
{{-- Mengambil file ktg.css khusus untuk halaman konten --}}
@push('styles')
    <link rel="stylesheet" href="{{ url('assets/css/ktg.css') }}">
@endpush
@section('content')

<header>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ url('assets/images/produkterbaru/banner.png')}}" alt="Shop Image 1" class="img-fluid">
        </div>
    </div>
</header>

<div class="container">
    <div class="content">
        <div class="ktg">
            <span>
                <a href="{{ route('index-login') }}" class="breadcrumb-link">Beranda</a> >
                <span class="active">Hijab</span>
            </span>
        </div>
        <div class="flex-wrapper">
            <button id="toggle-filter" class="apply-button mobile-only">
                <i class="fas fa-cog"></i>
            </button>
            <div class="sidebar" id="filter-sidebar">
                <h3>Filter Produk</h3>
                <hr>
                <div class="filter-section">
                    <label for="min-price">Price</label>
                    <input type="number" id="min-price" placeholder="Harga Minimum">
                    <input type="number" id="max-price" placeholder="Harga Maximum">
                </div>
                <div class="filter-section">
                    <label for="rating">Rating Produk</label>
                    <div class="rating">
                        <label>
                            <span>⭐⭐⭐⭐⭐</span>
                            <input type="checkbox">
                        </label><br>
                        <label>
                            <span>⭐⭐⭐⭐</span>
                            <input type="checkbox">
                        </label><br>
                        <label>
                            <span>⭐⭐⭐</span>
                            <input type="checkbox">
                        </label><br>
                        <label>
                            <span>⭐⭐</span>
                            <input type="checkbox">
                        </label><br>
                        <label>
                            <span>⭐</span>
                            <input type="checkbox">
                        </label><br>
                    </div>
                </div>
                <button class="apply-button">Terapkan</button>
            </div>

            <div class="product-list">
                <div class="products">
                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod1.png') }}" alt="Hijab Bella Square">
                        <h4>Button Up Charm</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod2.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Ebony Lace Knit</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod3.png') }}" alt="Hijab Bella Square">
                        <h4>Lace Hem Blouse</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod4.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Hijab Motif Mossy Rock</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 65.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod5.png') }}" alt="Hijab Bella Square">
                        <h4>Hijab Horizon Camo Scarf</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 75.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod6.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Hijab Motif Dried Leaves</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 65.000</p>
                    </div>
                    
                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod7.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Patchwork Elegance</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod8.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Rose Detail Classic</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>

                    <div class="product">
                        <img src="{{ url('assets/images/produkterbaru/prod9.png') }}" alt="Hijab Segitiga Inner">
                        <h4>Bold Strips Knit</h4>
                        <p>⭐⭐⭐⭐⭐ 5.0/5</p>
                        <p>Rp. 185.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- Mengambil file style.css untuk navbar dan footer --}}
@push('styles')
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
@endpush