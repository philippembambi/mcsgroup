<style>
    @media (max-width: 767px) {
        .submitbtn{
            width: 50%;
            margin-left: 25%;
        }
    }

    @media (max-width: 991px) {
        .submitbtn{
            width: 50%;
            margin-left: 25%;
        }
    }
</style>
<div class="container">
        <form method="post" action="">
            <div class="row no-gutters custom-search-input-2">

                <div class="col-lg-6">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Que cherchez-vous ...">
                        <i class="icon_search"></i>
                    </div>
                </div>

                <div class="col-lg-4">
                    <select class="wide">
                        <option>Choisir une catégorie</option>
                        <option>Shops</option>
                        <option>Hotels</option>
                        <option>Restaurants</option>
                        <option>Bars</option>
                        <option>Events</option>
                        <option>Fitness</option>
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
