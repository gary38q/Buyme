@extends('layout')

@section('css')
<style>

@media screen and (max-width: 991px){
.navku{
  font-size: 10px;
  margin-left: 5px;
  margin-right: 5px
}
}

</style>
@stop

@section('navbar')
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Home') }}"><i class="fa-solid fa-house"></i> Home</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku active" href="{{ url('/Products') }}"><i class="fa-solid fa-box"></i> Product</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Contact') }}"><i class="fa-solid fa-address-book"></i> Contact Us</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Form-Undian') }}"><i class="fa-solid fa-ticket"></i> Undian</a>
@stop

@section('isi')

<div class="row">
  @foreach ($produk as $produk)
  <div class="col-md-6 col-12 mb-4">
    <div class="card">
      <div class="card-body">
          <img class="img-fluid" src="{{ url($produk->imagepath) }}">
          <h5 class="card-title">{{ $produk->product_name }}</h5>
          <div>
            <span style="text-decoration: line-through;">150.000</span>
            <span> {{ $produk->price }}</span>
          </div>
          <br>
          <a href="{{ url('Detail-Product')}}/{{ $produk->product_name }}" class="btn btn-primary"><i class="fa-solid fa-cart-shopping"></i> Buy now</a>
      </div>
    </div>
  </div>
    
  @endforeach
  </div>

@stop