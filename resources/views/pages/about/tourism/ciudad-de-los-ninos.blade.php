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
          Ciudad de los Niños
        </h2>
      </div>
    </div>
  </div>
@endsection

@section('base')
  <section class="max-w-6xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-5xl">
      <div class="space-y-5 md:space-y-8">
        <div class="space-y-3">
          <h3 class="text-xl font-semibold md:text-2xl">
            ¿Buscás nuevos aires?
          </h3>

          <h2 class="text-3xl font-bold md:text-4xl">Visitá nuestros espacios verdes</h2>
        </div>

        <p class="text-lg !text-gray-800">
          Cuenta con una extensión de más de 11 hectáreas, incluyendo lagunas y paseos.
        </p>
        <p class="text-lg !text-gray-800">
          Pensado con fines pedagógicos y de entretenimiento, cuenta con diferentes sectores ambientados para recrear el
          campo, la ciudad y la estación de trenes. También hay áreas para la educación vial y el esparcimiento.
        </p>
        <p class="text-lg !text-gray-800">
          Todos los juegos están al aire libre e invitan a los niños a recorrer y descubrir todas sus capacidades a través
          de la diversión.
        </p>
        <p class="text-lg !text-gray-800">
          En las tardes los visitantes pueden disfrutar de los espacios de sombra y del aire fresco de las lagunas que,
          además, cuenta con el servicio de ciclolanchas y un paseo en el Trencito de la Fantasía.
        </p>

        <div class="lg:flex align-items-center">
          <div class="lg:w-1/2">
            <div class="mb-6 relative bg-clip-border rounded-[0.1875rem]">
              <div class="">
                <h2 class="mb-4 text-2xl mt-0 font-semibold">¿Cuándo y cómo visitarla?</h2>

                <p class="text-lg !text-gray-800">
                  El Complejo Ciudad de los Niños se encuentra ubicado en la Av. 1° de Mayo y Av. 1° de Mayo Sur, en la
                  ciudad de Sáenz Peña, Chaco.
                </p>
                <p class="text-lg !text-gray-800">
                  Abierto de jueves a domingo de 17 a 21hs. El servicio de ciclolanchas de jueves a domingo de 17 a 19 hs.
                  El Tencito de la Fantasía tiene salidas sábados y domingos a las 19hs. (horario de verano).
                </p>
                <p class="text-lg !text-gray-800">
                  Acceso al predio y uso de los juegos pertenecientes al Parque Temático libre y gratuito. Ciclolanchas:
                  acceden desde los 12 años. De 12 a 16 años: $30, mayores de 16 años: $50. Trencito de la fantasía: $50
                  (general).
                </p>
              </div>
            </div>
          </div>
          <div class="lg:w-5/12 ms-auto overflow-x-hidden rounded-lg">
            <div class="h-[500px]">
              <div id="marker-map5" class="h-full rounded-lg" data-toggle="map"
                data-map="{&quot;mapCenter&quot;: [40.749179, -73.989276], &quot;zoom&quot;: 15, &quot;useTextIcon&quot;: false, &quot;interactive&quot;: true, &quot;geojson&quot;: &quot;/assets/sample-listing-geojson.json&quot; }">
                <iframe class="w-full h-[460px]"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.663123813908!2d-60.43003362369162!3d-26.787006287964882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d16450467ff%3A0x49fa1d78ecfd2b8c!2sParque%20Ciudad%20de%20los%20Ni%C3%B1os!5e0!3m2!1ses!2sar!4v1753830161672!5m2!1ses!2sar"
                  frameborder="0"></iframe>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
