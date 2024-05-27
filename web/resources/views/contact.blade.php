@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Hubungi Kami</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Kontak</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-map-marker-alt mr-2"></i>Alamat: Griyakembang Permai, Kembang, Kec. Bondowoso</li>
                            <li class="list-group-item"><i class="fas fa-envelope mr-2"></i>Email: rempeyekgurihbws@gmail.com</li>
                            <li class="list-group-item"><i class="fas fa-phone-alt mr-2"></i>Telepon: 088803716911</li>
                            <li class="list-group-item"><i class="fas fa-phone-alt mr-2"></i>Instagram: @bydapoer.uti</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Menambahkan peta Google Maps -->
                <div class="embed-responsive embed-responsive-16by9 shadow">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2596636418164!2d113.8075455!3d-7.9366368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9d2b9f27a4f25%3A0xb730d3a02d0d7949!2sYour%20Location!5e0!3m2!1sen!2sid!4v1635296865617!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" class="embed-responsive-item"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
