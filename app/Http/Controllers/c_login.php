<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\m_pengguna;

class c_login extends Controller
{

    public function login(Request $request)
    {
        $pengguna = m_pengguna::where('username',$request->username)->first(); 
        if (count($pengguna)==0) {
            $request->session()->put('alertUsername','Username dan Password Tidak Sesuai');
            return view('v_login');
        } else {
            if ($request->password != $pengguna->password) {
                $request->session()->put('alertPassword','Masukkan Password Anda');
                return view('v_login');
            } else {
                $request->session()->forget('alertUsername');
                $request->session()->forget('alertPassword');
                $request->session()->put('id',$pengguna->id_pengguna);
                if ($pengguna->status=='pengguna') {
                    session()->put('id',$pengguna->id_pengguna);
                    return view('v_homePengguna',compact('pengguna'));
                } else {
                    return view('v_homeAdmin');
                } 
            }   
        }
    }

    public function logout(request $request)
    {
        $request->session()->forget('alertUsername');
        $request->session()->forget('alertPassword');
        $request->session()->forget('id');
        $request->session()->forget('luasLahan');
        $request->session()->forget('umurPadi');
        $request->session()->forget('kadarK');
        $request->session()->forget('kadarP');
        $request->session()->forget('kadarN');
        $request->session()->forget('ph');
        $request->session()->forget('urea');
        $request->session()->forget('za');
        $request->session()->forget('sp36');
        $request->session()->forget('KCLN');
        $request->session()->forget('KCLJ');
        return view('masuk');
    }

}
