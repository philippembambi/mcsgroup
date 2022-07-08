@inject('basket', App\Utilities\MyBasket::class)
@inject('purchase', App\Utilities\Purchase::class)
@inject('categories', App\Utilities\Category::class)

<style>
    #logo_mcs{
        height: 80px;
    }

    @media (max-width: 322px)  {
        #search{
            width: 108px;
        }
        }


        .search_box:after {
    /* content: ""; */
    content: "\f107";
    font-family: 'FontAwesome';
    position: absolute;
	right: -11px;
    top: 0;
    z-index: 1;
    cursor: pointer;
    bottom: 0;
    margin: auto;
    height: 20px;
    width: 20px;
    background: #F9BF39;
    border: 2px solid #fff;
    border-radius: 50%;
    line-height: 16px;
    color: white;
    text-align: center;
    box-shadow: 0 0 8px rgb(0 0 0 / 8%);
}
</style>


<script>
    /*
    var el = document.getElementById("scrollableMenu");
    document.addEventListener('scroll', function(){
        el.style.position = "fixed";
        el.style.width = "100%";
        el.style.left = 0;
        el.style.top = 0;
        el.style.marginTop = "-1px";
    });
    */
</script>
<header>
    <div class="header_top">
      <div class="container">
        <div class="row">

         <div class="col-sm-4 header-logo">
            <div id="logo"><a href="{{ route('mcsIt.index') }}"><img src="{{ asset('image/logo_groupemcs.png')   }}" id="logo_mcs" title="McsGroup" alt="Demo Store" class="img-responsive" /></a>        </div>
         </div>

                <!-- <div id="_desktop_contact_link"></div> -->

         <div class="nav2">

            <div class="header_wishlist"><span>{{ $basket->countItems() }}</span><a href="{{   route("basket.show") }}" id="wishlist-total"></a></div>

         </div>

         <div class="header_right">
            <div id="_desktop_contact_link" class="header-cms-block">
                <div class="wdicon"></div>
                    <span class="content">
                        <span class="service-title">Appel d'urgence :</span>
                        <a href="tel:%phone%" class="contact-info">+33659598750</a>
                    </span>
            </div>
         </div>
         <div class="col-sm-5 header_search">

            <div id="searchbox" class="input-group searchtoggle">
                <div class="search_box">
                <select name="category_id" class="form-control-select">
                    @foreach ($categories->data as $category)
                    <option value="{{ $category->id }}">{{ $category->label }}</option>
                    @endforeach
                </select>
                </div>
                <input type="text" name="searchText" id="search" value="" placeholder="Rechercher un article..." class="form-control input-lg" />
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-lg" ><i style="color: white;" class="fa fa-search"></i>Recherche</button>
                </span>
            </div>
         </div>

        </div>
      </div>
    </div>

    <div class="header_bottom_cover">
        <div class="header_bottom" id="scrollableMenu">
            <div class="container">
                <div class="row">
                    <div class="box-category-top">
                        <div class="box-heading">Menu</div>
                    </div>
                    <div class="box-content-category">
                        <ul id="nav-one" class="dropmenu box-category">

                            <li class="top_level"><a href="
                                #57">Washing Machine</a></li>
                            <li class="top_level"><a href="
                                #17">Speakers</a></li>
                            <li class="top_level"><a href="
                                #24">Smart Watches</a></li>
                            <li class="top_level"><a href="
                                #33">Cameras</a></li>
                            <li class="top_level"><a href="
                                #74">Clothes Iron</a></li>
                            <li class="top_level"><a href="
                                #76">Dishwasher</a></li>
                            <li class="top_level"><a href="
                                #77">Refrigerators</a></li>
                            <li class="top_level"><a href="
                                #75">Water Purifier</a></li>
                            <li class="top_level"><a href="
                                #78">Air Conditioner</a></li>
                            <li class="top_level"><a href="
                                #79">Network Router</a></li>
                        </ul>
                    </div>

                    <div class="header_center">
                        <nav class="nav-container" role="navigation">
                            <div class="nav-inner">
                                <!-- ======= Menu Code START ========= -->
                                <!-- Opencart 3 level Category Menu-->
                                <div id="menu" class="main-menu">
                                    <div id="res-menu" class="main-menu nav-container1 responsive-menu">
                                        <div class="nav-responsive"><span>Menu</span> </div>
                                        <ul class="main-navigation">
                                            <div class="menu expandable"><span>Menu</span></div>
                                                <li><a href="{{ route('mcsIt.index') }}">Home</a></li>
                                                <li><a href="
                                                    #20">Computers</a>
                                                    <ul>
                                                        <!-- 2 Level Sub Categories START -->
                                                        <li class="dropdown"><a href="
                                                            #20_61">Workstation</a>
                                                            <ul class="col14">
                                                                    <li><a href="
                                                                        #20_61_63">Cluster</a></li>
                                                                    <li><a href="
                                                                        #20_61_64">Cubicle</a></li>
                                                                    <li><a href="
                                                                        #20_61_62">Linear</a></li>
                                                                    <li><a href="
                                                                        #20_61_65">Pentagon</a></li>
                                                            </ul>

                                                        </li>
                                                        <!-- 2 Level Sub Categories END -->

                                                    </ul>

                                                    <ul>
                                                        <!-- 2 Level Sub Categories START -->
                                                        <li class="dropdown"><a href="
                                                            #20_26">Laptop</a>
                                                            <ul class="col14">
                                                                    <li><a href="
                                                                        #20_26_59">Apple MacBook</a></li>
                                                                    <li><a href="
                                                                        #20_26_68">Convertible</a></li>
                                                                    <li><a href="
                                                                        #20_26_67">Netbook</a></li>
                                                                    <li><a href="
                                                                        #20_26_66">Ultrabook</a></li>
                                                            </ul>

                                                        </li>
                                                        <!-- 2 Level Sub Categories END -->

                                                    </ul>

                                                    <ul>
                                                        <!-- 2 Level Sub Categories START -->
                                                        <li class="dropdown"><a href="
                                                            #20_27">Desktop</a>
                                                            <ul class="col14">
                                                                    <li><a href="
                                                                        #20_27_69">Mainframe</a></li>
                                                                    <li><a href="
                                                                        #20_27_71">Minicomputer</a></li>
                                                                    <li><a href="
                                                                        #20_27_60">Samsung pc</a></li>
                                                                    <li><a href="
                                                                        #20_27_70">Tower Casing</a></li>
                                                            </ul>

                                                        </li>
                                                        <!-- 2 Level Sub Categories END -->
                                                    </ul>


                                                </li>

                                                <li><a href="
                                                    #18">Television</a>

                                                    <ul>
                                                        <!-- 2 Level Sub Categories START -->
                                                        <li><a href="
                                                            #18_45">LCD Screen</a></li>
                                                        <!-- 2 Level Sub Categories END -->
                                                        <!-- 2 Level Sub Categories START -->
                                                        <li><a href="
                                                            #18_46">LED Screen</a></li>
                                                        <!-- 2 Level Sub Categories END -->
                                                        <!-- 2 Level Sub Categories START -->
                                                        <li><a href="
                                                            #18_72">Plasma Screen</a></li>
                                                        <!-- 2 Level Sub Categories END -->
                                                        <!-- 2 Level Sub Categories START -->
                                                        <li><a href="
                                                            #18_73">Super Amoled</a></li>
                                                        <!-- 2 Level Sub Categories END -->
                                                    </ul>
                                                </li>
                                                <li><a href="
                                                    #25">Components</a>
                                                    <ul>
                                                        <!-- 2 Level Sub Categories START -->
                                                        <li><a href="
                                                            #25_29">Mice and Trackballs</a></li>
                                                        <!-- 2 Level Sub Categories END -->
                                                        <!-- 2 Level Sub Categories START -->
                                                        <li class="dropdown"><a href="
                                                            #25_28">Monitors</a>
                                                            <ul class="col14">
                                                                    <li><a href="
                                                                        #25_28_35">Cathode Ray</a></li>
                                                                    <li><a href="
                                                                        #25_28_36">Light Emitting</a></li>
                                                            </ul>

                                                        </li>
                                                        <!-- 2 Level Sub Categories END -->
                                                        <!-- 2 Level Sub Categories START -->
                                                        <li><a href="
                                                            #25_30">Printers</a></li>
                                                        <!-- 2 Level Sub Categories END -->
                                                        <!-- 2 Level Sub Categories START -->
                                                        <li><a href="
                                                            #25_31">Scanners</a></li>
                                                        <!-- 2 Level Sub Categories END -->
                                                        <!-- 2 Level Sub Categories START -->
                                                        <li><a href="
                                                            #25_32">Web Cameras</a></li>
                                                        <!-- 2 Level Sub Categories END -->
                                                    </ul>

                                                </li>
                                                <li><a href="
                                                    #57">Washing Machine</a></li>
                                                <li><a href="
                                                    #17">Speakers</a></li>
                                                <li><a href="
                                                    #24">Smart Watches</a></li>
                                                <li><a href="
                                                    #33">Cameras</a></li>
                                                <li><a href="
                                                    #74">Clothes Iron</a></li>
                                                <li><a href="
                                                    #76">Dishwasher</a></li>
                                                <li><a href="
                                                    #77">Refrigerators</a></li>
                                                <li><a href="
                                                    #75">Water Purifier</a></li>
                                                <li><a href="
                                                    #78">Air Conditioner</a></li>
                                                <li><a href="
                                                    #79">Network Router</a></li>
                                        </ul>

                                    </div>

                                    <div class="static-menu">
                                        <ul id="static-menu">
                                            <li><a href="{{ route('mcsIt.index') }}">Accueil</a></li>
                                            <li class="dropdown"><a href="#">Collections <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown-inner">

                                                        <div class="manufacturer-content-home">
                                                            <div class="brand-name">
                                                                <a href="#">
                                                                            <img src="{{    asset("image/images1.jpg")  }}" style="height: 70px;width: 100px;" alt="brands" class="img-responsive reg-image"/>
                                                                                <span>Dell</span>
                                                                </a>
                                                            </div>
                                                            <div class="brand-name">
                                                                <a href="#=15">
                                                                            <img src="{{    asset("image/images2.jpg")  }}" style="height: 70px;width: 100px;" alt="brands" class="img-responsive reg-image"/>
                                                                                <span>Asus</span>
                                                                </a>
                                                            </div>
                                                            <div class="brand-name">
                                                                <a href="#=9">
                                                                            <img src="{{    asset("image/images3.png")  }}" style="height: 70px;width: 100px;" alt="brands" class="img-responsive reg-image"/>
                                                                                <span>Samsung</span>
                                                                </a>
                                                            </div>
                                                            <div class="brand-name">
                                                                <a href="#=14">
                                                                            <img src="{{    asset("image/images4.png")  }}" style="height: 70px;width: 100px;" alt="brands" class="img-responsive reg-image"/>
                                                                                <span>MacOs</span>
                                                                </a>
                                                            </div>
                                                            <div class="brand-name">
                                                                <a href="#=7">
                                                                            <img src="{{    asset("image/images5.png")  }}" style="height: 70px;width: 100px;" alt="brands" class="img-responsive reg-image"/>
                                                                                <span>Lenovo</span>
                                                                </a>
                                                            </div>
                                                            <div class="brand-name">
                                                                <a href="#=10">
                                                                            <img src="{{    asset("image/images6.png")  }}" style="height: 70px;width: 100px;" alt="brands" class="img-responsive reg-image"/>
                                                                                <span>Hp</span>
                                                                </a>
                                                            </div>
                                                            <div class="brand-name">
                                                                <a href="#=5">
                                                                            <img src="{{    asset("image/images7.png")  }}" style="height: 70px;width: 100px;" alt="brands" class="img-responsive reg-image"/>
                                                                                <span>Msi</span>
                                                                </a>
                                                            </div>
                                                            <div class="brand-name">
                                                                <a href="#=12">
                                                                            <img src="{{    asset("image/images8.png")  }}" style="height: 70px;width: 100px;" alt="brands" class="img-responsive reg-image"/>
                                                                                <span>Acer</span>
                                                                </a>
                                                            </div>
                                                            <div class="brand-name">
                                                                <a href="#=6">
                                                                            <img src="{{    asset("image/images9.jpg")  }}" style="height: 70px;width: 100px;" alt="brands" class="img-responsive reg-image"/>
                                                                                <span>Lenovo</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="{{ route('mcsIt.index') }}#poles">Pôles & Activités </a></li>
                                            <li class="hot menu-item"><a href="{{   url("user/authenticate") }}">
                                                @auth
                                                   {{   '@'.auth()->user()->fullname}}
                                                @endauth
                                                @guest
                                                    S'identifier
                                                @endguest
                                            </a></li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </nav>


                    </div>

                    <div class="col-sm-3 header_cart">
                        <a href="{{   route("basket.show") }}" style="background-color: black;">
                        <div id="cart" class="btn-group btn-block">

                            <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle">
                                <div class="cart_detail">
                                    <div class="cart_image"></div>
                                        <span id="cart-total">
                                            <span class="item-count">{{ $purchase->countPurchases() }}</span>
                                            <span class="mycart">Commande (s)</span>
                                        </span>
                                </div>
                            </button>

                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
