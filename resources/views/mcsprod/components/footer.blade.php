@inject('adresse', App\Utilities\Adresse::class)
@inject('contact', App\Utilities\Contact::class)

<section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>A propos de nous</h2>
                            <div class="widget-body">
                            <p style="text-align:justify;">Mcs Prod est un pôle de <a href="{{ url('mcsIt/index') }}">Mcsgroupe</a> qui vous accompagne dans la production audio-visuelle ainsi que dans le management des vos projets artistiques.</p>

                                <div class="newsletter-area">
                                    <form action="{{ url('feedback/post') }}" method="post">
                                        @csrf
                                        <input type="email" name="content" placeholder="Envoyer votre E-mail pour recevoir des annonces">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Nos pôles</h2>
                            <div class="widget-body">
                                <ul class="recent-post">
                                    <li>
                                        <a href="{{ url('home') }}">
                                           Mcs It 
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="{{  url('mcsProd/index')   }}">
                                          Mcs Prod
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('feedback/index') }}">
                                           Mcs Shop 
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('feedback/index') }}">
                                            Mcs Point Com
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Nos contacts</h2>
                            <div class="widget-body">
                                <p>Vous pouvez nous rejoindre dan les adresse ci-dessus ou nous contacter par nos numéros</p>

                                <ul class="get-touch">

                                        @foreach ($adresse as $item)
                                        <li><i class="fa fa-map-marker"></i>{{  $item[0]->nom_adr }}</li>
                                        <li><i class="fa fa-map-marker"></i>{{  $item[1]->nom_adr }}</li>
                                        @endforeach

                                        @foreach ($contact as $item)
                                        <li><i class="fa fa-map-marker"></i>{{  $item[0]->contenu }}</li>
                                        <li><i class="fa fa-map-marker"></i>{{  $item[1]->contenu }}</li>
                                        <li><i class="fa fa-map-marker"></i>{{  $item[2]->contenu }}</li>
                                        @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tout droit reservé par <a href="{{  url('mcsIt/index')   }}" target="_blank">Mcsgroupe</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>