@extends('AdminTemplate.index')

@section('title')
	Barang - 
@endsection

@section('search')
  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="/Barang">
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

<div class="row">

	<!-- Button trigger modal -->
    <div class="col-6 float-right">
      <h1> Tabel Barang  </h1>
      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
        Tambah Data
      </button>
    </div>

    <div class="col-lg-12">
      <div class="scrollable1">
      	<div class="table-responsive card shadow mb-4">
      		<table class="table table-bordered table-hover table-striped">
      			<tr align="center">
      				<th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th class="">Action</th>
                </tr>

                @foreach($data_Barang as $Barang)
                <tr>
                	<td>{{$Barang -> id_barang}}</td>
                	<td>{{$Barang -> nama_barang}}</td>
                	<td>Rp. {{number_format($Barang -> harga_barang)}}</td>
                	<td align="center">
                		<a href="Barang/{{$Barang -> id_barang}}/edit" class="btn btn-info btn-xs">Edit</a>
                		<a href="Barang/{{$Barang -> id_barang}}/delete" class="btn btn-danger btn-xs" onclick="return confirm('yakin ingin di hapus ?')">Delete </a>
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
	              	<form action="Barang/create" method="POST">
	                	{{csrf_field()}}
	                	<div class="form-group">
	                  		<label for="exampleInputEmail1">Nama Barang</label>
	                  		<input name="nama_barang" type="text" class="form-control" placeholder="Masukkan Nama Barang" required="true">
	                	</div>

		                <div class="form-group">
		                  <label for="exampleInputEmail1">Harga Barang</label>
		                  <input name="harga_barang" type="text" class="form-control" placeholder="Masukkan Harga Barang" required="true">
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
</div>
    

@endsection