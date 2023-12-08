@extends('konseling.template')

@section('title', 'E-Conseling')

@section('content')
    <h1 class="judul">Kondisimu sedang tidak baik - baik saja ?</h1>
    <main>
        <div class="isi-selengkapnya">
                <div class="itemm-1">
                    <img src="{{ asset('img/individu - e conseling.jpg') }}" class="gambar"></img>
                    <p>Selamat datang di MentalCare e Counseling - pusat dukungan kesehatan mental online. Temukan keseimbangan, peroleh dukungan ahli, dan raih kesehatan mental terbaik Anda dalam satu platform. Konseling online yang nyaman, terpercaya, dan berfokus pada Anda. Mulailah perjalanan kesehatan mental Anda sekarang.</p>
                    <button class="selengkapnya">
                        <a href="#">Konsultasi Sekarang</a>
                    </button>
                </div>
        </div>               
    </main>
@endsection