@extends('layouts.app')
@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Nikmati Kelezatan Masakan Autentik</h1>
                    <p>FoodLand menyajikan berbagai hidangan lezat dengan bahan-bahan segar dan resep tradisional. Rasakan pengalaman kuliner yang tak terlupakan.</p>
                    <a href="/products" class="btn btn-primary">Lihat Menu</a>
                    <a href="/contact" class="btn btn-outline-light ms-2">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-center section-title">Menu Unggulan</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="https://asset.kompas.com/crops/VcgvggZKE2VHqIAUp1pyHFXXYCs=/202x66:1000x599/1200x800/data/photo/2023/05/07/6456a450d2edd.jpg" class="product-img" alt="Nasi Goreng Spesial">
                    <div class="p-4">
                        <h3 class="product-title">Nasi Goreng Spesial</h3>
                        <p class="text-muted">Nasi goreng dengan campuran seafood dan bumbu rempah pilihan.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="product-price">Rp 25.000</span>
                            <a href="/products" class="btn btn-sm btn-outline-primary">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="https://www.masakapahariini.com/wp-content/uploads/2023/03/shutterstock_1778837789-500x300.jpg" class="product-img" alt="Mie Ayam Jamur">
                    <div class="p-4">
                        <h3 class="product-title">Mie Ayam</h3>
                        <p class="text-muted">Mie ayam dengan topping pangsit goreng.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="product-price">Rp 20.000</span>
                            <a href="/products" class="btn btn-sm btn-outline-primary">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/5662e65c-a316-4b54-bbeb-fe948b4c163d_IMG_20210330_095926_023.jpg" class="product-img" alt="Ayam Bakar Madu">
                    <div class="p-4">
                        <h3 class="product-title">Ayam Bakar Madu</h3>
                        <p class="text-muted">Ayam bakar bumbu madu dengan lalapan dan sambal terasi.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="product-price">Rp 30.000</span>
                            <a href="/products" class="btn btn-sm btn-outline-primary">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="https://cdn.yummy.co.id/content-images/images/20230916/fe74073f014c83d8dbaa93cb7e94270f.jpg?x-oss-process=image/format,webp" class="product-img" alt="Ayam Bakar Madu">
                    <div class="p-4">
                        <h3 class="product-title">Soto Ayam</h3>
                        <p class="text-muted">Soto ayam dengan kuah kaldu yang kental.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="product-price">Rp 15.000</span>
                            <a href="/products" class="btn btn-sm btn-outline-primary">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <img src="https://asset.kompas.com/crops/96rHbnDkTGNa8Y-xW247623hONA=/0x0:1000x667/750x500/data/photo/2023/12/19/6580e31d4d33e.jpeg" class="product-img" alt="Ayam Bakar Madu">
                    <div class="p-4">
                        <h3 class="product-title">Sate Ayam</h3>
                        <p class="text-muted">Sate ayam dengan daging ayam yang juicy.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="product-price">Rp 35.000</span>
                            <a href="/products" class="btn btn-sm btn-outline-primary">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="https://cdn.pixabay.com/photo/2023/12/20/16/21/baking-8460297_1280.png" class="img-fluid rounded shadow" alt="Tentang FoodLand">
                </div>
                <div class="col-md-6">
                    <h2 class="section-title">Tentang FoodLand</h2>
                    <p>FoodLand didirikan pada tahun 2017 dengan misi menyajikan makanan berkualitas tinggi dengan cita rasa autentik. Kami menggunakan bahan-bahan segar yang dipilih langsung dari petani lokal dan memasak dengan teknik tradisional.</p>
                    <p>Setiap hidangan di FoodLand dibuat dengan penuh dedikasi dan cinta. Kami percaya bahwa makanan yang baik tidak hanya memuaskan perut, tetapi juga menyentuh hati.</p>
                    <a href="/contact" class="btn btn-primary mt-3">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>
@endsection