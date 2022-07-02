@extends('mcsprod.app')

@section('content')

<style>
    @media (min-width: 767px)  {
        #slideslow-bg{
        height: 620px;
    }
    .display-table-cell h1{
            margin-top: 2%;
        }
    }
    @media (max-width: 400px){

        #slideslow-bg{
            height: 530px;
        }
        .display-table-cell h1{
            margin-top: 30%;
        }
        .display-table-cell   #chooseService{
            margin-top: -10%;
        }
    }

    @media (min-width: 400px and max-width: 767px){

        #slideslow-bg{
            height: 530px;
        }
        .display-table-cell h1{
            margin-top: 20%;
        }
        .display-table-cell   #chooseService{
            margin-top: -6%;
        }
    }
</style>

@component('mcsProd.components.header')
@endcomponent

    <!--== SlideshowBg Area Start ==-->
    <section id="slideslow-bg" style="background-image: url('{{ asset("image/lens-582605_1920.jpg")  }}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="slideshowcontent">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    
                                        <h1 style="font-family: persofont;">Mcs Prod</h1>
                                        <p><i class="fa fa-quote-left"></i> Votre partenaire business en production Audio-visuelle   <i class="fa fa-quote-right"></i> </p>
                                   
                                    <div class="book-ur-car" id="chooseService">
                                            Quel service pouvons-nous vous offrir ?
                                        <form action="index2.html">
                                            <div class="pick-location bookinput-item">
                                                <select class="custom-select">
                                                  <option value="1">Prise de vue</option>
                                                  <option value="2">Montage vidéo & sonore</option>
                                                  <option value="3">Management d'artiste</option>
                                                </select>
                                            </div>
                                            <div class="car-choose bookinput-item">
                                                <input type="hidden" name="">
                                             </div>

                                            <div class="pick-date bookinput-item">
                                                <input type="text" placeholder="E-mail OU Téléphone" />
                                            </div>

                                            <div class="car-choose bookinput-item">
                                                <input type="hidden" name="">
                                             </div>

                                            <div class="bookcar-btn bookinput-item">
                                                <button type="submit">Envoyer</button>
                                            </div>
    
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== SlideshowBg Area End ==-->
    
       
    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
            <div class="container">
                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col-lg-12">
                        <div class="section-title  text-center">
                            <h3>Mcs Production</h3>
                            <span class="title-line"><i class="fa fa-tag"></i></span>
                            <p>Choisissez le meilleur de la production audio-visuelle</p>
                        </div>
                    </div>
                    <!-- Section Title End -->
                </div>
    
               
                <!-- Service Content Start -->
                <div class="row">
                    <!-- Single Service Start -->
                    <div class="col-lg-4 text-center">
                        <div class="service-item">
                        <img src="{{ asset('image/iconVideo Camera_100px.png')   }}" style="height: 70px;" alt="">
                            <h4>Montage vidéo</h4>
                            <p>
                                Courts et longs métrages, films, clips : une expérience graphique multicolore pour vous !
                            </p>
                        </div>
                    </div>
                    <!-- Single Service End -->
                    
                    <!-- Single Service Start -->
                    <div class="col-lg-4 text-center">
                        <div class="service-item">
                                <img src="{{ asset('image/iconFilm_Soundtracks_100px.png')   }}" style="height: 70px;" alt="">
                            <h4>Montage audio</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
                        </div>
                    </div>
                    <!-- Single Service End -->
                    
                    <!-- Single Service Start -->
                    <div class="col-lg-4 text-center">
                        <div class="service-item">
                                <img src="{{ asset('image/iconMovie_Projector_100px.png')   }}" style="height: 70px;" alt="">
                            <h4>Prise des vues</h4>
                            <p>Nous assurons la couverture événementielle de vos manifestations : shooting, film etc.</p>
                        </div>
                    </div>
                    <!-- Single Service End -->
                    
                </div>
                <!-- Service Content End -->
            </div>
        </section>
        <!--== Services Area End ==-->
    

         <div class="container">
             
    
                <!-- Articles Content Wrap Start -->
                <div class="row">
                    <!-- Single Articles Start -->
                    <div class="col-lg-12">
                        <article class="single-article">
                            <div class="row">
                                <!-- Articles Thumbnail Start -->
                                <div class="col-lg-5">
                                    <div class="article-thumb">
                                        <img src="{{  asset('image/education.png')  }}" style="height: 300px;" alt="JSOFT">
                                    </div>
                                </div>
                                <!-- Articles Thumbnail End -->
    
                                <!-- Articles Content Start -->
                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="article-body">
                                                <h3><a href="#">Management de l'artiste</a></h3>
                                                
                                            <div class="article-date"><img src="{{ asset('image/icon_Rock_Music_100px.png') }}" alt=""></div>
    
                                                <p>Maximisez votre chance d'être le prochain artiste à être managé par la maison de prodution Mcs Prod

                                                        <br>
                                                        Une occasion pour vous d'exhiber votre carrière ou oeuvre artistique dans tous les horizons
                                                </p>
                                                
    
                                                <a href="#" class="readmore-btn">Interessé <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Articles Content End -->
                            </div>
                        </article>
                    </div>
                    <!-- Single Articles End -->
                </div>
                <!-- Articles Content Wrap End -->
            </div>

            <div class="container">
              
                <div class="row">
                    <!-- Choose Area Content Start -->
                    <div class="col-lg-12">
                        <div class="choose-content-wrap">
    
                            <!-- Choose Area Tab content -->
                            <div class="tab-content" id="myTabContent">
                                <!-- Popular Cars Tab Start -->
                                <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
                                    <!-- Popular Cars Content Wrapper Start -->
                                    <div class="popular-cars-wrap">
                                        <!-- Filtering Menu -->
                                        <div class="popucar-menu text-center">
                                            <a href="#" data-filter="*" class="active">Top production</a>
                                            <a href="#" data-filter=".con">Les plus reçents</a>
                                            <a href="#" data-filter="*">Les plus notés</a>
                                        </div>
    
                                        <!-- Filtering Menu -->
    
                                        <!-- PopularCars Tab Content Start -->
                                        <div class="row popular-car-gird">
                                            <!-- Single Popular Car Start -->
                                            <div class="col-lg-4 col-md-6 con suv mpv">
                                                <div class="single-popular-car">
                                                    <div class="p-car-thumbnails">
                                                         <video height="150px" width="100%;" controls>
                                                                 <source src="{{ asset("vid/Understanding Online Payments [360p].mp4") }}" type="video/mp4">
                                                         </video>
                                                    </div>
    
                                                    <div class="p-car-content">
                                                        <h3>
                                                            <a href="#">Titre</a>
                                                            <span class="price"><i class="fa fa-tag"></i> date</span>
                                                        </h3>
    
                                                        <h5>some description</h5>
    
                                                        <div class="p-car-feature">
                                                            <a href="#"><i class="fa fa-thumbs-o-up fa-2x"></i></a>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Popular Car End -->
    
                                            <div class="col-lg-4 col-md-6 sedan mpv">
                                                <div class="single-popular-car">
                                                    <div class="p-car-thumbnails">
                                                         <video height="150px" width="100%;" controls>
                                                                 <source src="{{ asset("vid/Understanding Online Payments [360p].mp4") }}" type="video/mp4">
                                                         </video>
                                                    </div>
    
                                                    <div class="p-car-content">
                                                        <h3>
                                                            <a href="#">Titre</a>
                                                            <span class="price"><i class="fa fa-tag"></i> date</span>
                                                        </h3>
    
                                                        <h5>some description</h5>
    
                                                        <div class="p-car-feature">
                                                            <a href="#"><i class="fa fa-thumbs-o-up fa-2x"></i></a>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Single Popular Car End -->
                                        </div>
                                        <!-- PopularCars Tab Content End -->
                                    </div>
                                    <!-- Popular Cars Content Wrapper End -->
                                </div>
                                <!-- Popular Cars Tab End -->
    
                            </div>
                            <!-- Choose Area Tab content -->
                        </div>
                    </div>
                    <!-- Choose Area Content End -->
                </div>
            </div>
       
        
        @component('mcsProd.components.footer')
        @endcomponent

@endsection