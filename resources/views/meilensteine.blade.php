@extends('layouts.muster')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1><b>
      Meilensteine
    </b></h1>
  </section>

  <!-- Main content -->
<section class="content">

  <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title"></h3>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">

              <table class="table no-margin">
                <thead>
                <tr>
                  <th>Meilenstein</th>
                  <th>Status</th>
                  <th>Deadline</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($meilensteine as $ms)
                  <tr>
                    <td><div class="tools">
                      <button type="button" style="background-color: white; border-color: transparent" class="btn btn-default" data-toggle="modal" data-id="{{$ms->id}}" data-name="{{$ms->name}}" data-description="{{$ms->description}}"  data-duedate="{{$ms->duedate}}" class="btn btn-success"   data-toggle="modal" data-target="#milestonesUpdate" > <!--auslagern in CSS-->                    <i class="fa fa-edit"></i>
                    </button>
                  @include('layouts.modalMilestonesUpdate')
                  </div>
                    <a href="{{ url('meilensteine')}}/{{$ms->id}}/aufgaben ">{{$ms->name}}</td>
                    <td>@include('layouts.statusLabel')</td>
                    <td>{{$ms->duedate}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix no-border">
            <button type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#milestones">
            <i class="fa fa-plus"></i>
            Neuen Meilenstein anlegen
            </button>
            @include('layouts.modalMilestones')
          </div>

          <!-- /.box-footer -->
  </section>
</div>
<script>

$(function () { $('#milestonesUpdate').on('show.bs.modal', function (event) {

		var button = $(event.relatedTarget); // Button that triggered the modal
		var id = button.data('id');
		var name = button.data('name'); // Extract info from data-* attributes
		var description = button.data('description'); // Extract info from data-* attributes
   		var duedate = button.data('duedate'); // Extract info from data-* attributes
 
		var modal = $(this);
		modal.find('.hiddenId').val(id);
		modal.find('.name').val(name);
		modal.find('.description').text(description);
		modal.find('.datetimepickeredit').val(duedate);

    })
 });
</script>
<!-- content-wrapper -->
@endsection
