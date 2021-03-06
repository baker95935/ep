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
              <th>Aufgabe<i class="fa fa-fw fa-sort-alpha-asc"></i></th>
              <th>Beschreibung<i class="fa fa-fw fa-sort-alpha-asc"></th>
              <th>Status<i class="fa fa-fw fa-sort-numeric-desc"></i></th>
              <th>Verantwortlicher<i class="fa fa-fw fa-sort-alpha-asc"></th>
              <th>Milestone<i class="fa fa-fw fa-sort-alpha-asc"></th>
              <th>Abgabedatum<i class="fa fa-fw fa-sort-numeric-desc"></th>
              <th>Editieren</th>
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

	      		<button data-name="{{$task->name}}" data-status="{{$task->status}}" data-body="{{$task->body}}" data-userid="{{$task->user_id}}" data-username="{{$users[($task->user_id)-1]->name}}" data-milestone_id="{{$task->milestone_id}}" data-milestone="{{$task->milestone->name}}" data-duedate="{{$task->duedate}}" data-id="{{$task->id}}" class="btn btn-success"   data-toggle="modal" data-target="#tasksUpdate" >edit</button>
	 
                  
                <form action="{{ URL('aufgaben/destroy/'.$task->id) }}" method="POST">
            	<input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" onclick="{if(confirm('are you sure delete?')){this.document.formname.submit();return true;}return false;}" class="btn btn-primary" value="delete">
            	</form>
                  
  				</td>

              </tr>
            @endforeach
          </table>
        </div>
        <!--Einbinden von JQuery f端r die Datatable -->
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"
        			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        			  crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
        	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

		      $(function () { $('#tasksUpdate').on('show.bs.modal', function (event) {

			  		var button = $(event.relatedTarget); // Button that triggered the modal
			  		var id = button.data('id');
			  		var name = button.data('name'); // Extract info from data-* attributes
			  		var body = button.data('body'); // Extract info from data-* attributes
			  		var username = button.data('username'); // Extract info from data-* attributes
					var userid = button.data('userid');
			  		var milestone = button.data('milestone') ;// Extract info from data-* attributes
			     	var duedate = button.data('duedate'); // Extract info from data-* attributes
			     	var milestone_id= button.data('milestone_id');
			     	var status=button.data('status');
			     	
			  		var modal = $(this);
			  		modal.find('.hiddenId').val(id);
			  		modal.find('.name').val(name);
			  		modal.find('.body').val(body);
			  		modal.find('.datetimepickeredit').val(duedate);
			  		modal.find('.user_id').val(userid).trigger("change");
			  		modal.find('.milestone_id').val(milestone_id).trigger("change");
			  		modal.find('.status').val(milestone_id).trigger("change");
			  		
		          })
		       });


		      $(function () { $('#tasks').on('show.bs.modal', function (event) {

			  		var modal = $(this);
			  		modal.find('.milestone_id').val({{$mid}}).prop("disabled", true);
			  		
		          })
		       });
		      

        </script>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- content-wrapper -->
@endsection
