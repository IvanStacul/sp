
<figure style="{{ $imageData['withBackground'] ? 'background-color: lightgrey;' : '' }} {{ $imageData['withBorder'] ? 'border: 1px solid black;' : '' }} max-width: {{ $imageData['stretched'] ? '100%' : 'auto' }};" data-src="{{ $imageData['file']['url'] }}" data-caption="{{ $imageData['caption'] }}" data-fancybox="gallery">
  <img src="{{ $imageData['file']['url'] }}" alt="{{ $imageData['caption'] }}" class="rounded img-fluid img-thumbnail">
  @if (!empty($imageData['caption']))
    <figcaption>{{ $imageData['caption'] }}</figcaption>
  @endif
</figure>
