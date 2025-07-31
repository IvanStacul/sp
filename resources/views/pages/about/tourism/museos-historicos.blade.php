@extends('pages.layouts.base')

@section('hero')
  <div
    class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-8 md:py-10 xl:py-24 px-4 md:px-8 mt-4">
    <img src="{{ asset('assets/img/banner_turismo.webp') }}" loading="lazy" alt=""
      class="absolute inset-0 h-full w-full object-cover object-center" />

    <div class="absolute inset-0">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="relative flex flex-row gap-72 items-center min-w-screen px-16 md:px-32">
      <div>
        <h2 class="mb-4 text-center text-5xl text-gray-50 font-bold md:mb-8 xl:text-6xl 2xl:text-7xl">
          Museos Históricos
        </h2>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section class="max-w-6xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-5xl">
      <div class="space-y-8 md:space-y-12">
        <div class="space-y-3">
          <h3 class="text-xl font-semibold md:text-2xl">
            ¿Buscás nuevas actividades?
          </h3>

          <h2 class="text-3xl font-bold md:text-4xl">Recorré el Camino de los Museos</h2>
        </div>

        <p class="text-lg !text-gray-800">
          Sáenz Peña cuenta con 3 museos que recorren los hitos históricos de la ciudad.<b> Pueden visitarse con entrada
            libre y gratuita </b>. Lunes a viernes de 8 a 12 hs. y de 16 a 20 hs. Fines de semana y feriados de 9 a 12 hs.
          y de 16 a 20 hs.
        </p>


        <div
          class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
          <div class="lg:pe-4">
            <div
              class="relative overflow-hidden rounded-2xl bg-green-900 px-6 pb-8 pt-64 md:pt-80 shadow-xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
              <img class="absolute inset-0 h-full w-full object-cover"
                src="{{ asset('assets/img/turismo/museo-fundacion.webp') }}" alt="Museum of the future - Dubai">
            </div>
          </div>
          <div>
            <h2 class="text-base font-semibold leading-7 text-primary-500 mb-2">Museo de la Fundación</h2>
            <div>
              <p>Cuenta la historia de los primeros tiempos de la ciudad y exhibe objetos de las familias pioneras. Se
                puede encontrar la réplica de un almacén de ramos generales, con todos los detalles propios de principio
                del siglo 20. Funciona en la réplica del Casino de Oficiales del Regimiento 6 de Caballería de línea, en
                el sitio donde se ubicaba originalmente.</p>

              <p class="mt-4">Dirección: Calle 1 entre 4 y 6 - Ensanche Sur.</p>
            </div>
          </div>
        </div>

        <div
          class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2 ">
          <div class="lg:ps-4 lg:order-last">
            <div
              class="relative overflow-hidden rounded-2xl bg-green-900 px-6 pb-8 pt-64 md:pt-80 shadow-xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10 lg:ms-auto">
              <img class="absolute inset-0 h-full w-full object-cover"
                src="{{ asset('assets/img/turismo/museo-historico.webp') }}" alt="Museum of the future - Dubai">
            </div>
          </div>
          <div>
            <h2 class="text-base font-semibold leading-7 text-primary-500 mb-2">Museo Histórico de la Ciudad</h2>
            <div>
              <p>Multifacético y poseedor de atractivas piezas, su estructura física se encuentra constituida por dos salas, en las cuales se exhiben de diversos modos objetos antiguos, fósiles, armas, documentos. Entre sus valiosas piezas, se destacan un caparazón de Gliptodonte y un caparazón de tortuga gigante, así como una serie de meteoritos hallados en la zona. Un importante objeto de valor histórico aparece también en este museo, se trata del escudo utilizado por el primer contingente de Gendarmería Nacional que tuvo por destino la ciudad. Otro aspecto destacable lo constituye la colección de monedas antiguas, aunque sin dudas lo más atractivo es la ambientación de un típico almacén de ramos generales de principios de siglo.</p>
              <p class="mt-4">Dirección: Av. 1 y 12- Centro.</p>
            </div>
          </div>
        </div>

        <div
          class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
          <div class="lg:pe-4">
            <div
              class="relative overflow-hidden rounded-2xl bg-green-900 px-6 pb-8 pt-64 md:pt-80 shadow-xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
              <img class="absolute inset-0 h-full w-full object-cover"
                src="{{ asset('assets/img/turismo/museo-ferroviario.webp') }}" alt="Museum of the future - Dubai">
            </div>
          </div>
          <div>
            <h2 class="text-base font-semibold leading-7 text-primary-500 mb-2">Museo Ferroviario Municipal</h2>
            <p>Gral. Manuel Belgrano</p>
            <div>
              <p>Inaugurado en febrero de 2015, se encuentra en el corazón del barrio ferroviario. En su sala de exposición se narra la rica historia del ferrocarril y de las familias ferroviarias de la ciudad, su contribución al progreso, la comunicación y la vida social.</p>
              <p>Además, se exhiben objetos donados que documentan el trabajo diario del personal.</p>
              <p>Sobre las vías dos vagones restaurados invitan a los visitantes al pasado, el vagón comedor, permite rememorar la época de los largos viajes donde acceder a su salón exigía el uso de traje. El vagón camarote exhibe todo el lujo y las comodidades que brindaban los trenes en sus servicios especiales.</p>

              <p class="mt-4">Dirección: Av. 1 entre 0 y 2 - Ensanche Sur.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
