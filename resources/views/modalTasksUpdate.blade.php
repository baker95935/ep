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
            
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Aufgabe erstellen & bearbeiten</h4>
      </div>
      <div class="modal-body">
        <form action="{{ URL('meilensteine/update') }}" method="POST">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <input type="hidden" name="hiddenId" value="{{$taskInfo->id}}">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Bezeichnung der Aufgabe</label>
            <input type="text" class="form-control" name="name" value="{{$taskInfo->name}}" id="name" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Beschreibung</label>
            <textarea class="form-control"  id="message-text" name="body" required>{{$taskInfo->body}}</textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Verantwortlicher: </label>
            <select class="form-control select2" style="width: 100%;" id="files" name="user_id" required>
              @foreach ($users as $u)
                <option value="{{$u->id}}"  
                	@if ($taskInfo->user_id == $u->id)
                	selected="selected"
                    @endif  >{{$u->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Milestone: </label>
            <select class="form-control select2" style="width: 100%;" id="files" name="milestone_id" required>
              @foreach ($meilensteine as $ms)
              <option value="{{$ms->id}}" 
              		@if ($taskInfo->milestone_id == $u->id)
                	selected="selected"
                    @endif 
              >{{$ms->name}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="datetimepicker" class="control-label">Datum F盲lligkeit</label>
            <div class="input-group date">
              <div class="input-group-addon" >
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" value="{{$taskInfo->duedate}}" id="datetimepicker" style="width:100%;" name="duedate" required/>
            </div>
          </div>
          {{-- Einbindung einer notwenidigen js-Datei und "Aktivierung" des Kalendars der in dem input-Tag mit id:datetimepicker integriert ist--}}
          <script src="{{ URL::asset('js/jquery.datetimepicker.full.js')}}"></script>
          <script>
            $("#datetimepicker").datetimepicker();
            {{-- 脛ndern der Einstellung, damit die Monate in Deutsch angezeigt werden --}}
            jQuery.datetimepicker.setLocale('de');
          </script>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Schlie脽en</button>
        <input type="submit" class="btn btn-primary" value="脛nderungen speichern">
      </div>
    </form>
    </div>
  </div>
  </div>

    </section>
</div>

<!-- content-wrapper -->
@endsection