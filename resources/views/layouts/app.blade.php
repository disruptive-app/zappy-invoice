<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description" content="">
        <title>{{$title}}</title>
        <!-- Materialize-->
        <link href="{{asset('css/admin.css')}}" rel="stylesheet">
        <!-- Material Icons-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        @yield('head_content')
    </head>
  <body class="has-fixed-sidenav">
    <header>
      <div class="navbar-fixed">
        <nav class="navbar white">
          <div class="nav-wrapper"><a href="#!" class="brand-logo grey-text text-darken-4">{{$page}}</a>
            <ul id="nav-mobile" class="right">
              <li class="hide-on-med-and-down"><a href="#">Donate</a></li>
              {{-- <li class="hide-on-med-and-down"><a href="#!" data-target="dropdown1" class="dropdown-trigger waves-effect"><i class="material-icons">notifications</i></a></li> --}}
              <li><a href="#!" data-target="chat-dropdown" class="dropdown-trigger waves-effect"><i class="material-icons">notifications</i></a></li>
            </ul><a href="#!" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
          </div>
        </nav>
      </div>
      <ul id="sidenav-left" class="sidenav sidenav-fixed">
        <li><a href="dashboard.html" class="logo-container">Zappy Invoice<i class="material-icons left">spa</i></a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold waves-effect active"><a class="collapsible-header">Dashboard<i class="material-icons chevron">chevron_left</i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="/" class="waves-effect">Dashboard<i class="material-icons">web</i></a></li>
                  </ul>
                </div>
            </li>
            <li class="bold waves-effect"><a class="collapsible-header">Clients<i class="material-icons chevron">chevron_left</i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="fullscreen-table.html" class="waves-effect">My Clients<i class="material-icons">people</i></a></li>
                    <li><a href="table-custom-elements.html" class="waves-effect">Create New<i class="material-icons">add</i></a></li>
                  </ul>
                </div>
            </li>
            <li class="bold waves-effect"><a class="collapsible-header">Invoices<i class="material-icons chevron">chevron_left</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="fullscreen-table.html" class="waves-effect">My Invoices<i class="material-icons">library_books</i></a></li>
                  <li><a href="table-custom-elements.html" class="waves-effect">Create New<i class="material-icons">add</i></a></li>
                </ul>
              </div>
            </li>
            <li class="bold waves-effect"><a class="collapsible-header">Products<i class="material-icons chevron">chevron_left</i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="calendar.html" class="waves-effect">My Products<i class="material-icons">shopping_cart</i></a></li>
                    <li><a href="table-custom-elements.html" class="waves-effect">Create New<i class="material-icons">add</i></a></li>
                  </ul>
                </div>
            </li>
            <li class="bold waves-effect"><a class="collapsible-header">Payments<i class="material-icons chevron">chevron_left</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="calendar.html" class="waves-effect">My Payments<i class="material-icons">credit_cards</i></a></li>
                  <li><a href="calendar.html" class="waves-effect">My Gateways<i class="material-icons">account_balance</i></a></li>
                </ul>
              </div>
            </li>
            <li class="bold waves-effect"><a class="collapsible-header">Account<i class="material-icons chevron">chevron_left</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="settings.html" class="waves-effect">My Account<i class="material-icons">person</i></a></li>
                  <li><a href="settings.html" class="waves-effect">My Settings<i class="material-icons">settings</i></a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
      </ul>
      <div id="chat-dropdown" class="dropdown-content dropdown-tabbed">
        <ul class="tabs tabs-fixed-width">
          <li class="tab col s3"><a href="#settings">Settings</a></li>
          <li class="tab col s3"><a href="#friends" class="active">Friends</a></li>
        </ul>
        <div id="settings" class="col s12">
          <div class="settings-group">
            <div class="setting">Night Mode
              <div class="switch right">
                <label>
                  <input type="checkbox"><span class="lever"></span>
                </label>
              </div>
            </div>
            <div class="setting">Beta Testing
              <label class="right">
                <input type="checkbox"><span></span>
              </label>
            </div>
          </div>
        </div>
        <div id="friends" class="col s12">
          <ul class="collection flush">
            <li class="collection-item avatar">
              <div class="badged-circle online"><img src="https://randomuser.me/api/portraits/women/90.jpg" alt="avatar" class="circle"></div><span class="title">Jane Doe</span>
              <p class="truncate">Lo-fi you probably haven't heard of them</p>
            </li>
            <li class="collection-item avatar">
              <div class="badged-circle"><img src="https://randomuser.me/api/portraits/men/80.jpg" alt="avatar" class="circle"></div><span class="title">John Chang</span>
              <p class="truncate">etsy leggings raclette kickstarter four dollar toast</p>
            </li>
            <li class="collection-item avatar">
              <div class="badged-circle"><img src="https://randomuser.me/api/portraits/women/30.jpg" alt="avatar" class="circle"></div><span class="title">Lisa Simpson</span>
              <p class="truncate">Raw denim fingerstache food truck chia health goth synth</p>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <main>
@yield('content')
    </main>
<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col s12 m4 center-align">
        <a href="/"><img class="materialize-logo responsive-img" src="{{asset('img/logov4.png')}}" alt="Materialize"></a>
        <p>Made with love by Materialize.</p>
      </div>
      <div class="col s6 m4">
        <h5>Connect</h5>
        <ul>
          <li><a href="#!">Community</a></li>
          <li><a href="#!">Subscribe</a></li>
          <li><a href="#!">Email</a></li>
        </ul>
      </div>
      <div class="col s6 m4">
        <h5>Contact</h5>
        <ul>
          <li><a href="#!">Twitter</a></li>
          <li><a href="#!">Facebook</a></li>
          <li><a href="https://github.com/disruptive-app/zappy-invoice">Github</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{asset('js/materialize.min.js')}}"></script>
    <script src="{{asset('js/init.js')}}"></script>
    @yield('end_scripts')
  </body>
</html>