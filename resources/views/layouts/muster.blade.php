<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>StartSeite | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  {{-- "URL::asset" adressiert die Dateien direkt bzw. beginnt vom  "public"-Ordner --}}
  <link rel="stylesheet" href="{{ URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('dist/css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('bower_components/morris.js/morris.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('bower_components/datatables.net-bs\js\dataTables.bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/jquery.datetimepicker.css') }}">
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Wrapper-->
  <div class="wrapper">
    <!-- Header -->
    <header class="main-header">
      <!-- Navbar-->
      <nav class="navbar navbar-static-top" style="padding-right:15px;">
        <div class="content-fluid">
          <!-- Logo-->
          <div class="navbar-header">
            <a href="{{ url('') }}" class="navbar-brand"><b>EzyProject</b></a>
          </div>
          <!-- Menu Items-->
          <div>
            <ul class="nav navbar-nav" style>
              <li ><a href="{{ url('') }}">Home</a></li>
              <li ><a href="{{ url('meilensteine') }}">Meilensteine</a></li>
              <li ><a href="{{ url('aufgaben') }}">Aufgaben</a></li>
              </li>
            </ul>
            <!-- right align -->
            <!-- Name into Navbar if logged in-->
            <ul class="nav navbar-nav navbar-right">
              @if (Auth::check())
                <li style="color:white;">
                  <span class="fa fa-user-o" style="vertical-align:middle;margin-bottom:-28px;margin-left:-15px"></span>
                  <p style="vertical-align:middle;margin-top:-5px; margin-right: 15px;">  {{Auth::user()->name}}</p>
                </li>
              @endif
              <li><a href="{{ url('logout') }}">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    @yield ('content')

    <!--footer-->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2018 <a href="">Easy Project</a>.</strong> All rights
    reserved.
    </footer>
  </div>
  <!-- wrapper-->
</body>
</html>
