@foreach ($meilenstein as $milestone)
  <tr>
    <td>{{$milestone->id}}.</td>
    <td>{{$milestone->name}}</td>
    @if ($status[$milestone->id-1] == 0)
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar progress-bar-danger" style="width: {{$status[$milestone->id-1]}}%"></div>
        </div>
      </td>
      <td>
        <span class="badge bg-red">{{$status[$milestone->id-1]}}%</span>
      </td>
    @elseif ($status[$milestone->id-1] < 30)
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar progress-bar-yellow" style="width: {{$status[$milestone->id-1]}}%"></div>
        </div>
      </td>
      <td>
        <span class="badge bg-yellow">{{$status[$milestone->id-1]}}%</span>
      </td>
    @elseif ($status[$milestone->id-1] < 65)
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar progress-bar-primary" style="width: {{$status[$milestone->id-1]}}%"></div>
        </div>
      </td>
      <td>
        <span class="badge bg-blue">{{$status[$milestone->id-1]}}%</span>
      </td>
    @else
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar progress-bar-success" style="width: {{$status[$milestone->id-1]}}%"></div>
        </div>
      </td>
      <td>
        <span class="badge bg-green">{{$status[$milestone->id-1]}}%</span>
      </td>
    @endif
  </tr>
@endforeach
