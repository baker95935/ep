<!-- Modal milestones erstellen -->
<div class="modal fade" id="milestones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Meilenstein erstellen</h4>
      </div>
        <div class="modal-body">
        <form action="{{ URL('meilensteine/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Bezeichnung des Meilensteines</label>
            <input type="text" class="form-control" name="name" id="name" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Beschreibung</label>
            <textarea  class="form-control" name="description" id="description" required></textarea>
          </div>
          <div class="form-group">
            <label for="datetimepicker" class="control-label">Datum Fälligkeit</label>
            <div class="input-group date">
              <div class="input-group-addon" >
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="datetimepicker" style="width:100%;" name="duedate" required/>
            </div>
          </div>
          {{-- Einbindung einer notwenidigen js-Datei und "Aktivierung" des Kalendars der in dem input-Tag mit id:datetimepicker integriert ist--}}
          <script src="{{ URL::asset('js/jquery.datetimepicker.full.js')}}"></script>
          <script>
            $("#datetimepicker").datetimepicker();
            {{-- Ändern der Einstellung, damit die Monate in Deutsch angezeigt werden --}}
            jQuery.datetimepicker.setLocale('de');
          </script>
      <div class="modal-footer">
        <button type="button" class="btn btn- default" data-dismiss="modal">Schließen</button>
        <input type="submit" class="btn btn-primary" value="Meilenstein anlegen">
      </div>
    </form>
    </div>
  </div>
</div>
</div>
<!-- Modal milestones bearbeiten
<div class="modal fade" id="milestones1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Meilenstein erstellen</h4>
      </div>
      <div class="modal-body">
        <form action="{{ URL('meilensteine/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Bezeichnung des Meilensteines</label>
            <input type="text" class="form-control" name="name" id="name" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Beschreibung</label>
            <textarea class="form-control" name="description" id="description" required></textarea>
          </div>
          <div class="form-group">
            <label for="datetimepicker" class="control-label">Datum Fälligkeit</label>
            <div>
              <input name="duedate" type="text" id="datetimepicker" required />
            </div>
          </div>
          <script src="{{ URL::asset('js/jquery.datetimepicker.full.js')}}"></script>
          <script>
            $("#datetimepicker").datetimepicker();
            jQuery.datetimepicker.setLocale('de');
          </script>
      <div class="modal-footer">
        <button type="button" class="btn btn- default" data-dismiss="modal">Schließen</button>
        <input type="submit" class="btn btn-primary" value="Änderungen speichern">
      </div>
    </form>
    </div>
  </div>
</div>
-->
