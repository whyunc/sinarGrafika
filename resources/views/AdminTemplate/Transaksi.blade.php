@extends('AdminTemplate.index')

@section('title')
	Transaki - 
@endsection

@section('search')
	<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="/Transaksi">
            <div class="input-group">
              <input name="search" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
@endsection

@section('content')
@if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
 @endif


	<!-- Button trigger modal -->
    <div class="col-lg-12 mt-5 ">
      <h1> Tabel Transaksi  </h1>
      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
        Tambah Data
      </button>
      <a href="Transaksi/exportPDF" class="btn btn-primary btn-sm"> Export PDF</a>
    </div>

    <div class="col-lg-12">
      <div class="scrollable1">
      	<div class="table-responsive card shadow mb-4">
      		<table class="table table-bordered table-hover table-striped">
      			<tr align="center">
      				<th>ID Transaksi</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Total Harga</th>
                    <th>Waktu Transaksi</th>
                    <th class="">Action</th>
                </tr>

                @foreach($data_Transaksi as $Transaksi)
                <tr>
                	<td>{{$Transaksi -> id_transaksi}}</td>
                	<td>{{$Transaksi -> nama_barang}}</td>
                	<td>Rp. {{number_format($Transaksi -> harga_barang)}}</td>
                	<td>{{$Transaksi -> jumlah_barang}}</td>
                	<td>Rp. {{number_format($Transaksi -> total_harga)}}</td>
                	<td>{{$Transaksi -> created_at}}</td>
                	<td align="center">
                		<a href="Transaksi/{{$Transaksi -> id_transaksi}}/delete" class="btn btn-danger btn-xs" onclick="return confirm('yakin ingin di hapus ?')">Delete </a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
      </div>
    </div>

    
    

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    	<div class="modal-dialog" role="document">
          	<div class="modal-content">
	            <div class="modal-header">
	              	<h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Barang</h5>
	              	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                	<span aria-hidden="true">&times;</span>
	              	</button>
	            </div>
	            <div class="modal-body">
	              	<form action="Transaksi/create" method="POST">
	                	{{csrf_field()}}
	                	<div class="form-group">
			                  <label for="exampleFormControlSelect1">Nama Barang</label>
			                  <select name="nama_barang" class="form-control" id="exampleFormControlSelect1">               
			                      @foreach($data_Barang as $Barang)
			                      <option value="{{$Barang -> nama_barang}}">{{$Barang -> nama_barang}}</option>
			                      @endforeach
			                  </select>
                      </div>

		                <div class="form-group">
			                  <label for="exampleFormControlSelect1">Harga Barang</label>
			                  <select name="harga_barang" class="form-control" id="exampleFormControlSelect1">               
			                      @foreach($data_Barang as $Barang)
			                      <option value="{{$Barang -> harga_barang}}">{{$Barang -> nama_barang}}</option>
			                      @endforeach
			                  </select>
			             </div>

			            <div class="form-group">
			            	<label for="exampleInputEmail1">Jumlah Barang</label>
			            	<input name="jumlah_barang" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul Artikel">
			            </div>

			            <div class="form-group">
			            	<label for="exampleInputEmail1">Total Harga</label>
			            	<input name="total_harga" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul Artikel">
			            </div>

		              	<div class="modal-footer">
		                	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		                	<button type="submit" class="btn btn-primary">Save</button>
		              	</div>
	            	</form>
	        	</div>
    		
		</div>
	</div>
</div>

@endsection