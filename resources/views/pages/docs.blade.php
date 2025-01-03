@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8">
    <img src="https://saenzpena.gob.ar/wp-content/uploads/2019/02/noticias.jpg" loading="lazy" alt=""
      class="absolute inset-0 h-full w-full object-cover object-center" />

    {{-- <div class="absolute inset-0 bg-green-400 mix-blend-multiply"></div> --}}

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center text-7xl text-gray-50 font-bold md:mb-8">
          Documentos oficiales y resoluciones
        </h2>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section id="news" class="text-gray-50 px-8 antialiased md:px-16">
    <div class="bg-white py-6 sm:py-8 lg:py-12">
      <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        <div class="hs-accordion-group">
          <div class="hs-accordion active bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg "
            id="hs-bordered-heading-one">
            <button
              class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-white py-4 px-5 hover:text-white disabled:opacity-50 disabled:pointer-events-none bg-green-500"
              aria-expanded="true" aria-controls="hs-basic-bordered-collapse-one">
              <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5v14"></path>
              </svg>
              <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
              </svg>
              Resoluciones Municipales
            </button>

            <div id="hs-basic-bordered-collapse-one"
              class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region"
              aria-labelledby="hs-bordered-heading-one">
              <div class="py-4 px-5">
                <ul class="space-y-3">
                  <li>
                    <a  href="#" class="text-lg font-semibold text-green-800 hover:!text-green-900">Decreto Nacional 297/2020</a>
                    <p class="text-sm text-gray-600">Aislamiento Social y Preventivo Obligatorio</p>
                  </li>
                  <li>
                    <a href="#"  class="text-lg font-semibold text-green-800 hover:!text-green-900">Resolución Municipal 171/20</a>
                    <p class="text-sm text-gray-600">Emergencia Sanitaria.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="hs-accordion bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg "
            id="hs-bordered-heading-two">
            <button
              class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-white py-4 px-5 hover:text-white disabled:opacity-50 disabled:pointer-events-none bg-green-500"
              aria-expanded="false" aria-controls="hs-basic-bordered-collapse-two">
              <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5v14"></path>
              </svg>
              <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
              </svg>
              Instructivos para Comercios
            </button>
            <div id="hs-basic-bordered-collapse-two"
              class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region"
              aria-labelledby="hs-bordered-heading-two">
              <div class="pb-4 px-5">
                <p class="text-gray-800 ">
                  <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin
                  adds the appropriate classes that we use to style each element. These classes control the overall
                  appearance, as well as the showing and hiding via CSS transitions.
                </p>
              </div>
            </div>
          </div>

          <div class="hs-accordion bg-white border -mt-px first:rounded-t-lg last:rounded-b-lg "
            id="hs-bordered-heading-three">
            <button
              class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex items-center gap-x-3 w-full font-semibold text-start text-white py-4 px-5 hover:text-white disabled:opacity-50 disabled:pointer-events-none bg-green-500"
              aria-expanded="false" aria-controls="hs-basic-bordered-collapse-three">
              <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5v14"></path>
              </svg>
              <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
              </svg>
              Acta Compromiso para Comercios
            </button>
            <div id="hs-basic-bordered-collapse-three"
              class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region"
              aria-labelledby="hs-bordered-heading-three">
              <div class="pb-4 px-5">
                <p class="text-gray-800">
                  <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse plugin
                  adds the appropriate classes that we use to style each element. These classes control the overall
                  appearance, as well as the showing and hiding via CSS transitions.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
