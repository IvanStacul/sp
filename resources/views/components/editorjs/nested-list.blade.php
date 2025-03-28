{!! $style === 'unordered' ? '<ul class="list-disc pl-6">' : '<ol class="list-decimal pl-6">' !!}

@foreach ($items as $item)
  <li class="mb-2">
    {{ $item['content'] }}
    @if (!empty($item['items']))
      <x-editorjs.nested-list :style="$style" :items="$item['items']" />
    @endif
  </li>
@endforeach

{!! $style === 'unordered' ? '</ul>' : '</ol>' !!}
