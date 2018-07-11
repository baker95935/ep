@extends('layouts.muster')

@section('content')
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
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Liste aller Projektaufgaben</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table id="aufgabenTabelle" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Aufgabe</th>
              <th>Beschreibung</th>
              <th>Status</th>
              <th>Verantwortlicher</th>
              <th>Milestone</th>
              <th>Abgabedatum</th>
              <th>edit</th>
            </tr>
          </thead>
            @foreach ($tasks as $task)
              <tr>
                <td>{{$task->name}}</td>
                <td>{{str_limit($task->body,30)}}</td>
                <td>{{$task->status}}</td> {{-- Umformulierung in den Status!!! --}}
                <td>{{$users[($task->user_id)-1]->name}}</td> {{-- Umformulierung in den Namen --}}
                <td>{{$task->milestone->name}}</td>
                <td>{{$task->duedate}}</td>
                <td>  
	      			
	      		<a class="btn btn-success" onclick="getInfo({{$task->id}})"  data-toggle="modal" data-target="#tasksUpdate" data-id="edit">edit</a>
	      			
  				</td>
  
              </tr>
            @endforeach
          </table>
        </div>
        <!--Einbinden von JQuery f端r die Datatable -->
        <script
        			  src="http://code.jquery.com/jquery-3.3.1.min.js"
        			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        			  crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">
                $(document).ready(function(){
                  $('#aufgabenTabelle').DataTable();
                });
        </script>
   <!-- /.box-body -->
  <div class="box-footer clearfix no-border">
    <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#tasks">
      <i class="fa fa-plus"></i>
      Neue Aufgabe anlegen
    </button>
    <!-- Das Modal Popup wurde ausgelagert und wird an dieser Stelle eingebunden -->
  @include('layouts.modalTasks')
  </div>
  @include('layouts.modalTasksUpdate')

        <!-- /.box -->
        <script>
        //获取值
		function getInfo(id)
		{
			 $.ajax({
					url:"{{ URL('meilensteine/ajaxEdit') }}",
					data:{id:id},
					type:'post',
					success:function(data){
						if(data){
							alert();
							//location.reload();
						}else{
							layer.alert('操作失败，请重试');
							return false;
						}
					}
				});
		}
        </script>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- content-wrapper -->
@endsection
