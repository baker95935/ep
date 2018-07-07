@if ($ms->statusPercentage == 100)
  <span class="label label-success">Abgeschlossen</span>
@elseif ($ms->statusPercentage != 0)
  <span class="label label-warning">in Bearbeitung</span>
@else
  <span class="label label-danger">nicht in Bearbeitung</span>
@endif
