@extends('AdminTemplate.index')

@section('title')
	Edit Barang -
@endsection

@section('content')
	@if(session('sukses'))
	    <div class="alert alert-success" role="alert">
	      {{session('sukses')}}
	    </div>
  	@endif

  	<div class="row card-body justify-content-center">
	  	 <form action="/Barang/{{$Barang->id_barang}}/update" method="POST" class="col-lg-8 card shadow-md-4 p-5" >
	        <h1 align="center">Edit Data</h1>

	        {{csrf_field()}}
	        <div class="form-group">
	        	<label for="exampleInputEmail1">Nama Barang</label>
	        	<input name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" value="{{$Barang -> nama_barang}}">
	        </div>

	        <div class="form-group">
	        	<label for="exampleInputEmail1">Harga Barang</label>
	        	<input name="harga_barang" type="text" class="form-control" id="exampleInputEmail1" value="{{$Barang -> harga_barang}}">
	        </div>

	        <div class="modal-footer"> 
	        	<button type="submit" class="btn btn-primary">update</button>
	        </div>
	    </form>
	</div>
@endsection