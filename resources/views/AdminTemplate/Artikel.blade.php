@extends('AdminTemplate.index')

@section('title')
  Komponen Artikel - 
@endsection

@section('search')
  <script type="text/javascript">
    $(document).ready(function(){
     // Format mata uang.
     $( '.uang' ).mask('000.000.000', {reverse: true});
   })
  </script>


  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="/Artikel">
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
        <h1> Tabel Artikel  </h1>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
          Tambah Data
        </button>
      </div>

            <div class="col-lg-12">
              <div class="scrollable1">
              <div class="table-responsive card shadow mb-4">
                <table class="table table-bordered table-hover table-striped">
                  <tr align="center">
                    <th>ID Artikel</th>
                    <th>ID Kategori</th>
                    <th>Image</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Desc</th>
                    <th class="">Action</th>
                  </tr>
                  
                  @foreach($data_JeBarang as $JeBarang)
                  <tr>
                    <td>{{$JeBarang -> id_jenis}}</td>
                    <td>{{$JeBarang -> id_kategori}}</td>
                    <td>{{$JeBarang -> image}}</td>
                    <td>{{$JeBarang -> judul}}</td>
                    <td>Rp. {{$JeBarang -> harga_Art}}</td>
                    <td>{{$JeBarang -> deskripsi}}</td>
                    <td align="center">
                            <a href="Artikel/{{$JeBarang->id_jenis}}/edit" class="btn btn-info btn-xs">Edit</a>
                            <a href="Artikel/{{$JeBarang->id_jenis}}/delete" class="btn btn-danger btn-xs" onclick="return confirm('yakin ingin di hapus ?')">Delete </a>
                          </td>
                  </tr>
            @endforeach
                 
                </table>
              </div>
              </div>
            </div>
          </div>

          <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Jenis Barang</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="Artikel/create" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Kategori</label>
                  <select name="id_kategori" class="form-control" id="exampleFormControlSelect1">                    
                      @foreach($data_KaBarang as $KaBarang)
                      <option value="{{$KaBarang -> id_kategori}}">{{$KaBarang -> nama_kategori}}</option>
                      @endforeach
                  </select>
                  
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextArea1">Image</label>
                  <input name="image" type="file" class="form-control" id="exampleFormControlTextArea1">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input name="judul" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Judul Artikel">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga</label>
                  <input name="harga_Art" type="text" class="form-control uang" id="exampleInputEmail1" placeholder="Masukkan Harga Artikel">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Deskripsi</label>
                  <textarea name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Deskripsi Artikel"> </textarea>
                </div>
                
              
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>

              </div>
            </form>
          </div>
        </div>
      </div>
@endsection