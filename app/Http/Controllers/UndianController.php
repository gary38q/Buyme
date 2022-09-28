<?php

namespace App\Http\Controllers;

use App\Models\undian;
use Illuminate\Http\Request;
use App\Http\Requests\StoreundianRequest;
use App\Http\Requests\UpdateundianRequest;
use App\Models\hadiah;
use App\Models\user_hadiah;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UndianController extends Controller
{
    public function showform (){
        $hadiah = hadiah::all();
        return view('form', compact('hadiah'));
    }

    public function generate_random(){
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $banyak = 1;
    while($banyak != 5000){
    $randomString = '';
        for ($i = 0; $i < 11; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        $undian = new undian();
        $undian->nomor_undian = $randomString;
        $undian->tanda = 0;
        $undian->save();

        $banyak = $banyak + 1;
    }
  
    return dd($characters);
    }

    public function add_undian(Request $request){

        $validate = $request->validate([
            'nama_lengkap' => 'required',
            'nomor_wa' => 'required',
            'provinsi' => 'required',
            'nomor_undian' => 'required',
            'tanggal' => 'required'
        ]);

        $noundi = $request->nomor_undian;

        $adagak = DB::table('undians')->where('nomor_undian','=', $noundi)->first();

        if ($adagak == null){
            $message="Voucher Tidak Terdaftar";
            echo "<script type='text/javascript'>alert('$message');     
            window.location.replace('/undian');
            </script>";
        }

        if ($adagak->tanda == 0){
            $userH = new user_hadiah();
            $userH->nama_user = $validate['nama_lengkap'];
            $userH->nomor_wa = $validate['nomor_wa'];
            $userH->provinsi = $validate['provinsi'];
            $userH->nomor_undian = $validate['nomor_undian'];
            $userH->hadiah = "Voucher Belanja";
            $userH->tanggal_beli = $validate['tanggal'];
            $userH->save();

            undian::where('nomor_undian','=',$noundi)
            ->update([
                'tanda' => 1
            ]);

            return Redirect::back()->with('error_code', 'success');
        }
        else{
            $message="Voucher Sudah Pernah Digunakan";
            echo "<script type='text/javascript'>alert('$message');     
            window.location.replace('/undian');
            </script>";
        }
        
        return null;


    }
}
