<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIMPLON FABRIQUE RESERVATION</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="{{asset('DataTables/DataTables-1.10.20/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="{{asset('css/appli.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <a href="./"><h3 class="menu-title text-center"><img src="{{asset('images/simplon.png')}}" width="40" height="40" class="mb-1"/>SIMPLON BURKINA</h3></a>
                    <li class="menu-item-has-children dropdown">
                        <a href="#"> <i class="menu-icon fa fa-tachometer"></i>Accueil</a>
                    </li>
                    <h5 class="text-danger">Gestion Apprenant.e.s</h5>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{route('inscriptioncours')}}"> <i class="menu-icon fa fa-laptop"></i>Inscriptions en cours</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{route('listeapprenant')}}"> <i class="menu-icon fa fa-laptop"></i>Liste Apprenant.e.s</a>
                    </li>
                    <h5 class="text-danger">Gestion Reservations</h5>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{route('reservationcours')}}"> <i class="menu-icon fa fa-th"></i>Reservations en cours</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="{{route('listereservation')}}"> <i class="menu-icon fa fa-th"></i>Liste des reservations</a>
                    </li>
                    <h5 class="text-danger">Raccourcis</h5>
                    <li class="menu-item-has-children dropdown">
                        <a href="#"> <i class="menu-icon fa fa-table"></i>Faire une reservation</a>
                    </li>
                    <li class="nav-item mt-4">
            <a href="{{route('logout')}}" class="btn" style="background-color:#A3333D!important; border-radius: 10px!important" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
              <p class="text-white"> Déconnexion </p>
            </a>
          </li>
                </ul>
            </div>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <!-- <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a> -->
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Rechercher ici !"
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                <div class="user-area dropdown float-right">

        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-user" style="color: black;"></i><span class="pl-2" style="color: black;">{{ Auth::user()->name }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="{{ route('profile.edit') }}" class="dropdown-item">Profil</a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Déconnexion</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        </div>

                    </div>
                </div>
            </div>
        </header>
        <div class="breadcrumbs">
        @yield('page-content')
        </div>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{asset('DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js')}}"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('js/appli.js')}}"></script>
</body>
</html>
