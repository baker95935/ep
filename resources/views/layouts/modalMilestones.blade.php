<!-- Modal milestones -->
<div class="modal fade" id="milestones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Meilenstein erstellen & bearbeiten  </h4>
      </div>
      <div class="modal-body">
         <form action="{{ URL('meilensteine/store') }}"    method="POST">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Bezeichnung des Meilensteines</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Beschreibung</label>
            <textarea class="form-control" name="description" id="description"></textarea>
          </div>
          <div class="form-group">
            <label for="datetimepicker" class="control-label">Datum Fälligkeit</label>
            <div>
              <input name="duedate" type="text" id="datetimepicker" />
            </div>
          </div>
          <script src="{{ URL::asset('js/jquery.datetimepicker.full.js')}}"></script>
          <script>
            $("#datetimepicker").datetimepicker();
            jQuery.datetimepicker.setLocale('de');
          </script>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
        <input type="submit" class="btn btn-primary" value="Änderungen speichern">
      </div>
      </form>
    </div>
  </div>
</div>
