@extends('mcsIt.app')

@section('content')
<style>
    @media (max-width: 767px)  {
        .item{
            margin-top: -23%;
            margin-left: 4%;
        }
        .tab-head{
            margin-bottom: 30%;
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
        }
</style>

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


<div id="product-product" class="container">

    <div class="row">
        <div id="content" class="col-sm-12 productpage">


            <ul class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i></a></li>
                <li><a href="#">{{   $article->tag   }}</a></li>
            </ul>



            <div class="row">
                <div class="col-lg-4 col-sm-4 product-left">
                    <div class="product-info">
                        <div class="left product-image thumbnails">
                          <!-- Webdigify Cloud-Zoom Image Effect Start -->
                            <div class="image">
                                <a  class="thumbnail"
                                    href="#"
                                    title="{{   $article->tag   }}">
                                    <img    id="tmzoom"
                                            src="{{  asset("uploadedFiles/$article->picture_1") }}"
                                            data-zoom-image="{{  asset("uploadedFiles/$article->picture_1") }}"
                                            title="{{   $article->tag   }}"
                                            alt="{{   $article->tag   }}" />
                                </a>
                            </div>


                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="image">
                                            <a  class="thumbnail"
                                                href="#"
                                                title="{{   $article->tag   }}">
                                                <img    id="tmzoom"
                                                        src="{{  asset("uploadedFiles/$article->picture_2") }}"
                                                        data-zoom-image="{{  asset("uploadedFiles/$article->picture_1") }}"
                                                        title="{{   $article->tag   }}"
                                                        alt="{{   $article->tag   }}" />
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="image">
                                            <a  class="thumbnail"
                                                href="#"
                                                title="{{   $article->tag   }}">
                                                <img    id="tmzoom"
                                                        src="{{  asset("uploadedFiles/$article->picture_3") }}"
                                                        data-zoom-image="{{  asset("uploadedFiles/$article->picture_1") }}"
                                                        title="{{   $article->tag   }}"
                                                        alt="{{   $article->tag   }}" />
                                            </a>
                                        </div>

                                </div>
                            </div>

                            <div class="additional-carousel">
                                <div class="customNavigation">
                                    <a class="fa prev fa-arrow-left">&nbsp;</a>
                                    <a class="fa next fa-arrow-right">&nbsp;</a>
                                </div>
                                <div id="additional-carousel"
                                     class="image-additional product-carousel">

                                <div class="slider-item">
                                    <div class="product-block">
                                        <a  href="{{  asset("uploadedFiles/$article->picture_2") }}"
                                            title="{{   $article->tag   }}" class="elevatezoom-gallery"
                                            data-image="{{  asset("uploadedFiles/$article->picture_2")    }}"
                                            data-zoom-image="{{  asset("uploadedFiles/$article->picture_2")    }}">
                                            <img src="{{  asset("uploadedFiles/$article->picture_2") }}" title="{{   $article->tag   }}" alt="{{   $article->tag   }}" /></a>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-block">
                                        <a  href="{{  asset("uploadedFiles/$article->picture_3") }}"
                                            title="{{   $article->tag   }}"
                                            class="elevatezoom-gallery"
                                            data-image="{{  asset("uploadedFiles/$article->picture_3") }}"
                                            data-zoom-image="{{  asset("uploadedFiles/$article->picture_3") }}">
                                            <img src="{{  asset("uploadedFiles/$article->picture_3") }}" title="{{   $article->tag   }}" alt="{{   $article->tag   }}" /></a>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-block">
                                        <a  href="{{  asset("uploadedFiles/$article->picture_1") }}"
                                            title="{{   $article->tag   }}"
                                            class="elevatezoom-gallery"
                                            data-image="{{  asset("uploadedFiles/$article->picture_1") }}"
                                            data-zoom-image="{{  asset("uploadedFiles/$article->picture_1") }}">
                                            <img src="{{  asset("uploadedFiles/$article->picture_1") }}" title="{{   $article->tag   }}" alt="{{   $article->tag   }}" /></a>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-block">
                                        <a  href="{{  asset("uploadedFiles/$article->picture_2") }}"
                                            title="{{   $article->tag   }}"
                                            class="elevatezoom-gallery"
                                            data-image="{{  asset("uploadedFiles/$article->picture_2") }}"
                                            data-zoom-image="{{  asset("uploadedFiles/$article->picture_2") }}">
                                            <img    src="{{  asset("uploadedFiles/$article->picture_2") }}"
                                                    title="{{   $article->tag   }}"
                                                    alt="{{   $article->tag   }}" /></a>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="product-block">
                                        <a  href="{{  asset("uploadedFiles/$article->picture_3") }}"
                                            title="{{   $article->tag   }}"
                                            class="elevatezoom-gallery"
                                            data-image="{{  asset("uploadedFiles/$article->picture_3") }}"
                                            data-zoom-image="{{  asset("uploadedFiles/$article->picture_3") }}">
                                            <img    src="{{  asset("uploadedFiles/$article->picture_3") }}"
                                                    title="{{   $article->tag   }}"
                                                    alt="{{   $article->tag   }}" /></a>
                                    </div>
                                </div>
                            </div>
                            <span class="additional_default_width" style="display:none; visibility:hidden"></span>
                        </div>

    <!-- Webdigify Cloud-Zoom Image Effect End-->
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 product-right">
                    <div class="product-detail-left">
                        <h1 class="product-title" style="font-size: 25px;">{{   $article->tag   }}</h1>
                            <div class="rating-wrapper">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                                            <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;" class="write-review"><i class="fa fa-pencil"></i>Envoyer un commentaire</a>
                            </div>
                            <div class="description">
                                <table class="product-description">
                                    <tr><td><span class="desc">Disque:</span></td><td class="description-right"><a href="#">{{   $article->disk   }}</a></td></tr>
                                    <tr><td><span class="desc">RAM :</span></td><td  class="description-right"> {{   $article->ram   }}</td></tr>
                                    <tr><td><span class="desc">Processeur :</span> </td><td class="description-right" >{{   $article->processor   }}</td></tr>
                                    <tr><td><span class="desc">Taille :</span> </td><td class="description-right" >{{   $article->pouce   }}</td></tr>

                                </table>
                            </div>

                            <ul class="list-unstyled">
                                <li><h4 class="special-price">
                                    <span class="new-prices">{{ (int) $article->price   }} $</span></h4>
                                    <span class="old-price" style="text-decoration: line-through;"><span class="old-prices">{{ (int) $article->price + 50  }} $</span></span>
                                </li>
                            </ul>
                            <div id="product">
                                <div class="form-group qty">
                                    <button type="button" id="button-cart" data-loading-text="Loading..." class="btn btn-primary btn-lg btn-block">Acheter cet article</button>

                                </div>
                            </div>
                        <hr>
                     <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style" data-url="http://localhost:83/Www.McsGroup.com/groupemcs-It/index.php?route=product/product&amp;product_id=48"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>
                    <script
                        type="text/javascript"
                        src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
                     <!-- AddThis Button END -->

                    <div class="content_product_block">
                        <div class="product-tabs" id="custom_tab">
                            <ul>
                                <li><a class="first" href="#tab-1" style="display: inline;">Description</a></li>
                            </ul>
                        </div>
                        <div class="tab_product" id="tab-1">{{ $article->desc }}.</div>
                    </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

  </div>

  <div class="wdcmsbanner bottom-to-top hb-animate-element">
    <div class="container">

        <div class="tab-head">
             <div id="tabs" class="htabs">
                    <ul class='etabs'>
                        <li class='tab' style="font-weight: bolder;">
                            <a href="#tab-latest"><h4 style="font-size: 20px;">Collection HP &   DELL</h4></a>
                        </li>
                        <li class='tab'>
                            <a href="#tab-special"></a>
                        </li>
                    </ul>

                </div>
        </div>


        <div class="row">
           <div class="banners">
              <div id="wdcmsbanner-carousel">

                @if ($arts->count() > 0)
                @foreach ($arts as $article)

                    <div class="item col-lg-3 col-md-3 col-sm-3 col-xs-6"  style="height: 320px;width: 300px;">
                      <div class="cmsbanner-inner">
                         <div class="cmsbanner-title-desc">
                                <div class="cmsbanner-desc">
                                   <div class="offer-img">
                                       <a href="./article/details/{{   $article->id    }}">
                                           <img style="height: 150px;" src="{{  asset("uploadedFiles/$article->picture_1") }}" alt="cmsbanner-01.jpg">
                                         </a>
                                 </div>
                                    <div class="offer-desc">
                                    <div class="offer-title">Handbag &amp; Clutches</div>
                                    <div class="offer-text">{{  substr($article->tag, 0, 20)   }}</div>
                                    <div class="offer-btn">
                                         <span>
                                            <a href="#">
                                             <button class="mycart">
                                                 <i style="font-size: 20px;color: #c9302c;" class="fa fa-shopping-cart">
                                                </i></button>
                                            </a>
                                        </span> &nbsp;&nbsp;
                                        <a href="./article/details/{{   $article->id    }}" class="btn btn-primary">Plus de détails</a>
                                    </div>
                                 </div>
                                </div>
                         </div>
                      </div>
                    </div>

                @endforeach
                @endif
             </div>
           </div>
        </div>
 <p>
  {{ $arts->links()  }}
 </p>
 </div>
</div>

@component('mcsIt.components.footer')
@endcomponent

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
    $.('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
      $.ajax({
        url: 'index.php?route=product/product/getRecurringDescription',
        type: 'post',
        data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
        dataType: 'json',
        beforeSend: function() {
          $('#recurring-description').html('');
        },
        success: function(json) {
          $('.alert-dismissible, .text-danger').remove();

          if (json['success']) {
            $('#recurring-description').html(json['success']);
          }
        }
      });
    });
    </script>
    <script type="text/javascript">
    $('#button-cart').on('click', function() {
      $.ajax({
        url: 'index.php?route=checkout/cart/add',
        type: 'post',
        data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
        dataType: 'json',
        beforeSend: function() {
          $('#button-cart').button('loading');
        },
        complete: function() {
          $('#button-cart').button('reset');
        },
        success: function(json) {
          $('.alert-dismissible, .text-danger').remove();
          $('.form-group').removeClass('has-error');

          if (json['error']) {
            if (json['error']['option']) {
              for (i in json['error']['option']) {
                var element = $('#input-option' + i.replace('_', '-'));

                if (element.parent().hasClass('input-group')) {
                  element.parent().before('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                } else {
                  element.before('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                }
              }
            }

            if (json['error']['recurring']) {
              $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
            }

            // Highlight any found errors
            $('.text-danger').parent().addClass('has-error');
          }

          if (json['success']) {
            $.notify({
              message: json['success'],
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

            $('#cart > button').html('<div class="cart_detail"><div class="cart_image"></div><span id="cart-total"> ' + json['total'] + '</span>'  + '</div>');

            //$('html, body').animate({ scrollTop: 0 }, 'slow');

            $('#cart > ul').load('index.php?route=common/cart/info ul li');
          }
        },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
      });
    });
    </script>
    <script type="text/javascript">
    $('.date').datetimepicker({
      language: 'en-gb',
      pickTime: false
    });

    $('.datetime').datetimepicker({
      language: 'en-gb',
      pickDate: true,
      pickTime: true
    });

    $('.time').datetimepicker({
      language: 'en-gb',
      pickDate: false
    });

    $('button[id^=\'button-upload\']').on('click', function() {
      var node = this;

      $('#form-upload').remove();

      $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

      $('#form-upload input[name=\'file\']').trigger('click');

      if (typeof timer != 'undefined') {
          clearInterval(timer);
      }

      timer = setInterval(function() {
        if ($('#form-upload input[name=\'file\']').val() != '') {
          clearInterval(timer);

          $.ajax({
            url: 'index.php?route=tool/upload',
            type: 'post',
            dataType: 'json',
            data: new FormData($('#form-upload')[0]),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {
              $(node).button('loading');
            },
            complete: function() {
              $(node).button('reset');
            },
            success: function(json) {
              $('.text-danger').remove();

              if (json['error']) {
                $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
              }

              if (json['success']) {
                alert(json['success']);

                $(node).parent().find('input').val(json['code']);
              }
            },
            error: function(xhr, ajaxOptions, thrownError) {
              alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
          });
        }
      }, 500);
    });
    </script>
    <script type="text/javascript">
    $('#review').delegate('.pagination a', 'click', function(e) {
        e.preventDefault();

        $('#review').fadeOut('slow');

        $('#review').load(this.href);

        $('#review').fadeIn('slow');
    });

    $('#review').load('index.php?route=product/product/review&product_id=48');

    $('#button-review').on('click', function() {
      $.ajax({
        url: 'index.php?route=product/product/write&product_id=48',
        type: 'post',
        dataType: 'json',
        data: $("#form-review").serialize(),
        beforeSend: function() {
          $('#button-review').button('loading');
        },
        complete: function() {
          $('#button-review').button('reset');
        },
        success: function(json) {
          $('.alert-dismissible').remove();

          if (json['error']) {
            $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
          }

          if (json['success']) {
            $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

            $('input[name=\'name\']').val('');
            $('textarea[name=\'text\']').val('');
            $('input[name=\'rating\']:checked').prop('checked', false);
          }
        }
      });
    });

    //$(document).ready(function() {
    //  $('.thumbnails').magnificPopup({
    //    type:'image',
    //    delegate: 'a',
    //    gallery: {
    //      enabled: true
    //    }
    //  });
    //});


    $(document).ready(function() {
      var ramswaroop = new URLSearchParams(window.location.search);
      var tarun = ramswaroop.has('review');
      if (tarun == true) {
        setTimeout(function(){
          $('html, body').animate({scrollTop: $('#tabs_info').offset().top}, 'slow');
          $('a[href=\'#tab-review\']').trigger('click');
        }, 1000);
        return false;
      }
    });

    $(document).ready(function() {
    if ($(window).width() > 767) {
        $("#tmzoom").elevateZoom({

            gallery:'additional-carousel',
            //inner zoom

            zoomType : "inner",
            cursor: "crosshair"

            /*//tint

            tint:true,
            tintColour:'#F90',
            tintOpacity:0.5

            //lens zoom

            zoomType : "lens",
            lensShape : "round",
            lensSize : 200

            //Mousewheel zoom

            scrollZoom : true*/


          });
        var z_index = 0;

                      $(document).on('click', '.thumbnail', function () {
                        $('.thumbnails').magnificPopup('open', z_index);
                        return false;
                      });

                      $('.additional-carousel a').click(function() {
                        var smallImage = $(this).attr('data-image');
                        var largeImage = $(this).attr('data-zoom-image');
                        var ez =   $('#tmzoom').data('elevateZoom');
                        $('.thumbnail').attr('href', largeImage);
                        ez.swaptheimage(smallImage, largeImage);
                        z_index = $(this).index('.additional-carousel a');
                        return false;
                      });

      }else{
        $(document).on('click', '.thumbnail', function () {
        $('.thumbnails').magnificPopup('open', 0);
        return false;
        });
      }
    });
    $(document).ready(function() {
      $('.thumbnails').magnificPopup({
        delegate: 'a.elevatezoom-gallery',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-with-zoom',
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          titleSrc: function(item) {
            return item.el.attr('title');
          }
        }
      });
    });

    $('#custom_tab a').tabs();
     $('#tabs a').tabs();

    </script>


@endsection
