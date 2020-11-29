@extends('AdminTemplate.index') 

@section('title')
  Kategori Artikel - 
@endsection

@section('search')
  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="/KaBarang">
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
      <div class="col-6 ">
        <h1> Tabel Artikel Kategori </h1>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
          Tambah Data
        </button>
      </div>


      <!--mulai memanggil tabel database-->
      <div class="col-lg-12 ">
        <div class="scrollable1">
        <div class="table-responsive card shadow mb-4">
          <table class="table table-bordered table-hover table-striped">
            <tr align="center">
              <th>ID Kategori</th>
              <th>Nama Kategori</th>
              <th>Action</th>
            </tr>
            @foreach($data_KaBarang as $KaBarang)
            <tr>
              <td>{{$KaBarang -> id_kategori}}</td>
              <td>{{$KaBarang -> nama_kategori}}</td>
              <td align="center">
                      <a href="KaBarang/{{$KaBarang->id_kategori}}/edit" class="btn btn-info btn-xs">Edit</a>
                      <a href="KaBarang/{{$KaBarang->id_kategori}}/delete" class="btn btn-danger btn-xs" onclick="return confirm('yakin ingin di hapus ?')">Delete </a>
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
              <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Kategori Barang</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="KaBarang/create" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Kategori</label>
                  <input name="id_kategori" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan ID Kategori" required="true">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Kategori</label>
                  <input name="nama_kategori" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Masukkan Nama Kategori">
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