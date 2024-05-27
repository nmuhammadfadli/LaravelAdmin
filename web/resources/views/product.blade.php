@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Produk Kami</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('/assets/img/produk1.jpg') }}" class="card-img-top img-fluid" alt="Product 1" style="width: 100%; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Rempeyek Kacang (250 gr) </h5>
                        <p class="card-text">Rempeyek dengan topping kacang yang berlimpah dan gurih.</p>
                        <p class="card-text">Rp 25.000.</p>
                        <a href="#" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('/assets/img/produk2.jpg') }}" class="card-img-top img-fluid" alt="Product 2" style="width: 100%; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Rempeyek Kacang (Kemasan Toples) </h5>
                        <p class="card-text">Rempeyek dengan topping kacang yang berlimpah dan gurih.</p>
                        <p class="card-text">Rp 50.000.</p>
                        <a href="#" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('/assets/img/produk3.jpg') }}" class="card-img-top img-fluid" alt="Product 3" style="width: 100%; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Kuping Gajah</h5>
                        <p class="card-text">Nikmati gurihnya kuping gajah dengan manis yang pas.</p>
                        <p class="card-text">Rp 25.000.</p>
                        <a href="#" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('/assets/img/produk4.jpg') }}" class="card-img-top img-fluid" alt="Product 4" style="width: 100%; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Stick Ladrang</h5>
                        <p class="card-text">Stick ladrang dengan perpaduan keju disetiap gigitan.</p>
                        <p class="card-text">Rp 25.000.</p>
                        <a href="#" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
@endsection
