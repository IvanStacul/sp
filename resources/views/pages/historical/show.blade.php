@extends('pages.layouts.base')

@section('base')
  <!-- Hero Section with Image -->
  <div class="relative h-96 bg-gray-900 overflow-hidden">
    @if ($historicalItem->image_path)
      <img src="{{ asset($historicalItem->image_path) }}" alt="{{ $historicalItem->title }}"
        class="w-full h-full object-cover opacity-60">
    @else
      <div class="w-full h-full bg-gradient-to-r from-slate-900 to-slate-700"></div>
    @endif
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/20"></div>

    <div class="absolute inset-0 flex items-end">
      <div class="max-w-screen-xl mx-auto px-4 pb-12 w-full">
        <nav class="mb-6">
          <ol class="flex items-center space-x-2 text-sm">
            <li>
              <a href="{{ route('home') }}" class="text-white hover:text-green-300 transition-colors">
                Inicio
              </a>
            </li>
            <li class="text-white/60">/</li>
            <li>
              <a href="{{ route('historical.index') }}" class="text-white hover:text-green-300 transition-colors">
                Archivo Histórico
              </a>
            </li>
            <li class="text-white/60">/</li>
            <li class="text-white/80">{{ $historicalItem->title }}</li>
          </ol>
        </nav>

        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
          {{ $historicalItem->title }}
        </h1>

        <p class="text-xl text-white/90 max-w-3xl">
          {{ $historicalItem->description }}
        </p>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="py-12 bg-white">
    <div class="max-w-screen-xl mx-auto px-4">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        <!-- Content Area -->
        <div class="lg:col-span-2">
          <article class="prose prose-lg max-w-none">
            @if ($historicalItem->content)
              @php
                $content = json_decode($historicalItem->content, true);
              @endphp

              @if (is_array($content) && isset($content['blocks']))
                @foreach ($content['blocks'] as $block)
                  {{ \App\View\Components\Editorjs\Factory::make($block)->render() }}
                @endforeach
              @else
                {!! nl2br(e($historicalItem->content)) !!}
              @endif
            @else
              <p class="text-gray-600">
                {{ $historicalItem->description }}
              </p>
            @endif
          </article>

          @if ($historicalItem->pdfs->count() > 0 || $historicalItem->pdf_path)
            <!-- PDF Download Section -->
            <div class="mt-12 p-8 bg-green-50 border border-green-200 rounded-xl">
              <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                  <svg class="h-12 w-12 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  </svg>
                </div>
                <div class="flex-grow">
                  <h3 class="text-lg font-semibold text-green-900 mb-2">
                    {{ $historicalItem->pdfs->count() > 1 ? 'Documentos Disponibles' : 'Documento Completo' }}
                  </h3>
                  <p class="text-green-800 mb-4">
                    Accede
                    {{ $historicalItem->pdfs->count() > 1 ? 'a los documentos completos' : 'al documento completo' }} en
                    formato PDF con información detallada y recursos adicionales.
                  </p>

                  @if ($historicalItem->pdfs->count() > 0)
                    <!-- PDFs del nuevo sistema -->
                    <div class="space-y-2">
                      @foreach ($historicalItem->pdfs as $pdf)
                        <a href="{{ asset($pdf->file_path) }}" target="_blank"
                          class="inline-flex items-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition-colors duration-200 w-full justify-center">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                          </svg>
                          {{ $pdf->display_name }}
                          <span class="ml-2 text-xs">({{ $pdf->formatted_size }})</span>
                        </a>
                      @endforeach
                    </div>
                  @elseif($historicalItem->pdf_path)
                    <!-- Fallback para PDF legacy -->
                    <a href="{{ asset($historicalItem->pdf_path) }}" target="_blank"
                      class="inline-flex items-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition-colors duration-200">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                      </svg>
                      Descargar PDF
                    </a>
                  @endif
                </div>
              </div>
            </div>
          @endif
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
          <div class="sticky top-8">
            <!-- Image Preview -->
            @if ($historicalItem->image_path)
              <div class="mb-8">
                <div class="aspect-square rounded-xl overflow-hidden shadow-lg">
                  <img src="{{ asset($historicalItem->image_path) }}" alt="{{ $historicalItem->title }}"
                    class="w-full h-full object-cover">
                </div>
              </div>
            @endif

            <!-- Quick Actions -->
            <div class="bg-gray-50 rounded-xl p-6 mb-8">
              <h3 class="text-lg font-semibold text-gray-900 mb-4">Acciones</h3>

              <div class="space-y-3">
                <!-- PDFs del nuevo sistema -->
                @if ($historicalItem->pdfs->count() > 0)
                  @foreach ($historicalItem->pdfs as $pdf)
                    <a href="{{ asset($pdf->file_path) }}" target="_blank"
                      class="flex items-center justify-center w-full px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                      </svg>
                      {{ $pdf->display_name }}
                    </a>
                  @endforeach
                @elseif($historicalItem->pdf_path)
                  <!-- Fallback para PDF legacy -->
                  <a href="{{ asset($historicalItem->pdf_path) }}" target="_blank"
                    class="flex items-center justify-center w-full px-4 py-2 bg-green-600 hover:bg-green-700 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Ver PDF
                  </a>
                @endif

                <button onclick="window.print()"
                  class="flex items-center justify-center w-full px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                  </svg>
                  Imprimir
                </button>

                <button
                  onclick="navigator.share ? navigator.share({title: '{{ $historicalItem->title }}', url: window.location.href}) : copyToClipboard()"
                  class="flex items-center justify-center w-full px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors duration-200">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z" />
                  </svg>
                  Compartir
                </button>
              </div>
            </div>

            <!-- Back to Archive -->
            <div class="text-center">
              <a href="{{ route('historical.index') }}"
                class="inline-flex items-center text-green-600 hover:text-green-700 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Volver al Archivo
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Comments Section -->
    <div class="max-w-screen-xl mx-auto px-4 py-12">
      <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Comentarios</h2>

        <!-- Success/Error Messages -->
        @if (session('success'))
          <div class="bg-teal-50 border-l-4 border-teal-500 rounded-lg p-4 mb-6" role="alert" tabindex="-1">
            <div class="flex items-start gap-3">
              <div class="flex-shrink-0">
                <svg class="size-5 text-teal-600 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24"
                  height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                  <path d="m9 12 2 2 4-4"></path>
                </svg>
              </div>
              <div class="flex-1">
                <h3 class="text-sm font-semibold text-teal-800">
                  ¡Éxito!
                </h3>
                <p class="mt-1 text-sm text-teal-700">
                  {{ session('success') }}
                </p>
              </div>
            </div>
          </div>
        @endif

        @if (session('error'))
          <div class="bg-red-50 border-l-4 border-red-500 rounded-lg p-4 mb-6" role="alert" tabindex="-1">
            <div class="flex items-start gap-3">
              <div class="flex-shrink-0">
                <svg class="size-5 text-red-600 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24"
                  height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <path d="m15 9-6 6"></path>
                  <path d="m9 9 6 6"></path>
                </svg>
              </div>
              <div class="flex-1">
                <h3 class="text-sm font-semibold text-red-800">
                  Error
                </h3>
                <p class="mt-1 text-sm text-red-700">
                  {{ session('error') }}
                </p>
              </div>
            </div>
          </div>
        @endif

        <!-- Comment Form -->
        <div
          class=" bg-gray-50 rounded-2xl p-8 mb-8 shadow-sm border border-gray-100">
          <div class="mb-6">
            <h3 class="text-2xl font-bold text-gray-900 mb-2">Deja tu comentario</h3>
            <p class="text-gray-600 text-sm">
              Tu comentario será revisado por nuestro equipo antes de ser publicado. Por favor, mantén un tono respetuoso
              y
              relacionado con el contenido histórico.
            </p>
          </div>

          <form action="{{ route('historical.comments.store', $historicalItem) }}" method="POST" class="space-y-6">
            @csrf

            @guest
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Name Input -->
                <div>
                  <label for="name" class="block text-sm font-semibold text-gray-900 mb-2">Nombre *</label>
                  <input type="text" name="name" id="name" value="{{ old('name') }}" required
                    class="py-3 px-4 block w-full !bg-white !border-gray-300 rounded-lg text-sm focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none transition-colors @error('name') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
                    placeholder="Ingresa tu nombre completo">
                  @error('name')
                    <div class="flex items-center gap-2 mt-2">
                      <svg class="shrink-0 size-4 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" x2="12" y1="8" y2="12"></line>
                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                      </svg>
                      <p class="text-sm text-red-600">{{ $message }}</p>
                    </div>
                  @enderror
                </div>

                <!-- Email Input -->
                <div>
                  <label for="email" class="block text-sm font-semibold text-gray-900 mb-2">Correo electrónico
                    *</label>
                  <input type="email" name="email" id="email" value="{{ old('email') }}" required
                    class="py-3 px-4 block w-full !bg-white !border-gray-300 rounded-lg text-sm focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none transition-colors @error('email') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
                    placeholder="tu@email.com">
                  @error('email')
                    <div class="flex items-center gap-2 mt-2">
                      <svg class="shrink-0 size-4 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" x2="12" y1="8" y2="12"></line>
                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                      </svg>
                      <p class="text-sm text-red-600">{{ $message }}</p>
                    </div>
                  @else
                    <p class="text-xs text-gray-500 mt-2 flex items-center gap-1">
                      <svg class="shrink-0 size-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"></path>
                      </svg>
                      Tu correo no será publicado.
                    </p>
                  @enderror
                </div>
              </div>
            @else
              <div class="bg-gradient-to-r from-green-50 to-emerald-50 border-l-4 border-green-500 rounded-lg p-4">
                <div class="flex items-center gap-3">
                  <div class="flex-shrink-0">
                    <svg class="size-5 text-green-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                  </div>
                  <div class="flex-1">
                    <p class="text-sm text-gray-800 !mb-0">
                      Comentando como: <span class="font-semibold text-green-700">{{ Auth::user()->name }}</span>
                    </p>
                    <p class="text-xs text-gray-600 mt-0.5 !mb-0">{{ Auth::user()->email }}</p>
                  </div>
                </div>
              </div>
            @endguest

            <!-- Comment Textarea -->
            <div>
              <div class="flex justify-between items-center mb-2">
                <label for="comment" class="block text-sm font-semibold text-gray-900">Tu comentario *</label>
                <span class="text-xs text-gray-500">
                  <span id="charCount" class="font-medium">0</span><span class="text-gray-400">/1000</span>
                </span>
              </div>
              <textarea name="comment" id="comment" rows="5" required
                class="py-3 px-4 block w-full border-gray-300 rounded-lg text-sm focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none transition-colors @error('comment') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
                placeholder="Comparte tus pensamientos, recuerdos o información adicional sobre este contenido histórico...">{{ old('comment') }}</textarea>
              @error('comment')
                <div class="flex items-center gap-2 mt-2">
                  <svg class="shrink-0 size-4 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" x2="12" y1="8" y2="12"></line>
                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                  </svg>
                  <p class="text-sm text-red-600">{{ $message }}</p>
                </div>
              @else
                <p class="text-xs text-gray-500 mt-2">
                  Mínimo 10 caracteres, máximo 1000.
                </p>
              @enderror
            </div>

            <!-- Terms Checkbox -->
            <div class="flex items-start">
              <div class="flex items-center h-5 mt-1">
                <input id="terms" type="checkbox" required
                  class="shrink-0 !border-gray-300 rounded !text-green-600 focus:!ring-green-500 disabled:opacity-50 disabled:pointer-events-none">
              </div>
              <label for="terms" class="ms-3 text-sm text-gray-700">
                Acepto que mi comentario sea moderado y entiendo que los comentarios ofensivos o no relacionados con el
                contenido no serán aprobados. *
              </label>
            </div>

            <!-- Submit Button -->
            <div class="flex items-center gap-4 pt-2">
              <button type="submit"
                class="inline-flex items-center gap-x-2 px-6 py-3 bg-green-600 hover:bg-green-700 text-white text-sm font-semibold rounded-lg shadow-sm hover:shadow-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
                Enviar comentario
              </button>
              <p class="text-xs text-gray-500">
                <span class="text-red-500">*</span> Campos obligatorios
              </p>
            </div>
          </form>
        </div>

        <!-- Display Comments -->
        <div class="space-y-6">
          <div class="flex items-center justify-between">
            <h3 class="text-2xl font-bold text-gray-900">
              Comentarios publicados
            </h3>
            <span
              class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-green-100 text-green-800">
              <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
              </svg>
              {{ $historicalItem->approvedComments->count() }}
            </span>
          </div>

          @forelse($historicalItem->approvedComments as $comment)
            <div
              class="bg-white border border-gray-200 rounded-xl p-6 hover:shadow-lg hover:border-green-200 transition-all duration-200">
              <div class="flex items-start gap-4">
                <!-- Avatar -->
                <div class="flex-shrink-0">
                  <span
                    class="inline-flex items-center justify-center size-12 rounded-full bg-gradient-to-br from-green-500 to-emerald-600 text-white font-bold text-lg shadow-md">
                    {{ strtoupper(substr($comment->author_name, 0, 1)) }}
                  </span>
                </div>

                <!-- Comment Content -->
                <div class="flex-grow min-w-0">
                  <div class="flex items-center justify-between mb-2">
                    <div>
                      <h4 class="font-semibold text-gray-900 text-base">{{ $comment->author_name }}</h4>
                      <p class="text-sm text-gray-500 flex items-center gap-1.5 mt-0.5">
                        <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round">
                          <circle cx="12" cy="12" r="10"></circle>
                          <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        {{ $comment->created_at->diffForHumans() }}
                      </p>
                    </div>
                  </div>
                  <p class="text-gray-700 leading-relaxed">{{ $comment->comment }}</p>
                </div>
              </div>
            </div>
          @empty
            <div
              class="text-center py-16 bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl border-2 border-dashed border-gray-300">
              <div class="inline-flex items-center justify-center size-16 rounded-full bg-gray-200 text-gray-500 mb-4">
                <svg class="size-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
              </div>
              <h4 class="text-lg font-semibold text-gray-900 mb-2">Aún no hay comentarios aprobados</h4>
              <p class="text-gray-600 text-sm">¡Sé el primero en comentar sobre este contenido histórico!</p>
            </div>
          @endforelse
        </div>
      </div>
    </div>
  </div>

