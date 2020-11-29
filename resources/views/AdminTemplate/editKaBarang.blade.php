@extends('AdminTemplate.index')

@section('title')
	Edit Artikel Kategori -
@endsection

@section('content')
	@if(session('sukses'))
	    <div class="alert alert-success" role="alert">
	      {{session('sukses')}}
	    </div>
  	@endif

  	<div class="row card-body justify-content-center">
	  	 <form action="/KaBarang/{{$KaBarang->id_kategori}}/update" method="POST" class="col-lg-8 card shadow-md-4 p-5" >
	        <h1 align="center">Edit Data</h1>

	        {{csrf_field()}}
	        <div class="form-group">
	        	<label for="exampleInputEmail1">ID Kategori</label>
	        	<input name="id_kategori" type="text" class="form-control" id="exampleInputEmail1" value="{{$KaBarang -> id_kategori}}">
	        </div>

	        <div class="form-group">
	        	<label for="exampleInputEmail1">Nama Kategori</label>
	        	<input name="nama_kategori" type="text" class="form-control" id="exampleInputEmail1" value="{{$KaBarang -> nama_kategori}}">
	        </div>

	        <div class="modal-footer"> 
	        	<button type="submit" class="btn btn-primary">update</button>
	        </div>
	    </form>
	</div>
@endsection