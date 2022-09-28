@extends('layout')

@section('css')
<style>

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

.loading {
  display: flex;
  justify-content: center;
  align-items:center;
  transition: 0.5s;
  top:0;
  width:100%;
  height:100%;
}

.loading::after {
  content: "";
  width: 37.6px;
  height: 37.6px;
  border: 8px solid #bbdbfc;
  border-top-color: #0c6cf2;
  border-radius: 50%;
  animation: loading 1s linear infinite;
}

@keyframes loading {
  to {
    transform: rotate(1turn);
  }
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
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Home') }}"><i class="fa-solid fa-house"></i> Home</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Products') }}"><i class="fa-solid fa-box"></i> Product</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku" href="{{ url('/Contact') }}"><i class="fa-solid fa-address-book"></i> Contact Us</a>
<a class="nav-item nav-link font-weight-bold nav-btn navku active" href="{{ url('/undian') }}"><i class="fa-solid fa-ticket"></i> Undian</a>
@stop

@section('isi')
    <form action="{{ url('/Insert-Undian') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap">
            @error('nama_lengkap')
                <span class="text-danger">Nama Lengkap Tolong diisi</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Nomor Whatsapp</label>
            <input type="number" class="form-control" placeholder="Nomor Whatsapp" name="nomor_wa">
            @error('nomor_wa')
            <span class="text-danger">Nomor Whatsapp Tolong diisi</span>
        @enderror
        </div>
        <div class="form-group">
            <label>Provinsi</label>
            <select class="theSelect" name="provinsi">
                    <option value="Aceh">Aceh</option>
                    <option value="Bali">Bali</option>
                    <option value="Bangka Belitung">Bangka Belitung</option>
                    <option value="Banten">Banten</option>
                    <option value="Bengkulu">Bengkulu</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                    <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                    <option value="Gorontalo">Gorontalo</option>
                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="Jambi">Jambi</option>
                    <option value="Lampung">Lampung</option>
                    <option value="Maluku">Maluku</option>
                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                    <option value="Sumatera Utama">Sumatera Utama</option>
                    <option value="Papua">Papua</option>
                    <option value="Riau">Riau</option>
                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                    <option value="Sumatera Selatan">Sumatera Selatan</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                    <option value="Nusa tenggara Barat">Nusa tenggara Barat</option>
                    <option value="Papua Barat">Papua Barat</option>
                    <option value="Sulawesi Barat">Sulawesi Barat</option>
                    <option value="Sumatera Barat">Sumatera Barat</option>
                    <option value="DI Yogyakarta">DI Yogyakarta</option>
                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                    <option value="Maluku Utara">Maluku Utara</option>
            </select>@error('provinsi')
            <span class="text-danger">Provinsi Tolong diisi</span>
        @enderror
        </div>

        <div class="form-group">
            <label>Tanggal Pembelian</label>
            <input type="date" class="form-control" placeholder="Nomor Undian" name="tanggal">
            @error('tanggal')
                <span class="text-danger">Tanggal Pembelian Tolong diisi</span>
            @enderror
        </div>

            <div class="form-group">
                <label>Nomor Undian</label>
                <input type="text" class="form-control" placeholder="Nomor Undian" name="nomor_undian">
                @error('nomor_undian')
                    <span class="text-danger">Nomor Undian Tolong diisi</span>
                @enderror
            </div>

        <button class="btn btn-primary ">Submit</button>
    </form>

  <!-- Modal -->
  <div class="modal fade" id="ModalCongrats" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="loading">
                    <div align="center" style="position: absolute; margin-top: 63px; text-align: center; font-size: 18px; font-family: sans-serif; font-weight: 550; color: #fafafd;">Loading...
                    </div>
            </div>
      <div class="modal-content" id="contentku" style="display: none">
        <div class="modal-body">
             
            <a href="#" class="gambarhadiah">
                <img class="img-fluid" src="{{ url('product/image/voucher.jpg') }}">
            </a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@stop



@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
        {{-- @if(!empty(Session::get('error_code')) && Session::get('error_code') == 'tidak_ada')
        <script>
            var myModal = new bootstrap.Modal(document.getElementById("Modalnotfound"), {});
            document.onreadystatechange = function () {
            myModal.show();
            };
        </script>
        @endif --}}

        @if(!empty(Session::get('error_code')) && Session::get('error_code') == 'success')
        <script>
            const loading = document.querySelector('.loading');
            var myModal = new bootstrap.Modal(document.getElementById("ModalCongrats"), {});
            myModal.show();
            var myContent = document.getElementById('contentku');
            loading.style.display="flex";
            setTimeout(()=>{
                loading.style.display="none";
                // document.onreadystatechange = function () {
                myContent.style.display = "block";
                // };
                }, 5000)

            
        </script>
        @endif

        {{-- @if(!empty(Session::get('error_code')) && Session::get('error_code') == 'fail')
        <script>
            var myModal = new bootstrap.Modal(document.getElementById("ModalUsed"), {});
            document.onreadystatechange = function () {
            myModal.show();
            };
        </script>
        @endif --}}
        
    <script>
        $(".theSelect").select2();
    </script>
@stop