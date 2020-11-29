@extends('AdminTemplate.index')

@section('title')
	Laporan - 
@endsection

@section ('content')

@if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
 @endif

<div class="row">

<script>
  function startCalc()
  {
    interval = setInterval("calc()",1);
  }
  function calc()
  {
    two = document.autoSumForm.sub_total.value; 
    three = document.autoSumForm.uang_bayar.value; 
    document.autoSumForm.uang_kembali.value = three - two;
    document.autoSumForm.uang_kembali2.value = three - two;
  }
  function stopCalc()
  {
    clearInterval(interval);
  }
  </script>

@php

  // mengdefiniskan variabel dan diset kosong
    $nama_barang = $harga_barang = $jumlah_barang = $total_harga  = $uang_bayar = $uang_kembali = "";

    if (isset($_GET['op'])) {
      
      $nama_barang    = $_POST["nama_barang"];
      $harga_barang   = $_POST["harga_barang"];
      $jumlah_barang  = $_POST["jumlah_barang"];
      $total_harga = $harga_barang*$jumlah_barang;
      //$uang_kembali = $uang_bayar-$total_harga;
    }
@endphp

  <!--mulai transaksi-->
  <div class="col-md-4 card shadow mb-4 p-3 ml-5" >
      <h3 align="center">Produk</h3>
      <form  action="detailTrans?op" method="POST">
        {{csrf_field()}} 

        <!--T E S T -->
        @php
          $con = mysqli_connect("localhost","root","","sinar_grafika");
        @endphp  
        <div class="form-group">
          <label for="exampleFormControlSelect1">Nama Barang</label>
          <select name="nama_barang" id="nama_barang" class="form-control" onchange='changeValue(this.value)' required="">
            @php
              $result = mysqli_query($con, "select * from barang");
              $a = "var harga_barang = new Array();\n;";
              while ($row = mysqli_fetch_array($result)) {
                echo '<option name="nama_barang" value="'.$row['nama_barang'] . '">' . $row['nama_barang'] . '</option>';
                $a .= "harga_barang['" . $row['nama_barang'] . "'] = {harga_barang:'" . addslashes($row['harga_barang'])."'};\n";
              }  
            @endphp
          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Harga Barang</label>
          <input name="harga_barang" type="text" class="form-control" id="harga_barang" readonly="" required="">
        </div>

        <!-- END TEST -->

        <!-- O R I G I N A L
        <div class="form-group">
          <label for="exampleFormControlSelect1">Nama Barang</label>
          <select name="nama_barang" id="nama_barang" class="form-control" id="exampleFormControlSelect1">
            @foreach($data_Barang as $Barang)
              <option value="{{$Barang -> nama_barang}}">{{$Barang -> id_barang}} - {{$Barang -> nama_barang}}</option>
            @endforeach
          </select>
        </div>
      
        
        <div class="form-group">
          <label for="exampleFormControlSelect1">Nama Barang</label>
          <select name="harga_barang" class="form-control" id="exampleFormControlSelect1">
            @foreach($data_Barang as $Barang)
              <option value="{{$Barang -> harga_barang}}">Rp. {{$Barang -> harga_barang}} - {{$Barang -> nama_barang}}</option>
            @endforeach
          </select>
        </div> 
        -->

        <div class="form-group">
          <label for="exampleInputEmail1">Jumlah Barang</label>
          <input name="jumlah_barang" type="text" class="form-control" id="exampleInputEmail1" value="1">
        </div>
        <button type="submit" class="btn btn-primary">Keranjang</button>
      </form>
    
  </div>

	<!--Detail Transaksi-->
    <div class="col-md-6 card shadow mb-4 p-3 float-right ml-5">
      <h3 align="center"> Detail</h3>
      <div class="scrollable">
      <table class="table table-striped">
        <tr align="center">
          <th>Nama Barang</th>
          <th>harga satuan</th>
          <th>Qty</th>
          <th>total</th>
        </tr>
        <form action="detailTrans/create" name="autoSumForm" method="POST">
          {{csrf_field()}}

        <tr align="center">
        	<td><input name="nama_barang" type="text" value="{{$nama_barang}}" readonly=""></td>
        	<td><input name="harga_barang" type="text" value="{{$harga_barang}}" readonly=""></td>
        	<td><input name="jumlah_barang" type="text" value="{{$jumlah_barang}}" readonly=""></td>
          <td><input name="total_harga" type="text" value="{{$total_harga}}" readonly=""> </td>
        </tr>
         
      </table>
    </div>
    
      <div class="form-group">
          <label for="exampleInputEmail1">Sub Total</label>
          <input name="" type="text" class="form-control" id="sub_total" readonly="" value="{{$total_harga}}" onFocus="startCalc();" onBlur="stopCalc();">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Uang Bayar</label>
          <input name="" type="text" class="form-control" id="uang_bayar"  onFocus="startCalc();" onBlur="stopCalc();">
        </div>

        
      <button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#exampleModal">Simpan</button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Uang Kembalian Anda</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body"> <input name="" type="text" class="form-control" id="uang_kembali"  readonly="" onchange="tryNumberFormat(this.form.thirdBox);">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </form>
      </div>
    </div>

    <script type="text/javascript">   
                          @php  
                          echo $a; @endphp 
                          function changeValue(id){  
                            document.getElementById('harga_barang').value = harga_barang[id].harga_barang; 
                          };  
                          </script>




@endsection
