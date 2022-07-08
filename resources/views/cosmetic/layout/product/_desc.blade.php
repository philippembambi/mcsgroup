@extends('cosmetic._app')

@section('content')

<style>
    .section {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    #category_img{
        width: 80px;
        height: 80px;
    }
    #category_img img{
        object-fit: cover;
        height: 100%;
        width: 100%;
    }
    .imghair{
        height: 220px;
    }
    @media (max-width: 767px)  {
        .article-body h3 a{
            font-size: 15px;
        }
        .article-body p{
            font-size: 12px;
        }
        .article .add-to-cart button{
            width: 20%;
            font-size: 9px;
        }
        .article-btns{
            display: inline;
        }
        .article-btns i{
            font-size: 15px;
        }
        .new{
            display: none;
        }
        #hair{
            visibility: hidden;
        }
        .item{
            margin-top: -23%;
            margin-left: 4%;
        }
        .tab-head{
            margin-bottom: 30%;
        }
        .main-slider{
            display: none;
        }
        }

        @media (max-width: 338px)  {
        .item{
            left: -4%;
            width: 80px;
        }
        .item img{
            width: 70%;
        }

        #category_img{
        width: 60px;
        height: 60px;
            }
        #category_img img{
        object-fit: cover;
        height: 100%;
        width: 100%;
            }
        }

        @media (max-width: 405px)  {
        #category_img{
        width: 90px;
        height: 90px;
            }
        #category_img img{
        object-fit: cover;
        height: 100%;
        width: 100%;
            }
            .article-body h3 a{
            font-size: 12px;
        }
        .article-body p{
            font-size: 12px;
        }
        }
</style>
    @component('cosmetic.components._header')
    @endcomponent

