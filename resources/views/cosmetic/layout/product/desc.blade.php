@extends('cosmetic._app')

@section('content')

    @component('cosmetic.components._header')
    @endcomponent


<link rel="stylesheet" href="{{ asset('cosmetic/css/stylesheet.css') }}">
<style>
    .new {
        background-color: #1d3b5f;
    }
    .add_cart_btn{
        background-color: #1d3b5f;
    }
</style>


<div class="col-lg-8">
    <div class="product_details_text">
        <h3>Nike Flex Run Tracksuit</h3>
        <ul class="p_rating">
            <li><a href="#"><i class="fa fa-star"></i></a></li>
            <li><a href="#"><i class="fa fa-star"></i></a></li>
            <li><a href="#"><i class="fa fa-star"></i></a></li>
            <li><a href="#"><i class="fa fa-star"></i></a></li>
            <li><a href="#"><i class="fa fa-star"></i></a></li>
        </ul>
        <div class="add_review">
            <a href="#">5 Reviews</a>
            <a href="#">Add your review</a>
        </div>
            <h6>Available In <span>Stock</span></h6>
            <h4>$45.05</h4>
            <p>Curabitur semper varius lectus sed consequat. Nam accumsan dapibus sem, sed lobortis nisi porta vitae. Ut quam tortor, facilisis nec laoreet consequat, malesuada a massa. Proin pretium tristique leo et imperdiet.</p>
        <div class="p_color">
        <h4 class="p_d_title">color <span>*</span></h4>
        <ul class="color_list">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>
        </div>
        <div class="p_color">
            <h4 class="p_d_title">size <span>*</span></h4>
            <select class="selectpicker">
            <option>Select your size</option>
            <option>Select your size M</option>
            <option>Select your size XL</option>
            </select>
        </div>
        <div class="quantity">
            <div class="custom">
                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon_minus-06"></i></button>
                <input type="text" name="qty" id="sst" maxlength="12" value="01" title="Quantity:" class="input-text qty">
                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="icon_plus"></i></button>
            </div>
            <a class="add_cart_btn" href="#">add to cart</a>
        </div>
        <div class="shareing_icon">
        <h5>share :</h5>
        <ul>
            <li><a href="#"><i class="social_facebook"></i></a></li>
            <li><a href="#"><i class="social_twitter"></i></a></li>
            <li><a href="#"><i class="social_pinterest"></i></a></li>
            <li><a href="#"><i class="social_instagram"></i></a></li>
            <li><a href="#"><i class="social_youtube"></i></a></li>
        </ul>
        </div>
    </div>
</div>

@endsection
