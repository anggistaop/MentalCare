@extends('konseling.template')

@section('title', 'Layanan Konseling Pasangan')

@section('content')
    <h1 class="judul">Layanan Konseling Pasangan</h1>
    <main>
        <div class="layanan-container">
            <div class="layanan-item">
                <div class="item-1">
                    <div class="e-conseling">Pre / Marriage Online</div>
                    <p class="sb">Mulai dari Rp 300.000 /sesi</p>
                    <ol>
                        <li>Konseling secara online</li>
                        <li>Pilihan waktu banyak</li>
                        <li>Dapat dilakukan dimana saja</li>
                        <li>Cocok jika terkendala jarak dan waktu</li>
                    </ol>
                    <button class="selengkapnya">
                        <a href="{{ route('pasanganOnline') }}">Konsultasi Sekarang</a>
                    </button>
                </div>
                <div class="item-2">
                    <div class="conseling-corner">Pre / Marriage Offline</div>
                    <p class="sb">Mulai dari Rp 500.000 /sesi</p>
                    <ol>
                        <li>Konseling secara tatap muka di wilayah Yogyakarta</li>
                        <li>Konsultasi dilakukan lebih interaktif</li>
                        <li>Tempat konsultasi yang nyaman</li>
                    </ol>
                    <button class="selengkapnya-1">
                        <a href="{{ route('pasanganOffline') }}">Konsultasi Sekarang</a>
                    </button>
                </div>
            </div>
        </div>               
    </main>
@endsection