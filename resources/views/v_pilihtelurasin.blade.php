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
				<!-- <div class="two wide column">
					<a href="/home">
					<button class="ui inverted red button" style="margin-right: 30px;">kembali</button>
					</a>
				</div> -->
			</div>

<div style="padding-left: 300px;position: relative;margin-top: 5vh;font-size: 20px;" ></div>

		<div style="position: relative;margin-left: -20px;margin-top: 50px;">
			<div class="ui grid" style="margin-bottom: 200px;">
				<div class="five wide column"></div>
				<div class="eight wide column">
					
					<img src="{{ URL::asset('image/telurasin3.png') }}" style="width:200px ;height:265px ;margin-left:-50px; position: absolute;">
					<img src="{{ URL::asset('image/telurasin2.png') }}" style="width:200px ;height:265px ;margin-left: 165px; position: absolute; ">
					<img src="{{ URL::asset('image/telurasin1.png') }}" style="width:200px ;height:265px ;margin-left: 380px; position: absolute; ">
				</div>
				<div class="three wide column"></div>
			</div>	
		</div>

		<form action="{{url('kualiTasTelurAsin') }}" method="post">
			{{csrf_field()}}
			<div style="position: relative;">
				<div class="ui grid">
					<div class="five wide column"></div>
					<div class="eight wide column">
						<div class="field" style="margin-left:10px;margin-top: 90px; position: absolute;">
							<div class="ui toggle checkbox">
								<input name="kualitas" type="radio" value="normal" required="" >
								<label></label>
							</div>
						</div>

						<div class="field" style="margin-left: 225px;margin-top: 90px;position: absolute;" >
							<div class="ui toggle checkbox">
								<input name="kualitas" type="radio" value="medium" required="">
								<label></label>
							</div>
						</div>

						<div class="field" style="margin-left: 445px;margin-top: 90px;position: absolute;" >
							<div class="ui toggle checkbox">
								<input name="kualitas" type="radio" value="deep" required="">
								<label></label>
							</div>
						</div>
					</div>

				</div>
			</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
			<div class="next">
						<button class=" ui red button" style="margin-bottom: 100px;margin-top: 40px;margin-left: 20px;">LIHAT HASIL</button>
					</div>

			
		</form>




</body>
</html>