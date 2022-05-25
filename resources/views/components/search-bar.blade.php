@inject('categories', App\Utilities\Category::class)

<style>
    @media (max-width: 767px) and (min-width: 380px) {
        .submitbtn{
            width: 50%;
            margin-left: 25%;
        }
    .hero-text h3 {
    font-family: 'Open Sans', sans-serif;
    color: black;
    font-size: 18px;
    font-weight: bold;
    display: inline-block;
        }

        .hero-text {
    text-align: center;
    position: absolute;
    transform: translateY(-50%);
    left: 50%;
    transform: translateX(-50%);
    z-index: 9999;
}
    }

    @media (max-width: 380px) {
    .hero-text h3 {
    font-family: 'Open Sans', sans-serif;
    color: black;
    font-size: 16px;
    font-weight: bold;
    display: inline-block;
        }

        .hero-text {
    text-align: center;
    position: absolute;
    transform: translateY(-50%);
    margin-left: 35%;
    transform: translateX(-50%);
    z-index: 9999;
}
    }

    @media (min-width: 767px) {
        .hero-text h3 {
    font-family: 'Open Sans', sans-serif;
    color: black;
    font-size: 26px;
    font-weight: bold;
    display: inline-block;
    min-height: 40px;
        }

.hero-text {
    text-align: center;
    position: absolute;
    transform: translateY(-50%);
    left: 50%;
    transform: translateX(-50%);
    z-index: 9999;
}

    }

    @media (max-width: 991px) {
        .submitbtn{
            width: 50%;
            margin-left: 25%;
        }
    }
.typed-cursor{
    color: rgb(197, 6, 6);
}

</style>
<div class="container">
                    <div class="hero-text">
                        <div id="typed-strings">
                            <h3><span style="color: rgb(197, 6, 6);font-family: persofont;">Mcs Group</span>, votre partenaire business</h3>
                            <h3>Pour l'univers de vos besoins</h3>
                            <h3>En numérique</h3>
                        </div>
                        <h3><span id="typed"></span></h3>
                    </div>
     
<br><br>
        <form method="post" action="{{  route("search.index")   }}">
            @csrf

            <div class="row no-gutters custom-search-input-2">

                <div class="col-lg-4">
                    <div class="form-group">
                        <input class="form-control" name="searchText" type="text" placeholder="Entrez l'article à rechercher ...">
                        <i class="icon_search"></i>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <input class="form-control" name="amount" type="text" placeholder="Entrer un montant">
                        <i class="fa fa-money"></i>
                    </div>
                </div>

                <div class="col-lg-3">
                    <select class="wide" name="category">
                        @foreach ($categories->data as $category)

                        <option value="{{ $category->id }}">{{ $category->label }}</option>

                        @endforeach
                    </select>
                </div>

                <div class="col-lg-2 submitbtn">
                    <input type="submit" value="Recherche">
                </div>
            </div>
            <!-- /row -->
        </form>
    </div>
    <!-- /container -->
        <script src="{{ asset('js/jquery-2.2.4.min.js')}}"></script>
        <script src="{{ asset('js/typing/custom.js')}}"></script>
            <script src="{{ asset('js/typing/typed.min.js')}}"></script>
  