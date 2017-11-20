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
                    <div class="ilogo3"><img class="ilogo4" src="{{ URL::asset('image/telurasinn.png') }}"></div>
                    <p><div class="tulisan3"><div class="t3"><span class="pu">TELUR</span> <span class="ku">ASIN</span></div></div></p>
                </div>


                <div class="subheader">
            <div class="ui center aligned ">

                <span class="pu">Dengan Jumlah Telur <span class="lu" style="margin-left: 10px;">
                {{ Session::get('jumlahtelur') }}</span></span><span class="ku" style="margin-left: 10px;">dan pemilihan kualitas yang diingin kan adalah<span class="lu">
                {{ Session::get('kualitas') }}</span></span><br><br><br>
                <span class="pu">Menghasilkan Kebutuhan Bahan Sebagai Berikut : </span>
                </div>
                </div>
               <!--  <div class="two wide column">
                    <a href="/home">
                    <button class="ui inverted red button" style="margin-right: 30px;">kembali</button>
                    </a>
                </div> -->
            </div>



            <div id="menu-kondisi" style="margin-top: -70px;margin-left: 285px;">
            
                <div class="ui grid">
                <div class="two wide column">
                    </div>
                    <div class="four wide column">
                        <p style="margin-bottom: 33px;"><span class=tx-input><span class="ku">> Jumlah Garam</span>
                            <br><br></p>
                        <p style="margin-bottom: 33px;"><span class=tx-input><span class="ku">> Bubuk Baru Bata</span>
                            <br><br></p>
                        <p style="margin-bottom: 33px;"><span class=tx-input><span class="ku">> Jumlah air</span>
                            <br><br></p>
                        <p style="margin-bottom: 33px;"><span class=tx-input><span class="ku">> Jumlah Hari</span>
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
                            {{ Session::get('jumlahgaram') }}</span></span><br></p>
                            <p style="margin-bottom: 42px;"><span class=tx-hasil><span class="ku">
                            {{ Session::get('bubukbata') }}</span></span><br> </p>
                            <p style="margin-bottom: 42px;"><span class=tx-hasil><span class="ku">
                            {{ Session::get('jumlahair') }}</span></span><br></p>
                            <p style="margin-bottom: 42px;"><span class=tx-hasil><span class="ku">
                            {{ Session::get('jumlahhari') }}</span></span></p>
                        </div>

                        <div class="two wide column" style="margin-left: 1px;">
                            <p style="margin-bottom: 42px;margin-top: 5px;"><span class=tx-hasil><span class="ku">
                            Kg</span></span><br></p>
                            <p style="margin-bottom: 42px;"><span class=tx-hasil><span class="ku">
                            Kg</span></span><br> </p>
                            <p style="margin-bottom: 42px;"><span class=tx-hasil><span class="ku">
                            Liter</span></span><br></p>
                            <p style="margin-bottom: 42px;"><span class=tx-hasil><span class="ku">
                            Hari
                    </div>
                     
                     </div>
                    







<div style="text-align: center;margin-top: 10px;margin-left: -280px;">
                        <div class="ui float right buttons">
                            <a href="{{URL('simpanTelurAsin')}}"><button class="ui inverted red button" style="width: 110px;">Simpan</button></a>
                                
                        </div>
                        <div class="ui float left buttons">
                            <button type="button" class="ui inverted red button" onclick="window.print()" >Cetak Hasil</button></a>
                                
                        </div>
                    </div>




</body>
</html>
