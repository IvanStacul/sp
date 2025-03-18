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
          Secretaría de Cultura y Educación Ciudadana
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
                  Secretaria de Cultura y Educación Ciudadana
                </div>
                <h2 class="mt-2 text-2xl font-bold">Alicia Gaña</h2>
                {{-- <p class="mt-2 text-gray-500">Secretario de Gobierno</p> --}}
                <p class="mt-4">Dirección: Calle 12 esquina 9 (centro), Sáenz Peña, Chaco</p>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-white">
          <div class="mx-auto ">
            <div class="px-8 py-4 ">
              <h3 class="text-2xl font-bold text-gray-800">Subsecretarías</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Subsecretaria de Actividades Culturales</li>
                <li>Subsecretaria de Educación Ciudadana</li>
              </ul>
            </div>

            <div class="px-8 py-4">
              <h3 class="text-2xl font-bold text-gray-800">¿Cuáles son sus funciones?</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Crear y desarrollar más y mejores audiencias difundiendo la cultura, aumentando la infraestructura,
                  estimulando la gestión, ampliando la formación para de audiencias la apreciación de las artes.</li>
                <li>Aumentar el acceso de los grupos de escasos recursos y de los grupos vulnerables a los bienes de
                  consumo cultural, generando las condiciones iniciales para una relación permanente entre los miembros de
                  estos grupos y la actividad cultural.</li>
                <li>Articular la relación de la Secretaría con otros organismos municipales, provinciales, nacionales,
                  internacionales y privados para establecer convenios de cooperación e intercambio cultural.</li>
                <li>Promover, coordinar y difundir el patrimonio cultural y el de los artistas y hacedores de la cultura
                  de la localidad, así como de aquellos que visiten la ciudad.</li>
                <li>Diseñar y formular políticas y planificar acciones para promover, rescatar, preservar, actualizar,
                  rehabilitar y conservar el Patrimonio Histórico Cultural y Ambiental de la ciudad.</li>
                <li>Fomentar la investigación histórico- cultural de la ciudad.</li>
                <li>Orientar las manifestaciones artístico-culturales promoviendo y realizando actividades de formación
                  especializada en estas áreas.</li>
                <li>Dirigir, planificar, controlar y evaluar las actividades, programas y proyectos de las reparticiones
                  culturales del Municipio, Biblioteca Municipal, Casa de Cultura, Centro Cultural Municipal.</li>
                <li>Administrar y evaluar las condiciones de préstamo, uso y renta de los espacios culturales de la
                  Municipalidad en articulación con la Secretaría de Economía.</li>
                <li>Consolidar el equipamiento cultural y la infraestructura de edificios, espacios y centros culturales
                  de cara a potenciar el proyecto de modernización e integración que transita la ciudad y consolidar el
                  rol central de la cultura para este modelo de desarrollo.</li>
                <li>Incentivar y potenciar las acciones y programas de formación, capacitación y especialización, tanto en
                  materia de técnica y lenguaje artístico, como de gestión y desarrollo de proyectos culturales.</li>
                <li>Dirigir, planificar y controlar los programas de estudio, capacitación y formación de las Escuelas de
                  Música, Danza y Teatro, Escuela de Folclore y otras dependientes del área, promoviendo la enseñanza de
                  disciplinas artísticas de excelencia y tendientes a crear titulaciones que permitan la salida laboral de
                  sus estudiantes y profesores.</li>
                <li>Dirigir, planificar y controlar programas de Lectura y Escritura que se desarrollen desde el área en
                  la Biblioteca Municipal, Casa de Cultura, escuelas, comedores y otros espacios.</li>
                <li>Fomentar, acompañar y organizar Ferias de Libros, presentaciones de autores y editoriales, encuentros
                  y reuniones de escritores, poetas e instituciones de Letras, que propicien la escritura y la lectura.
                </li>
                <li>Priorizar, promover, rescatar y difundir las diferentes actividades artístico culturales generadas
                  desde al ámbito local, posibilitando el desarrollo constante de propuestas e iniciativas del área.</li>
                <li>Impulsar iniciativas y modificaciones en materia de legislación cultural con el objeto de dotar a la
                  actividad artística y cultural de un marco normativo actualizado y productivo.</li>
                <li>Apoyar y estimular la creación e incentivar y promover la producción cultural, ya sea desde la
                  promoción, la difusión, la producción y/o el apoyo a las distintas disciplinas y corrientes de la
                  actividad artística.</li>
                <li>Planificar, desarrollar y generar políticas, programas, proyectos, actividades y contenidos
                  relacionados a la Educación Ciudadana, fomentando la conciencia ciudadana de participación y
                  responsabilidad.</li>
                <li>Concientizar y capacitar en materia de ciudadanía responsable a instituciones, comercios y vecinos
                  sobre los ejes de participación, arbolado, tránsito, espacio público, medio ambiente y convivencia.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
