@extends('layouts.app')

@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="jumbotron jumbotron-fluid text-center bg-dark text-white" style="background-image: url('{{ asset('/assets/img/bg1.jpg') }}'); background-size: cover;">
                <div class="container" style="background-color: rgba(0, 0, 0, 0.5); padding: 20px; backdrop-filter: blur(3px);">
                    <h1 class="display-4"><b>Selamat Datang di Dapoer Uti</b></h1>
                    <p class="lead">Menyajikan camilan home made dengan kualitas terbaik dan harga terjangkau.</p>
                    <p class="lead">Nikmati rempeyek gurih, kuping gajah manis, dan ladrang renyah hanya di Dapoer Uti.</p>
                    <p class="lead">Kualitas tinggi, harga murah!</p>
                    <a href="/product" class="btn btn-primary btn-lg">Lihat Produk Kami</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="jumbotron jumbotron-fluid text-center bg-dark text-white" style="background-image: url('{{ asset('/assets/img/peyek.jpe') }}'); background-size: cover;">
                <div class="container" style="background-color: rgba(0, 0, 0, 0.5); padding: 20px; backdrop-filter: blur(3px);">
                    <h1 class="display-4"><b>Selamat Datang di Dapoer Uti</b></h1>
                    <p class="lead">Menyajikan camilan home made dengan kualitas terbaik dan harga terjangkau.</p>
                    <p class="lead">Nikmati rempeyek gurih, kuping gajah manis, dan ladrang renyah hanya di Dapoer Uti.</p>
                    <p class="lead">Kualitas tinggi, harga murah!</p>
                    <a href="/product" class="btn btn-primary btn-lg">Lihat Produk Kami</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<h1 class="text-center mb-4"><b>Menjual Kualitas bukan Kuantitas</b></h1>
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-check-circle"></i><b> Kualitas Terbaik</b></h5>
                    <p class="card-text">Produk kami terbuat dari bahan berkualitas tinggi dan proses pembuatannya terjamin.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-money-bill-wave"></i><b>Harga Terjangkau</b></h5>
                    <p class="card-text">Kami menawarkan harga yang bersaing sehingga Anda bisa menikmati camilan berkualitas tanpa harus menguras kantong.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-cookie"></i><b>Beragam Pilihan</b></h5>
                    <p class="card-text">Dengan berbagai jenis camilan yang kami tawarkan, Anda memiliki banyak pilihan untuk memuaskan selera Anda.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
        <h1 class="text-center mb-4"><b>Produk Kami</b></h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('/assets/img/peyek.jpe') }}" class="card-img-top" alt="Food 1">
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('/assets/img/ladrang.jpg') }}" class="card-img-top" alt="Food 1">
                    <div class="card-body">
                       
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('/assets/img/kupjah.jpg') }}" class="card-img-top" alt="Food 2">
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
