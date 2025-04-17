@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/funcionarios.webp') }}" loading="lazy" alt="Photo by Fakurian Design"
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center text-7xl text-gray-50 font-bold md:mb-8">
          Secretaría de Obras Públicas
        </h2>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section class="max-w-5xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-4xl">
      <div class="space-y-5 md:space-y-8">
        {{-- Funciones --}}
        <div class="bg-white py-6 sm:py-8 lg:py-12">
          <div class="mx-auto">
            <div class="md:flex md:flex-row md:gap-8 md:items-center md:justify-center">
              <div class="md:flex-shrink-0 ">
                <img src="https://v0.dev/placeholder.svg?height=600&width=600" alt="Foto del funcionario"
                  class="h-48 w-full object-cover md:w-48 rounded-lg">
              </div>

              <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-green-700 font-semibold">
                  Secretario de Obras Públicas
                </div>
                <h2 class="mt-2 text-2xl font-bold">Claudio Gil</h2>
                {{-- <p class="mt-2 text-gray-500">Secretario de Gobierno</p> --}}
                <p class="mt-4">Dirección: Calle 19 entre 26 y 28 (centro), Sáenz Peña, Chaco</p>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-white">
          <div class="mx-auto ">
            <div class="px-8 py-4 ">
              <h3 class="text-2xl font-bold text-gray-800">Subsecretarías</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Subsecretaría de Obras Públicas</li>
              </ul>
            </div>

            <div class="px-8 py-4">
              <h3 class="text-2xl font-bold text-gray-800">¿Cuáles son sus funciones?</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Proyectar, calcular, ejecutar y supervisar las obras públicas municipales de arquitectura e
                  infraestructuras según lo establezca el Plan de Acción de Gobierno Municipal.</li>
                <li>Implementar programa de mantenimiento, reparación, sustitución y construcción de pavimento adecuado a
                  las características de cargas vehiculares o de flujo de pluvial, garantizando una mejor calidad de las
                  vialidades.</li>
                <li>Ejercer el control y aprobación de la documentación técnica de prestaciones obligatorias para las
                  obras particulares y públicas de acuerdo a las normas y al Código de Edificación y Urbanización
                  municipal.</li>
                <li>Prestar asesoramiento y conducción técnica a obras que realicen establecimientos Educacionales,
                  organismos vecinales y entidades de bien público, cuando así lo dispusiera el Intendente Municipal.</li>
                <li>Controlar la observancia de las normas sobre uso del espacio público municipal.</li>
                <li>Ejercer el control y cumplimiento de la documentación técnica aprobada durante la ejecución de las
                  obras públicas y privadas, así como sus condiciones de seguridad y su impacto ambiental en el entorno.
                </li>
                <li>Requerir y controlar junto a la Unidad Especial de Bomberos, los proyectos para implementar seguridad
                  contra incendio en las obras que lo requieren.</li>
                <li>Entender en la inspección y aprobación de las condiciones edilicias que requieran los negocios para su
                  habilitación comercial.</li>
                <li>Proyectar, ejecutar, supervisar y mantener las obras de alumbrado público y semaforización que así lo
                  requieran.</li>
                <li>Supervisar materiales y mano de obra utilizados en construcción y mantenimiento de obras públicas.
                </li>
                <li>Apoyar técnicamente y en su caso, ejecutar las obras públicas derivadas de los programas de desarrollo
                  social y comunitario.</li>
                <li>Entender en la aprobación de la ejecución de planes y proyectos de obras públicas o privadas de alto
                  impacto territorial en la ciudad, propuestas por instituciones locales, provinciales o nacionales, u
                  organismos gubernamentales y no gubernamentales.</li>sarrollar sus actividades de manera óptima, segura
                y brindando un mayor
                confort para los mismos.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
