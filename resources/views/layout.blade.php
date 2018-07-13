<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>StartSeite | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini"> <!-- für die Seite, muss noch weg sein -->
  <div class="wrapper">
    <header class="main-header">
      <nav class="navbar navbar-static-top">
        <div class="content-fluid">
          <!-- Logo-->
          <div class="navbar-header">
            <a href="#" class="navbar-brand"><b>Projektseminar</b></a>
          </div>
          <!-- Menu Items-->
          <div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li ><a href="#">Info</a></li>
              <li ><a href="#">Kontakt</a></li>
              <!-- drop down meun-->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Details <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li ><a href="#">Meilenstein anzeigen</a></li>
                  <li ><a href="#">Aufgaben anzeigen</a></li>
                </ul>
              </li>
            </ul>
            <!-- right align -->
            <ul class="nav navbar-nav navbar-right">
              <li ><a href="#">Logout</a></li>
            </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><b>
        Dashboard
      </b></h1>
    </section>

    <!-- Main content -->
  <section class="content">

        <!-- Pie chart -->
       <div class="box box-primary">
          <div class="box-header with-border">
            <i class="fa fa-bar-chart-o"></i>

            <h3 class="box-title">Pie Chart</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">

            <div id="pie-chart" style="margin: 10px;"></div>
            <div style="height: 400px; width: 400px;">
              <canvas id="myChart"></canvas>
            </div>
          <!-- /.box-body-->
        </div>
        <!-- /.box -->
<div class="box box-primary">
          <div class="row">


                <div class="box-header with-border">
                  <i class="fa fa-check-square-o"></i>

                  <h3 class="box-title">Meilenstein Status</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px"></th>
                      <th>Meilenstein</th>
                      <th>Ist-Soll-Vergleich</th>
                      <th style="width: 40px">Status</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Oberfläche entwerfen</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 33%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-red">33%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Datenbank erstellen</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 25%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-yellow">25%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>PHP programieren</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-primary" style="width: 18%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-light-blue">18%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Projektseminar abschließen</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar progress-bar-success" style="width: 5%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-green">5%</span></td>
                    </tr>
                  </table>
                </div>
                <!-- /.box-body -->

      </div>
      <!-- row -->
  </div>
  <div class="box box-primary">
    <div class="box-header">
      <i class="ion ion-clipboard"></i>

      <h3 class="box-title">To Do List</h3>

    </div>
      <!-- /.box-header -->
      <div class="box-body">
        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
        <ul class="todo-list"> <!--待完成项目-->
          <li><!-- 第一个里程碑-->
            <!-- drag handle -->
            <span class="handle">
                  <i class="fa fa-ellipsis-v"></i>
                  <i class="fa fa-ellipsis-v"></i>
                </span>
            <!-- checkbox -->
            <input type="checkbox" value="">
            <!-- todo text 待完成项目的内容描述-->
            <span class="text">Meilenstein: Oberfläche entwerfen</span>
            <!-- Emphasis label -->
            <small class="label label-danger"><i class="fa fa-clock-o"></i> 1 Tag </small>
            <!-- General tools such as edit or delete 编辑或者删除-->
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <!-- 第二个里程碑-->
          <li>
                <span class="handle">
                  <i class="fa fa-ellipsis-v"></i>
                  <i class="fa fa-ellipsis-v"></i>
                </span>
            <input type="checkbox" value="">
            <span class="text">Meilenstein: Datenbank erstellen</span>
            <small class="label label-info"><i class="fa fa-clock-o"></i> 5 Tage </small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li>
                <span class="handle">
                  <i class="fa fa-ellipsis-v"></i>
                  <i class="fa fa-ellipsis-v"></i>
                </span>
            <input type="checkbox" value="">
            <span class="text">Meilenstein: PHP programieren</span>
            <small class="label label-warning"><i class="fa fa-clock-o"></i> 3 Woche </small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li>
                <span class="handle">
                  <i class="fa fa-ellipsis-v"></i>
                  <i class="fa fa-ellipsis-v"></i>
                </span>
            <input type="checkbox" value="">
            <span class="text">Meilenstein: Projektseminar abschließen </span>
            <small class="label label-default"><i class="fa fa-clock-o"></i> 3 Monate</small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
        </ul>
      </div>
      <!-- /.box-body -->
      <div class="box-footer clearfix no-border">
        <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Meilenstein anlegen</button>
      </div>
    </div>
    <!-- /.box -->
</section>
</div>
<!-- content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2018 <a href="">Easy Project</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- wrapper-->
<!-- Pie Chart -->
<script>
  let myChart = document.getElementById('myChart').getContext('2d');

  // Global Options
  Chart.defaults.global.defaultFontFamily = 'Lato';
  Chart.defaults.global.defaultFontSize = 10;
  Chart.defaults.global.defaultFontColor = '#777';

  let massPopChart = new Chart(myChart, {
    type: 'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
    data: {
      labels: ['Geschafft', 'Vorhanden'],
      datasets: [{
        label: 'Fortschritte',
        data: [
          3,
          19
        ],
        //backgroundColor:'green',
        backgroundColor:[
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)'
        ],
        borderWidth:1,
        borderColor:'#FFF',
        hoverBorderWidth:3,
        hoverBorderColor:'#FFF'
      }]
    },
    options:{
      title:{
        display:true,
        text:'Gesamtfortschritt',
        fontSize:20
      },
      legend:{
        display:true,
        position:'right',
        labels:{
          fontColor:'#000'
        }
      },
      layout:{
        padding:{
          left:50,
          right:0,
          bottom:0,
          top:0
        }
      },
      tooltips:{
        enabled:true
      }
    }
  });
</script>


</body>


</html>
