@extends('mcsIt.app')

@section('content')

<script>

    function quickbox(){
     if ($(window).width() > 767) {
        $('.quickview-button').magnificPopup({
          type:'iframe',
          delegate: 'a',
          preloader: true,
          tLoading: 'Loading image #%curr%...',
        });
     }
    }
    jQuery(document).ready(function() {quickbox();});
    jQuery(window).resize(function() {quickbox();});

</script>

@component('mcsIt.components.header')
@endcomponent

<div id="product-special" class="container">
    <ul class="breadcrumb">
          <li><a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
          <li><a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/special">Special Offers</a></li>
        </ul>
    <div class="row"><aside id="column-left" class="col-sm-3 hidden-xs">
      <div class="box">
        <div class="box-heading">Information</div>
      <div class="list-group">
                                  <a class="list-group-item" href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=information/information&amp;information_id=4">About Us </a>
                                  <a class="list-group-item" href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=information/information&amp;information_id=6">Delivery Information </a>
                                  <a class="list-group-item" href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=information/information&amp;information_id=3">Privacy Policy </a>
                                  <a class="list-group-item" href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=information/information&amp;information_id=5">Terms &amp; Conditions </a>
                          <a class="list-group-item" href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=information/contact">Contact Us </a>
              <a class="list-group-item" href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=information/sitemap">Site Map </a>
      </div>
  </div>
              <div class="swiper-viewport">
    <div id="banner" class="swiper-container single-banner">
      <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="#"><img src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/left-banner-282x430.jpg" alt="Left Banner1" class="img-responsive" /></a></div>
        </div>
        <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
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
                                  <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=49">
                          <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('49 ');"><i class="fa fa-heart"></i></button>
                      <img src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/13-70x70.jpg" title="Logitech G F710 Wireless Gamepad (Silver)" alt="Logitech G F710 Wireless Gamepad (Silver)" class="img-responsive reg-image"/>
                      <div class="image_content"><img class="img-responsive hover-image" src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/13-02-70x70.jpg" title="Logitech G F710 Wireless Gamepad (Silver)" alt="Logitech G F710 Wireless Gamepad (Silver)"/></div>
                      </a>
                              </div>
            <div class="product-details">
              <div class="caption">
                          <h4><a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=49 ">Logitech G F710 Wireless Gamepad (Silver) </a></h4>
                                                      <p class="price">
                                              <span class="price-new">$26.00</span> <span class="price-old">$241.99</span>
                                                                <span class="price-tax">Ex Tax: $20.00</span>
                                            </p>
                              </div>

              <div class="product_hover_block">
                <div class="action">
                   <button type="button" class="cart_button" onclick="cart.add('49 ');" title="Add to Cart" ><i class="fa fa-shopping-cart" area-hidden="true"></i> </button>
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
                                  <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=48">
                          <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('48 ');"><i class="fa fa-heart"></i></button>
                      <img src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/07-70x70.jpg" title="Mechanical watch Slogan Wireless Security Camera" alt="Mechanical watch Slogan Wireless Security Camera" class="img-responsive reg-image"/>
                      <div class="image_content"><img class="img-responsive hover-image" src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/07-01-70x70.jpg" title="Mechanical watch Slogan Wireless Security Camera" alt="Mechanical watch Slogan Wireless Security Camera"/></div>
                      </a>
                              </div>
            <div class="product-details">
              <div class="caption">
                          <h4><a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=48 ">Mechanical watch Slogan Wireless Security Camera </a></h4>
                                                      <p class="price">
                                               $122.00
                                                                 <span class="price-tax">Ex Tax: $100.00</span>
                                            </p>
                              </div>

              <div class="product_hover_block">
                <div class="action">
                   <button type="button" class="cart_button" onclick="cart.add('48 ');" title="Add to Cart" ><i class="fa fa-shopping-cart" area-hidden="true"></i> </button>
                   <div class="quickview-button">
                              <a class="quickbox"  title="Quick View" href=""><i class="fa fa-eye"></i></a>
                   </div>
                   <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('48 ');"><i class="fa fa-heart"></i></button>
                   <button class="compare_button" type="button"  title="Add to compare " onclick="compare.add('48 ');"><i class="fa fa-exchange"></i></button>
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
                                  <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=47">
                          <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('47 ');"><i class="fa fa-heart"></i></button>
                      <img src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/03-70x70.jpg" title="Crystal Gym &amp; Fit comfort Mobile" alt="Crystal Gym &amp; Fit comfort Mobile" class="img-responsive reg-image"/>
                      <div class="image_content"><img class="img-responsive hover-image" src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/03-01-70x70.jpg" title="Crystal Gym &amp; Fit comfort Mobile" alt="Crystal Gym &amp; Fit comfort Mobile"/></div>
                      </a>
                              </div>
            <div class="product-details">
              <div class="caption">
                          <h4><a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=47 ">Crystal Gym &amp; Fit comfort Mobile </a></h4>
                                                      <p class="price">
                                               $122.00
                                                                 <span class="price-tax">Ex Tax: $100.00</span>
                                            </p>
                              </div>

              <div class="product_hover_block">
                <div class="action">
                   <button type="button" class="cart_button" onclick="cart.add('47 ');" title="Add to Cart" ><i class="fa fa-shopping-cart" area-hidden="true"></i> </button>
                   <div class="quickview-button">
                              <a class="quickbox"  title="Quick View" href=""><i class="fa fa-eye"></i></a>
                   </div>
                   <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('47 ');"><i class="fa fa-heart"></i></button>
                   <button class="compare_button" type="button"  title="Add to compare " onclick="compare.add('47 ');"><i class="fa fa-exchange"></i></button>
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

                  <div id="content" class="col-sm-9">
        <h2 class="page-title">Special Offers</h2>
              <div class="category_filter">
          <div class="col-md-4 btn-list-grid">
            <div class="btn-group">
               <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
              <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>

            </div>
          </div>
      <div class="compare-total"><a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/compare" id="compare-total">Product Compare (0)</a></div>
      <div class="pagination-right">
       <div class="sort-by-wrapper">
        <div class="col-md-2 text-right sort-by">
          <label class="control-label" for="input-sort">Sort By:</label>
        </div>
        <div class="col-md-3 text-right sort">
          <select id="input-sort" class="form-control" onchange="location = this.value;">

                  <option value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/special&amp;sort=p.sort_order&amp;order=ASC " selected="selected">Default</option>

                  <option value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/special&amp;sort=pd.name&amp;order=ASC ">Name (A - Z) </option>

                  <option value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/special&amp;sort=pd.name&amp;order=DESC ">Name (Z - A) </option>

                  <option value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/special&amp;sort=ps.price&amp;order=ASC ">Price (Low &gt; High) </option>

                  <option value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/special&amp;sort=ps.price&amp;order=DESC ">Price (High &gt; Low) </option>

                  <option value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/special&amp;sort=rating&amp;order=DESC ">Rating (Highest) </option>

                  <option value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/special&amp;sort=rating&amp;order=ASC ">Rating (Lowest) </option>

                  <option value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/special&amp;sort=p.model&amp;order=ASC ">Model (A - Z) </option>

                  <option value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/special&amp;sort=p.model&amp;order=DESC ">Model (Z - A) </option>
                           </select>
        </div>
       </div>
       <div class="show-wrapper">
        <div class="col-md-1 text-right show">
          <label class="control-label" for="input-limit">Show:</label>
        </div>
        <div class="col-md-2 text-right limit">
          <select id="input-limit" class="form-control" onchange="location = this.value;">
                          <option value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/special&amp;limit=15 " selected="selected">15</option>
                                  <option value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/special&amp;limit=25 ">25 </option>
                                  <option value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/special&amp;limit=50 ">50 </option>
                                  <option value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/special&amp;limit=75 ">75 </option>
                                  <option value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/special&amp;limit=100 ">100 </option>
                          </select>
        </div>
      </div>
        </div>
      </div>
                  <div class="product-layout product-list col-xs-12">
            <div class="product-block product-thumb">
           <div class="product-block-inner">
        <div class="image ">
                <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=40">
          <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('40 ');"></button>
        <img src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/06-260x260.jpg" title="Galaxy S9 (Lilac Purple, 64 GB, 4GB RAM)" alt="Galaxy S9 (Lilac Purple, 64 GB, 4GB RAM)" class="img-responsive reg-image"/>
        <div class="image_content"><img class="img-responsive hover-image" src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/06-01-260x260.jpg" title="Galaxy S9 (Lilac Purple, 64 GB, 4GB RAM)" alt="Galaxy S9 (Lilac Purple, 64 GB, 4GB RAM)"/></div>
        </a>
                      <span class="special-tag">50%</span>

            </div>
              <div class="product-details">
                <div class="caption">
                                 <h4><a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=40">Galaxy S9 (Lilac Purple, 64 GB, 4GB RAM)</a></h4>
                       <div class="rating">
                                                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                                                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                                              &nbsp;<span style="cursor:pointer;" value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=40" class="total-review40">1 Review</span>
                     </div>
                              <p class="description">iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name o..</p>
                       <p class="price">
                                <span class="price-new">$62.00</span> <span class="price-old">$123.20</span>
                              </p>

                <div class="product_hover_block">
                  <div class="action">
                             <button type="button" class="cart_button" onclick="cart.add('40');" title="Add to Cart" >Add to Cart</button>
                     <div class="quickview-button">
              <a class="quickbox"  title="Quick View" href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/quick_view&amp;product_id=40"></a>
            </div>
            <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('40 ');"></button>
            <button class="compare_button" type="button"  title="Add to compare " onclick="compare.add('40 ');"></button>
                     </div>
            </div>
                </div>
              </div>
        </div>
            </div>
          </div>
          <script>
              $('.total-review40').on('click', function() {
               var t='http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=40';
              const parseResult = new DOMParser().parseFromString(t, "text/html");
              const parsedUrl = parseResult.documentElement.textContent;
              window.location.href = parsedUrl + '&review';
              return false;
            });
        </script>
                  <div class="product-layout product-list col-xs-12">
            <div class="product-block product-thumb">
           <div class="product-block-inner">
        <div class="image outstock">
                <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=35">
          <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('35 ');"></button>
        <img src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/12-260x260.jpg" title="MacBook Pro (Retina, 15-inch, 8-Core CPU)" alt="MacBook Pro (Retina, 15-inch, 8-Core CPU)" class="img-responsive reg-image"/>
        <div class="image_content"><img class="img-responsive hover-image" src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/12-01-260x260.jpg" title="MacBook Pro (Retina, 15-inch, 8-Core CPU)" alt="MacBook Pro (Retina, 15-inch, 8-Core CPU)"/></div>
        </a>
                      <span class="special-tag">51%</span>
                              <span class="stock_status">Out Of Stock</span>

            </div>
              <div class="product-details">
                <div class="caption">
                                 <h4><a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=35">MacBook Pro (Retina, 15-inch, 8-Core CPU)</a></h4>
                       <div class="rating">
                                                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                                              &nbsp;<span style="cursor:pointer;" value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=35" class="total-review35">1 Review</span>
                     </div>
                              <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ..</p>
                       <p class="price">
                                <span class="price-new">$60.80</span> <span class="price-old">$122.00</span>
                              </p>

                <div class="product_hover_block">
                  <div class="action">
                             <button type="button" class="cart_button out_of_stock" onclick="cart.add('35');" title="Out Of Stock" >Out Of Stock</button>
                     <div class="quickview-button">
              <a class="quickbox"  title="Quick View" href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/quick_view&amp;product_id=35"></a>
            </div>
            <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('35 ');"></button>
            <button class="compare_button" type="button"  title="Add to compare " onclick="compare.add('35 ');"></button>
                     </div>
            </div>
                </div>
              </div>
        </div>
            </div>
          </div>
          <script>
              $('.total-review35').on('click', function() {
               var t='http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=35';
              const parseResult = new DOMParser().parseFromString(t, "text/html");
              const parsedUrl = parseResult.documentElement.textContent;
              window.location.href = parsedUrl + '&review';
              return false;
            });
        </script>
                  <div class="product-layout product-list col-xs-12">
            <div class="product-block product-thumb">
           <div class="product-block-inner">
        <div class="image ">
                <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=43">
          <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('43 ');"></button>
        <img src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/11-260x260.jpg" title="Mini Mirrorless Digital Camera 45mm lens" alt="Mini Mirrorless Digital Camera 45mm lens" class="img-responsive reg-image"/>
        <div class="image_content"><img class="img-responsive hover-image" src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/11-02-260x260.jpg" title="Mini Mirrorless Digital Camera 45mm lens" alt="Mini Mirrorless Digital Camera 45mm lens"/></div>
        </a>
                      <span class="special-tag">92%</span>

            </div>
              <div class="product-details">
                <div class="caption">
                                 <h4><a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=43">Mini Mirrorless Digital Camera 45mm lens</a></h4>
                       <div class="rating">
                                                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                           &nbsp;<span style="cursor:pointer;" value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=43" class="total-review43">1 Review</span>
                     </div>
                              <p class="description">Intel Core 2 Duo processor

          Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, t..</p>
                       <p class="price">
                                <span class="price-new">$50.00</span> <span class="price-old">$602.00</span>
                              </p>

                <div class="product_hover_block">
                  <div class="action">
                             <button type="button" class="cart_button" onclick="cart.add('43');" title="Add to Cart" >Add to Cart</button>
                     <div class="quickview-button">
              <a class="quickbox"  title="Quick View" href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/quick_view&amp;product_id=43"></a>
            </div>
            <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('43 ');"></button>
            <button class="compare_button" type="button"  title="Add to compare " onclick="compare.add('43 ');"></button>
                     </div>
            </div>
                </div>
              </div>
        </div>
            </div>
          </div>
          <script>
              $('.total-review43').on('click', function() {
               var t='http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=43';
              const parseResult = new DOMParser().parseFromString(t, "text/html");
              const parsedUrl = parseResult.documentElement.textContent;
              window.location.href = parsedUrl + '&review';
              return false;
            });
        </script>
                  <div class="product-layout product-list col-xs-12">
            <div class="product-block product-thumb">
           <div class="product-block-inner">
        <div class="image ">
                <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=32">
          <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('32 ');"></button>
        <img src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/08-260x260.jpg" title="Samsung 10,000 mAh USB-C Battery Pack" alt="Samsung 10,000 mAh USB-C Battery Pack" class="img-responsive reg-image"/>
        <div class="image_content"><img class="img-responsive hover-image" src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/08-02-260x260.jpg" title="Samsung 10,000 mAh USB-C Battery Pack" alt="Samsung 10,000 mAh USB-C Battery Pack"/></div>
        </a>
                      <span class="special-tag">40%</span>

            </div>
              <div class="product-details">
                <div class="caption">
                                 <h4><a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=32">Samsung 10,000 mAh USB-C Battery Pack</a></h4>
                       <div class="rating">
                                                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                                              &nbsp;<span style="cursor:pointer;" value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=32" class="total-review32">1 Review</span>
                     </div>
                              <p class="description">Revolutionary multi-touch interface.
      iPod touch features the same multi-touch screen technology as..</p>
                       <p class="price">
                                <span class="price-new">$74.00</span> <span class="price-old">$122.00</span>
                              </p>

                <div class="product_hover_block">
                  <div class="action">
                             <button type="button" class="cart_button" onclick="cart.add('32');" title="Add to Cart" >Add to Cart</button>
                     <div class="quickview-button">
              <a class="quickbox"  title="Quick View" href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/quick_view&amp;product_id=32"></a>
            </div>
            <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('32 ');"></button>
            <button class="compare_button" type="button"  title="Add to compare " onclick="compare.add('32 ');"></button>
                     </div>
            </div>
                </div>
              </div>
        </div>
            </div>
          </div>
          <script>
              $('.total-review32').on('click', function() {
               var t='http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=32';
              const parseResult = new DOMParser().parseFromString(t, "text/html");
              const parsedUrl = parseResult.documentElement.textContent;
              window.location.href = parsedUrl + '&review';
              return false;
            });
        </script>
                  <div class="product-layout product-list col-xs-12">
            <div class="product-block product-thumb">
           <div class="product-block-inner">
        <div class="image ">
                <a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=49">
          <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('49 ');"></button>
        <img src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/13-260x260.jpg" title="Logitech G F710 Wireless Gamepad (Silver)" alt="Logitech G F710 Wireless Gamepad (Silver)" class="img-responsive reg-image"/>
        <div class="image_content"><img class="img-responsive hover-image" src="http://localhost:83/Www.McsGroup.com/groupemcs-It/image/cache/catalog/13-02-260x260.jpg" title="Logitech G F710 Wireless Gamepad (Silver)" alt="Logitech G F710 Wireless Gamepad (Silver)"/></div>
        </a>
                      <span class="special-tag">90%</span>

            </div>
              <div class="product-details">
                <div class="caption">
                                 <h4><a href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=49">Logitech G F710 Wireless Gamepad (Silver)</a></h4>
                       <div class="rating">
                                                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                           &nbsp;<span style="cursor:pointer;" value="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=49" class="total-review49">1 Review</span>
                     </div>
                              <p class="description">Samsung Galaxy Tab 10.1, is the world&rsquo;s thinnest tablet, measuring 8.6 mm thickness, running w..</p>
                       <p class="price">
                                <span class="price-new">$26.00</span> <span class="price-old">$241.99</span>
                              </p>

                <div class="product_hover_block">
                  <div class="action">
                             <button type="button" class="cart_button" onclick="cart.add('49');" title="Add to Cart" >Add to Cart</button>
                     <div class="quickview-button">
              <a class="quickbox"  title="Quick View" href="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/quick_view&amp;product_id=49"></a>
            </div>
            <button class="wishlist" type="button"  title="Add to Wish List " onclick="wishlist.add('49 ');"></button>
            <button class="compare_button" type="button"  title="Add to compare " onclick="compare.add('49 ');"></button>
                     </div>
            </div>
                </div>
              </div>
        </div>
            </div>
          </div>
          <script>
              $('.total-review49').on('click', function() {
               var t='http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=49';
              const parseResult = new DOMParser().parseFromString(t, "text/html");
              const parsedUrl = parseResult.documentElement.textContent;
              window.location.href = parsedUrl + '&review';
              return false;
            });
        </script>
                <div class="pagination-wrapper">
        <div class="col-sm-6 text-left page-link"></div>
        <div class="col-sm-6 text-right page-result">Showing 1 to 5 of 5 (1 Pages)</div>
       </div>
              </div>
        </div>
  </div>

@component('mcsIt.components.footer')
@endcomponent
@endsection
