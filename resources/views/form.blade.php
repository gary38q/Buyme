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
<a class="nav-item nav-link font-weight-bold nav-btn navku active" href="{{ url('/Form-Undian') }}"><i class="fa-solid fa-ticket"></i> Undian</a>
@stop

@section('isi')
    <form action="{{ url('/Insert-Undian') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_lengkap">
        </div>

        <div class="form-group">
            <label>Nomor Whatsapp</label>
            <input type="number" class="form-control" placeholder="Nomor Whatsapp" name="nomor_wa">
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
            </select>
        </div>

        <div class="form-group">
            <label>Nomor Undian</label>
            <input type="text" class="form-control" placeholder="Nomor Undian" name="nomor_undian">
        </div>

        <div class="form-group">
            <label>Tanggal Pembelian</label>
            <input type="date" class="form-control" placeholder="Nomor Undian" name="tanggal">
        </div>

        <button class="btn btn-primary">Submit</button>
        
        <!-- Modal Voucher Tidak Terdaftar-->
        <div class="modal fade" id="Modalnotfound" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                Voucher Tidak Terdaftar
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal Selamat-->
        <div class="modal fade" id="ModalCongrats" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                Selamat Anda Mendapatkan Voucher Sebesar 50 Ribu Rupiah
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal Terpakai-->
        <div class="modal fade" id="ModalUsed" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                Voucher Sudah pernah dipakai
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>

        
    </form>
@stop



@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
        @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
        <script>
            var myModal = new bootstrap.Modal(document.getElementById("Modalnotfound"), {});
            document.onreadystatechange = function () {
            myModal.show();
            };
        </script>
        @endif

        @if(!empty(Session::get('error_code')) && Session::get('error_code') == 6)
        <script>
            var myModal = new bootstrap.Modal(document.getElementById("ModalCongrats"), {});
            document.onreadystatechange = function () {
            myModal.show();
            };
        </script>
        @endif

        @if(!empty(Session::get('error_code')) && Session::get('error_code') == 4)
        <script>
            var myModal = new bootstrap.Modal(document.getElementById("ModalUsed"), {});
            document.onreadystatechange = function () {
            myModal.show();
            };
        </script>
        @endif
    <script>
        $(".theSelect").select2();
    </script>
@stop