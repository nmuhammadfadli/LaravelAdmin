@extends('layouts.app')

@section('content')
    <style>
        .card-img-top {
            height: 200px; /* Atur tinggi gambar sesuai kebutuhan */
            object-fit: cover; /* Mengatur gambar agar selalu terisi penuh pada area yang ditentukan */
        }
    </style>
    <div class="container">
        <h1 class="text-center mb-4">Gallery</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('/assets/img/peyek.jpe') }}" class="card-img-top" alt="Food 1">
                    <div class="card-body">
                        <p class="card-text">Rempeyek Gurih.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('/assets/img/produk1.jpg') }}" class="card-img-top" alt="Food 2">
                    <div class="card-body">
                        <p class="card-text">Rempeyek Kemasan 150 Gram.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('/assets/img/produk3.jpg') }}" class="card-img-top" alt="Food 2">
                    <div class="card-body">
                        <p class="card-text">Kuping Gajah Kemasan 250 Gram.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('/assets/img/produk4.jpg') }}" class="card-img-top" alt="Food 2">
                    <div class="card-body">
                        <p class="card-text">Stik Ladrang Kemasan 250 Gram.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('/assets/img/kupjah.jpg') }}" class="card-img-top" alt="Food 2">
                    <div class="card-body">
                        <p class="card-text">Kuping Gajah.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('/assets/img/ladrang.jpg') }}" class="card-img-top" alt="Food 2">
                    <div class="card-body">
                        <p class="card-text">Stik Ladrang.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
