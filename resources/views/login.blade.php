<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>StartSeite | Login</title>
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
  <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('bower_components/datatables.net-bs\js\dataTables.bootstrap.min.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="{{URL::asset('js/app.js')}}" defer></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>



<body class="hold-transition skin-blue sidebar-mini login-page">
  <!-- Wrapper-->
  <div class="wrapper">
    <!-- Header -->
    <header class="main-header">
      <!-- Navbar-->
      <nav class="navbar navbar-static-top" style="padding-right:15px;">
        <div class="content-fluid">
          <!-- Logo-->
          <div class="navbar-header">
            <h2 style="color: white;"><b>EzyProject</b></h2>
          </div>
      </nav>
    </header>


      <div class="container" style="margin-top: 50px;">
        <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">{{ __('Login') }}</div>


          <div class="card-body">
            <form action="login" method="POST">
              {{ csrf_field() }}
            <!--  <div class="form-group has-feedback">-->
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="E-Mail Adresse" name="email">
                  <span class="invalid-feedback" role="alert"></span>
                </div>
            </div>

            <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
            <input type="password" class="form-control" placeholder="Passwort" name="password">
            <span class="invalid-feedback" role="alert"></span>
          </div>
            </div>

            <div class="form-group row">
            <div class="col-md-6 offset-md-4">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Angemeldet bleiben ?
                </label>
              </div>
            </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>

  <footer class="main-footer">
     <div class="pull-right hidden-xs">
       <b>Version</b> 1.0
     </div>
     <strong>Copyright &copy; 2018 <a href="">Easy Project</a>.</strong> All rights
   reserved.
 </footer>
 </div>
</body>

</html>
