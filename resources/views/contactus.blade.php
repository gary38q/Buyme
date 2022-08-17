@extends('layout')

@section('navbar')
<a class="nav-item nav-link font-weight-bold nav-btn" href="{{ url('/Home') }}"><i class="fa-solid fa-house"></i> Home</a>
<a class="nav-item nav-link font-weight-bold nav-btn" href="{{ url('/Products') }}"><i class="fa-solid fa-box"></i> Product</a>
<a class="nav-item nav-link font-weight-bold nav-btn active" href="{{ url('/Contact') }}"><i class="fa-solid fa-address-book"></i> Contact Us</a>
@stop

@section('isi')
@stop