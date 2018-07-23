<!-- Modal tasks-->
<div class="modal fade" id="tasksUpdate"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Aufgabe erstellen & bearbeiten</h4>
      </div>
      <div class="modal-body">
         <form action="{{ URL('aufgaben/update') }}" method="POST">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Bezeichnung der Aufgabe</label>
            <input type="text" class="form-control name" name="name"  id="namename" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Beschreibung</label>
            <textarea class="form-control body" value="" id="message-text" name="body" required></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Status: </label>
            <select class="form-control select2 status" style="width: 100%;" id="status" name="status" required>
              @foreach ($tasks as $status)
                <option value="{{$status->id}}">{{$status->status}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Verantwortlicher: </label>
            <select class="form-control select2 user_id" style="width: 100%;" id="user_id" name="user_id" required>
              @foreach ($users as $u)
                <option value="{{$u->id}}">{{$u->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Milestone: </label>
            <select class="form-control select2 milestone_id" style="width: 100%;" id="milestone_id" name="milestone_id" required>
              @foreach ($meilensteine as $ms)
              <option value="{{$ms->id}}">{{$ms->name}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="datetimepicker" class="control-label">Datum Fälligkeit</label>
            <div class="input-group date">
              <div class="input-group-addon" >
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right datetimepickeredit" id="datetimepickeredit" style="width:100%;" name="duedate" required/>
            </div>
          </div>
          {{-- Einbindung einer notwenidigen js-Datei und "Aktivierung" des Kalendars der in dem input-Tag mit id:datetimepicker integriert ist--}}
          <script src="{{ URL::asset('js/jquery.datetimepicker.full.js')}}"></script>
          <script>
            $("#datetimepickeredit").datetimepicker();
            {{-- Ändern der Einstellung, damit die Monate in Deutsch angezeigt werden --}}
            jQuery.datetimepicker.setLocale('de');
          </script>
          <div class="modal-footer">
                  <input type="hidden" class="hiddenId" name="hiddenId"  >
                  <input type="submit" class="btn btn-primary" value="Änderungen speichern">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                  </form>
                </div>
          
    </div>
  </div>
  </div>
</div>
