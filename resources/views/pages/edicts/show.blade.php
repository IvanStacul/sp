@extends('pages.layouts.base')

@section('title', $edict->title)

@section('base')
  <article class="bg-white py-16">
    <div class="container mx-auto px-4 max-w-4xl">
      <!-- Header del edicto -->
      <header class="mb-8">
        <div class="mb-4">
          <a href="{{ route('edicts.index') }}"
             class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Volver a edictos
          </a>
        </div>

        <div class="mb-4">
          <span class="inline-block bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">
            Edicto Municipal
          </span>
        </div>

        <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $edict->title }}</h1>

        @if($edict->edict_date)
          <div class="flex items-center text-gray-600 mb-6">
            <time class="text-sm">
              <strong>Fecha de publicación:</strong> {{ $edict->edict_date }}
            </time>
          </div>
        @endif
      </header>

      <!-- Contenido del edicto -->
      <div class="prose prose-lg max-w-none">
        @foreach($edict->content['blocks'] ?? [] as $block)
          {{ \App\View\Components\Editorjs\Factory::make($block)->render() }}
        @endforeach
      </div>

      <!-- Footer del edicto -->
      <footer class="mt-12 pt-8 border-t border-gray-200">
        <div class="flex items-center justify-between">
          <div class="text-sm text-gray-500">
            @if($edict->edict_date)
              Publicado el {{ $edict->edict_date }}
            @else
              Edicto Municipal
            @endif
          </div>

          <div class="flex space-x-4">
            <button onclick="window.print()"
                    class="inline-flex items-center px-4 py-2 bg-gray-100 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-200 transition-colors">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
              </svg>
              Imprimir
            </button>

            <button onclick="shareEdict()"
                    class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-lg hover:bg-blue-600 transition-colors">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
              </svg>
              Compartir
            </button>
          </div>
        </div>
      </footer>
    </div>
  </article>
@endsection

@push('scripts')
<script>
function shareEdict() {
  if (navigator.share) {
    navigator.share({
      title: '{{ $edict->title }}',
      text: 'Edicto Municipal',
      url: window.location.href
    });
  } else {
    // Fallback para navegadores que no soportan Web Share API
    const url = window.location.href;
    navigator.clipboard.writeText(url).then(() => {
      alert('Enlace copiado al portapapeles');
    });
  }
}
</script>
@endpush
