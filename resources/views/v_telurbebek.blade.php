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

<div class="transparan1"><img id="background1" src="{{ URL::asset('image/background3.jpg') }}" ></div>
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
                <span class="ku"></span>
                <span class="pu"><br></span>
                <span class="ku"></span>
                <span class="pu"><br></span>

            </div>
            </div>


<div id="menu-kondisi1" style="margin-top: -50px;">
            
                <div class="ui grid">
                <div class="two wide column">
                    </div>
                    <div class="six wide column">
                        
                            <p style="margin-bottom: 30px;">
                            <span class=tx-input1><span class="ku">JUMLAH</span><span class="pu"> BEBEK</span></span></p>
                            <p style="margin-bottom: 30px;">
                            <span class=tx-input1><span class="ku">Harga</span><span class="pu"> Jual /telur</span></span></p>
                    </div>
                    <div class="four wide column" >
                            <p style="margin-bottom: 30px;"><span class=tx-input1><span class="pu">:</span></span></p>
                            <p style="margin-bottom: 30px;"><span class=tx-input1><span class="pu">:</span></span></p>
                    </div>



                        <div class="two wide column">
                            <form action="{{url('jumlahhargabebek')}}" method="post">
                                {{csrf_field()}}
                                <div class="fkondisi">
                                            <div class="ui right labeled input" style="margin-bottom: 25px;">
                                        <input placeholder="Jumlah Bebek" type="number" name="jumlahbebek" value="">
                                        <div class="ui basic label">
                                            Ekor
                                        </div>
                                    </div> 
                                    <span class="ku">  <span style="color: red;">*</span>yang dimiliki</span>
                                    

                                    <div class="ui right labeled input" style="margin-bottom: 25px;">
                                        <input placeholder="Harga Telur" type="number" name="harga" value="">
                                        <div class="ui basic label" style="width: 58px;">
                                            Rp.
                                        </div>
                                    </div> 
                                    <span class="ku">  <span style="color: red;">*</span>Harga per butir telur</span>



                            </div>
                        </div>

                    </div>
                    <div class="next1">
                    <br>
                    <br>
                                <button class="ui red animated button" tabindex="0">
                                <div class="visible content">Pilih Kondisi</div>
                                <div class="hidden content">
                                <div class="text">NEXT</div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </button>
                    </form>



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