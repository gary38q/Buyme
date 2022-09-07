@extends('layout')

@section('css')
<style>

.next-icon:after
{
  content: '>';
  font-size: 55px;
  color: black;
}

.prev-icon:after {
  content: '<';
  font-size: 55px;
  color: black;
}


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
<a class="nav-item nav-link font-weight-bold nav-btn navku active" href="{{ url('/Home') }}"><i class="fa-solid fa-house"></i> Home</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Products') }}"><i class="fa-solid fa-box"></i> Product</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Contact') }}"><i class="fa-solid fa-address-book"></i> Contact Us</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Form-Undian') }}"><i class="fa-solid fa-ticket"></i> Undian</a>
@stop

@section('isi')

    {{-- Slider --}}
    <div id="myIndicator" class="carousel slide mb-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myIndicator" data-slide-to="0" class="active" style="background-color: black;height: 15px; width: 15px;border-radius: 50%"></li>
          <li data-target="#myIndicator" data-slide-to="1" style="background-color: black;height: 15px; width: 15px;border-radius: 50%"></li>
          {{-- <li data-target="#myIndicator" data-slide-to="2" style="background-color: black;height: 15px; width: 15px;border-radius: 50%"></li> --}}
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 img-fluid" src="{{ url('product/image/banner1.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="{{ url('product/image/banner2.jpg') }}" alt="Second slide">
        </div>
        {{-- <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="{{ url('product/image/sabun.jpeg') }}" alt="Third slide">
        </div> --}}
        </div>
        <a class="carousel-control-prev mt-auto mb-auto" href="#myIndicator" role="button" data-slide="prev" style="background-color: none; color: black">
        <span class="prev-icon"></span>
        {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next mt-auto mb-auto" href="#myIndicator" role="button" data-slide="next"  style="background-color: none;">
          <span class="next-icon"></span>
        {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
        <span class="sr-only">Next</span>
        </a>
    </div>

    {{-- Web --}}
    <div id="webku">
      <div class="row">
      @foreach ($produk as $produk)
      <div class="col-sm-12 col-md-6 mb-4 d-flex">
        <div class="card">
          <div class="card-body">
              <img class="img-fluid" src="{{ url($produk->imagepath) }}">
              <div class="card-title">{{ $produk->product_name }}</div>
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
    </div>

    {{-- Mobile --}}
    {{-- <div id="mobileku">
      <div class="row">
        @foreach ($produk as $produk)
        <div class="col-6 mb-4">
          <div class="card">
            <div class="card-body">
                <img class="img-fluid" src="{{ url($produk->imagepath) }}">
                <h6 class="card-title">{{ $produk->product_name }}</h6>
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
    </div> --}}
      
@stop

@section('script')
<script>

  var x = window.matchMedia("(max-width: 700px)")
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction) 
</script>
@stop