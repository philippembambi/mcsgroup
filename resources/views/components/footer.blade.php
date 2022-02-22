<footer class="plus_border">
    <div class="container-fluid margin_60_35">
        <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-6">
                <h3>Index</h3>
                <div>
                    <ul class="links">
                        <li><i class="fa fa-tags"></i><a href=""> &nbsp;&nbsp; Mcs IT</a></li>
                        <li><i class="fa fa-tags"></i><a href=""> &nbsp;&nbsp;<a href="">Shop Mcs</a></li>
                        <li><i class="fa fa-tags"></i><a href=""> &nbsp;&nbsp;<a href="">Point Com Mcs</a></li>
                        <li><i class="fa fa-tags"></i><a href=""> &nbsp;&nbsp;<a href="">Mcs Prod RDC & France</a></li>
                        <li><i class="fa fa-tags"></i><a href=""> &nbsp;&nbsp;<a href="">Loc Mcs</a></li>
                        <li><i class="fa fa-tags"></i><a href=""> &nbsp;&nbsp;<a href="">Mcs Invest</a></li>
                    </ul>
                </div>
            </div>



            <div class="col-lg-3 col-md-6 col-sm-6">
                <h3 >Nos Contacts Paris</h3>
                <div>
                    <ul class="contacts">
                        <li><i class="ti-home"></i>97845 Baker st. 567<br>Paris - France</li>
                        <li><i class="ti-headphone-alt"></i>+39 06 97240120</li>
                        <li><i class="ti-email"></i><a href="#0">groupmcs@gmail.com</a></li>
                        <li><i></i></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <h3>&Eacute;crivez-nous</h3>
                <div>
                    <form action="{{ route('feedback.post') }}" method="post">
                        @csrf
                        <textarea name="content" class="form-control" id="" cols="5" rows="3"></textarea>
                        <br>
                        <button class="btn btn-default" style="background-color: rgb(197, 6, 6);color: white;"><i class="fa fa-send"></i> Envoyer</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <h3 >Recevoir des newsletters</h3>
                <div  id="collapse_ft_4">
                    <div id="newsletter">
                        <div id="message-newsletter"></div>
                        <form method="post" action="{{route('new-mail')}}" name="" id="">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Entrer votre adresse email">
                                <input type="submit" value="S'abonner" id="submit-newsletter">
                            </div>
                        </form>
                    </div>
                    <div class="follow_us">
                        <h5>Suivez-nous sur</h5>
                        <ul>
                            <li><a href="#0"><i class="ti-facebook"></i></a></li>
                            <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="#0"><i class="ti-google"></i></a></li>
                            <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                            <li><a href="#0"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row-->
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <ul id="footer-selector">
                    <li>
                        <div class="styled-select" id="lang-selector">
                            <select>
                                <option value="English" selected>Français</option>
                                <option value="French">Anglais</option>
                            </select>
                        </div>
                    </li>
                    <li><img src="img/cards_all.svg" alt=""></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul id="additional_links">
                    <li><a href="#0">Conditions d'utlisation</a></li>
                    <li><a href="#0">Vie privée</a></li>
                    <li><span>© 2021 Group MCS</span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
