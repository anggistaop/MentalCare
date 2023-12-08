@extends('konseling.template')

@section('title', 'Pasangan Offline')

@section('content')
    <h1 class="judul">Hubungan dengan pasanganmu sedang tidak harmonis ?</h1>
    <main>
        <div class="isi-selengkapnya">
                <div class="itemm-1">
                    <img src="{{ asset('img/pasangan - offline.jpg') }}" class="gambar"></img>
                    <p>Selamat datang di MentalCare Pre Marriage atau Marriage - tempat di mana hubungan yang sehat dan bahagia menjadi fokus utama kami. Kami memahami bahwa setiap pasangan menghadapi tantangan unik dalam perjalanan hubungan mereka. MentalCare menawarkan layanan konsultasi pasangan yang ramah, mendalam, dan penuh perhatian. Bersama-sama, mari kita bangun hubungan yang sehat, penuh makna, dan penuh kebahagiaan.</p>
                    <button class="selengkapnya">
                        <a href="#">Konsultasi Sekarang</a>
                    </button>
                </div>
        </div>               
    </main>
@endsection