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
    $('#pengguna').DataTable();
} );
    </script>
</head>

<body style="margin-bottom: 350px;">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<img id="background" src="{{ URL::asset('image/background3.jpg') }}">
	<div id="atas-home">
		<div class="ui grid">
	  		<div class="three wide column">
	  			<div class="ilogo1"> <a href="{{URL('Ketua')}}"><img class="ilogo2" src="{{ URL::asset('image/icon.png') }}"></a>
				<div class="tlogo2"> <span class="ku rb">Salted Egg Pro</span></div></div>
	  		</div>
	  		<div class="two wide column">
	  		</div>
	  		<div class="six wide column" style=" margin-top: 5vh; margin-left: 125px;">
	  		<p><div class="trekap" style="font-family: 'Oswald', sans-serif;"><div class="t3"><span class="ku2">DATA</span> <span class="ku"> Telur Bebek</span></div></div></p>
	  		</div><div class="one wide column"></div>
	  		<div class="two wide column">
	  			<a href="/dash">
  				<div style="position: relative;margin-left: 75px;">
					  <button class="ui inverted grey button">Kembali</button>
				</div>
				</a>
	  		</div>
	  	</div>
	</div>	



	<div class="menu-rekap" style="margin-top: 50px; margin-right: -700px;">
		<div class="ui grid">
	  		<div class="ten wide column" style="margin-left: 50px;">	
				<table class="ui  striped  table" id="pengguna" >
				  <thead style="text-align: center;">
				    <tr >
				      <th  rowspan="2">No</th>
				      <th  rowspan="2">Tanggal</th>
				      <th  rowspan="2">Nama</th>
				      <th  rowspan="2">Jenis Bebek</th>
				      <th  rowspan="2">Jumlah Bebek</th>
				      <th  rowspan="2">Harga/telur</th>
				      <th  rowspan="2">Umur Bebek</th>
				      <th  rowspan="2">Pakan Bebek</th>
				      <th  rowspan="2">Vitamin</th>
				      <th  rowspan="2">Kelembapan</th>
				      <th  rowspan="2">Suhu</th>
				      <th  colspan="3">Hasil</th>
				      <th  rowspan="2">Aksi</th>
				    </tr>
				 <tr>
			    	<th>Jumlah Telur/3bln</th>
			    	<th>Total Penjualn</th>
			    	<th>Kualitas Telur</th>
			    </tr>

			</thead>
			  <tbody style="text-align: center;">
			  <?php $no=1; ?>
			  @foreach($telurbebeks as $telurbebeks)
			    <tr>
			    	<th>{{$no++}}</th>
			    	<td>{{ Carbon\Carbon::parse($telurbebeks->tanggalpakai)->format('d-m-Y ') }}</td>
				    <td>{{$telurbebeks->pakai->nama}}</td>
				    <td>{{$telurbebeks->jenisbebek}}</td>
				    <td>{{$telurbebeks->jumlahbebek}} ekor</td>
				    <td>Rp. {{$telurbebeks->harga}}</td>
				    <td>{{$telurbebeks->umurbebek}}</td>
				    <td>{{$telurbebeks->pakanbebek}}</td>
				    <td>{{$telurbebeks->vitaminbebek}}</td>
				    <td>{{$telurbebeks->kelembapan}}</td>
				    <td>{{$telurbebeks->suhu}}</td>
				    <td>{{$telurbebeks->hasiltelur}}</td>
				    <td>{{$telurbebeks->totalpenjualan}}</td>
				    <td>{{$telurbebeks->hasilkualitas}}</td>
				    <td>
				    	<form method="POST" action="/hapustelurbebek/{{$telurbebeks->id_telurbebek}}" accept-charset="UTF-8">
				                <input name="_method" type="hidden" value="DELETE">
				                <input name="_token" type="hidden" value="{{ csrf_token() }}">
							    		<input onclick="return confirm('Anda yakin akan menghapus data ini ?');" type="submit" class="ui red button" tabindex="0" value="Hapus"
										/> 
				            </form>
				    </td>
			    </tr>
			    @endforeach
			 </tbody>
			</table>
			</div>
	  		<div class="one wide column"></div>
	  	</div>
	</div>	









	</body>
	</html>