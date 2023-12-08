@extends('konseling.template')

@section('title', 'Family Conseling')

@section('content')
    <h1 class="judul">Kondisimu sedang tidak baik - baik saja ?</h1>
    <main>
        <div class="isi-selengkapnya">
                <div class="itemm-1">
                    <img src="{{ asset('img/keluarga - family conseling.jpg') }}" class="gambar"></img>
                    <p>Selamat datang di Konseling Keluarga MentalCare - ruang aman untuk memperkuat ikatan keluarga Anda. Bersama-sama, kita akan menjelajahi dan memecahkan masalah, membangun komunikasi yang sehat, dan memastikan keluarga Anda tumbuh bersama dalam kebahagiaan. Temukan dukungan di sini.</p>
                    <button class="selengkapnya">
                        <a href="#">Konsultasi Sekarang</a>
                    </button>
                </div>
        </div>               
    </main>
@endsection