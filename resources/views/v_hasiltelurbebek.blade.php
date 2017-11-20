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


			<div class="subheader">
            <div class="ui center aligned ">

                <span class="pu">Selamat datang di </span><span class="ku">SALTED EGG PRO<br>
                </span><br>
                <span class="pu"></span>
                <span class="ku">Menentukan Kualitas Telur Serta Penjualan Telur Selama 3 Bulan Sesuai Dari Pilihan</span>
                <span class="pu"><br></span>
                <span class="ku"></span>
                <span class="pu"><br></span>
              
            </div>
            </div>


			<div id="menu-kondisi" style="margin-top: -70px;margin-left: 240px;">
            
                <div class="ui grid">
                <div class="two wide column">
                    </div>
                    <div class="six wide column">
                        <p style="margin-bottom: 33px;"><span class=tx-input><span class="ku">> Total Bobot Keseluruhan</span>
                            <br><br></p>
                        <p style="margin-bottom: 33px;"><span class=tx-input><span class="ku">> Jumlah Telur /3bln</span>
                            <br><br></p>
                        <p style="margin-bottom: 33px;"><span class=tx-input><span class="ku">> Total Penjualan</span>
                            <br><br></p>
                        <p style="margin-bottom: 33px;"><span class=tx-input><span class="ku">> Kualitas Telur</span>
                            <br></p> 
                    </div>   

                <div class="one wide column" >
                            <p style="margin-bottom: 33px;"><span class=tx-input><span class="pu">:</span></span><br><br></p>
                            <p style="margin-bottom: 33px;"><span class=tx-input><span class="pu">:</span></span><br><br></p>
                            <p style="margin-bottom: 33px;"><span class=tx-input><span class="pu">:</span></span><br><br></p>
                            <p style="margin-bottom: 33px;"><span class=tx-input><span class="pu">:</span></span><br></p>

                            </div>
                
                        <div class="one wide column">
                            <p style="margin-bottom: 42px;margin-top: 5px;"><span class=tx-hasil><span class="ku">
                            {{ Session::get('totalbobot') }}</span></span><br></p>
                            <p style="margin-bottom: 42px;"><span class=tx-hasil><span class="ku">
                            {{ Session::get('hasiltelur') }} </span></span><br> </p>
                            <p style="margin-bottom: 42px;"><span class=tx-hasil><span class="ku">
                            {{ Session::get('totalpenjualan') }} </span></span><br></p>
                            <p style="margin-bottom: 42px;"><span class=tx-hasil><span class="ku">
                            {{ Session::get('hasilkualitas') }}</span></span></p>
                        </div>

                        <div class="two wide column" style="margin-left: 1px;">
                            <p style="margin-bottom: 42px;margin-top: 5px;"><span class=tx-hasil><span class="ku">
                            </span></span><br></p>
                            <p style="margin-bottom: 42px;"><span class=tx-hasil><span class="ku">
                            </span></span><br> </p>
                            <p style="margin-bottom: 42px;"><span class=tx-hasil><span class="ku">
                            </span></span><br></p>
                            <p style="margin-bottom: 42px;"><span class=tx-hasil><span class="ku">
                            
                    </div>
                     
                     </div>
                    







<div style="text-align: center;margin-top: 10px;margin-left: -200px;">
                        <div class="ui float right buttons">
                            <a href="{{URL('simpanTelurBebek')}}"><button class="ui inverted red button" style="width: 110px;">Simpan</button></a>
                                
                        </div>
                        <div class="ui float left buttons">
                            <button type="button" class="ui inverted red button" onclick="window.print()" >Cetak Hasil</button></a>
                                
                        </div>
                    </div>


</body>
</html>