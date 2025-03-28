@switch($level)
  @case('1')
    @php $classes = 'text-4xl font-bold mt-8 mb-4'; @endphp
    @break
  @case('2')
    @php $classes = 'text-3xl font-bold mt-6 mb-3'; @endphp
    @break
  @case('3')
    @php $classes = 'text-2xl font-bold mt-4 mb-2'; @endphp
    @break
  @case('4')
    @php $classes = 'text-xl font-bold mt-3 mb-2'; @endphp
    @break
  @case('5')
    @php $classes = 'text-lg font-bold mt-2 mb-1'; @endphp
    @break
  @case('6')
    @php $classes = 'text-base font-bold mt-2 mb-1'; @endphp
    @break
  @default

@endswitch
<h{{ $level }} class="{{ $classes }}">
  {!! $text !!}
</h{{ $level }}>
