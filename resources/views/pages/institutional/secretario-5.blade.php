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
          Secretaría de Economía
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
                  Secretaria de Economía
                </div>
                <h2 class="mt-2 text-2xl font-bold">Alejandra María Quintana</h2>
                {{-- <p class="mt-2 text-gray-500">Secretario de Gobierno</p> --}}
                <p class="mt-4">Dirección: Calle 16 esquina 3 (centro), Sáenz Peña, Chaco</p>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-white">
          <div class="mx-auto ">
            <div class="px-8 py-4 ">
              <h3 class="text-2xl font-bold text-gray-800">Subsecretarías</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Fiscalización Tributaria</li>
                <li>Asesoría Legal</li>
                <li>Subsecretaría de Administración General</li>
                <li>Subsecretaría de Ingresos Públicos</li>
              </ul>
            </div>

            <div class="px-8 py-4">
              <h3 class="text-2xl font-bold text-gray-800">¿Cuáles son sus funciones?</h3>
              <ul class="text-lg !text-gray-800 list-disc pl-4 mt-4">
                <li>Dirigir, organizar, llevar y responder por la contabilidad municipal, registrando el movimiento
                  financiero y patrimonial derivado de la ejecución presupuestaria, de conformidad con las disposiciones y
                  normas contables vigentes.</li>
                <li>Revisar periódicamente el funcionamiento del sistema contable y proponer las mejoras que se consideren
                  pertinentes.</li>
                <li>Elaborar los análisis y estudios de corto, mediano y largo plazo de la situación económica y
                  financiera del Municipio.</li>
                <li>Formular, dirigir, coordinar y evaluar los planes, programas, proyectos, y procesos relacionados a
                  tasas, derechos y contribuciones.</li>
                <li>Intervenir en la percepción de tasas, derechos y contribuciones, así como en la implementación de los
                  instrumentos, mecanismos y tecnologías necesarias para tal fin.</li>
                <li>Formular, dirigir, coordinar y evaluar los planes, programas, proyectos, y procesos relacionados con
                  la inspección y control fiscal y que tiendan a minimizar los índices de evasión por los particulares,
                  personas jurídicas y privadas, que sean sujeto de aplicación de impuestos, tasas y contribuciones
                  municipales.</li>
                <li>Elaborar y desarrollar programas de moratorias para el recupero de tributos municipales.</li>
                <li>Realizar estudios, proyectos, análisis y el asesoramiento en todos los aspectos relativos al
                  Presupuesto General de Gastos y Cálculo de Recursos y Ordenanza Generales Impositivas y Tributarias.
                </li>
                <li>Disponer de los recursos financieros de la Municipalidad, contraer empréstitos y efectuar otras
                  operaciones de crédito de acuerdo con las autorizaciones expedidas por el Concejo Municipal.</li>
                <li>Coordenar los programas de liquidación, reconocimiento y pago de las obligaciones de carácter
                  salarial, prestacional, pensional y demás obligaciones laborales y/o contractuales contraídas con el
                  personal de planta o a través de otra forma de vinculación, de acuerdo a las normas existentes al
                  respecto.</li>
                <li>Elaborar informes de rendición de cuentas a los organismos de control, con el fin de demostrar el
                  destino de los recursos económicos del municipio.</li>
                <li>Percibir y aplicar los fondos que ingresan en la Municipalidad, exponiendo órdenes de pago por sí o
                  estableciendo los mecanismos administrativos para su expedición por parte de otro funcionario del
                  Municipio.</li>
                <li>Establecer las bases y condiciones particulares de las licitaciones y aprobar o desechar las
                  propuestas en el marco de la legislación y las normas generales establecidas por el Municipio.</li>
                <li>Planear, dirigir y coordinar los procesos de adquisición, recepción, registro, clasificación,
                  administración, custodia y distribución de bienes para atender las necesidades de la administración
                  municipal o con destino a la ejecución de proyectos.</li>
                <li>Planear, coordinar y controlar el estado de inventarios de bienes muebles de propiedad del Municipio.
                </li>
                <li>Administrar los bienes inmuebles del dominio privado municipal, de los locados por ella y los de
                  dominio público y privado afectados a permisos de uso y concesión.</li>
                <li>Coordinar la formulación gestión y ejecución del plan anual de compras, adquisiciones, suministros de
                  servicios administrativos, con el objeto de garantizar la oportunidad en la entrega de los mismos y
                  propender por una adecuada programación del gasto.</li>
                <li>Implementar las tareas administrativas y el cobro de tributos en los Centros de Gestión
                  descentralizados, el Complejo Termal, el Cementerio Municipal, la Estación Terminal de Ómnibus y
                  espacios, predios, servicios pagos establecidos.</li>
                <li>Organizar las actividades referidas a la liquidación de impuestos, tasas, contribuciones, patentes y
                  derechos de acuerdo a la normativa vigente.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
