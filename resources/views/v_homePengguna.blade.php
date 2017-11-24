<!DOCTYPE html>
<html>
<head>
	<title>
		Selamat datang | Salted Egg Pro
	</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css.css') }}">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>


<body>
	<img id="background" src="{{ URL::asset('image/background2.jpg') }}">

	<<div id="atas-home">
		<div class="ui grid">
		  <div class="six wide column">
		  			<div class="ilogo1"> <img class="ilogo2" src="{{ URL::asset('image/icon.png') }}"></a>
				<div class="tlogo2"> <span class="ku rb"></span></div></div>
	  		</div>
		  <div class="seven wide column">
		  			<p><div class="judulawal" ><span class="ku">SALTED EGG PRO</span> </div></p>
					<p><div class="subjudulawal"><span class="ku2"></span><br></div></p>
					<p><div class="subjudulawall"><span class="ku2" style="margin-left: -40px">Simulasi Kualitas Telur Bebek dan Telur Asin</span></div></p>

		  </div>
			<div class="two wide column">
			<div class="ilogo1"> <img class="ilogo2" src="{{ URL::asset('image/user2.png') }}">
	  		</div>
				<div class="ui buttons" style="margin-top: 15px;margin-left: -8px;">

                      <button id="myBtn" class="ui inverted olive button">Profil</button>
                      
                      <a href="/masuk">
                      <button class="ui inverted red button">Keluar</button>
                      </a>
                </div>

			</div>
		</div>


		<div class="subheader">
			<div class="ui center aligned ">
				<marquee scrollamount="25"><span class="puu">---SELAMAT DATANG DI </span><span class="ku">SALTED EGG PRO---<br></span></marquee>
				<span class="pu"></span><span class="ku"> </span><span class="pu"><br></span><span class="ku">
				</span><span class="pu"> <br> </span><span class="ku">
				 </span><span class="pu"><br>
				 </span><span class="ku"></span><span class="pu"> <br></span></div>
			</div>

			@if(Session::has('message'))
        	<div class="six wide column">
            <div class="alert1">
                {{ Session::get('message') }}
            </div>
        	</div>
        	@endif


			<div class="menuuser">
				<div class="ui grid">
					<div class="five wide column"><a href="{{URL ('analisTelurBebek') }}"> <img class="menu1" id="mode6" src="{{ URL::asset('image/icontelurbebek.png') }}"></a></div>

					<div class="five wide column"><a href="{{ URL ('analisTelurAsin') }}"> <img class="menu2" id="mode6" src="{{ URL::asset('image/icontelurasin.png') }}"></a></div>

					<div class="five wide column"><a href="{{ URL ('/info') }}"> <img class="menu3" id="mode6" src="{{ URL::asset('image/info.png') }}"></a></div>

				</div>
			</div>
			</div>
			<div class="tmenu" style="margin-top: 20px;">
		<div class="ui grid">
		<div class="six wide column" ></div>
				<div class="two wide column" style="margin-left: -143px;">
				
				<div class="tmenu1"> <span class="ku2">Simulasi Telur Bebek</span></div>
				</div>
			<div class="one wide column"></div>
				<div class="two wide column" style="margin-left: -10px;">
				
				<div class="tmenu1"> <span class="ku2">Simulasi Telur Asin</span></div>
				</div>
			<div class="one wide column"></div>
			<div class="four wide column" style="margin-left: -100px;">
				<div class="tmenu1"><span class="ku2">Informasi</span></div>
			</div>
			<div class="five wide column"></a></div>
		</div>
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


		<script >
			$('.ui.modal')
			.modal()
			;
		</script>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="position: relative;" >
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Ubah Profil</h2>
    </div><br>
    <div class="modal-body">
    	<form  action="/profil" method="post">
		{{csrf_field()}}
    	Nama : <br>
      	<div class="ui fluid left icon input">
		  <input disabled type="text" name="nama" value="{{$pengguna->nama}}" required="">
		  <i class="users icon"></i>
		</div><br>
		Alamat :<br>
		<div class="ui fluid left icon input">
		  <input placeholder="Masukkan alamat" type="text" name="alamat" value="{{$pengguna->alamat}}" required="">
		  <i class="home icon"></i>
		</div><br>
		Telepon :<br>
		<div class="ui fluid left icon input">
		  <input placeholder="Masukkan telepon" type="text" name="no_telepon" value="{{$pengguna->no_telepon}}" required="">
		  <i class="call icon"></i> 
		</div><br>
		Umur :<br>
		<div class="ui fluid left icon input">
		  <input placeholder="Masukkan umur" type="text" name="umur" value="{{$pengguna->umur}}" required="">
		  <i class="user icon"></i> 
		</div><br>
		Kata Sandi :<br>
		<div class="ui fluid left icon input">
		  <input placeholder="Masukkan password" type="text" name="password" value="{{$pengguna->password}}" required="">
		  <i class="users icon"></i>
		</div><br>
		<button class="ui fluid gray button" value="submit" >Simpan</button><br>
		</form>
    </div>
    <div class="modal-footer">
    </div>
  </div>

</div>




<script src="{{ URL::asset('/js/jquery-1.12.4.min.js') }}" type="text/javascript"></script> 
    <script src="{{ URL::asset('/js/wow.min.js') }}" type="text/javascript"></script> 
    <script src="{{ URL::asset('/js/materialize.min.js') }}" type="text/javascript"></script> 

<script type="text/javascript">
	
			new WOW().init();
         $('.alert1').delay(2400).fadeOut(500)

</script>



<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }

}
</script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582H6x5iDAuv2BewvnPtn1NFKuIXf%2fkSL4dSEiD7dmKe5wRYkx9D3ZRDwSyD4YApEtLtWArj%2f4CNygWSJlhUhXLYKqs2hn2r%2f%2f91Hxc7iVw4bbH%2baNqC1L9j8igLR1zLvurZ5ZLvVEy5%2b2AYNi6I7NjBunECMIBvG%2bThC7jp6ioXWOL2jaMEyXRhSBsEanq5E6zOZfmESxh4ZuSMC7HtSbfvdoA4ImBz1%2bnS6NGhJgaCHNic0HVG0FmXp3oS2StcARqQLpVNu1ffkx9zF26Bz7BdhY3QjCKpZNpGUvvwkn5fypXNJBCcoHtKgQtMoMoGE8LxgSrOPar0kuQj%2fLIQKf4VcSKhhtRMicI3fwmfwsWLoxrsd7QFvjuz8z9QwurGJC2u03BJPdThev" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

	</body>
	</html>