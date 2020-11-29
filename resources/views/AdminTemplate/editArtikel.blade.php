@extends('AdminTemplate.index')

@section('title')
	Edit Artikel -
@endsection

@section('content')
  <script type="text/javascript">
    $(document).ready(function(){
     // Format mata uang.
     $( '.uang' ).mask('000.000.000', {reverse: true});
   })
  </script>

	@if(session('sukses'))
	    <div class="alert alert-success" role="alert">
	      {{session('sukses')}}
	    </div>
  	@endif

  	<div class="row card-body justify-content-center">
	  	 <form action="/Artikel/{{$JeBarang->id_jenis}}/update" method="POST" enctype="multipart/form-data" class="col-lg-8 card shadow-md-4 p-5">
	  	 	<h1 align="center">Edit Data</h1>
                {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Kategori</label>
                  <select name="id_kategori" class="form-control" id="exampleFormControlSelect1">                    
                      @foreach($KaBarang as $KaBarang)
                      <option value="{{$KaBarang -> id_kategori}}">{{$KaBarang -> nama_kategori}}</option>
                      @endforeach
                  </select>
                  
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextArea1">Image</label>
                  <input name="image" type="file" class="form-control" id="exampleFormControlTextArea1" value="{{$JeBarang -> image}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input name="judul" type="text" class="form-control" id="exampleInputEmail1" value="{{$JeBarang -> judul}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga</label>
                  <input name="harga_Art" type="text" class="form-control uang" id="exampleInputEmail1" value="{{$JeBarang -> harga_Art}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Deskripsi</label>
                  <textarea name="deskripsi" type="text" class="form-control" id="exampleInputEmail1"> {{$JeBarang -> deskripsi}}</textarea>
                </div>
                
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>

              </div>
            </form>
	</div>
@endsection