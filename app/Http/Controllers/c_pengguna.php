<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\m_telurasin;
use App\m_pengguna;
use App\m_telurbebek;
use Carbon\Carbon;
use App\Http\Requests\telurbebekRequest;
use App\Http\Requests\telurasinRequest;

class c_pengguna extends Controller
{
    public function index(request $request)
    {
        $pengguna = m_pengguna::find($request->session()->get('id')); 
        return view('v_homePengguna',compact('pengguna'));
    }


    public function ShowTelurAsin()
    {
        return view('v_telurasin');
    }


    public function ubahProfil(Request $request)
    {
        $pengguna = m_pengguna::find($request->session()->get('id') );
        $pengguna->alamat = $request->alamat;
        $pengguna->no_telepon = $request->no_telepon;
        $pengguna->umur = $request->umur;
        $pengguna->password = $request->password;
        $pengguna->save();
        return redirect('/pengguna')->with('message', 'Data berhasil diperbarui');
    }

    
    

    public function simpanJumlahTelur(Request $request){

    if ($request->jumlahtelur <= 0) {
    return redirect('analisTelurAsin')->with('message', 'Gagal. Data tidak valid');

    } elseif ($request->jumlahtelur > 250){
        return redirect('analisTelurAsin')->with('message', 'Gagal. Data Melebihi Kapasitas');
    }

    else{
        $request->session()->put('jumlahtelur',$request->jumlahtelur);
        return view('v_pilihtelurasin');  
    }
    }

   

    public function hasilTA(Request $request){
        $request->session()->put('kualitas',$request->kualitas);
        if ($request->session()->get('jumlahtelur')>0 && $request->session()->get('jumlahtelur')<51 )  {
            if ($request->session()->get('kualitas')=='normal') {
                $request->session()->put('jumlahgaram','0.2');
                $request->session()->put('bubukbata','2');
                $request->session()->put('jumlahair','1');
                $request->session()->put('jumlahhari','7');
            }elseif ($request->session()->get('kualitas')=='medium') {
                $request->session()->put('jumlahgaram','0.3');
                $request->session()->put('bubukbata','2');
                $request->session()->put('jumlahair','1');
                $request->session()->put('jumlahhari','10');    
            }else{
                $request->session()->put('jumlahgaram','0.5');
                $request->session()->put('bubukbata','2');
                $request->session()->put('jumlahair','1');
                $request->session()->put('jumlahhari','15');
            }

        }elseif($request->session()->get('jumlahtelur')>50 && $request->session()->get('jumlahtelur')<101 ) {
            if ($request->session()->get('kualitas')=='normal') {
                $request->session()->put('jumlahgaram','0.5');
                $request->session()->put('bubukbata','3');
                $request->session()->put('jumlahair','1.5');
                $request->session()->put('jumlahhari','7');
            }elseif ($request->session()->get('kualitas')=='medium') {
                $request->session()->put('jumlahgaram','0.7');
                $request->session()->put('bubukbata','3');
                $request->session()->put('jumlahair','1.5');
                $request->session()->put('jumlahhari','10');   
            }else{
                $request->session()->put('jumlahgaram','1');
                $request->session()->put('bubukbata','3');
                $request->session()->put('jumlahair','1.5');
                $request->session()->put('jumlahhari','15');
            }

        }elseif($request->session()->get('jumlahtelur')>100 && $request->session()->get('jumlahtelur')<151 ) {
            if ($request->session()->get('kualitas')=='normal') {
                $request->session()->put('jumlahgaram','0.7');
                $request->session()->put('bubukbata','4');
                $request->session()->put('jumlahair','2');
                $request->session()->put('jumlahhari','7');
            }elseif ($request->session()->get('kualitas')=='medium') {
                $request->session()->put('jumlahgaram','1');
                $request->session()->put('bubukbata','4');
                $request->session()->put('jumlahair','2');
                $request->session()->put('jumlahhari','10');   
            }else{
                $request->session()->put('jumlahgaram','1.5');
                $request->session()->put('bubukbata','4');
                $request->session()->put('jumlahair','2');
                $request->session()->put('jumlahhari','15');
            }

        }elseif($request->session()->get('jumlahtelur')>150 && $request->session()->get('jumlahtelur')<201 ) {
            if ($request->session()->get('kualitas')=='normal') {
                $request->session()->put('jumlahgaram','1');
                $request->session()->put('bubukbata','5');
                $request->session()->put('jumlahair','2.5');
                $request->session()->put('jumlahhari','7');
            }elseif ($request->session()->get('kualitas')=='medium') {
                $request->session()->put('jumlahgaram','1.5');
                $request->session()->put('bubukbata','5');
                $request->session()->put('jumlahair','2.5');
                $request->session()->put('jumlahhari','10');   
            }else{
                $request->session()->put('jumlahgaram','2');
                $request->session()->put('bubukbata','5');
                $request->session()->put('jumlahair','2.5');
                $request->session()->put('jumlahhari','15');
            }

        }else{
            if ($request->session()->get('kualitas')=='normal') {
                $request->session()->put('jumlahgaram','1.5');
                $request->session()->put('bubukbata','6');
                $request->session()->put('jumlahair','3');
                $request->session()->put('jumlahhari','7');
            }elseif ($request->session()->get('kualitas')=='medium') {
                $request->session()->put('jumlahgaram','2');
                $request->session()->put('bubukbata','6');
                $request->session()->put('jumlahair','3');
                $request->session()->put('jumlahhari','10');   
            }else{
                $request->session()->put('jumlahgaram','2.5');
                $request->session()->put('bubukbata','6');
                $request->session()->put('jumlahair','3');
                $request->session()->put('jumlahhari','15');
            }


            
        }

        return view('v_hasiltelurasin'); 
}



