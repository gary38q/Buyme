@extends('layout')

@section('navbar')
<a class="nav-item nav-link font-weight-bold nav-btn" href="{{ url('/Home') }}"><i class="fa-solid fa-house"></i> Home</a>
<a class="nav-item nav-link font-weight-bold nav-btn active" href="{{ url('/Products') }}"><i class="fa-solid fa-box"></i> Product</a>
<a class="nav-item nav-link font-weight-bold nav-btn" href="{{ url('/Contact') }}"><i class="fa-solid fa-address-book"></i> Contact Us</a>
@stop

@section('isi')

{{-- Produk Row 1--}}
<div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
            <img class="img-fluid" src="{{ url('product/image/sabun.jpeg') }}">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
            <img class="img-fluid" src="{{ url('product/image/sunscreen.jpeg') }}">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  <br>
  {{-- End Produk Row 1 --}}

  {{-- Produk Row 2 --}}
  <div class="row">
    <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <img class="img-fluid" src="{{ url('product/image/magicscrub.jpeg') }}">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
            <img class="img-fluid" src="{{ url('product/image/magicscrubbig.jpeg') }}">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
            <img class="img-fluid" src="{{ url('product/image/glowingspray.jpeg') }}">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  {{-- End Produk Row 2 --}}

@stop