<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Kota;

class AdminController extends Controller
{
    public function list_kota() {
    	$this->data['kota'] = DB::table('kota')->get();
    	return view('admin.list-kota', $this->data);
    }

    public function tambahkan_kota(Request $request) {
    	$kota = new Kota;
    	$kota->name = $request->name;
    	$kota->save();
    	return back();
    }

    public function hapus_kota($id_kota) {
    	$kota = Kota::find($id_kota);
    	if(!is_null($kota)) {
    		$kota->delete();
    		return back();
    	}
    	else {
    		dd("Kota tidak ditemukan");
    	}
    }
}