    public function simpanTA(Request $request){
        $telurasin = new m_telurasin();
        $telurasin->id_pemakai = $request->session()->get('id'); 
        $telurasin->jumlahtelur = $request->session()->get('jumlahtelur');
        $telurasin->kualitas = $request->session()->get('kualitas');
        $telurasin->jumlahgaram = $request->session()->get('jumlahgaram');
        $telurasin->bubukbata = $request->session()->get('bubukbata');
        $telurasin->jumlahair = $request->session()->get('jumlahair');
        $telurasin->jumlahhari = $request->session()->get('jumlahhari');
        $telurasin->tanggalmemakai = Carbon::now();
        $telurasin->save();
        $request->session()->forget('jumlahtelur');
        $request->session()->forget('kualitas');
        $request->session()->forget('jumlahgaram');
        $request->session()->forget('bubukbata');
        $request->session()->forget('jumlahair');
        $request->session()->forget('jumlahhari');
        return redirect('/pengguna')->with('message', 'Data Berhasil Disimpan');
    }



public function ShowTelurBebek()
    {
        return view('v_telurbebek');
    }


    public function simpanjumlahhargabebek(Request $request){
        if ($request->jumlahbebek <= 0 ) {
            return redirect('analisTelurBebek')->with('message', 'Gagal. Data tidak valid');
        }elseif ($request->harga <= 0 ) {
            return redirect('analisTelurBebek')->with('message', 'Gagal. Data tidak valid');
        }else{
        $request->session()->put('jenisbebek',$request->jenisbebek);
        $request->session()->put('jumlahbebek',$request->jumlahbebek);
        $request->session()->put('harga',$request->harga);
        return view('v_pilihtelurbebek');
}
}


