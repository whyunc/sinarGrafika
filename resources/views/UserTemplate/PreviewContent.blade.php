@extends('UserTemplate.MasterLayout2')

@section('preview')

<div class="main">
   	 	<div class="wrap">
   	 		<div class="content_top">
    			<div class="back-links">
    				<p><a href={{asset("Home")}}>Home</a> &gt;&gt;&gt;&gt; <a href="#" class="active">Preview</a></p>
    	    	</div>
    			<div class="clear"></div>
    		</div>
	   	 	<div class="section group">
				<div class="cont-desc span_1_of_2">
					<div class="product-details">				
						<div class="grid images_3_of_2">
							<img src={{asset('images/'. $data_JeBarang ->image)}} alt="" />
					  	</div>
						<div class="desc span_3_of_2">
							<h2>{{$data_JeBarang -> judul}}</h2>				
							<div class="price">
								<p>Price: <span>Rp. {{$data_JeBarang -> harga_Art}}</span></p>
							</div>
					 		<div class="product_desc" align="justify">	
				 				<h2>Details :</h2>
				   				<p>{{$data_JeBarang -> deskripsi}}</p>
				   			</div>
						</div>
						<div class="clear"></div>
			  		</div>
			  	</div>
				<div class="rightsidebar span_3_of_1 sidebar">
					<h2>Random Product</h2>
					@foreach($data_subJeBarang as $subJeBarang)
					<div class="special_movies">
						<div class="movie_poster">
							<a href="preview.html"><img src={{asset('images/'. $subJeBarang ->image)}} alt="" /></a>
						</div>
						<div class="movie_desc">
							<h3><a href="/Home/{{$subJeBarang->id_jenis}}/Preview">{{$subJeBarang -> judul}}</a></h3>
							<br>
							<span><a href="/Home/{{$subJeBarang->id_jenis}}/Preview">View More</a></span>
						</div>
						<div class="clear"></div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>

@endsection