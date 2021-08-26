@extends('shop')

@section('content')

<div class="">
		<div class=" w_content">
			<div class="women">
				<a href="#"><h4>Enthecwear - <span>4449 itemms</span> </h4></a>
				<ul class="w_nav">
					<li>Sort : </li>
			     	<li><a class="active" href="#">popular</a></li> |
			     	<li><a href="#">new </a></li> |
			     	<li><a href="#">discount</a></li> |
			     	<li><a href="#">price: Low High </a></li> 
			     <div class="clearfix"> </div>	
			     </ul>
			     <div class="clearfix"> </div>	
			</div>
		</div>
		<!-- grids_of_4 -->
		<div class="grid-product">
		  
        @foreach($products as $product)
            <div class=" product-grid">
			    <div class="content_box">
                <a href="{{ route('product.show', ['slug' => $product->slug] ) }}">
			   	<div class="left-grid-view grid-view-left">
			   	   	 <img src="images/pic13.jpg" class="img-responsive watch-right" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				</div>
				    <h4><a href="#"> {{ $product->name }}</a></h4>
				     <p>It is a long established fact that a reader</p>
				      {{ $product->presentPrice() }}
			   	</div>
              </div>

        @endforeach
            

			<div class="clearfix"> </div>
		</div>
	</div>
	
	

@endsection		