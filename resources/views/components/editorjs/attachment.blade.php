{{-- Attachment - Videos, PDFs, Documents --}}
@php
  $extension = strtolower($attachment['extension'] ?? '');
  $title = $attachment['title'] ?? 'Archivo adjunto';
  $url = $attachment['url'] ?? '';
  $size = isset($attachment['size']) ? round($attachment['size'] / 1024 / 1024, 2) : 0;
@endphp

@if(in_array($extension, ['mp4', 'avi', 'mov', 'wmv', 'flv', 'webm']))
  {{-- Video --}}
  <div class="video mb-4">
    <video controls class="w-full max-w-2xl rounded-lg">
      <source src="{{ $url }}" type="video/{{ $extension }}">
      Tu navegador no soporta la reproducción de video.
    </video>
  </div>
@elseif(in_array($extension, ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'txt']))
  {{-- Document --}}
  <div class="document mb-4 p-4 border border-gray-300 rounded-lg bg-gray-50">
    <div class="flex items-center space-x-3">
      <div class="flex-shrink-0">
        @if($extension === 'pdf')
          <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M4 18h12V6l-4-4H4v16zm8-14v3h3l-3-3z"/>
          </svg>
        @elseif(in_array($extension, ['doc', 'docx']))
          <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M4 18h12V6l-4-4H4v16zm8-14v3h3l-3-3z"/>
          </svg>
        @elseif(in_array($extension, ['xls', 'xlsx']))
          <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M4 18h12V6l-4-4H4v16zm8-14v3h3l-3-3z"/>
          </svg>
        @else
          <svg class="w-8 h-8 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
            <path d="M4 18h12V6l-4-4H4v16zm8-14v3h3l-3-3z"/>
          </svg>
        @endif
      </div>
      <div class="flex-1 min-w-0">
        <p class="text-sm font-medium text-gray-900 truncate">{{ $title }}</p>
        <p class="text-xs text-gray-500">
          {{ strtoupper($extension) }}
          @if($size > 0)
            • {{ $size }} MB
          @endif
        </p>
      </div>
      <div class="flex-shrink-0">
        <a href="{{ $url }}" target="_blank" download="{{ $title }}"
           class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
          </svg>
          Descargar
        </a>
      </div>
    </div>
  </div>
@else
  {{-- Generic file --}}
  <div class="attachment mb-4 p-4 border border-gray-300 rounded-lg bg-gray-50">
    <div class="flex items-center space-x-3">
      <div class="flex-shrink-0">
        <svg class="w-8 h-8 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
          <path d="M4 18h12V6l-4-4H4v16zm8-14v3h3l-3-3z"/>
        </svg>
      </div>
      <div class="flex-1 min-w-0">
        <p class="text-sm font-medium text-gray-900 truncate">{{ $title }}</p>
        <p class="text-xs text-gray-500">
          @if($extension)
            {{ strtoupper($extension) }}
          @endif
          @if($size > 0)
            • {{ $size }} MB
          @endif
        </p>
      </div>
      <div class="flex-shrink-0">
        <a href="{{ $url }}" target="_blank" download="{{ $title }}"
           class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
          </svg>
          Descargar
        </a>
      </div>
    </div>
  </div>
@endif
