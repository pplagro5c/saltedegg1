<!DOCTYPE html>
<html>
<head>
	<title>
		Selamat datang | Salted Egg Pro
	</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>


<body>


	<div class="transparan1"><img id="background" src="image/background2.jpg"></div>
	<div id="atas-home">
		<div class="ui grid">
		  <div class="six wide column">
		  			<img class="ilogo" >
		  </div>
		  <div class="seven wide column">
		  			<p><div class="judulawal" ><span class="ku">SALTED EGG PRO</span> </div></p>
					<p><div class="subjudulawal"><span class="ku2"></span><br></div></p>
					<p><div class="subjudulawall"><span class="ku2" style="margin-left: -40px">Simulasi Kualitas Telur Bebek dan Telur Asin</span></div></p>


		  </div>

	  <div class="two wide column">
	  <a href="/masuk">
	  <button class="fluid ui inverted red button" style="margin-right: 30px;margin-top: 50px;">Logout</button>
	  			</a>
	  </div>
	</div>

	<!-- <div class="subheader">
		<div class="ui center aligned ">
		<span class="pu">Selamat datang di </span><span class="ku">SEMAPUT -- PADI<br>
		WEB </span><span class="pu">yang bertujuan</span><span class="ku"> memudahkan petani padi </span><span class="pu">dalam manajemen<br></span><span class="ku">
		kebutuhan pupuk</span><span class="pu"> yang akan di gunakan dengan bantuan<br> </span><span class="ku">
		PUTS </span><span class="pu">(Perangkat Uji Tanah Sawah)<br>
		& </span><span class="ku">BWD</span><span class="pu"> (Bagan Warna Daun)<br></span></div>
	</div> -->
	
	<div class="menuawal1">
		<div class="ui grid">
			<div class="eight wide column">
			<a href="{{URL('rekaptelurasin')}}"> <img class="menu11" id="mode6" src="{{ URL::asset('image/rekap.png') }}"></a>
			</div>
			<div class="eight wide column"><a href="{{URL('dataPengguna')}}"> <img id="mode6" class="menu22" src="{{ URL::asset('image/user1.png') }}"></a></div>
		</div>
	</div>
	<div class="tmenu">
		<div class="ui grid">
			<div class="six wide column"></div>
				<div class="one wide column"">
				<div class="tmenu1"><span class="pu">Data</span></div>
				<div class="tmenu1 ku2">HasilRekap</div>
				</div>
			<div class="one wide column"></div>
			<div class="four wide column">
				<div class="tmenu2"><span class="pu">Data</span><br><span class="ku2">Pengguna</span></div>
			</div>
			<div class="five wide column"></a></div>
		</div>
	</div>
</div>

	<footer>
      <div class="versi">
        Salted Egg Pro
      </div>
      <div class="for">
        Kelompok5C
      </div>
	</footer>



</body>
</html>