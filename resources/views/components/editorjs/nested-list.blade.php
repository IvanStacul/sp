{!! $style === 'unordered' ? '<ul>' : '<ol>' !!}

@foreach ($items as $item)
  <li>
    {{ $item['content'] }}
    @if (!empty($item['items']))
      <x-editorjs.nested-list :style="$style" :items="$item['items']" />
    @endif
  </li>
@endforeach

{!! $style === 'unordered' ? '</ul>' : '</ol>' !!}
