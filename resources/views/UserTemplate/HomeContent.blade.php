@extends('UserTemplate.MasterLayout')

@section('search')
<div class="header_top_right">
	<div class="search_box">
		<form method="GET" action="/Home">
			<input name="search"type="text" placeholder="search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
		</form>
	</div>
	<div class="clear"></div>
</div>
@endsection

@section('content')
<div class="main">
  	<div class="wrap">
      <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Produk</h3>
    		</div>
    	</div>
	      <div class="section group">
				
				@foreach($data_JeBarang as $JeBarang)
				<div class="grid_1_of_5 images_1_of_5 ">
					<a href="#"><img src={{asset('images/'. $JeBarang ->image)}} alt="" /></a>
					 <h2><a href="/Home/{{$JeBarang->id_jenis}}/Preview">{{$JeBarang -> judul}}</a></h2>
					<div class="price-details">
					       		<div class="add-cart">								
									<h4><a href="/Home/{{$JeBarang->id_jenis}}/Preview">View More</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>				     
				</div>
				@endforeach

			</div>
			
       </div>
  </div>

  @endsection