@extends('layouts.app')

@section('content')

<style>

@media(min-width: 360px) {
.welcome_message {
    float: right;
    width: 130px;
}

}

</style>

<div id="page">
    @component('components.fixed-header')
    @endcomponent

    <div class="container margin_60">
        <div class="row justify-content-center">
           <div class="col-md-5">
            <br>
               <div id="confirm">
                   <div class="icon icon--order-success svg add_bottom_15">
                       <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                           <g fill="none" stroke="#8EC343" stroke-width="2">
                               <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                               <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                           </g>
                       </svg>
                   </div>
               <h3 style="welcome_message">Merci de nous rejoindre !</h3>
               <p>Un seul compte pour tous les services Mcs.</p>

               <p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5"><a href="{{  route("index")  }}" class="btn_1 rounded">Page d'acceuil</a></p>
               </div>
           </div>
       </div>
       <!-- /row -->
   </div>
   <!-- /container -->

    @component('components.footer')
    @endcomponent

            <div id="toTop"></div><!-- Back to top button -->

</div>
@endsection
