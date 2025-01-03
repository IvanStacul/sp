@extends('pages.layouts.base')

@push('styles')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
@endpush

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8">
    <img src="{{ $news->cover_image }}" loading="lazy" alt=""
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0 bg-black bg-opacity-50 mix-blend-multiply"></div>

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center text-3xl text-gray-50 uppercase font-bold md:mb-8">
          {{ $news->title }}
        </h2>
      </div>
    </div>
  </div>
@endsection

@php
  $blocks = $news->content['blocks'];
  $processedBlocks = [];
  $currentImageGroup = [];

  foreach ($blocks as $block) {
      if ($block['type'] === 'image') {
          $currentImageGroup[] = $block;
      } else {
          if (!empty($currentImageGroup)) {
              $processedBlocks[] = ['type' => 'imageGroup', 'blocks' => $currentImageGroup];
              $currentImageGroup = [];
          }

          $processedBlocks[] = $block;
      }
  }

  if (!empty($currentImageGroup)) {
      $processedBlocks[] = ['type' => 'imageGroup', 'blocks' => $currentImageGroup];
  }
@endphp

@section('base')

  <a href="" download="" class="hidden" id="download"></a>

  <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-2xl">
      <div class="space-y-5 md:space-y-8">
        <div class="space-y-3">
          <h2 class="text-2xl font-bold md:text-3xl"> {{ $news->summary }} </h2>
        </div>

        @foreach ($processedBlocks as $block)
          @if ($block['type'] === 'imageGroup')
            @php
              $imageCount = count($block['blocks']);
            @endphp

            <div id="image-gallery">
              @if ($imageCount === 1 || $imageCount === 2)
                <div class="space-y-4">
                  @foreach ($block['blocks'] as $imageBlock)
                    {{ \App\View\Components\Editorjs\Factory::make($imageBlock)->render() }}
                  @endforeach
                </div>
              @elseif ($imageCount === 3)
                <div class="grid gap-3 lg:grid-cols-2">
                  <div class="grid grid-cols-2 gap-3 lg:grid-cols-1">
                    @foreach (array_slice($block['blocks'], 0, 2) as $imageBlock)
                      {{ \App\View\Components\Editorjs\Factory::make($imageBlock)->render() }}
                    @endforeach
                  </div>

                  @php $imageBlock = $block['blocks'][2]; @endphp
                  {{ \App\View\Components\Editorjs\Factory::make($imageBlock)->render() }}
                  {{-- <figure class="relative h-72 w-full sm:h-96 lg:h-full">
                    <img class="absolute left-0 top-0 w-full h-full rounded-xl object-cover" src="{{ $imageBlock['data']['file']['url'] }}" alt="{{ $imageBlock['data']['caption'] }}" />
                    @if (!empty($imageBlock['data']['caption']))
                      <figcaption class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white text-sm p-2">
                        {{ $imageBlock['data']['caption'] }}
                      </figcaption>
                    @endif
                  </figure> --}}

                </div>
              @elseif ($imageCount > 3)
                <div class="grid gap-3 lg:grid-cols-2">
                  <div class="grid grid-cols-2 gap-3 lg:grid-cols-1">
                    @foreach (array_slice($block['blocks'], 0, 2) as $imageBlock)
                      {{ \App\View\Components\Editorjs\Factory::make($imageBlock)->render() }}
                    @endforeach
                  </div>


                  @php $imageBlock = $block['blocks'][2]; @endphp
                  <figure class="relative h-72 w-full sm:h-96 lg:h-full" data-fancybox="gallery"
                    data-src="{{ $imageBlock['data']['file']['url'] }}">
                    <img class="absolute left-0 top-0 w-full h-full rounded-xl object-cover"
                      src="{{ $imageBlock['data']['file']['url'] }}" alt="{{ $imageBlock['data']['caption'] }}" />
                    @if (!empty($imageBlock['data']['caption']))
                      <figcaption class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white text-sm p-2">
                        {{ $imageBlock['data']['caption'] }}
                      </figcaption>
                    @endif
                  </figure>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
                  @foreach (array_slice($block['blocks'], 3) as $imageBlock)
                    {{ \App\View\Components\Editorjs\Factory::make($imageBlock)->render() }}
                  @endforeach
                </div>
              @endif
            </div>
          @else
            {{ \App\View\Components\Editorjs\Factory::make($block)->render() }}
          @endif
        @endforeach
      </div>
    </div>
  </div>

  <section id="news" class="text-gray-50 px-8 antialiased md:px-16">
    <div class="bg-white pb-6 sm:pb-8 lg:pb-12">
      <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <div
          class="mb-4 items-center justify-between pb-4 text-gray-900 border-gray-800 md:mb-8 md:flex md:border-b md:pb-8">
          <h2 class="text-center text-xl font-semibold text-gray-900 sm:mb-0 sm:text-3xl">
            Noticias recientes
          </h2>
        </div>

        @if ($recentNews->count() > 0)
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($recentNews as $n)
              <a href="{{ route('news.show', $n) }}"
                class="border bg-white rounded-lg overflow-hidden shadow transition-shadow duration-300 hover:shadow-lg cursor-pointer">
                <img src="{{ $n->cover_image }}" alt="{{ $n->title }}" class="w-full h-48 object-cover" />

                <div class="p-4">
                  <time class="text-xs text-gray-500"> {{ $n->news_date }} </time>
                  <h3 class="font-semibold text-lg mb-2 text-gray-800"> {{ $n->title }} </h3>
                  <p class="text-sm text-gray-600 mb-2"> {{ $n->summary }} </p>
                </div>
              </a>
            @endforeach
          </div>
        @else
          <div class="bg-yellow-50 border border-yellow-200 text-sm text-yellow-800 rounded-lg p-4 " role="alert"
            tabindex="-1" aria-labelledby="hs-with-description-label">
            <div class="flex">
              <div class="shrink-0">
                <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                  <path d="M12 9v4"></path>
                  <path d="M12 17h.01"></path>
                </svg>
              </div>
              <div class="ms-4">
                <h3 id="hs-with-description-label" class="text-sm font-semibold">
                  No hay noticias recientes
                </h3>
                <div class="mt-1 text-sm text-yellow-700">
                  <p>Por el momento no hay más noticias recientes para mostrar.</p>
                </div>
              </div>
            </div>
          </div>
        @endif

      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const options = {
        Toolbar: {
          items: {
          download: {
            tpl: `<button class="f-button"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M3 14.25C3.41421 14.25 3.75 14.5858 3.75 15C3.75 16.4354 3.75159 17.4365 3.85315 18.1919C3.9518 18.9257 4.13225 19.3142 4.40901 19.591C4.68577 19.8678 5.07435 20.0482 5.80812 20.1469C6.56347 20.2484 7.56459 20.25 9 20.25H15C16.4354 20.25 17.4365 20.2484 18.1919 20.1469C18.9257 20.0482 19.3142 19.8678 19.591 19.591C19.8678 19.3142 20.0482 18.9257 20.1469 18.1919C20.2484 17.4365 20.25 16.4354 20.25 15C20.25 14.5858 20.5858 14.25 21 14.25C21.4142 14.25 21.75 14.5858 21.75 15V15.0549C21.75 16.4225 21.75 17.5248 21.6335 18.3918C21.5125 19.2919 21.2536 20.0497 20.6517 20.6516C20.0497 21.2536 19.2919 21.5125 18.3918 21.6335C17.5248 21.75 16.4225 21.75 15.0549 21.75H8.94513C7.57754 21.75 6.47522 21.75 5.60825 21.6335C4.70814 21.5125 3.95027 21.2536 3.34835 20.6517C2.74643 20.0497 2.48754 19.2919 2.36652 18.3918C2.24996 17.5248 2.24998 16.4225 2.25 15.0549C2.25 15.0366 2.25 15.0183 2.25 15C2.25 14.5858 2.58579 14.25 3 14.25Z" fill="#ffffff"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 16.75C12.2106 16.75 12.4114 16.6615 12.5535 16.5061L16.5535 12.1311C16.833 11.8254 16.8118 11.351 16.5061 11.0715C16.2004 10.792 15.726 10.8132 15.4465 11.1189L12.75 14.0682V3C12.75 2.58579 12.4142 2.25 12 2.25C11.5858 2.25 11.25 2.58579 11.25 3V14.0682L8.55353 11.1189C8.27403 10.8132 7.79963 10.792 7.49393 11.0715C7.18823 11.351 7.16698 11.8254 7.44648 12.1311L11.4465 16.5061C11.5886 16.6615 11.7894 16.75 12 16.75Z" fill="#ffffff"></path> </g></svg></button>`,
            click: () => {
              const src = Fancybox.getSlide().src;

              const a = document.getElementById("download");

              a.href = src;
              a.download = src.split("/").pop();
              a.click();

            },
          },
        },
          display: {
            left: ["infobar"],
            middle: [],
            right: ["download", "close"],
          },
        },
      };

      Fancybox.bind("[data-fancybox]", options);
    });
  </script>
@endpush
