@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h1 class="text-center mb-5">Tentang Kami</h1>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('assets/img/peyek.jpe') }}" class="img-fluid mb-4" alt="Tentang Kami">
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">Selamat datang di Dapoer Uti!</h3>
                        <p class="card-text">Kami adalah tempat para pecinta camilan khas Indonesia. Bangga mempersembahkan rempeyek yang disajikan dengan cinta dan dedikasi.</p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">Komitmen Kami</h3>
                        <p class="card-text">Kami adalah usaha home made yang berkomitmen untuk menghadirkan cita rasa autentik dan kenikmatan sejati melalui camilan tradisional Indonesia. Dibuat dengan bahan berkualitas terbaik dan resep warisan nenek moyang.</p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">Cita Rasa Asli</h3>
                        <p class="card-text">Kami percaya bahwa makanan adalah cerminan dari kebudayaan dan warisan kita. Oleh karena itu, kami menjaga cita rasa asli rempeyek Indonesia sambil memberikan sentuhan inovasi yang segar.</p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">Pelayanan Terbaik</h3>
                        <p class="card-text">Menyajikan rempeyek yang lezat dengan layanan pelanggan yang terbaik. Mari bergabung dengan kami dalam petualangan kuliner yang tak terlupakan!</p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">Selamat Menikmati</h3>
                        <p class="card-text">Selamat menikmati rempeyek berkualitas tinggi dari Dapoer Uti.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
