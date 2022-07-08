<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Mcs Groupe It : Les meilleurs services It de votre choix">
        <meta name="keywords" content="Mcs Groupe It">

        <link rel="shortcut icon" href="{{ asset('image/logo_groupemcs.png') }}" type="image/png">
        <link rel="stylesheet" href="{{ asset('catalog/view/javascript/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('catalog/view/theme/Demo-Store/stylesheet/stylesheet.css') }}">
        <link rel="stylesheet" href="{{ asset('catalog/view/javascript/jquery/magnific/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('catalog/view/theme/Demo-Store/stylesheet/webdigify/lightbox.css') }}">
        <link rel="stylesheet" href="{{ asset('catalog/view/theme/Demo-Store/stylesheet/webdigify/carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('catalog/view/theme/Demo-Store/stylesheet/webdigify/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('catalog/view/theme/Demo-Store/stylesheet/webdigify/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('catalog/view/theme/Demo-Store/stylesheet/webdigify/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('catalog/view/javascript/jquery/owl-carousel/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('catalog/view/javascript/jquery/owl-carousel/owl.transitions.css') }}">
        <link rel="stylesheet" href="{{ asset('catalog/view/javascript/jquery/swiper/css/swiper.min.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('catalog/view/javascript/jquery/swiper/css/opencart.css') }}" media="screen">

        <link rel="stylesheet" href="{{ asset('catalog/view/javascript/jquery/owl-carousel/owl.carousel.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('catalog/view/javascript/jquery/owl-carousel/owl.transitions.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('catalog/view/javascript/jquery/swiper/css/opencart.css') }}" media="screen">

        <link rel="stylesheet" href="{{ asset('css/custom/product.css') }}" media="screen">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('catalog/css/stylesheet.css') }}">

        <link rel="stylesheet" href="{{ asset('catalog/css/shop.css') }}">


        <style>
            .new {
                background-color: #1d3b5f;
            }
            .add_cart_btn{
                background-color: #1d3b5f;
            }
        </style>
        
        <title><?php echo isset($title)?$title:'Mcs Groupe : Votre partenaire business';  ?></title>

    </head>

    <body class="common-home layout-1">

        @stack('scripts.head')

        @yield('content')

        @include('flashy::message')

        @stack('scripts.foot')


    </body>

    <script src="{{ asset('catalog/view/javascript/jquery/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/jquery.countdown.js') }}"></script>
    <!--
    <script src="{{ asset('catalog/view/javascript/jquery/swiper/js/swiper.jquery.js') }}"></script>
    -->
    <script src="{{ asset('catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('catalog/view/javascript/datetimepicker/bootstrap-datetimepicker.min.css') }}"></script>
    <script src="{{ asset('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ asset('catalog/view/javascript/webdigify/custom.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/webdigify/jstree.min.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/webdigify/carousel.min.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/webdigify/webdigify.min.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/webdigify/jquery.formalize.min.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/webdigify/jquery.elevatezoom.min.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/webdigify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/webdigify/tabs.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/webdigify/jquery.hoverdir.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/webdigify/modernizr.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/lightbox/lightbox-2.6.min.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/webdigify/inview.js') }}"></script>
    <script src="{{ asset('catalog/view/javascript/common.js') }}"></script>
    <!-- ======= Quick view JS ========= -->
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
        <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $("#spinner").fadeOut("slow");
            });
        </script>

        <script>
            $('.total-review31').on('click', function() {
            var t='http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=31';
            const parseResult = new DOMParser().parseFromString(t, "text/html");
            const parsedUrl = parseResult.documentElement.textContent;
            window.location.href = parsedUrl + '&review';
            return false;
        });
        </script>

        <script>
            $('#tabs a').tabs();
        </script>

        <script>
            $('#tabss a').tabss();
        </script>

        <script>
            $('#slideshow0').swiper({
            mode: 'horizontal',
            slidesPerView: 1,
            pagination: '.slideshow0',
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            spaceBetween: 0,
            autoplay: 2500,
            autoplayDisableOnInteraction: true,
            loop: true,
            effect:'fade'
            });
            </script>
            <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
            $("#spinner").fadeOut("slow");
            });

        </script>
        <script type="text/javascript">

            $(document).ready(function(){
            $('.blogcarousel').owlCarousel({
                    items: 4,
                    autoPlay: false,
                    singleItem: false,
                    navigation: true,
                    navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                    pagination: true,
                    itemsDesktop : [991,2],
                    itemsDesktopSmall:[543,1]
                });
            });
        </script>

        <script>
            function subscribe()
            {
                var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                var email = $('#txtemail').val();
                if(email != "")
                {
                    if(!emailpattern.test(email))
                    {
                        $('.text-danger').remove();
                        var str = '<span class="error">Invalid Email</span>';
                        $('#txtemail').after('<div class="text-danger">Invalid Email</div>');

                        return false;
                    }
                    else
                    {
                        $.ajax({
                            url: 'index.php?route=extension/module/newsletters/news',
                            type: 'post',
                            data: 'email=' + $('#txtemail').val(),
                            dataType: 'json',


                            success: function(json) {

                            $('.text-danger').remove();
                            $('#txtemail').after('<div class="text-danger">' + json.message + '</div>');

                            }

                        });
                        return false;
                    }
                }
                else
                {
                    $('.text-danger').remove();
                    $('#txtemail').after('<div class="text-danger">Email Is Require</div>');
                    $(email).focus();

                    return false;
                }


            }
        </script>

        <script type="text/javascript">

            $(document).ready(function(){
            $('#wdtestimonial-carousel').owlCarousel({
                    items: 1,
                    autoPlay: false,
                    singleItem: true,
                    navigation: true,
                    navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                    pagination: true,
                });
            });
        </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.service-area-carousel').owlCarousel({
                    items: 4,
                    autoPlay: true,
                    singleItem: false,
                    navigation: true,
                    navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                    pagination: false,
                    itemsDesktop : [1500,4],
                    itemsDesktopSmall:[1199,3],
                    itemsTablet :	[733,2],
                    itemsTabletSmall : [575, 1],
                    // itemsMobile: [479, 2]
                });

                 $('#wdcmsbanner-carousel').owlCarousel({
                    items: 4,
                    autoPlay: true,
                    singleItem: false,
                    navigation: true,
                    navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
                    pagination: false,
                    itemsDesktop : [1500,5],
                    itemsDesktopSmall:[1199,4],
                    itemsTablet :	[991,3],
                    itemsTabletSmall : [543, 2],
                    itemsMobile: [479, 2]
                });


            });
        </script>