    public function hasilTB(Request $request){
        
        $request->session()->put('umurbebek',$request->umurbebek);
        $request->session()->put('pakanbebek',$request->pakanbebek);
        $request->session()->put('vitaminbebek',$request->vitaminbebek);
        $request->session()->put('kelembapan',$request->kelembapan);
        $request->session()->put('suhu',$request->suhu);

        

        
        //jumlahtelur
            if ($request->session()->get('jenisbebek')=='B1') {
                $request->session()->put('hasiltelur',($request->session()->get('jumlahbebek')*63));

            }elseif ($request->session()->get('jenisbebek')=='B2') {
                $request->session()->put('hasiltelur',($request->session()->get('jumlahbebek')*75));

            }else{
                $request->session()->put('hasiltelur',($request->session()->get('jumlahbebek')*51));  
            }

      
            





        //bobot
            if ($request->session()->get('jenisbebek')=='B1') {
                $jenisbebek = 18.33;

                if ($request->session()->get('umurbebek')=='U1') {
                    $umurbebek = 5.5;
                }elseif ($request->session()->get('umurbebek')=='U2') {
                    $umurbebek = 5.5;
                }elseif ($request->session()->get('umurbebek')=='U3') {
                    $umurbebek = 16.5;
                }else{
                    $umurbebek = 0;
                }

                if ($request->session()->get('pakanbebek')=='P1') {
                    $pakanbebek = 20;
                }elseif ($request->session()->get('pakanbebek')=='P2') {
                    $pakanbebek = 20;
                }elseif ($request->session()->get('pakanbebek')=='P3') {
                    $pakanbebek = 10;
                }else{
                    $pakanbebek = 0;
                }

                if ($request->session()->get('vitaminbebek')=='V1') {
                    $vitaminbebek = 14;
                }elseif ($request->session()->get('vitaminbebek')=='V2') {
                    $vitaminbebek = 14;
                }elseif ($request->session()->get('vitaminbebek')=='V3') {
                    $vitaminbebek = 7;
                }else{
                    $vitaminbebek = 0;
                }

                if ($request->session()->get('kelembapan')=='K1') {
                    $kelembapan = 3.83;
                }elseif ($request->session()->get('kelembapan')=='K2') {
                    $kelembapan = 11.5;
                }elseif ($request->session()->get('kelembapan')=='K3') {
                    $kelembapan = 11.5;
                }else{
                    $kelembapan = 0;
                }

                if ($request->session()->get('suhu')=='S1') {
                    $suhu = 7;
                }elseif ($request->session()->get('suhu')=='S2') {
                    $suhu = 10.5;
                }elseif ($request->session()->get('suhu')=='S3') {
                    $suhu = 3.5;
                }else{
                    $suhu = 0;
                }

            }elseif ($request->session()->get('jenisbebek')=='B2') {
                $jenisbebek = 27.5;

                if ($request->session()->get('umurbebek')=='U1') {
                    $umurbebek = 5.5;
                }elseif ($request->session()->get('umurbebek')=='U2') {
                    $umurbebek = 5.5;
                }elseif ($request->session()->get('umurbebek')=='U3') {
                    $umurbebek = 16.5;
                }else{
                    $umurbebek = 0;
                }

                if ($request->session()->get('pakanbebek')=='P1') {
                    $pakanbebek = 10;
                }elseif ($request->session()->get('pakanbebek')=='P2') {
                    $pakanbebek = 20;
                }elseif ($request->session()->get('pakanbebek')=='P3') {
                    $pakanbebek = 20;
                }else{
                    $pakanbebek = 0;
                }

                if ($request->session()->get('vitaminbebek')=='V1') {
                    $vitaminbebek = 14;
                }elseif ($request->session()->get('vitaminbebek')=='V2') {
                    $vitaminbebek = 14;
                }elseif ($request->session()->get('vitaminbebek')=='V3') {
                    $vitaminbebek = 7;
                }else{
                    $vitaminbebek = 0;
                }

                if ($request->session()->get('kelembapan')=='K1') {
                    $kelembapan = 3.83;
                }elseif ($request->session()->get('kelembapan')=='K2') {
                    $kelembapan = 11.5;
                }elseif ($request->session()->get('kelembapan')=='K3') {
                    $kelembapan = 7.67;
                }else{
                    $kelembapan = 0;
                }

                if ($request->session()->get('suhu')=='S1') {
                    $suhu = 3.5;
                }elseif ($request->session()->get('suhu')=='S2') {
                    $suhu = 10.5;
                }elseif ($request->session()->get('suhu')=='S3') {
                    $suhu = 3.5;
                }else{
                    $suhu = 0;
                }

            }else {
                $jenisbebek=9.17;

                if ($request->session()->get('umurbebek')=='U1') {
                    $umurbebek = 5.5;
                }elseif ($request->session()->get('umurbebek')=='U2') {
                    $umurbebek = 5.5;
                }elseif ($request->session()->get('umurbebek')=='U3') {
                    $umurbebek = 16.5;
                }else{
                    $umurbebek = 0;
                }

                if ($request->session()->get('pakanbebek')=='P1') {
                    $pakanbebek = 20;
                }elseif ($request->session()->get('pakanbebek')=='P2') {
                    $pakanbebek = 20;
                }elseif ($request->session()->get('pakanbebek')=='P3') {
                    $pakanbebek = 10;
                }else{
                    $pakanbebek = 0;
                }

                if ($request->session()->get('vitaminbebek')=='V1') {
                    $vitaminbebek = 14;
                }elseif ($request->session()->get('vitaminbebek')=='V2') {
                    $vitaminbebek = 14;
                }elseif ($request->session()->get('vitaminbebek')=='V3') {
                    $vitaminbebek = 7;
                }else{
                    $vitaminbebek = 0;
                }

                if ($request->session()->get('kelembapan')=='K1') {
                    $kelembapan = 3.83;
                }elseif ($request->session()->get('kelembapan')=='K2') {
                    $kelembapan = 11.5;
                }elseif ($request->session()->get('kelembapan')=='K3') {
                    $kelembapan = 7.67;
                }else{
                    $kelembapan = 0;
                }

                if ($request->session()->get('suhu')=='S1') {
                    $suhu = 3.5;
                }elseif ($request->session()->get('suhu')=='S2') {
                    $suhu = 10.5;
                }elseif ($request->session()->get('suhu')=='S3') {
                    $suhu = 7;
                }else{
                    $suhu = 0;
                }

            }










        $total=$jenisbebek+$umurbebek+$pakanbebek+$vitaminbebek+$kelembapan+$suhu;
        $request->session()->put('totalbobot',$total);//totalbobot

        $penjualan=($request->session()->get('harga')*($request->session()->get('hasiltelur')));//penjualan
        $request->session()->put('totalpenjualan',$penjualan);//penjualan

        
    //kualitas
            if($request->session()->get('totalbobot')>0 && $request->session()->get('totalbobot')<51 )  {
                    $request->session()->put('hasilkualitas','Buruk');
            }elseif ($request->session()->get('totalbobot')>50 && $request->session()->get('totalbobot')<81)  {
                    $request->session()->put('hasilkualitas','Biasa');
            }else  {
                    $request->session()->put('hasilkualitas','Baik');
            }



            return view('v_hasiltelurbebek'); 

    }


