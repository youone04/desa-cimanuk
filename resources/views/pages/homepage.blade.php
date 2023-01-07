@extends('layouts.layout')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
  <style>
    .card img {
        height: 300px;
        object-fit: cover;
        object-position: center;
      }
  </style>
@endsection

@section('title', 'Cimanuk')

@section('content')
{{-- style="background-image: url({{ asset('img/back.png') }});" --}}
<div class="jumbotron jumbotron-fluid" style="background-image: url('https://i.pinimg.com/originals/7d/f1/c0/7df1c007716bed0e9ab086f91dbdd94b.jpg');">
  <div class="container">
    <h1 class="display-4" data-aos="fade-down">Desa Cimanuk, Waylima</h1>
    <p class="lead" data-aos="fade-down">Desa Cimanuk merupakan desa yang berada di wilayah kecamatan Waylima  dan Kabupaten Pesawaran, Lampung</p>
    <a class="btn btn-xl btn-learn-more text-white"  href="#desa" role="button" data-aos="fade-down">Detail</a>
  </div>
</div>

<h2 data-aos="fade-down" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:#336B87;" class="text-center pt-5">Selamat Datang Di Website Kami</h2>
<hr/>

<div class="welcome mb-5">
  <div class="container">
    <div class="photo" data-aos="fade-down">
    <img style="height: 300px; width: 300px; border-radius: 50%" src="{{ asset('img/kepala desa.jpg') }}" alt="">
     {{-- <img style="height: 300px; width: 300px; border-radius: 50%" src="https://awsimages.detik.net.id/community/media/visual/2022/10/06/presiden-jokowi.jpeg?w=700&q=90" alt=""> --}}
    <div>
      <h3>Khairullah</h3>
      <h5>Kepala desa cimanuk</h5>
    </div>
    </div>
    <div class="text" data-aos="fade-down" id="desa">
      <p>Kami senang anda sudah berkunjung, Semoga melalui situs
        web ini kami dapat memberikan segala informasi yang aktual dan terperbaharui langsung dari desa kami. 
        Situs web ini merupakan salah satu wujud dari komitmen 
        pemerintah desa, pada pentingnya komunikasi dan transparansi
        publik.</p>
      <h4>Khairullah, <span>Kepala Desa Cimanuk</span></h4>
    </div>
  </div>
</div>

<div class="news">
  <div class="container">
    <h2 data-aos="fade-down"> <span class="far fa-newspaper" style="color: #336B87;"></span> Kegiatan Desa Terbaru</h2>
    <div class="row row-cols-1 row-cols-md-2">
      @foreach ($posts as $post)
      <div class="col mb-4 box-shadow" data-aos="fade-down">
        <div class="card h-100">
          <img src="{{ asset( $post->thumbnail ) }}" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">{{ Str::limit($post->judul , 50) }}</h5>
            <p class="card-text"> {!! Str::limit($post->content , 100, '.') !!} <span><a href="kabar-desa/{{  $post->slug }}">baca selengkapnya...</a></span></p>
          </div>
        </div>
      </div>

      @endforeach
      </div>
    </div>
  </div>
</div>

<div class="home-maps" style="transform: translateY(50px);" data-aos="fade-up">
  <center>
    <iframe
    width="70%"
    height="250"
    frameborder="0" style="border:solid #aabb2a"
    src="https://maps.google.com/maps?q=cimanuk%20pesawaran&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen>
  </iframe>
  </center>
</div>
@include('partials.alamat')
@endsection