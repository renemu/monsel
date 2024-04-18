<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MSensor;

class Monsel extends Controller
{
    public function bacategangan_total()
    {
        //baca nilai data dari tabel
        $sensor = MSensor::select('*')->get();
        //kirim ke tampilan baca tegangan
        return view('bacategangan_total', ['nilaisensor' => $sensor]);
    }

    public function bacaarusdischarge()
    {
        //baca nilai data dari tabel
        $sensor = MSensor::select('*')->get();
        //kirim ke tampilan baca tegangan
        return view('bacaarusdischarge', ['nilaisensor' => $sensor]);
    }

    public function bacaaruscharge()
    {
        //baca nilai data dari tabel
        $sensor = MSensor::select('*')->get();
        //kirim ke tampilan baca tegangan
        return view('bacaaruscharge', ['nilaisensor' => $sensor]);
    }

    public function bacastatustegangan()
    {
        //baca nilai data dari tabel
        $sensor = MSensor::select('*')->get();
        //kirim ke tampilan baca tegangan
        return view('bacastatustegangan', ['nilaisensor' => $sensor]);
    }

    public function bacastatuspenyeimbang()
    {
        //baca nilai data dari tabel
        $sensor = MSensor::select('*')->get();
        //kirim ke tampilan baca tegangan
        return view('bacastatuspenyeimbang', ['nilaisensor' => $sensor]);
    }

    public function simpansensor()
    {
        MSensor::where('id', '1')->update(['tegangan_total' => request()->nilaitegangantotal, 'arus_discharge' => request()->nilaiarusdischarge, 'arus_charge' => request()->nilaiaruscharge, 'status_tegangan' => request()->statustegangan, 'status_penyeimbang' => request()->statuspenyeimbang]);
    }
}
