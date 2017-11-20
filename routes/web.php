<?php



Route::post('cekKondisi','c_cek@kondisi');

Route::get('/', function () {
    return view('v_awal');
});
Route::get('/daftar', function () {
    return view('v_daftar');
});
Route::get('/masuk', function () {
    return view('v_login');
});
Route::get('/ph', function () {
    return view('v_cekph');
});
Route::get('/dash', function () {
    return view('v_homeAdmin');
});
Route::get('/home', function () {
    return view('v_homePengguna');
});
Route::get('/telurbebek', function () {
    return view('v_telurbebek');
});



//Login
Route::post('Dash','c_login@login');
Route::get('logout','c_login@logout');
//admin
Route::get('Ketua','c_admin@index');
Route::get('laporanAnalisis','c_admin@showLaporanAnalisis');
Route::get('dataPengguna','c_admin@showDatapengguna');
Route::get('rekaptelurasin','c_admin@showRekapTA');
Route::post('Anggota','c_admin@tambahPengguna');
Route::delete('hapuspengguna/{id_pengguna}','c_admin@hapuspengguna');
Route::delete('hapustelurasin/{id_telurasin}','c_admin@hapustelurasin');
//Anggota
Route::post('profil','c_pengguna@ubahProfil');
Route::get('pengguna','c_pengguna@index');
//analisis
// Route::get('Analisis','c_pengguna@ShowFormDataLahan');
// Route::post('kondisiTanah','c_pengguna@simpanUmurLuas');
// Route::post('pilihTelurAsin','c_pengguna@simpanWarnaDaun');
// Route::post('unsurP','c_pengguna@simpanUnsurP');
// Route::post('unsurK','c_pengguna@simpanUnsurK');
// Route::post('ph','c_pengguna@tampilHasil');
// Route::get('tersimpan','c_pengguna@simpanHasil');
// Route::get('home','c_pengguna@batalSimpan');

//telurasin
Route::get('analisTelurAsin','c_pengguna@ShowTelurAsin');
Route::post('jumlahtelur','c_pengguna@simpanJumlahTelur');
Route::post('kualiTasTelurAsin','c_pengguna@hasilTA');
Route::get('simpanTelurAsin','c_pengguna@simpanTA');
// Route::get('home','c_pengguna@batalSimpan');




//telur bebek

Route::post('jumlahhargabebek','c_pengguna@simpanjumlahhargabebek');
Route::post('kualitasTelurBebek','c_pengguna@hasilTB');
Route::get('simpanTelurBebek','c_pengguna@simpanTB');
