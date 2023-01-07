@extends('layouts.layout')

@section('style')
    <style>
      .container {
        text-align: center;
      }

      .center {
        text-align: center;
        list-style-position: inside;
      }

      ol li {
        margin-top: 10px;
      }
    </style>
@endsection

@section('content')

@include('partials.jumbotron')

<div class="container">
  <div class="row g-3">
  <div class="card col-sm-12 col-lg-6 border-primary" style="color: #336B87">
    <h4 class="mt-3"><b>VISI :</b></h4>
    <hr/>
    <p class="lead">MEWUJUDKAN DESA MANDIRI YANG BERBUDI DAN TERPUJI</p>
  </div>
  <div class="card col-sm-12 col-lg-6 border-primary" style="color: #336B87">
    <h4 class="mt-3"><b>MISI:</b></h4>
    <hr/>
  <ol class="lead center" >
    <li>Meningkatkan Kinerja Perangkat Desa dan Lembaga Desa sesuai Tupoksi Masing-masing.</li>
    <li>Meningkatkan Pelayanan Publik yang proaktif,Cepat,Tepat,dan Optimal berbasis Teknologi.</li>
    <li>Menghadirkan Transfaransi perencanaan  dan Realisasi Anggaran.</li>
    <li>Meningkatkan Perhatian pada Kegiatan Keagamaan ,Budaya,Sosial dan Kearipan teknologi.</li>
    <li>Meningkatkan Pendapatan Asli desa dengan Sistem Ekonomi berbasis Kedusunan.</li>
    <li>Menyajikan Data yang akurat,serta Pengolahan Aset Desa seacara menyeluruh.</li>
    <li>Peningkatan Perhatian Kesejahteraan pada lemabaga Desa/Rt/RW/Kader/dll yang bersumber dari PADes.</li>
    <li>Memberikan layanan kesehatan dan kepedulian terhadap lingkungan budaya bersih.</li>
    <li>Membina Kewirausahaan bagi Kaum muda serta pelatihan-pelatihan Lainnya dalam Memnciptakan kegiatan Positif.</li>
  </ol>
  </div>
  </div>
</div>
@endsection