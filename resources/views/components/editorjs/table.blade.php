<table class="table table-hover text-nowrap">
  @if ($withHeadings && count($content) > 0)
    <thead>
      <tr>
        @foreach ($content[0] as $heading)
          <th>{{ $heading }}</th>
        @endforeach
      </tr>
    </thead>
    <tbody>
      @foreach ($content as $key => $row)
        @if ($key > 0)
          <!-- Salta la primera fila si se usó para encabezados -->
          <tr>
            @foreach ($row as $cell)
              <td>{{ $cell }}</td>
            @endforeach
          </tr>
        @endif
      @endforeach
    </tbody>
  @else
    <tbody>
      @foreach ($content as $row)
        <tr>
          @foreach ($row as $cell)
            <td>{{ $cell }}</td>
          @endforeach
        </tr>
      @endforeach
    </tbody>
  @endif
</table>
