
<link rel="stylesheet" href="{{ asset('admin/app.css') }}">


<aside class="left-sidebar" style="background-color: rgb(211, 1, 1);">
    <!-- Sidebar scroll-->

        <ul class="navbar-nav bg-gradient-default sidebar sidebar-dark accordion" id="accordionSidebar" style="width: 100%;background-color: rgb(211, 1, 1);">


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider" style="border-color: white;">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-user "></i>
                <span style="font-size: 16px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Profil admin</span>
              </a>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="">Déconnexion</a>
                  <a class="collapse-item" href="">Ajouter un admin</a>
                  <a class="collapse-item" href="">Historique d'activités</a>

                </div>
              </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#cadres" aria-expanded="true" aria-controls="cadres">
                <i class="fas fa-fw fa-tag"></i>
                <span style="font-size: 16px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Produits</span>
              </a>
              <div id="cadres" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="{{ route("management.articles.add")  }}">Ajouter</a>
                  <a class="collapse-item" href="">Tous les produits</a>
                </div>
              </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" style="border-color: white;">

                  <!-- Nav Item - Pages Collapse Menu -->
                  <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pool" aria-expanded="true" aria-controls="pool">
                      <i class="fas fa-bell"></i>
                      <span style="font-size: 16px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Publicités</span>
                    </a>
                    <div id="pool" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                      <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Ajouter</a>
                        <a class="collapse-item" href="#">Agenda</a>
                      </div>
                    </div>
                  </li>
        <!-- Divider -->
        <hr class="sidebar-divider" style="border-color: white;">


                              <!-- Nav Item - Pages Collapse Menu -->
                              <li class="nav-item">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#communepol" aria-expanded="true" aria-controls="communepol">
                                  <i class="fas fa-shopping-cart"></i>
                                  <span style="font-size: 16px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Commandes</span>
                                </a>
                                <div id="communepol" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                  <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" href="#">Historique des commandes</a>
                                    <a class="collapse-item" href="">Commandes en cours</a>
                                    <a class="collapse-item" href="">Commandes annulées</a>
                                  </div>
                                </div>
                              </li>


                              <li class="nav-item">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#cotisation" aria-expanded="true" aria-controls="cotisation">
                                  <i class="fas fa-shopping-bag"></i>
                                  <span style="font-size: 16px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Achats</span>
                                </a>
                                <div id="cotisation" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                  <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" >Historique des achats</a>
                                  </div>
                                </div>
                              </li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block" style="border-color: white;">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#federation" aria-expanded="true" aria-controls="federation">
                  <i class="fas fa-th-large"></i>
                  <span style="font-size: 16px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Pôles</span>
                </a>
                <div id="federation" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#">Mcs prod</a>
                    <a class="collapse-item" href="#">Mcs IT</a>
                    <a class="collapse-item" href="#">Mcs Shop</a>
                    <a class="collapse-item" href="#">Mcs Point Com</a>

                  </div>
                </div>
              </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" style="border-color: white;">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

          </ul>

    <!-- End Bottom points-->
</aside>

