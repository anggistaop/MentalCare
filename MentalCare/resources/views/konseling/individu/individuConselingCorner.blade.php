@extends('konseling.template')

@section('title', 'Conseling Corner')

@section('content')
    <h1 class="judul">Kondisimu sedang tidak baik - baik saja ?</h1>
    <main>
        <div class="isi-selengkapnya">
            <div class="itemm-1">
                <img src="{{ asset('img/individu - conseling corner.jpg') }}" class="gambar"></img>
                <p>Selamat datang di MentalCare Counseling Corner - pusat dukungan kesehatan mental online. Temukan keseimbangan, peroleh dukungan ahli, dan raih kesehatan mental terbaik Anda dalam satu platform. Konseling online yang nyaman, terpercaya, dan berfokus pada Anda. Mulailah perjalanan kesehatan mental Anda sekarang.</p>
                <button class="selengkapnya">
                    <a href="https://wa.me/6285643152235?text=Halo%20Mental%20Care!%0ALayanan%20Konseling%20:%20Conseling%20Corner%20(Individual)">Konsultasi Sekarang</a>
                </button>
            </div>
        </div>               
    </main>
@endsection