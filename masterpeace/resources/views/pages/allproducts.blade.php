@extends('layouts.master')
@section('title', 'allproducts')

@section('content')



    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Home &
                                Living</a></li>
                    </ul>
                </div>

                <!-- Sidebar -->

                <div class="sidebar">
                    <div class="sidebar_section">
                        <div class="search-widget mb-5">
                            <form action="{{ route('pages.allproducts') }}" method="get">
                            <input name="name" class="form-control" type="text" placeholder="Search" />
                            <button type="submit" name="submit" class="btn"><small>Search</small> <i
                                    class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <div class="sidebar_title">
                            <h5>Product Category</h5>
                        </div>
                        <ul class="sidebar_categories">
                            {{-- <li><a href="#">Oil Paintings</a></li>
							<li class="active"><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Home & Living</a></li>
							<li><a href="#">Ai Art</a></li>							
							<li><a href="#">Art & Collectibles</a></li>
							<li><a href="#">Craft Supplies & Tools</a></li>
							<li><a href="#">Jewelry & Accessories</a></li>
							<li><a href="#">Photography</a></li>
							<li><a href="#">Clothing & Shoes</a></li>
							<li><a href="#">Shop</a></li> --}}

                            @foreach ($categories as $categories)
                                <li><a href="/pages.allproducts/{{ $categories->id }}">{{ $categories->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Price Range Filtering -->
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Filter by Price</h5>
                        </div>
                        <p>
                            <input type="text" id="amount" readonly
                                style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <div id="slider-range"></div>
                        <div class="filter_button"><span>filter</span></div>
                    </div>

                    <!-- Sizes -->
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Subject</h5>
                        </div>
                        <ul class="checkboxes">
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Abstract & geometric
                                </span></li>
                            <li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>cityscape
                                </span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Animal</span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Anime & cartoon
                                </span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Beach & tropical
                                </span></li>
                        </ul>
                    </div>

                    <!-- Color -->
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Color</h5>
                        </div>
                        <ul class="checkboxes">
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Black</span></li>
                            <li class="active"><i class="fa fa-square" aria-hidden="true"></i><span>Bronze</span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>White</span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Beige</span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Blue</span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Gold</span></li>
                            <li><i class="fa fa-square-o" aria-hidden="true"></i><span>Brown</span></li>
                        </ul>
                        <div class="show_more">
                            <span><span>+</span>Show More</span>
                        </div>
                    </div>

                </div>

                <!-- Main Content -->

                <div class="main_content">

                    <!-- Products -->

                    <div class="products_iso">
                        <div class="row">
                            <div class="col">

                                <!-- Product Sorting -->

                                <div class="product_sorting_container product_sorting_container_top">
                                    <ul class="product_sorting">
                                        <li>
                                            <span class="type_sorting_text">Default Sorting</span>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="sorting_type">
                                                <li class="type_sorting_btn"
                                                    data-isotope-option='{ "sortBy": "original-order" }'><span>Default
                                                        Sorting</span></li>
                                                <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'>
                                                    <span>Price</span></li>
                                                <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>
                                                    <span>Product Name</span></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span>Show</span>
                                            <span class="num_sorting_text">6</span>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="sorting_num">
                                                <li class="num_sorting_btn"><span>6</span></li>
                                                <li class="num_sorting_btn"><span>12</span></li>
                                                <li class="num_sorting_btn"><span>24</span></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="pages d-flex flex-row align-items-center">
                                        <div class="page_current">
                                            <span>1</span>
                                            <ul class="page_selection">
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                            </ul>
                                        </div>
                                        <div class="page_total"><span>of</span> 3</div>
                                        <div id="next_page" class="page_next"><a href="#"><i
                                                    class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                                    </div>

                                </div>

                                <!-- Product Grid -->

                                <div class="product-grid mb-5">

                                    <!-- Product 1 -->
                                    @foreach ($products as $product)
									
                                        <div class="product-item men">
                                            <div class="product discount product_filter">
                                                <div class="product_image">
                                                    <img src="{{ asset("images/$product->img") }}" alt="Image">
                                                </div>
                                                <div class="favorite favorite_left"></div>
                                                <div
                                                    class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                                    <span>-$20</span></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a
                                                            href="/pages.single/{{ $product->id }}">{{ $product->name }}</a></h6>

                                                    <div class="product_price">{{ $product->price }}<span>$200.00</span>
                                                    </div>
                                                    <div class="product_artist"><span>by USpaceArtAd</span></div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a>
                                            </div>
                                        </div>
                                    @endforeach
                                     <!-- Product 2 -->

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_2.1.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Original Flower Oil Painting</a></h6>
												<div class="product_price">$120.00</div>
												<div class="product_artist"><span>by TuorAbstractArt</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>
{{--
									<!-- Product 3 -->

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_3.1.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Mini artwork, Mini blue abstract</a></h6>
												<div class="product_price">$300.00</div>
												<div class="product_artist"><span >bySimoneDecorart</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 4 -->

									<div class="product-item accessories">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_4.1.jpg" alt="">
											</div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
											<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Abstract Tree Oil Painting
												</a></h6>
												<div class="product_price">$100.00</div>
												<div class="product_artist"><span>bySimoneDecorart</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 5 -->

									<div class="product-item women men">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_5.1.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Howling Wolf Oil Painting Art
												</a></h6>
												<div class="product_price">$50.00</div>
												<div class="product_artist"><span>bySimoneDecorart</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 6 -->

									<div class="product-item accessories">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="images/product_6.1.jpg" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Original Forest Oil Painting
												</a></h6>
												<div class="product_price">$150.00<span>$100.00</span></div>
												<div class="product_artist"><span>bySingedSweet</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 7 -->

									<div class="product-item women">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_7.1.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Large Abstract Gold Text</a></h6>
												<div class="product_price">$100.00</div>
												<div class="product_artist"><span>CareGalleryArt</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 8 -->

									<div class="product-item accessories">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_8.1.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Original Seascape oil Painting</a></h6>
												<div class="product_price">$50.00</div>
												<div class="product_artist"><span>byKysonGalleryArt</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 9 -->

									<div class="product-item men">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_9.1.jpg" alt="">
											</div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
											<div class="favorite favorite_left"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Writer Original Forest Oil Painting</a></h6>
												<div class="product_price">$50.00</div>
												<div class="product_artist"><span>byEdonaArtGallery</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 10 -->

									<div class="product-item men">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_10.1.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">3D Flower Oil Painting On Canvas,Original White Cherry</a></h6>
												<div class="product_price">$100.00</div>
												<div class="product_artist"><span>by TuorAbstractArt</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 11 -->

									<div class="product-item women men">
										<div class="product product_filter">
											<div class="product_image">
												<img src="images/product_11.1.jpg" alt="">
											</div>
											<div class="favorite"></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Original Rose Flower Oil Painting On Canvas</a></h6>
												<div class="product_price">$100.00</div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>

									<!-- Product 12 -->

									<div class="product-item accessories">
										<div class="product discount product_filter">
											<div class="product_image">
												<img src="images/product_12.1.jpg" alt="">
											</div>
											<div class="favorite favorite_left"></div>
											<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
											<div class="product_info">
												<h6 class="product_name"><a href="single.html">Colourful Flower Tree Abstract Oil Painting</a></h6>
												<div class="product_price">$100.00<span>$200.00</span></div>
											</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
									</div>
								</div> --}}

                                    <!-- Product Sorting -->

                                    {{-- <div  class="product_sorting_container product_sorting_container_bottom clearfix ">
                                        <ul class="product_sorting">
                                            <li>
                                                <span>Show:</span>
                                                <span class="num_sorting_text">04</span>
                                                <i class="fa fa-angle-down"></i>
                                                <ul class="sorting_num">
                                                    <li class="num_sorting_btn"><span>01</span></li>
                                                    <li class="num_sorting_btn"><span>02</span></li>
                                                    <li class="num_sorting_btn"><span>03</span></li>
                                                    <li class="num_sorting_btn"><span>04</span></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <span class="showing_results">Showing 1–3 of 12 results</span>
                                        <div class="pages d-flex flex-row align-items-center">
                                            <div class="page_current">
                                                <span>1</span>
                                                <ul class="page_selection">
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                </ul>
                                            </div>
                                            <div class="page_total"><span>of</span> 3</div>
                                            <div id="next_page_1" class="page_next"><a href="#"><i
                                                        class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                                        </div>

                                    </div> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Go Top -->
        <a class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>

    </div>

    </div>

    <script src={{ asset('js/jquery-3.2.1.min.js') }}></script>
    <script src={{ asset('styles/bootstrap4/popper.js') }}></script>
    <script src={{ asset('styles/bootstrap4/bootstrap.min.js') }}></script>
    <script src={{ asset('plugins/Isotope/isotope.pkgd.min.js') }}></script>
    <script src={{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}></script>
    <script src={{ asset('plugins/easing/easing.js') }}></script>
    <script src={{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}></script>
    <script src={{ asset('js/categories_custom.js') }}></script>





@endsection