<script>
    function notify() {
     $.notify({
       message: "Hello world",
       target: '_blank'
     },{
       // settings
       element: 'body',
       position: null,
       type: "info",
       allow_dismiss: true,
       newest_on_top: false,
       placement: {
         from: "top",
         align: "center"
       },
       offset: 0,
       spacing: 10,
       z_index: 2031,
       delay: 5000,
       timer: 1000,
       url_target: '_blank',
       mouse_over: null,
       animate: {
         enter: 'animated fadeInDown',
         exit: 'animated fadeOutUp'
       },
       onShow: null,
       onShown: null,
       onClose: null,
       onClosed: null,
       icon_type: 'class',
       template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert">' +
         '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&nbsp;&times;</button>' +
         '<span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span>' +
         '<div class="progress" data-notify="progressbar">' +
           '<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
         '</div>' +
         '<a href="{3}" target="{4}" data-notify="url"></a>' +
       '</div>' 
     });

     $('#cart > button').html('<div class="cart_detail"><div class="cart_image"></div><span id="cart-total"> ' + 'Some total' + '</span>'  + '</div>');

     //$('html, body').animate({ scrollTop: 0 }, 'slow');

     //$('#cart > ul').load('index.php?route=common/cart/info ul li');
   }
</script>

</html>
