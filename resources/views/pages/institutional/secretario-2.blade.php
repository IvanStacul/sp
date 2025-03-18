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
          Secretaría de Desarrollo Humano y Deportes
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
                  Secretario de Desarrollo Humano y Deportes
                </div>
                <h2 class="mt-2 text-2xl font-bold">Germán Rearte</h2>
                {{-- <p class="mt-2 text-gray-500">Secretario de Gobierno</p> --}}
                <p class="mt-4">Dirección: Calle 1 entre 14 y 16 (Ensanche Sur), Sáenz Peña, Chaco</p>
              </div>
            </div>
          </div>
        </div>

        {{-- Subsecretarías (lista de nombre de subsecretarías, sólo texto) --}}
        <div class="bg-white">
          <div class="mx-auto ">
            <div class="px-8 py-4 ">
              <h3 class="text-2xl font-bold text-gray-800">Subsecretarías</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Subsecretaría de Promoción Social</li>
                <li>Subsecretaría de Deportes y Recreación</li>
              </ul>
            </div>

            <div class="px-8 py-4">
              <h3 class="text-2xl font-bold text-gray-800">¿Cuáles son sus funciones?</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Desarrollar y articular sistema informático de registro y monitoreo de familias y personas en
                  situación de vulnerabilidad, estableciendo una base de datos única, que permita elaborar indicadores de
                  riesgo y registrar los programas y ayudas que perciben.</li>
                <li>Elaborar, coordinar, ejecutar y evaluar programas de atención orientados a poblaciones en riesgo
                  social.</li>
                <li>Ejecutar el control y monitoreo de los programas sociales desarrollados, a través de sistemas de
                  planificación y seguimiento.</li>
                <li>Otorgar subsidios y ayudas urgentes que se otorguen a personas, entidades públicas y privadas,
                  cooperativas y organizaciones sociales, inclusive a través de equipamiento, insumos, materiales,
                  infraestructura social, elementos para talleres familiares, emprendimientos sociales y comunitarios, de
                  carácter productivo, recreativo o de servicios, que apunten al mejoramiento de la calidad de vida, en el
                  marco del cumplimiento de las políticas sociales.</li>

                <li>Proyectar, coordinar, dirigir y controlar los Programas Alimentarios que se consideren
                  necesario para la atención de niños, adolescentes, adultos mayores, embarazadas y
                  personas con discapacidad en situación de vulnerabilidad.</li>

                <li>Coordinar, dirigir y controlar las actividades, programas, personal y recursos de los
                  comedores y merenderos de dependencia municipal.</li>

                <li>Conceder y controlar los insumos otorgado a los comedores y merenderos no
                  municipales que son asistidos para su funcionamiento, garantizando que la asistencia
                  alimentaria llegue a las familias declaradas.</li>

                <li>Organizar y coordinar la ayuda estatal y comunitaria para los casos de emergencias y
                  catástrofes individuales y sociales.</li>


                <li>Elaborar, coordinar y ejecutar planes y programas relacionados con la niñez, la
                  adolescencia y la familia, en articulación con organismos públicos y con los no
                  gubernamentales que tengan relación con la temática.</li>


                <li>Formular y ejecutar políticas destinadas a la tercera edad y coordinar programas de
                  promoción e integración social de las personas mayores.</li>


                <li>Elaborar planes y programas que atiendan especialmente a la población con
                  discapacidad y promover líneas de acción tendientes a lograr el desarrollo de las
                  personas con discapacidad desde la perspectiva de derechos.</li>


                <li>Elaborar y desarrollar programas, proyectos y actividades referidos a la cuestión de
                  género; así como apoyar y participar en programas, proyectos y actividades
                  organizadas por otras instituciones, en concordancia con los ejes de gestión municipal.</li>


                <li>Participar en la elaboración de los planes de urbanismo destinados a programas de
                  vivienda, su adecuación, infraestructura de servicios y el equipamiento social tanto
                  rural como urbano, a los principios de higiene y salubridad indispensables para el
                  desarrollo integral de la familia en coordinación con las áreas competentes.</li>


                <li>Coordinar y ejecutar las actividades que se implementarán en los Centros Integradores
                  Comunitarios y en los Centro Comunitarios Municipales.</li>


                <li>Capacitar a los funcionarios municipales en temas atinentes al Desarrollo Humano.</li>


                <li>Promover los valores de la educación física, el deporte y la implementación de las
                  condiciones que permitan el acceso a la práctica de los mismos a todos los habitantes
                  de la ciudad.</li>

                <li>Ejecutar programas deportivos, competencias, torneos y encuentros organizados por
                  la Municipalidad y acompañar y promover los de otras instituciones.</li>


                <li>Planificar, coordinar y administrar las instalaciones deportivas y recreativas en el
                  municipio.</li>
                <li>Planificar, formular, coordinar, controlar y evaluar los planes y programas de
                  diagnóstico, inventario de necesidades y provisión de infraestructura deportiva y
                  recreativa, dotación y mantenimiento de las mismas.
                </li>


                <li>Planificar, dirigir, coordinar, ejecutar, evaluar y controlar los programas y proyectos
                  para la creación, fomento y apoyo de las escuelas de formación deportiva, así como de
                  asociaciones de carácter deportivo.</li>

                <li>Coordinar capacitaciones a la población en temas relacionados a Deporte y Salud,
                  articulando con instituciones y profesionales especializados en el tema</li>
              </ul>

              <p>Dirección de CIC San Cayetano</p>
              <p>Dirección de CIC Santa Mónica</p>
              <p>Dirección de CIC Colón</p>
              <p>Dirección de CIC AIPO</p>
              <p>Dirección de NIDO Milenium</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
