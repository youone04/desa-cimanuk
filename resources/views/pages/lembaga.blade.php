@extends('layouts.layout')

@section('title')
  Cimanuk | {{ $title }}
@endsection

@section('content')

@include('partials.jumbotron')
  <div class="container">
    <p class="lead">{{ $deskripsi }}</p>
    <p class="lead">Berikut adalah struktur organigram dari {{ $title }} :</p>
    @if ($gambar != '')
    <img src="{{ asset($gambar) }}" class="img-fluid" alt="Responsive image" style="display: block;margin-left: auto;margin-right: auto;">        
    @else
      <img src="{{ asset('img/bagan.png') }}" class="img-fluid" alt="Responsive image" style="display: block;margin-left: auto;margin-right: auto;"> 
    @endif
  </div> 
  
  

@endsection