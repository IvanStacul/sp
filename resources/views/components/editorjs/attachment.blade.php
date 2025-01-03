{{-- Video --}}

  <div class="video">
    <video controls>
      <source src="{{ $attachment['url'] }}" type="video/{{ $attachment['extension'] }}">
      Your browser does not support the video tag.
    </video>
  </div>
