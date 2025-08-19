<!-- File: resources/views/contact.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="py-5">
        <div class="container">
            <h1 class="text-center section-title">Hubungi Kami</h1>
            <p class="text-center mb-5">Punya pertanyaan atau pesan khusus? Silakan hubungi kami melalui form di bawah ini</p>
            
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="contact-form">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subjek</label>
                                <input type="text" class="form-control" id="subject" placeholder="Subjek pesan Anda">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Pesan</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h3 class="mb-4">Tentang FoodLand</h3>
                        <p class="mb-4">FoodLand adalah restoran yang menyajikan berbagai hidangan khas Indonesia dengan cita rasa autentik. Kami menggunakan bahan-bahan segar dan berkualitas untuk memastikan setiap hidangan yang disajikan memiliki rasa yang lezat dan menggugah selera.</p>
                        
                        <div class="d-flex mb-4">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h5>Lokasi</h5>
                                <p>Jl. Makan Enak No. 123, Jakarta 12345</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h5>Telepon</h5>
                                <p>(021) 1234-5678</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5>Email</h5>
                                <p>info@foodland.com</p>
                            </div>
                        </div>
                        
                        <div class="d-flex">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h5>Jam Operasional</h5>
                                <p>Senin - Jumat: 09:00 - 22:00</p>
                                <p>Sabtu - Minggu: 08:00 - 23:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection