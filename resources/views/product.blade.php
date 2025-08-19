<!-- File: resources/views/products.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="py-5" style="background: linear-gradient(rgba(255, 107, 53, 0.1), rgba(255, 107, 53, 0.05));">
        <div class="container">
            <h1 class="text-center section-title">Daftar Menu</h1>
            <p class="text-center mb-5">Temukan berbagai hidangan lezat yang siap memanjakan lidah Anda</p>
            
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/400x300?text={{ $product['name'] }}" class="product-img" alt="{{ $product['name'] }}">
                        <div class="p-4">
                            <h3 class="product-title">{{ $product['name'] }}</h3>
                            <p class="text-muted">Deskripsi singkat tentang {{ $product['name'] }}.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">Rp {{ number_format($product['price'], 0, ',', '.') }}</span>
                                <button class="btn btn-sm btn-outline-primary">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection