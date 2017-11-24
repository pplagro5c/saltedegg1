<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\m_telurasin;
use App\m_pengguna;
use App\m_telurbebek;
use App\m_analisatelurbebek;
use App\Http\Requests\penggunaRequest;
use App\Http\Requests\cek\UpdateRequest;

class c_admin extends Controller
{
    public function index()
    {
        return view('v_homeAdmin');
    }

    public function showRekapTA()
    {
        $telurasins = m_telurasin::orderBy('tanggalmemakai', 'DESC')->get();
        $pemakai = m_pengguna::all();
        return view('v_rekaptelurasinAdmin', compact('telurasins','pemakai'));
    }


    public function showRekapTB()
    {
        $telurbebeks = m_telurbebek::orderBy('tanggalpakai', 'DESC')->get();
        $pakai = m_pengguna::all();
        return view('v_rekaptelurbebekAdmin', compact('telurbebeks','pakai'));
    }



    public function showDatapengguna()
    {
        $penggunas = m_pengguna::Anggota()->get();
        return view('v_dataPengguna', compact('penggunas'));
    }

    public function tambahPengguna(penggunaRequest $request)
    {
        $pengguna = new m_pengguna();
        $pengguna->nama = $request->nama;
        $pengguna->alamat = $request->alamat;
        $pengguna->no_telepon = $request->no_telepon;
        $pengguna->umur = $request->umur;
        $pengguna->username = $request->Username1;
        $pengguna->password = $request->Password1;
        $pengguna->status = 'pengguna';
        $pengguna->save();
        return redirect('masuk')->with('message', 'Anda Berhasil Mendaftar');
        //return redirect()->route('pengguna.index')->with('alert-success', 'Data Berhasil Disimpan.');
    }

    public function hapuspengguna($id_pengguna)
    {
        $penggunas = m_pengguna::findOrFail($id_pengguna);
        $penggunas->delete();
        return redirect('dataPengguna')->with('message', 'Data Pengguna Berhasil Dihapus');
    }


 public function hapustelurasin($id_telurasin)
    {
        $telurasins = m_telurasin::findOrFail($id_telurasin);
        $telurasins->delete();
        return redirect('rekaptelurasin')->with('message', 'Data Pengguna Berhasil Dihapus');
    }

public function hapustelurbebek($id_telurbebek)
    {
        $telurbebeks = m_telurbebek::findOrFail($id_telurbebek);
        $telurbebeks->delete();
        return redirect('rekaptelurbebek')->with('message', 'Data Pengguna Berhasil Dihapus');
    }


}
