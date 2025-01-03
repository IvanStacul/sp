@extends('pages.layouts.base')

@section('hero')
  <div id="hero" class="mt-6">
    <div class="bg-white pb-6 sm:pb-8 lg:pb-12">
      <div class="mx-auto min-w-screen px-4 md:px-8">
        <div class="mb-10">
          <div class="relative">
            <div class="hero-slider [&_.slick-list]:rounded-xl [&_.slick-list]:overflow-hidden max-sm:[&_picture_img]:aspect-[4/4.88] sm:[&_picture_img]:aspect-[4/1.550] [&_picture_img]:object-cover [&_picture_img]:!w-full">
              <div>
                <div class="relative h-full w-full">
                  <picture>
                    <source media="(min-width:650px)" srcset="{{ asset('assets/img/bienvenida.jpeg') }}" />
                    <source media="(min-width:465px)" srcset="https://placehold.co/800x800" />
                    <img src="https://placehold.co/800x800" alt="slider image" style="width: auto" />
                  </picture>

                  <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                  <div class="absolute top-1/3 w-full text-center">
                    <p class="mb-4 text-center text-3xl text-gray-50 md:mb-8" data-aos="fade-up">
                      TE DAMOS LA BIENVENIDA A
                    </p>
                    <h1
                      class="mb-8 text-center text-[1.5rem] font-bold text-white sm:text-[3rem] md:mb-12 md:text-[5rem]"
                      data-aos="fade-up" data-aos-delay="200">
                      Presidencia Roque Sáenz Peña
                    </h1>
                  </div>
                </div>
              </div>

              {{--
              <div>
                <a href="#" class="block">
                  <picture>
                    <source media="(min-width:650px)" srcset="https://placehold.co/1500x800" />
                    <source media="(min-width:465px)" srcset="https://placehold.co/800x800" />
                    <img src="https://placehold.co/800x800" alt="slider image" style="width: auto" />
                  </picture>
                </a>
              </div>

              <div>
                <div class="relative h-full w-full">
                  <picture>
                    <source media="(min-width:650px)" srcset="https://placehold.co/1500x800" />
                    <source media="(min-width:465px)" srcset="https://placehold.co/800x800" />
                    <img src="https://placehold.co/800x800" alt="slider image" style="width: auto" />
                  </picture>

                  <div
                    class="absolute rtl:[direction:ltr] top-6 md:top-2/4 md:-translate-y-2/4 left-6 Breadcrumlg:left-12 xl:left-[4.25rem] space-y-4 md:space-y-5 xl:space-y-10">
                    <h2 class="text-h6 md:text-h4 lg:text-h2 xl:text-h1 font-light text-gray-600 sm:w-7/12">
                      Ushering a new era of interaction
                    </h2>
                    <a href="" class="max-lg:btn-sm aegov-btn btn-secondary">Explore in Virtual Reality</a>
                  </div>
                </div>
              </div>
              --}}
            </div>

            <div
              class="aegovs-slider-style xl:absolute xl:bottom-10 left-6 lg:left-12 xl:left-[4.25rem] flex items-center gap-5 lg:gap-6 xl:gap-8 max-xl:justify-center max-xl:mt-4 xl:[&_.slick-dots_button]:bg-aeblack-50/50 xl:[&_.slick-dots_.slick-active_button]:bg-aeblack-950 xl:[&_.slick-dots_.slick-active_button]:ring-aeblack-400/30 [&_.slick-dots]:mt-0 [&_.slick-dots_button]:w-2 [&_.slick-dots_button]:h-2 [&_.slick-dots_li]:flex">
              <div class="aegov-slider-prev opacity-60 cursor-pointer hover:opacity-100">
                <svg class="w-5 h-5 rtl:-scale-x-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                  <rect width="256" height="256" fill="none" />
                  <polyline points="160 208 80 128 160 48" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="16" />
                </svg>
              </div>
              <div class="slick-slider-dots"></div>
              <div class="aegov-slider-next opacity-60 cursor-pointer hover:opacity-100">
                <svg class="w-5 h-5 rtl:-scale-x-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                  <rect width="256" height="256" fill="none" />
                  <polyline points="96 48 176 128 96 208" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="16" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section id="servicios" class="text-gray-50 px-8 antialiased md:px-16 pb-6 sm:pb-8 lg:pb-12">
    <div class="bg-white pb-6 sm:pb-8 lg:pb-12">
      <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <div
          class="mb-4 items-center justify-between pb-4 text-gray-900 border-gray-800 md:mb-8 md:flex md:border-b md:pb-8">
          <h2 class="text-center text-xl font-semibold text-gray-900 sm:mb-0 sm:text-3xl">
            Servicios
          </h2>
        </div>

        <div
          class="mb-8 grid grid-cols-2 gap-6 sm:grid-cols-3 sm:gap-8 md:mb-0 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-6">
          <a href="#" class="group text-center">
            <div
              class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-900 group-hover:bg-gray-100 group-hover:border-gray-500">
              <svg class="h-8 w-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M5 12a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1M5 12h14M5 12a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1m-2 3h.01M14 15h.01M17 9h.01M14 9h.01">
                </path>
              </svg>
            </div>
            <p class="text-lg font-semibold text-gray-900 group-hover:underline">
              Cambios de luminarias
            </p>
          </a>

          <a href="#" class="group text-center">
            <div
              class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-900 group-hover:bg-gray-100 group-hover:border-gray-500">
              <svg class="h-8 w-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z">
                </path>
              </svg>
            </div>
            <p class="text-lg font-semibold text-gray-900 group-hover:underline">
              SEM
            </p>
          </a>

          <a href="#" class="group text-center">
            <div
              class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-900 group-hover:bg-gray-100 group-hover:border-gray-500">
              <svg class="h-8 w-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 16H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v1M9 12H4m8 8V9h8v11h-8Zm0 0H9m8-4a1 1 0 1 0-2 0 1 1 0 0 0 2 0Z">
                </path>
              </svg>
            </div>
            <p class="text-lg font-semibold text-gray-900 group-hover:underline">
              Recolección de residuos
            </p>
          </a>

          <a href="#" class="group text-center">
            <div
              class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-900 group-hover:bg-gray-100 group-hover:border-gray-500">
              <svg class="h-8 w-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z">
                </path>
              </svg>
            </div>
            <p class="text-lg font-semibold text-gray-900 group-hover:underline">
              Poda responsable
            </p>
          </a>

          <a href="#" class="group text-center">
            <div
              class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-900 group-hover:bg-gray-100 group-hover:border-gray-500">
              <svg class="h-8 w-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 15v5m-3 0h6M4 11h16M5 15h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1Z">
                </path>
              </svg>
            </div>
            <p class="text-lg font-semibold text-gray-900 group-hover:underline">
              Turnos para dirección de tierras
            </p>
          </a>

          <a href="#" class="group text-center">
            <div
              class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-900 group-hover:bg-gray-100 group-hover:border-gray-500">
              <svg class="h-8 w-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16.872 9.687 20 6.56 17.44 4 4 17.44 6.56 20 16.873 9.687Zm0 0-2.56-2.56M6 7v2m0 0v2m0-2H4m2 0h2m7 7v2m0 0v2m0-2h-2m2 0h2M8 4h.01v.01H8V4Zm2 2h.01v.01H10V6Zm2-2h.01v.01H12V4Zm8 8h.01v.01H20V12Zm-2 2h.01v.01H18V14Zm2 2h.01v.01H20V16Z">
                </path>
              </svg>
            </div>
            <p class="text-lg font-semibold text-gray-900 group-hover:underline">
              Veredas
            </p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="banner-turismo" class="bg-white pb-6 sm:pb-8 lg:pb-12">
    <div class="relative h-[400px] w-full overflow-hidden">
      <div class="absolute inset-0">
        <img id="destino-imagen" src="/placeholder.svg?height=400&width=1200" alt="Destino turístico"
          class="h-full w-full object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      </div>

      <div class="relative flex h-full items-center">
        <div class="container mx-auto flex flex-col items-center justify-between px-4 md:flex-row">
          <div class="mb-4 max-w-lg text-white md:mb-0 md:mr-8">
            <h2 id="destino-nombre" class="mb-2 text-3xl font-bold md:text-4xl"></h2>
            <p id="destino-descripcion" class="mb-4 text-sm md:text-base"></p>
            <button
              class="px-6 py-3 border border-gray-300 rounded-md text-gray-50 hover:text-gray-700 font-medium hover:bg-gray-100 transition-colors duration-300">
              Ver más
            </button>
          </div>

          <div class="flex space-x-4">
            <button id="btn-anterior" class="rounded-full bg-white bg-opacity-20 p-2 text-white hover:bg-opacity-30">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </button>
            <button id="btn-siguiente" class="rounded-full bg-white bg-opacity-20 p-2 text-white hover:bg-opacity-30">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="news" class="text-gray-50 px-8 antialiased md:px-16">
    <div class="bg-white pb-6 sm:pb-8 lg:pb-12">
      <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <div
          class="mb-4 items-center justify-between pb-4 text-gray-900 border-gray-800 md:mb-8 md:flex md:border-b md:pb-8">
          <h2 class="text-center text-xl font-semibold text-gray-900 sm:mb-0 sm:text-3xl">
            Noticias
          </h2>
        </div>

        @if ($news->count() > 0)
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($news as $n)
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

          <div class="mt-10 text-center">
            <a href="{{ route('news.index') }}"
              class="px-6 py-3 border border-gray-300 rounded-md text-gray-700 font-medium hover:bg-gray-100 transition-colors duration-300">
              Ver más noticias
            </a>
          </div>

        @else
          <div
            class="bg-yellow-50 border border-yellow-200 text-sm text-yellow-800 rounded-lg p-4 "
            role="alert" tabindex="-1" aria-labelledby="hs-with-description-label">
            <div class="flex">
              <div class="shrink-0">
                <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <line x1="12" y1="8" x2="12" y2="12" />
                  <line x1="12" y1="16" x2="12" y2="16" />
                </svg>
              </div>
              <div class="ml-3">
                <p class="text-yellow-700">
                  No hay noticias disponibles.
                </p>
              </div>
            </div>
          </div>
        @endif

      </div>
    </div>
  </section>

  <section id="map" class="text-gray-600 body-font relative">

    <div class="absolute inset-0 bg-gray-300">
      <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map"
        scrolling="no"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d374.38109848786195!2d-60.44058879474878!3d-26.784769174877358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d1dc708afdb%3A0x7f709515bade74ee!2sMariano%20Moreno%20798%2C%20H3700HPP%20S%C3%A1enz%20Pe%C3%B1a%2C%20Chaco!5e0!3m2!1ses!2sar!4v1708730115166!5m2!1ses!2sar"></iframe>
    </div>


    <div class="container px-5 py-24 mx-auto flex">
      <div
        class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
        <div class="position-relative bg-white px-3 py-5 px-sm-5 py-sm-10 px-md-10">
          <h2 class="mb-8 text-5xl font-extrabold">
            Visítenos
          </h2>

          <address class="mb-0">
            <span class="mb-1"> Dirección:</span>
            <p class="mb-6">
              <strong class="font-weight-normal"> Mariano Moreno 798 - Presidencia Roque Sáenz Peña, Chaco</strong>
            </p>
            <span class="mb-0"> Horario de Atención:</span>
            <time class="mt-1 d-block">
              Lunes a Viernes: 7:00 a 13:00 hs
            </time>
          </address>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".hero-slider").slick({
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 10000,
        prevArrow: $(".aegov-slider-prev"),
        nextArrow: $(".aegov-slider-next"),
        appendDots: $(".slick-slider-dots"),
        customPaging: function(slider, i) {
          return '<button class="slick-dots-button"></button>';
        },
      });

      AOS.init();

      const destinos = [{
          id: 1,
          nombre: "Complejo Ecológico Municipal",
          descripcion: "Disfruta de la naturaleza en un entorno único. Descubre la flora y fauna autóctona en nuestro complejo ecológico.",
          imagen: "{{ asset('assets/img/destino-1.jpg') }}",
        },
        {
          id: 2,
          nombre: "Termas de Presidencia Roque Sáenz Peña",
          descripcion: "Relájate en nuestras termas y disfruta de las propiedades curativas de sus aguas termales.",
          imagen: "{{ asset('assets/img/destino-2.webp') }}",
        },
        {
          id: 3,
          nombre: "Ciudad de los Niños ",
          descripcion: "Un espacio pensado para el disfrute",
          imagen: "{{ asset('assets/img/destino-3.jpg') }}",
        },
      ];

      let destinoActual = 0;

      const nombreElement = document.getElementById("destino-nombre");
      const descripcionElement = document.getElementById(
        "destino-descripcion"
      );
      const imagenElement = document.getElementById("destino-imagen");
      const btnAnterior = document.getElementById("btn-anterior");
      const btnSiguiente = document.getElementById("btn-siguiente");

      function actualizarDestino() {
        const destino = destinos[destinoActual];
        nombreElement.textContent = destino.nombre;
        descripcionElement.textContent = destino.descripcion;
        imagenElement.src = destino.imagen;
        imagenElement.alt = destino.nombre;
      }

      function siguienteDestino() {
        destinoActual = (destinoActual + 1) % destinos.length;
        actualizarDestino();
      }

      function destinoAnterior() {
        destinoActual =
          (destinoActual - 1 + destinos.length) % destinos.length;
        actualizarDestino();
      }

      btnSiguiente.addEventListener("click", siguienteDestino);
      btnAnterior.addEventListener("click", destinoAnterior);

      // Inicializar el banner con el primer destino
      actualizarDestino();
    });
  </script>
@endpush
