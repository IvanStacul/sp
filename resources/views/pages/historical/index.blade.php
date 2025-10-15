@extends('pages.layouts.base')

@section('base')
  <!-- Hero Section -->

  <div
    class="min-h-96 relative bg-gradient-to-r from-slate-900 to-slate-700 text-white py-16 flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 md:py-10 xl:py-24 px-4 md:px-8 mt-4">


    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-col md:flex-row gap-4 md:gap-72 items-center min-w-screen px-4 md:px-32">
      <div>
        <h2 class="mb-4 text-center font-bold text-4xl text-gray-50 md:mb-8">
          Archivo Histórico Municipal
        </h2>
      </div>

      <div>
        <p class="text-xl text-gray-50">
          Descubre la rica historia de Presidencia Roque Sáenz Peña a través de documentos, fotografías y testimonios que
          han dado forma a nuestra identidad.
        </p>
      </div>
    </div>
  </div>

  <div class="container mx-auto px-6 py-16">
    @if ($categories->count() > 0)
      <div class="max-w-4xl mx-auto mb-16">
        <div class="flex flex-wrap gap-2 mb-12 justify-center">
          <a href="{{ route('historical.index') }}"
            class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-primary shadow-xs hover:bg-primary/90 h-9 px-4 py-2 has-[>svg]:px-3 rounded-full">
            Todos
          </a>
          @foreach ($categories as $category)
            <a href="{{ route('historical.index', ['category' => $category->slug]) }}"
              class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border {{ $selectedCategory === $category->slug ? 'bg-primary shadow-xs hover:bg-primary/90' : 'bg-background shadow-xs hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50' }} h-9 px-4 py-2 has-[>svg]:px-3 rounded-full"
              style="{{ $selectedCategory === $category->slug ? 'background-color: ' . $category->color . '; border-color: ' . $category->color . '; color: white;' : '' }}">
              @if ($category->icon)
                <i class="{{ $category->icon }} w-3 h-3"></i>
              @endif
              {{ $category->name }}
            </a>
          @endforeach
        </div>
      </div>
    @endif

    @if ($historicalItems->count() > 0)
      <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 auto-rows-[200px]">
          @foreach ($historicalItems as $index => $item)
            @php
              // Determinar el tamaño de la tarjeta basado en si es destacado o el índice
              $isLarge = $item->featured || $index === 0;
              $cardClass = $isLarge ? 'md:col-span-2 md:row-span-2' : 'md:col-span-1 md:row-span-2';
            @endphp

            <a data-slot="card" href="{{ route('historical.show', $item->slug) }}"
              class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl py-6 group cursor-pointer overflow-hidden hover:shadow-2xl transition-all duration-500 border-0 shadow-lg relative {{ $cardClass }}">
              <div class="absolute inset-0">
                @if($item->image_path)
                  <img alt="{{ $item->title }}"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                    src="{{ asset($item->image_path) }}"
                    onerror="this.src='https://via.placeholder.com/600x400/4a5568/ffffff?text=Sin+Imagen'">
                @else
                  <img alt="{{ $item->title }}"
                    class="w-full h-full object-cover"
                    src="https://via.placeholder.com/600x400/4a5568/ffffff?text=Sin+Imagen">
                @endif
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/20"></div>
                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/20 transition-colors duration-300"></div>
                <div
                  class="absolute inset-0 backdrop-blur-[0.5px] group-hover:backdrop-blur-0 transition-all duration-300">
                </div>
              </div>
              <div class="relative z-10 h-full flex flex-col justify-between p-6 text-white">
                <div class="flex justify-between items-start">
                  @if ($item->category)
                    <div
                      class="inline-flex items-center rounded-full border px-2.5 py-0.5 transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 backdrop-blur-sm text-xs font-medium text-white border-white/30"
                      style="background-color: {{ $item->category->color }}30; border-color: {{ $item->category->color }}50;">
                      @if ($item->category->icon)
                        <i class="{{ $item->category->icon }} w-3 h-3 mr-1"></i>
                      @endif
                      {{ $item->category->name }}
                    </div>
                  @endif
                  @if ($item->featured)
                    <div
                      class="inline-flex items-center rounded-full border px-2.5 py-0.5 transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-secondary/80 bg-yellow-500/30 text-yellow-300 border-yellow-400/50 backdrop-blur-sm text-xs font-medium">
                      Destacado
                    </div>
                  @endif
                  <div class="text-xs font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300">Ver
                    más</div>
                </div>
                <div class="space-y-3">
                  <h3
                    class="text-lg md:text-xl font-bold text-balance leading-tight group-hover:text-white/90 transition-colors duration-300">
                    {{ $item->title }}
                  </h3>
                  <p
                    class="text-sm text-white/90 text-pretty leading-relaxed line-clamp-3 group-hover:line-clamp-4 transition-all duration-300">
                    {{ $item->description }}
                  </p>
                  <div class="flex items-center gap-4 text-xs text-white/80">
                    <div class="flex items-center gap-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-calendar w-3 h-3">
                        <path d="M8 2v4"></path>
                        <path d="M16 2v4"></path>
                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                        <path d="M3 10h18"></path>
                      </svg>
                      {{ $item->created_at->format('Y') }}
                    </div>
                    @if ($item->pdf_path)
                      <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="lucide lucide-file-text w-3 h-3">
                          <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                          <path d="M14,2v4a2 2 0 0 0 2 2h4" />
                          <path d="M10,9H8" />
                          <path d="M16,13H8" />
                          <path d="M16,17H8" />
                        </svg>
                        PDF
                      </div>
                    @endif
                  </div>
                </div>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    @else
      <div class="max-w-4xl mx-auto text-center">
        <div class="bg-gray-50 rounded-xl p-12">
          <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
          </svg>
          <h3 class="text-xl font-medium text-gray-900 mb-2">No hay elementos históricos disponibles</h3>
          <p class="text-gray-600">Próximamente se agregarán documentos y contenido histórico de la ciudad.</p>
        </div>
      </div>
    @endif
  </div>

@endsection

@push('styles')
  <style>
    .line-clamp-3 {
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .line-clamp-4 {
      display: -webkit-box;
      -webkit-line-clamp: 4;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
  </style>
@endpush
