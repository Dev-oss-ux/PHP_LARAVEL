@extends('backEnd.layouts.master')
@section('title','Dashboard')
@section('content')
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Retourner à l'accueil" class="tip-bottom"><i class="icon-home"></i> Accueil</a></div>
    </div>


    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="bg_lb"> <a href="{{route('category.store')}}" > <i class="icon-hdd"></i> <span class="label label-important"></span>Catégories </a> </li>
                <li class="bg_lg span3"> <a href="#"> <i class="icon-signal"></i> Statistiques</a> </li>
                <li class="bg_ly"> <a href="{{route('product.create')}}"> <i class="icon-plus-sign-alt"></i><span class="label label-success"></span> Ajouter un Article </a> </li>
                <li class="bg_lo"> <a href="#"> <i class="icon-bell-alt"></i><span class="label label-important"></span> Commandes-suivi</a> </li>
                <li class="bg_ls"> <a href="#"> <i class="icon-fullscreen"></i>  </a> </li>
                <li class="bg_lo span3"> <a href="#"> <i class="icon-user"></i>Departements</a> </li>
                <li class="bg_ls"> <a href="{{route('product.index')}}"> <i class="icon-list"></i><span class="label label-important"></span> liste des fournitures</a> </li>
                <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Element</a> </li>
                <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendrier</a> </li>
                <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Erreur</a> </li>

            </ul>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/excanvas.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.flot.min.js')}}"></script>
    <script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.dashboard.js')}}"></script>
    <script src="{{asset('js/jquery.gritter.min.js')}}"></script>
    <script src="{{asset('js/matrix.interface.js')}}"></script>
    <script src="{{asset('js/matrix.chat.js')}}"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script src="{{asset('js/jquery.wizard.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.popover.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="{{asset('js/matrix.form_validation.js')}}"></script>
    <script type="text/javascript">
        //Cette fonction est appelée à partir des menus contextuels pour être transférée vers
        // une page différente. Ignorez si la valeur renvoyée est une chaîne nulle:
       function goPage (newURL) {

            // si l'url est vide, ignorez les séparateurs de menu et réinitialisez la sélection de menu par défaut
          !  if (newURL != "") {

                // si l'url est "-", c'est cette page - réinitialiser le menu:
                if (newURL == "-" ) {
                    resetMenu();
                }
                // sinon, envoyer la page à l'URL désignée
                else {
                    document.location.href = newURL;
                }
            }
        }

        // réinitialise la sélection du menu lors de l'entrée sur cette page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>
@endsection
