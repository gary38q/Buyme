@extends('layout')

@section('navbar')
<a class="nav-item nav-link font-weight-bold nav-btn active" href="{{ url('/Home') }}"><i class="fa-solid fa-house"></i> Home</a>
<a class="nav-item nav-link font-weight-bold nav-btn" href="{{ url('/Products') }}"><i class="fa-solid fa-box"></i> Product</a>
<a class="nav-item nav-link font-weight-bold nav-btn" href="{{ url('/Contact') }}"><i class="fa-solid fa-address-book"></i> Contact Us</a>
@stop

@section('isi')

    {{-- Slider --}}
    <div id="myIndicator" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myIndicator" data-slide-to="0" class="active" style="background-color: black;height: 15px; width: 15px;border-radius: 50%"></li>
          <li data-target="#myIndicator" data-slide-to="1" style="background-color: black;height: 15px; width: 15px;border-radius: 50%"></li>
          <li data-target="#myIndicator" data-slide-to="2" style="background-color: black;height: 15px; width: 15px;border-radius: 50%"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 img-fluid" src="{{ url('product/image/magicscrub.jpeg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="{{ url('product/image/sunscreen.jpeg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="{{ url('product/image/sabun.jpeg') }}" alt="Third slide">
        </div>
        </div>
        <a class="carousel-control-prev mt-auto mb-auto" href="#myIndicator" role="button" data-slide="prev" style="background-color: black; height: 50px; width: 50px;border-radius: 50%">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next mt-auto mb-auto" href="#myIndicator" role="button" data-slide="next"  style="background-color: black; height: 50px; width: 50px;border-radius: 50%">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>

    {{-- Produk Row 1--}}
    <div class="row">
        <div class="col-md-6 col-12">
          <div class="card">
            <div class="card-body">
                <img class="img-fluid" src="{{ url('product/image/sabun.jpeg') }}">
                <h5 class="card-title">Buyme Bodywash</h5>
                <div>
                  <span style="text-decoration: line-through;">150.000</span>
                  <span> 100.000</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam blanditiis vero explicabo reprehenderit adipisci doloremque culpa illo? Reprehenderit expedita quas placeat beatae, enim dolores consequatur ad. Consectetur, veritatis. Eligendi, accusamus.</p>
                <br>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="card">
            <div class="card-body">
                <img class="img-fluid" src="{{ url('product/image/sunscreen.jpeg') }}">
                <h5 class="card-title">Buyme Sunscreen</h5>
                <div>
                  <span style="text-decoration: line-through;">200.000</span>
                  <span> 100.000</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam blanditiis vero explicabo reprehenderit adipisci doloremque culpa illo? Reprehenderit expedita quas placeat beatae, enim dolores consequatur ad. Consectetur, veritatis. Eligendi, accusamus.</p>
                <br>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
      <br>
      {{-- Produk Row 2 --}}
      <div class="row">
        <div class="col-md-4 col-12">
            <div class="card">
              <div class="card-body">
                <img class="img-fluid" src="{{ url('product/image/magicscrub.jpeg') }}">
                <h5 class="card-title">Buyme Scrub Sachet</h5>
                <div>
                  <span style="text-decoration: line-through;">150.000</span>
                  <span> 100.000</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam blanditiis vero explicabo reprehenderit adipisci doloremque culpa illo? Reprehenderit expedita quas placeat beatae, enim dolores consequatur ad. Consectetur, veritatis. Eligendi, accusamus.</p>
                <br>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        <div class="col-md-4 col-12">
          <div class="card">
            <div class="card-body">
                <img class="img-fluid" src="{{ url('product/image/magicscrubbig.jpeg') }}">
                <h5 class="card-title">Buyme Scrub Tube</h5>
                <div>
                  <span style="text-decoration: line-through;">60.000</span>
                  <span> 100.000</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam blanditiis vero explicabo reprehenderit adipisci doloremque culpa illo? Reprehenderit expedita quas placeat beatae, enim dolores consequatur ad. Consectetur, veritatis. Eligendi, accusamus.</p>
                <br>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card">
            <div class="card-body">
                <img class="img-fluid" src="{{ url('product/image/glowingspray.jpeg') }}">
                <h5 class="card-title">Buyme Glowing Spray</h5>
                <div>
                  <span style="text-decoration: line-through;">100.000</span>
                  <span> 100.000</span>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam blanditiis vero explicabo reprehenderit adipisci doloremque culpa illo? Reprehenderit expedita quas placeat beatae, enim dolores consequatur ad. Consectetur, veritatis. Eligendi, accusamus.</p>
                <br>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
      
@stop