<style>

    .strip {
    background-color: #fff;
    display: block;
    position: relative;
    margin-bottom: 30px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.1);
    }

    .strip a.wish_bt {
    position: absolute;
    right: 15px;
    top: 15px;
    z-index: 1;
    background-color: black;
    background-color: rgba(0, 0, 0, 0.6);
    padding: 9px 10px;
    display: inline-block;
    color: #fff;
    line-height: 1;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    }
    .strip a.wish_bt:after {
    font-family: 'ElegantIcons';
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;
    }
    .strip a.wish_bt.liked:after {
    color: #FFC107;
    }
    .strip a.wish_bt:hover.liked:after {
    color: #FFC107;
    }
    .strip a.wish_bt:hover:after {
    color: #fff;
    }
    .strip figure {
    margin-bottom: 0;
    overflow: hidden;
    position: relative;
    height: 200px;
    -webkit-border-radius: 3px 3px 0 0;
    -moz-border-radius: 3px 3px 0 0;
    -ms-border-radius: 3px 3px 0 0;
    border-radius: 3px 3px 0 0;
    }
    .strip figure small {
    position: absolute;
    background-color: black;
    background-color: rgba(0, 0, 0, 0.6);
    left: 20px;
    top: 22px;
    text-transform: uppercase;
    color: #fff;
    font-weight: 600;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    padding: 7px 10px 4px 10px;
    line-height: 1;
    }
    .strip figure .read_more {
    position: absolute;
    top: 50%;
    left: 0;
    margin-top: -12px;
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
    text-align: center;
    opacity: 0;
    visibility: hidden;
    width: 100%;
    -webkit-transition: all 0.6s;
    transition: all 0.6s;
    z-index: 2;
    }
    .strip figure .read_more span {
    background-color: #fcfcfc;
    background-color: rgba(255, 255, 255, 0.8);
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    -ms-border-radius: 20px;
    border-radius: 20px;
    display: inline-block;
    color: #222;
    font-size: 12px;
    font-size: 0.75rem;
    padding: 5px 10px;
    }
    .strip figure:hover .read_more {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    }
    .strip figure a img {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%) scale(1);
    -moz-transform: translate(-50%, -50%) scale(1);
    -ms-transform: translate(-50%, -50%) scale(1);
    -o-transform: translate(-50%, -50%) scale(1);
    transform: translate(-50%, -50%) scale(1);
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -o-backface-visibility: hidden;
    backface-visibility: hidden;
    width: 100%;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    }
    .strip figure a:hover img {
    -webkit-transform: translate(-50%, -50%) scale(1.1);
    -moz-transform: translate(-50%, -50%) scale(1.1);
    -ms-transform: translate(-50%, -50%) scale(1.1);
    -o-transform: translate(-50%, -50%) scale(1.1);
    transform: translate(-50%, -50%) scale(1.1);
    }
    .strip .wrapper {
    padding: 20px 25px 15px 25px;
    }
    .strip .wrapper h3 {
    font-size: 20px;
    font-size: 1.25rem;
    margin: 0;
    }
    .strip .wrapper small {
    font-weight: 600;
    margin-bottom: 10px;
    display: inline-block;
    font-size: 13px;
    font-size: 0.8125rem;
    }
    .strip .wrapper p {
    margin-bottom: 15px;
    }
    .strip ul {
    padding: 20px 15px 17px 20px;
    border-top: 1px solid #ededed;
    }
    .strip ul li {
    display: inline-block;
    margin-right: 15px;
    }
    .strip ul li .score {
    margin-top: -10px;
    }
    .strip ul li:first-child {
    font-size: 13px;
    font-size: 0.8125rem;
    margin-top: -4px;
    }
    .strip ul li:first-child i {
    font-size: 20px;
    font-size: 1.25rem;
    position: relative;
    top: 4px;
    }
    .strip ul li:last-child {
    margin-right: 0;
    float: right;
    }
    .strip.list_view {
    min-height: 250px;
    }
    .strip.list_view a.wish_bt {
    background-color: black;
    background-color: rgba(0, 0, 0, 0.1);
    color: #555;
    top: 25px;
    right: 25px;
    }
    .strip.list_view a.wish_bt.liked:after {
    color: rgb(197, 6, 6);
    }
    .strip.list_view a.wish_bt:hover.liked:after {
    color: rgb(197, 6, 6);
    }
    .strip.list_view a.wish_bt:hover:after {
    color: #444;
    }
    .strip.list_view .score {
    margin-right: 10px;
    }
    .strip.list_view figure {
    margin-bottom: 0;
    overflow: hidden;
    position: relative;
    min-height: 250px;
    -webkit-border-radius: 3px 0 0 3px;
    -moz-border-radius: 3px 0 0 3px;
    -ms-border-radius: 3px 0 0 3px;
    border-radius: 3px 0 0 3px;
    }


    @media (max-width: 991px) {
    .strip.list_view figure {
        min-height: 220px;
        max-height: 220px;
        height: 220px;
        -webkit-border-radius: 3px 3px 0 0;
        -moz-border-radius: 3px 3px 0 0;
        -ms-border-radius: 3px 3px 0 0;
        border-radius: 3px 3px 0 0;
    }
    }



    .strip.list_view figure small {
    right: 30px;
    top: 30px;
    left: inherit;
    }
    .strip.list_view figure a img {
    height: 310px;
    width: auto;
    max-width: none;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    }
    @media (max-width: 991px) {
    .strip.list_view figure a img {
        max-width: inherit;
        height: 100%;
        width: 100%;
    }
    }
    @media (max-width: 767px) {
    .strip.list_view figure a img {
        height: 350px;
        width: 100%;
    }
    }

    .strip.list_view figure a:hover img {
    -webkit-transform: translate(-50%, -50%) scale(1.1);
    -moz-transform: translate(-50%, -50%) scale(1.1);
    -ms-transform: translate(-50%, -50%) scale(1.1);
    -o-transform: translate(-50%, -50%) scale(1.1);
    transform: translate(-50%, -50%) scale(1.1);
    }
    .strip.list_view .wrapper {
    padding: 30px 30px 20px 30px;
    min-height: 235px;
    }
    @media (max-width: 991px) {
    .strip.list_view .wrapper {
        min-height: inherit;
    }
    }
    .strip.list_view ul {
    padding: 20px 15px 20px 30px;
    margin-bottom: 0;
    }
    .strip.map_view {
    min-height: 120px;
    margin-bottom: 20px;
    }
    .strip.map_view a.wish_bt {
    background-color: black;
    background-color: rgba(0, 0, 0, 0.1);
    color: #555;
    top: 15px;
    right: 15px;
    }
    .strip.map_view a.wish_bt.liked:after {
    color: rgb(197, 6, 6);
    }
    .strip.map_view a.wish_bt:hover.liked:after {
    color: rgb(197, 6, 6);
    }
    .strip.map_view a.wish_bt:hover:after {
    color: #444;
    }
    .strip.map_view .score {
    margin-right: 10px;
    }
    @media (max-width: 767px) {
    .strip.map_view .score {
        position: relative;
        top: 3px;
    }
    }
    @media (max-width: 767px) {
    .strip.map_view .score span {
        display: none;
    }
    }
    .strip.map_view a.address:before {
    content: "\e081";
    }
    @media (max-width: 991px) {
    .strip.map_view a.address {
        display: none;
    }
    }
    .strip.map_view figure {
    margin-bottom: 0;
    overflow: hidden;
    position: relative;
    min-height: inherit;
    height: 185px;
    -webkit-border-radius: 3px 0 0 3px;
    -moz-border-radius: 3px 0 0 3px;
    -ms-border-radius: 3px 0 0 3px;
    border-radius: 3px 0 0 3px;
    }
    @media (max-width: 991px) {
    .strip.map_view figure {
        height: 165px;
    }
    }
    .strip.map_view figure small {
    right: 20px;
    top: 20px;
    left: inherit;
    }
    .strip.map_view figure a img {
    height: 210px;
    width: auto;
    max-width: none;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    }
    @media (max-width: 991px) {
    .strip.map_view figure a img {
        max-width: inherit;
        height: 210px;
        width: auto;
    }
    }
    .strip.map_view figure a:hover img {
    -webkit-transform: translate(-50%, -50%) scale(1.1);
    -moz-transform: translate(-50%, -50%) scale(1.1);
    -ms-transform: translate(-50%, -50%) scale(1.1);
    -o-transform: translate(-50%, -50%) scale(1.1);
    transform: translate(-50%, -50%) scale(1.1);
    }
    .strip.map_view .wrapper {
    padding: 20px 20px 0 20px;
    min-height: 110px;
    }
    .strip.map_view .wrapper small {
    line-height: 1.3;
    margin-top: 5px;
    }
    @media (max-width: 767px) {
    .strip.map_view .wrapper h3 {
        font-size: 16px;
        font-size: 1rem;
    }
    }
    @media (max-width: 991px) {
    .strip.map_view .wrapper {
        min-height: 90px;
        padding-right: 45px;
    }
    }
    .strip.map_view ul {
    padding: 20px 5px 15px 15px;
    margin-bottom: 0;
    }

    .strip_booking {
  border-bottom: 1px solid #ededed;
  padding-bottom: 15px;
  margin-bottom: 15px;
    }
    .strip_booking.last {
    border-bottom: none;
    }
    .strip_booking h3 {
    font-size: 16px;
    font-size: 1rem;
    text-transform: uppercase;
    position: relative;
    top: 10px;
    padding-left: 65px;
    }
    @media (max-width: 767px) {
    .strip_booking h3 {
        margin: 15px 0;
    }
    }
    .strip_booking h3 span {
    color: #999;
    display: block;
    font-size: 11px !important;
    }
    .strip_booking .date {
    background-color: #f8f8f8;
    text-align: center;
    line-height: 1;
    }
    .strip_booking .date .month {
    background-color: #32a067;
    display: block;
    padding: 3px 0;
    color: #fff;
    text-transform: uppercase;
    }
    .strip_booking .date .day {
    padding: 15px;
    margin-top: 1px;
    color: #999;
    text-transform: uppercase;
    display: block;
    font-size: 12px;
    font-size: 0.75rem;
    }
    .strip_booking .date .day strong {
    font-size: 32px;
    font-size: 2rem;
    font-weight: normal;
    display: block;
    color: #32a067;
    margin-bottom: 3px;
    }

    .strip_booking h3.hotel_booking:before, .strip_booking h3.restaurant_booking:before, .strip_booking h3.bars_booking:before {
    font-style: normal;
    font-weight: normal;
    font-family: "fontello";
    font-size: 24px;
    font-size: 1.5rem;
    color: #999;
    position: absolute;
    border: 1px solid #ededed;
    width: 50px;
    height: 50px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    left: 0;
    top: -10px;
    text-align: center;
    line-height: 50px;
    }

    .strip_booking h3.hotel_booking:before {
    content: "\ed72";
    }

    .strip_booking h3.restaurant_booking:before {
    content: "\ed80";
    }

    .strip_booking h3.bars_booking:before {
    content: "\ed54";
    }

