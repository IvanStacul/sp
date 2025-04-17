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
          Secretaría de Desarrollo Local y Economía Social
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
                  Secretario de Desarrollo Local y Economía Social
                </div>
                <h2 class="mt-2 text-2xl font-bold">Oscar Pablo Dudik</h2>
                {{-- <p class="mt-2 text-gray-500">Secretario de Gobierno</p> --}}
                <p class="mt-4">Dirección: Calle 14 entre 17 y 19 (centro), Sáenz Peña, Chaco</p>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-white">
          <div class="mx-auto ">
            <div class="px-8 py-4 ">
              <h3 class="text-2xl font-bold text-gray-800">Subsecretarías</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Subsecretaría de Producción Primaria y Economía Social</li>
                <li>Subsecretaría de Desarrollo Industrial y PyMes</li>
                <li>Subsecretaría de Promoción Turística</li>
                <li>Subsecretaría de Coordinación de Proyectos Productivos</li>
              </ul>
            </div>

            <div class="px-8 py-4">
              <h3 class="text-2xl font-bold text-gray-800">¿Cuáles son sus funciones?</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Aplicar políticas públicas estratégicas para la sustentabilidad del Desarrollo Local en la zona urbana
                  y rural de la ciudad.</li>
                <li>Promover, tanto en el ambiente público como privado, el desarrollo turístico competitivo, equilibrado
                  y sustentable.</li>
                <li>Crear programas de capacitación y acciones de promoción tendientes a sensibilizar y concientizar a la
                  población residente para afianzar una cultura turística local.</li>
                <li>Administrar los atractivos municipales de la ciudad, Museos, Complejo Termal y Spa, Casa Cruz, Camping
                  municipal, Parque Temático Ciudad de los Niños y otros que fueran añadidos.</li>
                <li>Analizar la cadena de producción e implementar un programa de registro y estadística permanente de
                  empresas, industrias, productores primarios, emprendimientos y fuentes de empleos en la ciudad.</li>
                <li>Fomentar, coordinar y promover las actividades económicas y el acceso a la oferta de bienes y
                  servicios de los emprendimientos locales.</li>
                <li>Gestionar y coordinar las actividades de ventas de Ferias Francas y/o Centros de comercialización en
                  distintos Sectores de la ciudad.</li>
                <li>Gestionar y coordinar políticas de capacitación, conocimiento, información, asistencia técnica y
                  financiera para la generación de Nuevos Emprendimientos y Empresas.</li>
                <li>Coordinar con las áreas del gobierno Municipal, Provincial y Nacional las acciones estratégicas de
                  control y saneamiento ambiental en todas las actividades productivas del Departamento.</li>
                <li>Concientizar acerca de la Importancia del cuidado del Ambiente en general y en particular en las
                  distintas etapas de la producción y actividades económicas que afecten directa o indirectamente la Salud
                  y el Medio Ambiente.</li>
                <li>Promover e implementar políticas tendientes a sostener la producción primaria, Cinturón Verde,
                  Frutihortícola, Granja y producciones no tradicionales.</li>
                <li>Realizar tareas de colaboración con los productores primarios en lo referido a la preparación del
                  suelo, extracción de agua, entre otras.</li>
                <li>Promover, articular e implementar políticas de emprendedurismo a mediano y largo plazo a través de
                  Mesas de Trabajo con las Universidades; el INTA; Consejos Profesionales; Entidades Intermedias e
                  Institutos de Investigación e Innovación tecnológica; Cámaras Empresarias; y Entidades del Sector
                  Productivo.</li>
                <li>Promover e implementar programas y proyectos de energías alternativas y/o Renovables para aprovechar
                  las ventajas económicas y ambientales de la generación de energía por medios alternativos (solar,
                  Biodiesel, etc.); y la tecnología disponible para disminuir los consumos, principalmente
                  institucionales.</li>
                <li>Promover el desarrollo industrial propiciando la radicación de nuevas industrias y la reubicación de
                  las que se encuentran en el casco urbano en el Parque Industrial.</li>
                <li>Coordinar actividades y supervisar el funcionamiento del Parque Industrial.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
