@extends('frontend.layout.master')
@section('title')
   Shop - Looms
@endsection
@section('content')
    	<!-- Page Title -->
        <section class="page-title">
            <div class="auto-container">
                <h2>Shop</h2>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Shop</li>
                   
                </ul>
            </div>
        </section>
        <!-- End Page Title -->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    
                    <!-- Content Side -->
                    <div class="content-side col-lg-9 col-md-12 col-sm-12">
                        <!-- Filter Box -->
                        <div class="filter-box">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <!-- Left Box -->
                               
                                <!-- Right Box -->
                                <div class="right-box d-flex">
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Filter Box -->
                     
                        <div class="shops-outer">
                            <div class="row clearfix">
                            {{--    @php
                                   
                                    foreach($designer as $desin)
                                        
                                        $des = App\Models\User::where('id', $desin->designer_id)->where('approve',1)->first();
                                        
                                        
                                    
                                    dd('break');
                                @endphp--}}
                                
                                @foreach($designer as $item)      
                                    @php
                                   
                                  
                                        
                                        $des = App\Models\User::where('id', $item->designer_id)->first();
                                        
                                        if($des->approve == '1'){
                                       
                                            $product= App\Models\Product::select('logo')->where('designer_id', $des->id)->first();
                                            $product_list= App\Models\Product::select('logo')->where('designer_id', $des->id)->limit(5)->get();
                                     }
                                    @endphp
                                  
                                   @if($des->approve == '1')
                                       <div class="shop-item col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="{{route('designer.single', $des->id)}}">
                                                
                                              {{--  <img src="{{(!empty($product->logo))?URL::to('storage/'.$product->logo):URL::to('image/no_image.png')}}" alt="24short-img">--}}
                                                
                                  
                                                	<div id="carouselExampleControls" class="carousel slide"
												data-bs-ride="carousel" data-bs-interval="2000">
												<div class="carousel-inner">
												    @foreach ($product_list as $items)  
													<div class="carousel-item active">
														<img src="{{(!empty($items->logo))?URL::to('storage/'.$items->logo):URL::to('image/no_image.png')}}"
															class="d-block w-100" alt="...">
													</div>
												
												@endforeach
												</div>
										
											</div>
                                                
                                                
                                                </a>
                                            <div class="options-box">
                                           
                                            </div>
                                        </div>
                                        <div class="lower-content">
                                  
                                            <h6><a href="{{route('designer.single', $item->designer_id)}}">{{$des->name}} </a></h6>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="price">{{$des->min_price}}Tk - {{$des->max_price}}Tk</div>
                                                <!-- Quantity Box -->
                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                   
                                   @endif
                                @endforeach
                                <!-- Shop Item -->
                              
                                
         
                                
                            </div>
                        
                            <!-- Styled Pagination -->
                            <ul class="styled-pagination text-center">
                             
                            </ul>
                            <!-- End Styled Pagination -->
                        
                        </div>
                        
                    </div>
                    
                    <!-- Sidebar Side -->
                    <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                        <aside class="sidebar">
                            <div class="sidebar-inner">
                                <!--price -->
                                <!-- Sidebar Side -->
                                <div class="sidebar-side col-lg-12 col-md-12 col-sm-12">
                                    
                                        <div class="sidebar-inner">
                                            <!-- Multirange Slider -->
                                            <div class="multirange-slider">
                                                <label for="price-range">Price Range : </label><br>
                                                <input type="range" id="min-price" name="min-price" min="{{$minPrice}}" max="{{$maxPrice}}" step="100" value="{{$minPrice}}"> &nbsp;
                                                <span id="min-price-value">{{$minPrice}}</span>
                                            </div>
                                            <!-- Other Sidebar Widgets -->
                                            <!-- ... -->
                                        </div>
                                  
                                </div>

                                                            <!-- Category Widget -->
                            <div class="sidebar-widget category-widget">
                                <div class="widget-content">
                                    <!-- Sidebar Title -->
                                    <div class="sidebar-title-two">
                                        <h5>Product Catagories</h5>
                                    </div>
                                    <!-- Category List -->
                                    <ul class="category-list">
                                        @foreach ($category as $item)
                                        <li><a href="{{route('designer.category', $item->id)}}">{{$item->name}} </a></li>
                                        @endforeach
                                    
                                      
                                    </ul>
                                    
                                </div>
                            </div>
                            
                            <!-- Colors Widget -->
                
                            
                            <!-- Brands Widget -->
           
                                                    
                            <!-- Tags Widget -->
               
                            
                        </aside>
                    </div>
                    
                </div>
            </div>
        </div>
        	<!-- Shop Detail Section -->
	
	<!-- End Shop Page Section -->
	

	<!-- End Products Section Six -->
<script>
const designerSingleRoute = "{{ route('designer.single', ':productId') }}";
    document.addEventListener("DOMContentLoaded", function () {
        const minPriceSlider = document.getElementById("min-price");
        const minPriceValue = document.getElementById("min-price-value");

        minPriceSlider.addEventListener("input", function () {
            minPriceValue.textContent = minPriceSlider.value;
        });

        minPriceSlider.addEventListener("change", function () {
            updateProductList();
        });

        function updateProductList() {
            const minValue = minPriceSlider.value;

            
            // Example using fetch API
            fetch('/update-products?minPrice=' + minValue)
                .then(response => response.json())
                .then(data => {
                    console.log("JSON Response:", data);
                    // Update the product list in the frontend based on the response
                    const productContainer = document.querySelector('.shops-outer .row');
                    productContainer.innerHTML = '';
                
                    // Check if data.products is an array
                    if (Array.isArray(data)) {
                        const productContainer = document.querySelector('.shops-outer .row');
                        productContainer.innerHTML = '';
                
                        data.forEach(product => {
                            const productItem = document.createElement('div');
                            productItem.className = 'shop-item col-lg-4 col-md-4 col-sm-12';
                            // Build your product item HTML here
                            // Example: productItem.innerHTML = `<img src="${product.logo}" alt="${product.name}">`;
                            productItem.innerHTML = `					<div class="inner-box">
										<div class="image">
											<a href="${designerSingleRoute.replace(':productId', product.id)}"><img src="/storage/${product.logo}"
													alt="${product.name}"></a>
								
										</div>
										<div class="lower-content">
			
											<h6><a href="${designerSingleRoute.replace(':productId', product.id)}"> <br> ${product.name}</a></h6>
											<div class="d-flex justify-content-between align-items-center">
												<div class="price">${product.min_price} Tk -  ${product.max_price}Tk</div>
						
											</div>
										</div>
									</div>`;
                            productContainer.appendChild(productItem);
                        });
                    } else {
                        console.error("Invalid or missing 'products' array in the response:", data);
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        }
    });
</script>


@endsection