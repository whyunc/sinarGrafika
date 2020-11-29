<h2 align="center"> CV Sinar Grafika</h2>
<h3 align="center"> Laporan Penjualan CV Sinar Grafika</h3>
<p align="center">Jl. Margonda Raya No.334, Kemiri Muka, Kecamatan Beji, Kota Depok, Jawa Barat 16424</p>
<p align="center">Telp: 0813-8172-5631</p>
<table class="table" 
style="
	font-family: Arial, Helvetica, sans-serif;
	color: #666;
	text-shadow: 1px 1px 0px #fff;
	background: #eaebec;
	border: #ccc 1px solid;
">
	<thead>
		<tr>
			<th>ID </th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Qty</th>
			<th>Total</th>
			<th>Waktu</th>
		</tr>
	</thead>
	<thead>
		@foreach($Transaksi as $transaksi)
		<tr>
			<td>{{$transaksi -> id_transaksi}}</td>
			<td>{{$transaksi -> nama_barang}}</td>
			<td>{{$transaksi -> harga_barang}}</td>
			<td>{{$transaksi -> jumlah_barang}}</td>
			<td>{{$transaksi -> total_harga}}</td>
			<td>{{$transaksi -> created_at}}</td>
		</tr>
		@endforeach
	</thead>	
</table>

<style type="text/css">
	table th {
	  padding: 15px 35px;
	  border-left:1px solid #e0e0e0;
	  border-bottom: 1px solid #e0e0e0;
	  background: #ededed;
	}
	table th:first-child{  
	  border-left:none;  
	}
	 
	table tr {
	  text-align: center;
	  padding-left: 20px;
	}
	 
	table td:first-child {
	  text-align: left;
	  padding-left: 20px;
	  border-left: 0;
	}
	 
	table td {
	  padding: 15px 35px;
	  border-top: 1px solid #ffffff;
	  border-bottom: 1px solid #e0e0e0;
	  border-left: 1px solid #e0e0e0;
	  background: #fafafa;
	  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
	}
	 
	table tr:last-child td {
	  border-bottom: 0;
	}
	 
	table tr:last-child td:first-child {
	  -moz-border-radius-bottomleft: 3px;
	  -webkit-border-bottom-left-radius: 3px;
	  border-bottom-left-radius: 3px;
	}
	 
	table tr:last-child td:last-child {
	  -moz-border-radius-bottomright: 3px;
	  -webkit-border-bottom-right-radius: 3px;
	  border-bottom-right-radius: 3px;
	}
</style>