</style>

<style>
    #poles{
        margin-top: 7%;
    }

    .margin_80_55 {
  padding-top: 80px;
  padding-bottom: 55px;
}

@media (max-width: 991px) {
  .margin_80_55 {
    padding-top: 60px;
    padding-bottom: 35px;
  }
}
@media (max-width: 575px) {
  .margin_80_55 {
    padding-top: 45px;
    padding-bottom: 15px;
  }
}

@media (max-width: 767px)  {
.pole{
        min-width: 100%;
        height: 150px;
        min-height: 150px;
    }

    #poles{
        margin-top: 37%;
    }
    .poledesc{
        display: none;
    }
}
</style>

    <div class="container margin_80_55" id="poles">
        <div class="row">

            <div class="col-lg-6">
                <div class="strip list_view">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <figure>
                                <a href="{{ route("home") }}">
                                    <img
                                            src="{{ asset("image/ads1.jpg")}}"
                                            class="pole" alt="">
                                            <div class="read_more"><span>Plus d'informations</span>
                                            </div></a>
                                <small>High-tech</small>
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <div class="wrapper">
                                <a href="{{ route("home") }}" class="wish_bt">
                                    <i class="fa fa-windows" style="font-size: 18px;"></i></a>
                                <h3><a href="{{ route("home") }}" style="font-family: costafont;">MCS IT</a></h3>
                                <p class="poledesc">
                                    <br>
                                    <i class="icon_info_alt"></i>
                                    Acheter des produits informatiques (neufs ou recondionnés),
                                    Suivez une formation dans tous les domaines de l'informatique
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="strip list_view">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <figure>
                                <a href="{{ route('feedback.index') }}">
                                    <img
                                            src="{{ asset("image/woman-1446557_1920.jpg")}}"
                                            alt="">
                                            <div class="read_more"><span>Plus d'informations</span>
                                            </div></a>
                                            <small>Audio-visuel</small>
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <div class="wrapper">
                                <a href="{{ route('feedback.index') }}" class="wish_bt">
                                    <i class="fa fa-video-camera" style="font-size: 18px;"></i></a>
                                <h3><a href="{{ route('feedback.index') }}" style="font-family: costafont;">MCS PROD</a></h3>
                                <p class="poledesc">
                                    <br>
                                    <i class="icon_info_alt"></i>
                                Production audio-visuel et prise des vues post-production (montage vidéo et sonore)
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="strip list_view">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <figure>
                                <a href="{{ route('feedback.index') }}">
                                    <img
                                            src="{{ asset("image/online-6404937_1920.jpg")}}"
                                            class="img-thumbnail pole" alt="">
                                            <div class="read_more"><span>Plus d'informations</span>
                                            </div>
                                </a>
                                            <small>Online Shop</small>
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <div class="wrapper">
                                <a href="{{ route('feedback.index') }}" class="wish_bt">
                                    <i class="fa fa-shopping-cart" style="font-size: 18px;"></i></a>
                                <h3><a href="{{ route('feedback.index') }}" style="font-family: costafont;">MCS SHOP</a></h3>
                                <p class="poledesc">
                                    <i class="icon_info_alt"></i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet recusandae, iste exercitationem doloribus inventore saepe
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="strip list_view">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <figure>
                                <a href="{{ route('feedback.index') }}">
                                    <img
                                            src="{{ asset("image/online.png")}}"
                                            class="img-thumbnail pole" alt="">
                                            <div class="read_more"><span>Plus d'informations</span>
                                            </div></a>
                                            <small>Business</small>
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <div class="wrapper">
                                <a href="{{ route('feedback.index') }}" class="wish_bt">
                                    <i class="fa fa-globe" style="font-size: 18px;"></i></a>
                                <h3><a href="{{ route('feedback.index') }}" style="font-family: costafont;">MCS POINT COM</a></h3>
                                <p class="poledesc">
                                    <i class="icon_info_alt"></i>
                                    Découvrez le meilleur de la communication digitale et des stratégies marketing pour vos affaires
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /row -->
    </div>
