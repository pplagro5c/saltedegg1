<!DOCTYPE html>
<html>
<head>
	<title>Selamat datang | Salted Egg Pro</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

	<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/dataTables.semanticui.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/semantic.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/semantic.min.css') }}">
    <link rel="stylesheet" type="text/javascript" href="{{ URL::asset('/semantic.js') }}">
    <link rel="stylesheet" type="text/javascript" href="{{ URL::asset('/semantic.min.js') }}">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.semanticui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.js"></script>
</head>



<body>

<div class="transparan1"><img id="background1" src="{{ URL::asset('image/background3.jpg') }}"></div>
	<div id="atas-home">
		<div class="ui grid">
			
				<div class="five wide column">
				</div>
				<div class="nine wide column" style=" margin-top: 5vh;">
					<div class="ilogo3"><img class="ilogo4" src="{{ URL::asset('image/icontelur.png') }}" style="margin-left: -55px;"></div>
					<p><div class="tulisan3"><div class="t3"><span class="pu">KUALITAS</span> <span class="ku"> TELUR</span></div></div></p>
				</div>
				</div>
				<!-- <div class="two wide column">
					<a href="/pengguna">
					<button class="ui inverted red button" style="margin-right: 30px;">kembali</button>
					</a>
				</div>
			</div> -->


			<div id="menu-kondisi" >
			
				<div class="ui grid">
				<div class="two wide column">
					</div>
					<div class="six wide column">
					
						<p style="margin-bottom: 35px;"><span class=tx-input><span class="ku">- Umur Bebek</span>
							<br><br></p>
						<p style="margin-bottom: 35px;"><span class=tx-input><span class="ku">- Vitamin Bebek</span>
							<br><br></p>
						<p style="margin-bottom: 35px;"><span class=tx-input><span class="ku">- Kelembapan Kandang</span>
							<br><br></p>	
						<p style="margin-bottom: 35px;"><span class=tx-input><span class="ku">- Suhu Kandang</span>
							<br><br></p>
						<p style="margin-bottom: 35px;"><span class=tx-input><span class="ku">- Pakan Bebek</span>
							<br></p></div>
						
						
					<div class="four wide column" >
							
							<p style="margin-bottom: 35px;"><span class=tx-input><span class="pu">:</span></span><br><br></p>
							<p style="margin-bottom: 35px;"><span class=tx-input><span class="pu">:</span></span><br><br></p>
							<p style="margin-bottom: 35px;"><span class=tx-input><span class="pu">:</span></span><br><br></p>
							<p style="margin-bottom: 35px;"><span class=tx-input><span class="pu">:</span></span><br><br></p>
							<p style="margin-bottom: 35px;"><span class=tx-input><span class="pu">:</span></span><br></p>
							
					</div>
						<div class="two wide column">
							<form action="{{url('kualitasTelurBebek')}}" method="post">
								{{csrf_field()}}
								<div class="fkondisi" >


									
									<select id="jumurbebek" name="umurbebek" class="ui fluid dropdown" required="">
		  							<option value="">- Pilih Umur Bebek -</option>
		  							<option value="U1">umur 0-8 minggu</option>
		  							<option value="U2">umur 8-18 minggu</option>
		  							<option value="U3">umur 18-27 minggu</option>
		  							</select>

								    <br><br>

								    
									

  									<select id="vitaminbebek" name="vitaminbebek" class="ui fluid dropdown" required="">
		  							<option value="">- Pilih Vitamin Bebek -</option>
		  							<option value="V1">VITERNA Plus Organik</option>
		  							<option value="V2">POC NASA</option>
		  							<option value="V3">HORMONIK</option>
		  							</select>

									<br><br>

									<select id="kelembapan" name="kelembapan" class="ui fluid dropdown" required="">
		  							<option value="">- Pilih Kelembapan Kandang -</option>
		  							<option value="K1">Kelembapan kandang dibawah kisaran 60%</option>
		  							<option value="K2">Kelembapan kandang kisaran 60-65%</option>
		  							<option value="K3">Kelembapan kandang diatas kisaran 65%</option>
		  							</select>

									<br><br>


									<select id="suhu" name="suhu" class="ui fluid dropdown" required="">
		  							<option value="">- Pilih Suhu Kandang -</option>
		  							<option value="S1">Dibawah Suhu 27 Derajat Celcius</option>
		  							<option value="S2">Kisaran Suhu 27-39 Derajat Celcius</option>
		  							<option value="S3">Suhu Diatas 39 Derajat Celcius</option>
		  							</select>

		  							<br><br>


									<select id="pakanbebek" name="pakanbebek" class="ui fluid dropdown" required="">
								    <option value="">- Pilih Pakan Bebek -</option>
									 <option  value="P1"  >PAKAN BEBEK A : Jagung 20%, dedak 20%, menir 15 %, kedelai 15%,bungkil kelapa 6%, <br>tepung ikan 10%, tepung darah 10%, tepung tulang 5%.</option>
									 <option  value="P2" >PAKAN BEBEK B : Jagung/dedak/menir 50%, kacang tanah, bungkil kelapa/kacang kedelai 15%,<br> cacahan ikan teri/bekicot 25%, mineral 5%,<br>sisanya campuran vit B12, premix dan daun singkong.</option>
									 <option  value="P3" >PAKAN BEBEK C : Jagung giling 45%, bekatul 15%, bungkil kelapa 5%, <br>kedelai 15%, tepung daun lamtoro 5%, tepung ikan 10%, <br>rumput kering 2%, tepung kerang 2%, tepung tulang 1% dan sedikit garam.</option>
									     
									</select>

									

									


					
						
					<div class="next">
						<button class="fluid ui red button" style="margin-bottom: 100px;margin-top: 40px">LIHAT HASIL</button>
					</div>
					</div>
					</div>
					</div>
		    </form>
		    



					<script type="text/javascript">
					$('.ui.dropdown')
  					.dropdown()
					;
					</script>

		




		

</body>
</html>