
<style>
    @media (max-width: 767px)  {
        #footer ul li span{
            font-size: 12px;
        }
        }
</style>


<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div id="newslatter" class="col-sm-6">
                    <div class="block_newsletter">
                        <h3 class="h3 hidden-sm-down">
                            <span class="subtitle" style="color: white;">5$ de remise pour votre première commande</span>
                            <span class="title" style="color: black;">
                                <span class="material-icons">drafts</span>Recevoir des annonces...
                            </span>
                            <span class="desc" style="color: white;">Via votre adresse mail.</span>
                        </h3>
                    </div>
                </div>

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

<div class="newsletter col-sm-6">
    <form method="post" action="{{ route('feedback.post') }}">
        @csrf
        <div class="form-group required">
            <label class="col-sm-2 control-label">Entrer votre adresse mail</label>
            <div class="input-news">
              <input type="email" name="content" id="txtemail" value="" placeholder="E-mail" class="form-control input-lg"  />
            <button type="submit" class="btn btn-default btn-lg" style="background-color: rgb(24, 21, 21);color: white;">Souscrire</button>
            </div>
        </div>
        </form>
</div>



  <div id="block_1" class="footer-area app-social col-sm-6 column">
<div class="footer-appinner">
    <div class="title" style="color: black;">Télécharger notre application mobile :</div>
    <div class="subtitle">15% de remise pour votre premier achat</div>
<ul class="list-unstyled">
<li><a href="#"><img class="img-responsive" src="{{ asset("image/play.png")    }}" alt="play"></a></li>
<li><a href="#"><img class="img-responsive" src="{{ asset("image/store.png")    }}" alt="store"></a></li>
</ul>
</div>

<div class="social-block">
  <ul>
    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
  </ul>
</div>
  </div>


    </div>
    </div>
</div>

<div id="footer" >
    <div class="container">
         <div class="row">
            <div class="footer-blocks">

                <div id="info" class="col-sm-3 column footerleft">
                    <div class="contact-block">
                        <h5>Nos Contacts</h5>
                            <ul>
                                <li><i class="fa fa-map-marker"></i><span>Avenue des huileries</span></li>
                                <li><i class="fa fa-phone"></i><span>+33659598750</span></li>
                                <li><i class="fa fa-fax"></i><span>+243822764142</span></li>
                                <li><i class="fa fa-envelope-o"></i><span>groupmcs.it@gmail.com</span></li>
                            </ul>
                    </div>
                </div>

                <div class="col-sm-3 column footerleft">
                    <div class="contact-block">
                        <h5>Nos Contacts</h5>
                            <ul>
                                <li><i class="fa fa-phone"></i><span>+33659598750</span></li>
                                <li><i class="fa fa-phone"></i><span>+33659598750</span></li>
                                <li><i class="fa fa-phone"></i><span>+243822764142</span></li>
                                <li><i class="fa fa-envelope-o"></i><span>groupmcs.it@gmail.com</span></li>
                            </ul>
                    </div>
                </div>

                <div class="col-sm-3 column footerleft">
                    <div class="contact-block">
                        <h5>Nos Adresses</h5>
                            <ul>
                                <li><i class="fa fa-map-marker"></i><span>Avenue des huileries</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Avenue des huileries</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Avenue des huileries</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Avenue des huileries</span></li>
                            </ul>
                    </div>
                </div>

                <div class="col-sm-3 column footerleft">
                    <div class="contact-block">
                        <h5>Nos Services</h5>
                            <ul>
                                <li><i class="fa fa-shopping-cart"></i><span>Vente des articles</span></li>
                                <li><i class="fa fa-graduation-cap"></i><span>Formation sur demande</span></li>
                                <li><i class="fa fa-image"></i><span>Production audio-visuelle</span></li>
                                <li><i class="fa fa-fax"></i><span>Communication digitale</span></li>
                            </ul>
                    </div>
                </div>

                <div class="col-sm-3 column footerleft">
                    <div class="contact-block">
                        <h5>Pôles Mcs</h5>
                            <ul>
                                <li><i class="fa fa-map-marker"></i><span>Mcs IT</span></li>
                                <li><i class="fa fa-phone"></i><span>Mcs Shop</span></li>
                                <li><i class="fa fa-fax"></i><span>Mcs Prod</span></li>
                                <li><i class="fa fa-envelope-o"></i><span>Mcs Point Com</span></li>
                            </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="bottomfooter">
    <div class="container">
        <div class="row">
            <div class="content_footer_bottom">
                <div class="payment-block">
                    <ul>
                        <li>
                            <img alt="visa" src="{{   asset("image/visa.jpg")  }}">
                            <img alt="discover" src="{{   asset("image/discover.jpg")  }}">
                            <img alt="payment" src="{{   asset("image/payment.jpg")  }}">
                            <img alt="paypal" src="{{   asset("image/paypal.jpg")  }}">
                        </li>
                    </ul>
                </div>
            </div>
            <p class="powered">Mcs Groupe &copy; 2022</p>
        </div>
    </div>
</div>
</footer>