@endsection

@push('scripts')
  <script>
    function copyToClipboard() {
      navigator.clipboard.writeText(window.location.href).then(function() {
        alert('Enlace copiado al portapapeles');
      });
    }

    // Enhanced character counter for comment textarea
    document.addEventListener('DOMContentLoaded', function() {
      const commentTextarea = document.getElementById('comment');
      const charCount = document.getElementById('charCount');

      if (commentTextarea && charCount) {
        // Initialize counter
        updateCharCount();

        // Update on input
        commentTextarea.addEventListener('input', updateCharCount);

        function updateCharCount() {
          const length = commentTextarea.value.length;
          const maxLength = 1000;
          const minLength = 10;

          charCount.textContent = length;

          // Visual feedback based on character count
          if (length > maxLength) {
            charCount.classList.add('text-red-600', 'font-bold');
            charCount.classList.remove('text-gray-500', 'text-yellow-600', 'text-green-600');
            charCount.parentElement.classList.add('text-red-600');
            charCount.parentElement.classList.remove('text-gray-500', 'text-yellow-600');
          } else if (length >= maxLength - 100) {
            charCount.classList.add('text-yellow-600', 'font-semibold');
            charCount.classList.remove('text-gray-500', 'text-red-600', 'text-green-600');
            charCount.parentElement.classList.add('text-yellow-600');
            charCount.parentElement.classList.remove('text-gray-500', 'text-red-600');
          } else if (length >= minLength) {
            charCount.classList.add('text-green-600');
            charCount.classList.remove('text-gray-500', 'text-red-600', 'text-yellow-600', 'font-bold',
              'font-semibold');
            charCount.parentElement.classList.remove('text-yellow-600', 'text-red-600');
            charCount.parentElement.classList.add('text-gray-500');
          } else {
            charCount.classList.remove('text-red-600', 'text-yellow-600', 'text-green-600', 'font-bold',
              'font-semibold');
            charCount.classList.add('text-gray-500');
            charCount.parentElement.classList.add('text-gray-500');
            charCount.parentElement.classList.remove('text-yellow-600', 'text-red-600');
          }
        }
      }
    });
  </script>
@endpush

@push('styles')
  <style>
    .line-clamp-2 {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .prose {
      color: #374151;
      line-height: 1.75;
    }

    .prose p {
      margin-bottom: 1.25rem;
    }

    @media print {
      .sticky {
        position: static !important;
      }

      nav,
      button {
        display: none !important;
      }
    }
  </style>
@endpush
