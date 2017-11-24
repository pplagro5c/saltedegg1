<!DOCTYPE html>
<html>
<head>
	<title>Selamat datang | Salted Egg Pro</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css.css') }}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" ></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/dataTables.semanticui.min.css') }}">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.semanticui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
    $('#anggota').DataTable();
} );
    </script>
</head>
<body style="margin-bottom:100px ">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<img id="background" src="{{ URL::asset('image/background2.jpg') }}">
	<div id="atas-home">
		<div class="ui grid">
	  		<div class="three wide column">
	  			<div class="ilogo1"> <a href="{{URL('Ketua')}}"><img class="ilogo2" src="{{ URL::asset('image/icon.png') }}"></a>
				<div class="tlogo2"> <span class="ku rb">Salted Egg Pro</span></div></div>
	  		</div>
	  		<div class="two wide column">
	  		</div>
	  		<div class="six wide column" style=" margin-top: 5vh; margin-left: 125px;">
	  		<p><div class="trekap" style="font-family: 'Oswald', sans-serif;"><div class="t3"><span class="ku2">DAFTAR</span> <span class="ku"> pengguna</span></div></div></p>
	  		</div><div class="one wide column"></div>
	  		<div class="two wide column">
	  			<a href="/">
  				<div style="position: relative;margin-left: 75px;">
					  <button class="ui inverted gray button">Kembali</button>
				</div>
				</a>
	  		</div>
			</div>
			



	  		<div class="five wide column" style="margin-top: 50px;margin-left: 430px;margin-right: 400px;">
	  			<div class="ui container" id="mode7" style="border-radius: 20px;background-color: gray;">
	  					<div class="login-judul" style="padding-top: 15px; text-align: center;margin-right: 10px;margin-bottom: 0px;">
							<span class="judulform" style="color: #F9BF3B;">
								
							</span>	
						</div>
	  			<div class="form-anggota" style="padding: 25px;">
	  				<form action="{{url('Anggota')}}" method="post">
					{{csrf_field()}}
						Nama: <br>
				      	<div class="ui fluid left icon input{{ $errors->has('nama') ? ' has-error' : '' }}">
						  <input placeholder="Masukkan nama" type="text" name="nama" value="{{old('nama')}}" >
						  <i class="users icon"></i>
						</div>{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
						<br>Alamat :<br>
						<div class="ui fluid left icon input{{ $errors->has('alamat') ? ' has-error' : '' }}">
						  <input placeholder="Masukkan alamat" type="text" name="alamat" value="{{old('alamat')}}" >
						  <i class="home icon"></i>
						</div>{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
						<br>Telepon :<br>
						<div class="ui fluid left icon input{{ $errors->has('no_telepon') ? ' has-error' : '' }}">
						  <input placeholder="Masukkan telepon" type="text" name="no_telepon" value="{{old('no_telepon')}}" >
						  <i class="call icon"></i> 
						</div>{!! $errors->first('no_telepon', '<p class="help-block">:message</p>') !!}
						<br>Umur :<br>
						<div class="ui fluid left icon input{{ $errors->has('umur') ? ' has-error' : '' }}">
						  <input placeholder="Masukkan umur" type="text" name="umur" value="{{old('umur')}}" >
						  <i class="user icon"></i> 
						</div>{!! $errors->first('umur', '<p class="help-block">:message</p>') !!}
						<br>Nama Pengguna :
						<div class="ui fluid left icon input{{ $errors->has('Username') ? ' has-error' : '' }}">
						  <input placeholder="Masukkan username" type="text" name="Username1" value="{{old('Username1')}}" >
						  <i class="users icon"></i>
						</div>{!! $errors->first('Username', '<p class="help-block">:message</p>') !!}
						<br>Kata Sandi :
						<div class="ui fluid left icon input{{ $errors->has('Password') ? ' has-error' : '' }}">
						  <input placeholder="Masukkan password" type="password" name="Password1" value="{{old('Password1')}}" >
						  <i class="lock icon"></i>
						</div>{!! $errors->first('Password', '<p class="help-block">:message</p>') !!}
						<div class="form-group" style="margin-top: 5px;"><br>
							<input type="submit" value="Daftar" class="fluid ui inverted gray button" style="height: 40px;">
						</div>
					</form>
				</div>
				</div>
	  		</div>
	  	</div>
	



</body>
		


</html>