<div id="product-manufacturer" class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <aside id="column-left" class="hidden-xs">
                <div class="box">
                    <div class="box-heading">Information</div>
                    <div class="list-group">
                                        <a class="list-group-item" href="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=information/information&amp;information_id=4">About Us </a>
                                        <a class="list-group-item" href="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=information/information&amp;information_id=6">Delivery Information </a>
                                        <a class="list-group-item" href="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=information/information&amp;information_id=3">Privacy Policy </a>

                    </div>
                </div>
        
                <script type="text/javascript">
                    $('#banner0').swiper({
                        autoplay: 4000,
                        pagination: '.swiper-pagination',  // If we need pagination
                        autoplayDisableOnInteraction: false
                    });
                </script> 

                <div class="box">
                    <div class="box-heading">Latest</div>
                        <div class="box-content">			
                            <div class="box-product  productbox-grid" id=" latest-grid">
                               
                                <div class="product-items">
                                    <div class="product-block product-thumb transition">
                                        <div class="product-block-inner">	

                                            <div class="image">
                                                <a href="#">
                                                    <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('49 ');"><i class="fa fa-heart"></i></button>
                                                    <img src="{{ asset("cosmetic/image/images46.jpg") }}" 
                                                    title="Logitech G F710 Wireless Gamepad (Silver)" 
                                                    alt="Logitech G F710 Wireless Gamepad (Silver)" 
                                                    class="img-responsive reg-image"/>
                                                    <div class="image_content">
                                                        <img    class="img-responsive hover-image" 
                                                                src="{{ asset("cosmetic/image/img-12.png") }}" title="Logitech G F710 Wireless Gamepad (Silver)" alt="Logitech G F710 Wireless Gamepad (Silver)"/></div>
                                                </a>
                                            </div>

                                            <div class="product-details">
                                                <div class="caption">
                                                    <h4><a href="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/product&amp;product_id=49 ">Logitech G F710 Wireless Gamepad (Silver) </a></h4>
                                                    <p class="price">
                                                    <span class="price-new">$26.00</span> 
                                                    <span class="price-old">$241.99</span>
                                                    <span class="price-tax">Ex Tax: $20.00</span>
                                                    </p>
                                                </div>		
                    
                                                <div class="product_hover_block">
                                                    <div class="action">
                                                        <button type="button" class="cart_button" style="background-color: rgb(41, 62, 2);color: white;" onclick="cart.add('49 ');" title="Add to Cart" ><i class="fa fa-shopping-cart" area-hidden="true"></i> </button>
                                                        <div class="quickview-button">
                                                            <a class="quickbox"  title="Quick View" href=""><i class="fa fa-eye"></i></a>
                                                        </div>
                                                        <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('49 ');"><i class="fa fa-heart"></i></button>
                                                        <button class="compare_button" type="button"  title="Add to compare " onclick="compare.add('49 ');"><i class="fa fa-exchange"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-items">
                                    <div class="product-block product-thumb transition">
                                        <div class="product-block-inner">	

                                            <div class="image">
                                                <a href="#">
                                                    <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('49 ');"><i class="fa fa-heart"></i></button>
                                                    <img src="{{ asset("cosmetic/image/images46.jpg") }}" 
                                                    title="Logitech G F710 Wireless Gamepad (Silver)" 
                                                    alt="Logitech G F710 Wireless Gamepad (Silver)" 
                                                    class="img-responsive reg-image"/>
                                                    <div class="image_content">
                                                        <img    class="img-responsive hover-image" 
                                                                src="{{ asset("cosmetic/image/img-12.png") }}" title="Logitech G F710 Wireless Gamepad (Silver)" alt="Logitech G F710 Wireless Gamepad (Silver)"/></div>
                                                </a>
                                            </div>

                                            <div class="product-details">
                                                <div class="caption">
                                                    <h4><a href="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/product&amp;product_id=49 ">Logitech G F710 Wireless Gamepad (Silver) </a></h4>
                                                    <p class="price">
                                                    <span class="price-new">$26.00</span> 
                                                    <span class="price-old">$241.99</span>
                                                    <span class="price-tax">Ex Tax: $20.00</span>
                                                    </p>
                                                </div>		
                    
                                                <div class="product_hover_block">
                                                    <div class="action">
                                                        <button type="button" class="cart_button" style="background-color: rgb(41, 62, 2);color: white;" onclick="cart.add('49 ');" title="Add to Cart" ><i class="fa fa-shopping-cart" area-hidden="true"></i> </button>
                                                        <div class="quickview-button">
                                                            <a class="quickbox"  title="Quick View" href=""><i class="fa fa-eye"></i></a>
                                                        </div>
                                                        <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('49 ');"><i class="fa fa-heart"></i></button>
                                                        <button class="compare_button" type="button"  title="Add to compare " onclick="compare.add('49 ');"><i class="fa fa-exchange"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                
            
            
                            </div>
                        </div>
                </div>
                <span class="latest_default_width" style="display:none; visibility:hidden"></span>
            </aside>
        </div>
            
        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-12">
            <h2 class="page-title">Canon</h2>
            <div class="category_filter">
                <div class="col-md-4 btn-list-grid">
                    <div class="btn-group">
                        <button type="button" id="grid-view" class="btn btn-default grid"  title="Grid"><i class="fa fa-th"></i></button>
                        <button type="button" id="list-view" class="btn btn-default list"  title="List"><i class="fa fa-th-list"></i></button>
                    </div>
                </div>
                <div class="compare-total"><a href="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/compare" id="compare-total">Product Compare (0)</a></div>
                    <div class="pagination-right">
                        <div class="sort-by-wrapper">
                            <div class="col-md-2 text-right sort-by">
                                <label class="control-label" for="input-sort">Sort By:</label>
                            </div>
                            <div class="col-md-3 text-right sort">
                                <select id="input-sort" class="form-control" onchange="location = this.value;">
                                    <option value="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/manufacturer/info&amp;manufacturer_id=9&amp;sort=p.sort_order&amp;order=ASC ">Default </option>
                  
                                    <option value="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/manufacturer/info&amp;manufacturer_id=9&amp;sort=pd.name&amp;order=ASC " selected="selected">Name (A - Z)</option>
                 
                                    <option value="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/manufacturer/info&amp;manufacturer_id=9&amp;sort=pd.name&amp;order=DESC ">Name (Z - A) </option>
                  
                                    <option value="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/manufacturer/info&amp;manufacturer_id=9&amp;sort=p.price&amp;order=ASC ">Price (Low &gt; High) </option>
                                    
                                    <option value="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/manufacturer/info&amp;manufacturer_id=9&amp;sort=p.price&amp;order=DESC ">Price (High &gt; Low) </option>
                                    
                                    <option value="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/manufacturer/info&amp;manufacturer_id=9&amp;sort=rating&amp;order=DESC ">Rating (Highest) </option>
                                    
                                    <option value="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/manufacturer/info&amp;manufacturer_id=9&amp;sort=rating&amp;order=ASC ">Rating (Lowest) </option>
                                    
                                    <option value="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/manufacturer/info&amp;manufacturer_id=9&amp;sort=p.model&amp;order=ASC ">Model (A - Z) </option>
                                    
                                    <option value="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/manufacturer/info&amp;manufacturer_id=9&amp;sort=p.model&amp;order=DESC ">Model (Z - A) </option>
                                </select>
                            </div>
                        </div>
                        <div class="show-wrapper">
                            <div class="col-md-1 text-right show">
                                <label class="control-label" for="input-limit">Show:</label>
                            </div>
                            <div class="col-md-2 text-right limit">
                                <select id="input-limit" class="form-control" onchange="location = this.value;">
                                    <option value="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/manufacturer/info&amp;manufacturer_id=9&amp;sort=pd.name&amp;order=ASC&amp;limit=15 " selected="selected">15</option>
                                    <option value="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/manufacturer/info&amp;manufacturer_id=9&amp;sort=pd.name&amp;order=ASC&amp;limit=25 ">25 </option>
                                    <option value="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/manufacturer/info&amp;manufacturer_id=9&amp;sort=pd.name&amp;order=ASC&amp;limit=50 ">50 </option>
                                    <option value="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/manufacturer/info&amp;manufacturer_id=9&amp;sort=pd.name&amp;order=ASC&amp;limit=75 ">75 </option>
                                    <option value="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/manufacturer/info&amp;manufacturer_id=9&amp;sort=pd.name&amp;order=ASC&amp;limit=100 ">100 </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-block product-thumb">
                        <div class="product-block-inner">
                            <div class="image ">
                                <a href="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/product&amp;manufacturer_id=9&amp;product_id=30&amp;sort=pd.name&amp;order=ASC">
                                    <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('30 ');"></button>
                                    <img src="{{  asset("cosmetic/image/images32.jpg")  }}" style="height: 300px;width: 60%;" title="Caprese Satchel combines Portable Speaker" alt="Caprese Satchel combines Portable Speaker" class="img-responsive reg-image"/>
                                    <div class="image_content">
                                        <img class="img-responsive hover-image" 
                                                src="{{  asset("cosmetic/image/images46.jpg")  }}" 
                                                title="Caprese Satchel combines Portable Speaker" 
                                                alt="Caprese Satchel combines Portable Speaker"/>
                                    </div>
                                </a>
                         
                            </div>
                            <div class="product-details">
                            <div class="caption">
                               <h4><a href="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/product&amp;manufacturer_id=9&amp;product_id=30&amp;sort=pd.name&amp;order=ASC">Caprese Satchel combines Portable Speaker</a></h4> 
                                <div class="rating">
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x" style="color: rgb(41, 62, 2);"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x" style="color: rgb(41, 62, 2);"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x" style="color: rgb(41, 62, 2);"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x" style="color: rgb(41, 62, 2);"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x" style="color: rgb(41, 62, 2);"></i></span>
                                    &nbsp;<span style="cursor:pointer;" value="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/product&amp;manufacturer_id=9&amp;product_id=30&amp;sort=pd.name&amp;order=ASC" class="total-review30">1 Review</span>
                                </div>
                                <p class="description">Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're n..</p>
                                <p class="price">
                                $122.00
                                </p>
              
                                <div class="product_hover_block">
                                    <div class="action">
                                        <button type="button" class="cart_button" style="background-color: rgb(41, 62, 2);color: white;" onclick="cart.add('30');" title="Add to Cart" >Add to Cart</button>
                                        <div class="quickview-button">
                                            <a class="quickbox"  title="Quick View" href="http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/quick_view&amp;product_id=30"></a>
                                        </div>
                                        <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('30 ');"></button>
                                        <button class="compare_button" type="button"  title="Add to compare " onclick="compare.add('30 ');"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script> 
                $('.total-review30').on('click', function() { 
                var t='http://localhost:83/Theme_Package(manual)/QuickStart_Package_v3.0.x/upload/index.php?route=product/product&amp;manufacturer_id=9&amp;product_id=30&amp;sort=pd.name&amp;order=ASC'; 
                const parseResult = new DOMParser().parseFromString(t, "text/html");
                const parsedUrl = parseResult.documentElement.textContent;
                window.location.href = parsedUrl + '&review';
                return false;
            });
            </script>
            <div class="pagination-wrapper">
                <div class="col-sm-6 text-left page-link"></div>
                <div class="col-sm-6 text-right page-result">Showing 1 to 1 of 1 (1 Pages)</div>
            </div> 
        </div>
    </div>
</div>

@component('cosmetic.components._footer')
@endcomponent


@endsection