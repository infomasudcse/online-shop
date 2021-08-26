@extends('shop')


@section('title', '- '.$product->name)

@section('content')

<link rel="stylesheet" href="{{ asset('css/etalage.css') }}" type="text/css" media="all" />
<script src="{{ asset('js/jquery.min.js') }}"></script>

<script src="{{ asset('js/jquery.etalage.min.js') }}"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
<div class="">
	      <div class="single_grid">
				<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="{{ asset('images/s4.jpg') }}" class="img-responsive" />
									<img class="etalage_source_image" src="{{ asset('images/si4.jpg') }}" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="{{ asset('images/s2.jpg') }}" class="img-responsive" />
								<img class="etalage_source_image" src="{{ asset('images/si2.jpg') }}" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="{{ asset('images/s3.jpg') }}" class="img-responsive"  />
								<img class="etalage_source_image" src="{{ asset('images/si3.jpg') }}"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="{{ asset('images/s1.jpg') }}" class="img-responsive"  />
								<img class="etalage_source_image" src="{{ asset('images/si1.jpg') }}"class="img-responsive"  />
							</li>
						</ul>
						 <div class="clearfix"> </div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				  
					
					<h4>{{ $product->details }}</h4>
				<div class="cart-b">
					<div class="left-n ">{{ $product->presentPrice() }}</div>
				    <a class="now-get get-cart-in" href="#">ADD TO CART</a> 
				    <div class="clearfix"></div>
				 </div>
				 <h6>100 items in stock</h6>
			   	<p>{{ $product->description }}</p>
			   	<div class="share">
							<h5>Share Product :</h5>
							<ul class="share_nav">
								<li><a href="#"><img src="{{ asset('images/facebook.png') }}" title="facebook"></a></li>
								<li><a href="#"><img src="{{ asset('images/twitter.png') }}" title="Twiiter"></a></li>
								<li><a href="#"><img src="{{ asset('images/rss.png') }}" title="Rss"></a></li>
								<li><a href="#"><img src="{{ asset('images/gpluse.png') }}" title="Google+"></a></li>
				    		</ul>
						</div>
			   
				
				</div>
          	    <div class="clearfix"> </div>
          	   </div>
          	   <ul id="flexiselDemo1">
			<li><img src="{{ asset('images/pi.jpg') }}" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="{{ asset('images/pi1.jpg') }}" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
			<li><img src="{{ asset('images/pi2.jpg') }}" /><div class="grid-flex"><a href="#">Zumba</a><p>Rs 850</p></div></li>
			<li><img src="{{ asset('images/pi3.jpg') }}" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="{{ asset('images/pi4.jpg') }}" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
		 </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>

          	    	<div class="toogle">
				     	<h3 class="m_3">Product Details</h3>
				     	<p class="m_text">{{ $product->description }}</p>
				     </div>	
          	   </div>
 @endsection         	   
          	 