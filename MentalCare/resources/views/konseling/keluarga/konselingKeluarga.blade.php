@extends('konseling.template')

@section('title', 'Layanan Konseling Keluarga')

@section('content')
    <h1 class="judul">Layanan Konseling Keluarga</h1>
    <main>
        <div class="layanan-container">
            <div class="layanan-item">
                <div class="item-1">
                    <div class="e-conseling">Family Conseling</div>
                    <p class="sb">Mulai dari Rp 500.000 /sesi</p>
                    <ol>
                        <li>Konseling secara tatap muka di wilayah Yogyakarta</li>
                        <li>Dapat dilakukan secara individu atau bersama anggota keluarga</li>
                        <li>Cocok untuk yang mengalami kendala komunikasi antar keluarga</li>
                    </ol>
                    <button class="selengkapnya">
                        <a href="{{ route('familyConseling') }}">Konsultasi Sekarang</a>
                    </button>
                </div>
            </div>
        </div>               
    </main>
@endsection