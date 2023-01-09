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
    <p class="lead">Terwujudnya Desa Cimanuk Yang Mandiri dan Sejahtera</p>
  </div>
  <div class="card col-sm-12 col-lg-6 border-primary" style="color: #336B87">
    <h4 class="mt-3"><b>MISI:</b></h4>
    <hr/>
    <p style="text-align: left">1. Mewujudkan masyarakat Desa Cimanuk yang Mandiri.</p>
    <p style="text-align: left">a. Meningkatkan Kemendirian sumber daya manusia</p>
    <p style="text-align: left">b. Meningkatkan Pangan, papan dan sandang masyakat Desa Cimanuk</p>

    <p style="text-align: left">2. Mewujudkan masyarakat Desa Cimanuk yang Sejahtera. </p>
        <p style="text-align: left">a. Pembangunan</p>
         <ul style="text-align: left">
          <li>Meningkatkan pembangunan infrastruktur Desa</li>
          <li>Meningkatkan sumber daya alam yang ada</li>
          <li>Meningkatkan peran aktif BPD, LPMD, RT/RW, dan tokoh masyarakat dalam pembangunan Desa</li>
          <li>Meningkatkan peran serta masyarakat dalam berswadaya membangun Desa</li>
         </ul>

        <p style="text-align: left">b. Pemerintahan</p>
        <ul  style="text-align: left">
          <li>Menciptakan Sistem Pemerintahan yang Baik dan Demokratis.</li>
        </ul>

        <p style="text-align: left" >c. Kemasyarakatan</p>
        <ul style="text-align: left">
          <li>Peningkatan dan pengembangan usaha kecil dan menengah</li>
          <li>Menjaga dan memelihara ketentraman, ketertiban, dankerukunan warga</li>
          <li>Mewujudkan keluarga sehat sejahtera melalui peran aktif ibu-ibu PKK, Posyandu, dan organisasi lainnya.</li>
        </ul>

    </li> 
  </div>
  </div>
</div>
@endsection