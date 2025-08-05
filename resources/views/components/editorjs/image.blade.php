
<figure style="{{ $imageData['withBackground'] ? 'background-color: lightgrey;' : '' }} {{ $imageData['withBorder'] ? 'border: 1px solid black;' : '' }} max-width: {{ $imageData['stretched'] ? '100%' : 'auto' }};" data-src="{{ $imageData['file']['url'] }}" data-caption="{{ $imageData['caption'] }}" data-fancybox="gallery">
  <img src="{{ $imageData['file']['url'] }}" alt="{!! $imageData['caption'] !!}" class="img-fluid img-thumbnail hover:scale-105 focus:scale-105 transition-transform duration-500 ease-in-out h-48 w-full object-cover rounded-xl" />
  @if (!empty($imageData['caption']))
    <figcaption>{!! $imageData['caption'] !!}</figcaption>
  @endif
</figure>
