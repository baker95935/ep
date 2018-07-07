@foreach ($meilenstein as $milestone)
  <tr>
    <td>{{$milestone->id}}.</td>
    <td>{{$milestone->name}}</td>
    @if ($milestone->statusPercentage == 0)
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar progress-bar-danger" style="width: {{$milestone->statusPercentage}}%"></div>
        </div>
      </td>
      <td>
        <span class="badge bg-red">{{$milestone->statusPercentage}}%</span>
      </td>
    @elseif ($milestone->statusPercentage < 30)
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar progress-bar-yellow" style="width: {{$milestone->statusPercentage}}%"></div>
        </div>
      </td>
      <td>
        <span class="badge bg-yellow">{{$milestone->statusPercentage}}%</span>
      </td>
    @elseif ($milestone->statusPercentage < 65)
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar progress-bar-primary" style="width: {{$milestone->statusPercentage}}%"></div>
        </div>
      </td>
      <td>
        <span class="badge bg-blue">{{$milestone->statusPercentage}}%</span>
      </td>
    @else
      <td>
        <div class="progress progress-xs">
          <div class="progress-bar progress-bar-success" style="width: {{$milestone->statusPercentage}}%"></div>
        </div>
      </td>
      <td>
        <span class="badge bg-green">{{$milestone->statusPercentage}}%</span>
      </td>
    @endif
  </tr>
@endforeach
