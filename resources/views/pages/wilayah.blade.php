@extends('layouts.layout')

@section('title')
  Cimanuk | {{ $title }}
@endsection

@section('content')
  <div class="maps">
    <iframe
      width="100%"
      height="450"
      frameborder="0" style="border:0"
      src="https://maps.google.com/maps?q=cimanuk%20pesawaran&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen>
    </iframe>
  </div>

  <div class="wilayah card container mt-3">
    <h2 style="margin-top: 40px; margin-bottom: 20px; text-align: center;">Wilayah Desa Cimanuk</h2>
    <p class="lead">Letak Desa berada di sebelah Barat yang merupakan Ibu Kota Kabupaten Pesawaran, jarak dari Desa Cimanuk ke Ibu Kota Desa Cimanuk sekitar `12 km, dengan batas-batas sebagai berikut :</p>

    <ul class="lead">
      <li>Sebelah Utara   : Desa Suka Mandi Kecamatan Way Lima</li>
      <li>Sebelah Timur   : Desa Way harong Kecamatan Way Lima</li>
      <li>Sebelah Selatan : Desa Gunung Rejo Kecamatan Way Lima</li>
      <li>Sebelah Barat		: Desa Teba Jawa Kecamatan Kedondong</li>
    </ul>
    
    <p class="lead">Jumlah penduduk Desa Cimanuk Sebanyak 2632 jiwa dengan penduduk usia produktif 859 jiwa, sedangkan penduduk yang dikategorikan miskin 128 jiwa. Mata pencaharian sebagian penduduk adalah Buruh Petani  sedangkan hasil produksi ekonomis Desa yang menonjol adalah Padi </p>
  </div>
@endsection

@section('script')
    
@endsection