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
          Centros de Salud y Farmacias
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
            ¿Necesitás atención médica?
          </h3>

          <h2 class="text-3xl font-bold md:text-4xl">Centros de Salud y Farmacias</h2>
        </div>

        <p class="text-lg !text-gray-800">
          Sáenz Peña cuenta con varios centros de salud y farmacias que brindan atención médica y servicios farmacéuticos
          a la comunidad. Aquí te dejamos una lista de los principales centros de salud y farmacias disponibles en la
          ciudad.
        </p>

        {{-- Tabs Navigation --}}
        <div class="border-b border-gray-200">
          <nav class="-mb-px flex space-x-8" aria-label="Tabs">
            <button onclick="showTab('farmacias')" id="tab-farmacias" class="tab-button active border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
              <svg class="w-5 h-5 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
              </svg>
              Farmacias ({{ $farmacias->count() }})
            </button>
            <button onclick="showTab('centros')" id="tab-centros" class="tab-button border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-2 px-1 border-b-2 font-medium text-sm">
              <svg class="w-5 h-5 mr-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
              </svg>
              Centros de Salud ({{ $centrosSalud->count() }})
            </button>
          </nav>
        </div>

        {{-- Farmacias Tab Content --}}
        <div id="content-farmacias" class="tab-content">
          <div class="mb-6">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Farmacias</h3>
            <p class="text-gray-600">Encuentra las farmacias disponibles en Sáenz Peña para tus necesidades farmacéuticas.</p>
          </div>

          @if($farmacias->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
              @foreach($farmacias as $farmacia)
                @include('components.shop-card', ['shop' => $farmacia])
              @endforeach
            </div>
          @else
            <div class="text-center py-8">
              <div class="text-gray-400 text-lg">No hay farmacias registradas en este momento.</div>
            </div>
          @endif
        </div>

        {{-- Centros de Salud Tab Content --}}
        <div id="content-centros" class="tab-content hidden">
          <div class="mb-6">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Centros de Salud</h3>
            <p class="text-gray-600">Consulta los centros médicos y hospitales disponibles para atención médica especializada.</p>
          </div>

          @if($centrosSalud->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
              @foreach($centrosSalud as $centro)
                @include('components.shop-card', ['shop' => $centro])
              @endforeach
            </div>
          @else
            <div class="text-center py-8">
              <div class="text-gray-400 text-lg">No hay centros de salud registrados en este momento.</div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </section>

  {{-- JavaScript for Tabs --}}
  <script>
    function showTab(tabName) {
      // Hide all tab contents
      const tabContents = document.querySelectorAll('.tab-content');
      tabContents.forEach(content => {
        content.classList.add('hidden');
      });

      // Remove active class from all tabs
      const tabButtons = document.querySelectorAll('.tab-button');
      tabButtons.forEach(button => {
        button.classList.remove('active');
        button.classList.remove('border-blue-500', 'text-blue-600');
        button.classList.add('border-transparent', 'text-gray-500');
      });

      // Show selected tab content
      document.getElementById('content-' + tabName).classList.remove('hidden');

      // Add active class to selected tab
      const activeTab = document.getElementById('tab-' + tabName);
      activeTab.classList.add('active');
      activeTab.classList.remove('border-transparent', 'text-gray-500');
      activeTab.classList.add('border-blue-500', 'text-blue-600');
    }

    // Initialize with farmacias tab active
    document.addEventListener('DOMContentLoaded', function() {
      showTab('farmacias');
    });
  </script>

  <style>
    .tab-button.active {
      border-color: #3b82f6;
      color: #2563eb;
    }

    .tab-content {
      animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>
@endsection
