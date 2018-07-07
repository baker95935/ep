@extends('layouts.muster')

@section('content')
<!-- Content-Wrapper -->
<div class="content-wrapper">
<!-- Content Header -->
<section class="content-header">
  <h1><b>Dashboard</b></h1>
</section>
<!-- Main content -->
<section class="content">
  <!-- first box: Pie chart -->
   <div class="box box-primary">
      <div class="box-header with-border">
        <!-- Symbol front-->
        <i class="fa fa-bar-chart-o"></i>
        <!-- Title-->
        <h3 class="box-title">Projektfortschritt</h3>
        <!-- Buttons right-->
      </div>
      <!-- box body-->
      <div class="box-body">
        <div id="pie-chart" style="margin: 10px;"></div>
        <div style="height: 300px; width: 300px;">
          <!-- call the script for pie chart-->
          <canvas id="myChart"></canvas>
        </div>
        <!-- Pie Chart -->
        @include('layouts.pieChart')

      <!-- /.box-body-->
    </div>
    <!-- /.box -->

    <!-- second box: Meilenstein Status-->
    <div class="box box-primary">
      <!-- box-header-->
      <div class="box-header with-border">
              <!-- Symbol front-->
              <i class="fa fa-check-square-o"></i>
              <h3 class="box-title">Meilenstein Status</h3>
      </div>
      <!-- /.box-header -->
      <!-- box-body-->
      <div class="box-body">
        <!-- table-->
        <table class="table table-bordered">
          <tr>
            <th style="width: 10px"></th>
            <th>Meilenstein</th>
            <th>Ist-Soll-Vergleich</th>
            <th style="width: 40px">Status</th>
          </tr>
          @include('layouts.milestoneDashboard')
        </table>
        <!-- /.table-->
      </div>
    <!-- /.box-body -->
    </div>
    <!-- /.second box-->

    <!-- third box: to do list-->
    <div class="box box-primary">
      <!-- box header-->
      <div class="box-header">
        <!-- symbol links-->
        <i class="ion ion-clipboard"></i>
        <h3 class="box-title">To Do List</h3>
      </div>
      <!-- /.box-header -->
      <!-- box body-->
      <div class="box-body">
        <ul class="todo-list">
        <!-- first milestone-->
          <li>
            <span class="handle">
              <i class="fa fa-ellipsis-v"></i>
              <i class="fa fa-ellipsis-v"></i>
            </span>
            <!-- todo text 待完成项目的内容描述-->
            <span class="text">Meilenstein: Oberfläche entwerfen</span>
            <!-- Emphasis label -->
            <small class="label label-danger"><i class="fa fa-clock-o"></i> 1 Tag </small>
            <!-- General tools such as edit or delete 编辑或者删除-->
            <div class="tools">
              <i class="fa fa-edit"></i>
            </div>
          </li>
          <!-- second milestone-->
          <li>
            <span class="handle">
              <i class="fa fa-ellipsis-v"></i>
              <i class="fa fa-ellipsis-v"></i>
            </span>
            <span class="text">Meilenstein: Datenbank erstellen</span>
            <small class="label label-info"><i class="fa fa-clock-o"></i> 5 Tage </small>
            <div class="tools">
              <i class="fa fa-edit"></i>
            </div>
          </li>
          <!-- third milestone-->
          <li>
            <span class="handle">
              <i class="fa fa-ellipsis-v"></i>
              <i class="fa fa-ellipsis-v"></i>
            </span>
            <span class="text">Meilenstein: PHP programieren</span>
            <small class="label label-warning"><i class="fa fa-clock-o"></i> 3 Woche </small>
            <div class="tools">
              <i class="fa fa-edit"></i>
            </div>
          </li>
          <!-- forth milestone-->
          <li>
            <span class="handle">
              <i class="fa fa-ellipsis-v"></i>
              <i class="fa fa-ellipsis-v"></i>
            </span>
            <span class="text">Meilenstein: Projektseminar abschließen </span>
            <small class="label label-default"><i class="fa fa-clock-o"></i> 3 Monate</small>
            <div class="tools">
              <i class="fa fa-edit"></i>
            </div>
          </li>
        </ul>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
</div>
<!-- content-wrapper -->
@endsection

@section('tasks')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1><b>
      Aufgaben
    </b></h1>
  </section>

  <!-- Main content -->
<section class="content">
  <!-- row -->

<div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Meilenstein: Oberfläche</h3>

            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Suche-">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>Aufgabe</th>
                <th>Verantwortlicher</th>
                <th>Datum</th>
                <th>Status</th>
                <th>Beschreibung</th>
              </tr>
              <tr>
                <td>Oberfläche verwalten</td>
                <td>Peter Meyer</td>
                <td>11-7-2014</td>
                <td><span class="label label-success">Abgeschlossen</span></td>
                <td>Oberfläche anpassen und optimieren</td>
              </tr>
              <tr>
                <td>PHP programieren</td>
                <td>Laura Vogel</td>
                <td>11-7-2014</td>
                <td><span class="label label-warning">In Bearbeitung</span></td>
                <td>PHP programieren.</td>
              </tr>
              <tr>
                <td>Views gestalten </td>
                <td>Bob bob</td>
                <td>11-7-2014</td>
                <td><span class="label label-warning">Abgeschlossen</span></td>
                <td>Die Oberfläche der Website gestalten.</td>
              </tr>
              <tr>
                <td> PHP und Views zusammensetzen</td>
                <td>Martin Markusik</td>
                <td>11-7-2014</td>
                <td><span class="label label-danger">Abgelaufen</span></td>
                <td>Die Views mit den PHP befehlen verbinden und zusammensetzen.</td>
              </tr>
            </table>
          </div>
     <!-- /.box-body -->
    <div class="box-footer clearfix no-border">
      <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Neue Aufgabe anlegen</button>
    </div>
  </div>

        <!-- /.box -->
      </div>

</section>
</div>
<!-- content-wrapper -->

@endsection
