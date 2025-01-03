<footer class="bg-gray-900 mx-auto px-4 md:px-8">
  <div class="mb-16 grid grid-cols-2 gap-12 pt-10 md:grid-cols-4 lg:grid-cols-6 lg:gap-8 lg:pt-12">
    <div class="col-span-full lg:col-span-2">
      <!-- logo - start -->
      <div class="mb-4 lg:-mt-2">
        <a href="/" class="inline-flex items-center gap-2 text-xl font-bold text-gray-100 md:text-2xl"
          aria-label="logo">
          <div class="logos">
            <div class="logo-item">
              <a href="#" class="logo block">
                <img src="{{ asset('assets/logo.png') }}" alt="logo" />
                <span class="sr-only">Logo</span>
              </a>
            </div>
          </div>
        </a>
      </div>
      <!-- logo - end -->

      <!-- <p class="mb-6 text-gray-400 sm:pr-8">Filler text is dummy text which has no meaning however looks very similar to real text.</p> -->

    </div>

    <!-- nav - start -->
    <div>
      <div class="mb-4 font-bold uppercase tracking-widest text-gray-100"> Información</div>

      <nav class="flex flex-col gap-4">
        <div>
          <a href="{{ route('services.index') }}"
            class="text-gray-400 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Servicios</a>
        </div>

        <div>
          <a href="{{ route('news.index') }}"
            class="text-gray-400 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Noticias</a>
        </div>

        <div>
          <a href="#"
            class="text-gray-400 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Historia</a>
        </div>

        <div>
          <a href="#"
            class="text-gray-400 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Cultura</a>
        </div>

        <div>
          <a href="#"
            class="text-gray-400 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Turismo</a>
        </div>
      </nav>
    </div>
    <!-- nav - end -->

    <!-- nav - start -->
    <div>
      <div class="mb-4 font-bold uppercase tracking-widest text-gray-100">Documentos</div>

      <nav class="flex flex-col gap-4">
        <div>
          <a href="#" class="text-gray-400 transition duration-100 hover:text-indigo-500 active:text-indigo-600">
            Ordenanzas</a>
        </div>

        <div>
          <a href="#"
            class="text-gray-400 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Ordenanzas
            Impositivas y Tarifarias</a>
        </div>

        <div>
          <a href="#" class="text-gray-400 transition duration-100 hover:text-indigo-500 active:text-indigo-600">
            Documentos
            Oficiales y Resoluciones</a>
        </div>

      </nav>
    </div>
    <!-- nav - end -->

    <!-- nav - start -->
    <div>
      <div class="mb-4 font-bold uppercase tracking-widest text-gray-100">Trámites</div>

      <nav class="flex flex-col gap-4">
        <div>
          <a href="#"
            class="text-gray-400 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Guias de
            Trámites</a>
        </div>

        <div>
          <a href="#" class="text-gray-400 transition duration-100 hover:text-indigo-500 active:text-indigo-600">
            Autogestión</a>
        </div>

        <div>
          <a href="#"
            class="text-gray-400 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Trámites en
            Línea</a>
        </div>
      </nav>
    </div>
    <!-- nav - end -->

    <!-- nav - start -->
    <div>
      <div class="mb-4 font-bold uppercase tracking-widest text-gray-100"> Institucional</div>

      <nav class="flex flex-col gap-4">
        <div>
          <a href="#"
            class="text-gray-400 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Intendencia</a>
        </div>

        <div>
          <a href="#"
            class="text-gray-400 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Secretarías</a>
        </div>

        <div>
          <a href="#"
            class="text-gray-400 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Subsecretarías</a>
        </div>
      </nav>
    </div>
    <!-- nav - end -->
  </div>

  <div class="border-t border-gray-800 py-8 text-center text-sm text-gray-400">2024 © Ciudad Termal</div>
</footer>