    public function simpanTB(Request $request){
        $telurbebek = new m_telurbebek();
        $telurbebek->id_pakai = $request->session()->get('id'); 
        $telurbebek->jumlahbebek = $request->session()->get('jumlahbebek');
        $telurbebek->harga = $request->session()->get('harga');
        $telurbebek->jenisbebek = $request->session()->get('jenisbebek');
        $telurbebek->umurbebek = $request->session()->get('umurbebek');
        $telurbebek->pakanbebek = $request->session()->get('pakanbebek');
        $telurbebek->vitaminbebek = $request->session()->get('vitaminbebek');
        $telurbebek->kelembapan = $request->session()->get('kelembapan');
        $telurbebek->suhu = $request->session()->get('suhu');
        $telurbebek->totalbobot = $request->session()->get('totalbobot');
        $telurbebek->hasiltelur = $request->session()->get('hasiltelur');
        $telurbebek->totalpenjualan = $request->session()->get('totalpenjualan');
        $telurbebek->hasilkualitas = $request->session()->get('hasilkualitas');
        $telurbebek->tanggalpakai = Carbon::now();
        $telurbebek->save();
        $request->session()->forget('jumlahbebek');
        $request->session()->forget('harga');
        $request->session()->forget('jenisbebek');
        $request->session()->forget('umurbebek');
        $request->session()->forget('pakanbebek');
        $request->session()->forget('vitaminbebek');
        $request->session()->forget('kelembapan');
        $request->session()->forget('suhu');
        $request->session()->forget('totalbobot');
        $request->session()->forget('hasiltelur');
        $request->session()->forget('totalpenjualan');
        $request->session()->forget('hasilkualitas');
        return redirect('/pengguna')->with('message', 'Data Berhasil Disimpan');
    }
    

}

























 



   



    