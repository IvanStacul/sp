{{-- Shop Card Component --}}
<div class="hover:shadow-md group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl transition-all duration-200">
  @if($shop->image)
    <div class="h-48 overflow-hidden rounded-t-xl">
      <img src="{{ Storage::url($shop->image) }}" alt="{{ $shop->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-200">
    </div>
  @endif

  <div class="p-4 md:p-6 flex-1">
    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $shop->name }}</h3>

    <div class="space-y-2">
      <div class="flex items-start">
        <svg class="w-4 h-4 text-gray-400 mt-1 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
        <p class="text-gray-600 text-sm !m-0">{{ $shop->address }}</p>
      </div>

      @if($shop->formatted_phones)
        <div class="flex items-center">
          <svg class="w-4 h-4 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
          </svg>
          <p class="text-gray-600 text-sm !m-0">{{ $shop->formatted_phones }}</p>
        </div>
      @endif

      @if($shop->formatted_mobiles)
        <div class="flex items-center">
          <svg class="w-4 h-4 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
          </svg>
          <p class="text-gray-600 text-sm !m-0">{{ $shop->formatted_mobiles }}</p>
        </div>
      @endif

      @if($shop->email)
        <div class="flex items-center">
          <svg class="w-4 h-4 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
          <a href="mailto:{{ $shop->email }}" class="text-blue-600 hover:text-blue-800 text-sm transition-colors">{{ $shop->email }}</a>
        </div>
      @endif

      @if($shop->operating_hours)
        <div class="flex items-center">
          <svg class="w-4 h-4 text-gray-400 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <p class="text-gray-600 text-sm !m-0">{{ $shop->operating_hours }}</p>
        </div>
      @endif

      @if($shop->description)
        <p class="text-gray-600 text-sm mt-3 line-clamp-3 !m-0">{{ Str::limit($shop->description, 120) }}</p>
      @endif
    </div>
  </div>

  {{-- Footer with actions --}}
  @if($shop->has_contact_info || $shop->has_social_media || $shop->additional_details)
    <div class="mt-auto border-t border-gray-200">
      <div class="flex">
        {{-- Contact Actions --}}
        @if($shop->whatsapp)
          <a href="{{ $shop->whatsapp_link }}" target="_blank"
             class="flex-1 py-3 px-4 inline-flex justify-center items-center gap-2 text-sm font-medium text-green-600 hover:text-green-700 hover:bg-green-50 transition-colors border-r border-gray-200">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
            </svg>
            WhatsApp
          </a>
        @endif

        {{-- Details Button --}}
        @if($shop->additional_details || $shop->has_social_media)
          <button onclick="openShopModal('{{ $shop->id }}')"
                  class="flex-1 py-3 px-4 inline-flex justify-center items-center gap-2 text-sm font-medium text-gray-600 hover:text-gray-700 hover:bg-gray-50 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            Detalles
          </button>
        @endif
      </div>
    </div>
  @endif
</div>

{{-- Modal para detalles del comercio --}}
@if($shop->additional_details || $shop->has_social_media)
  @include('components.shop-modal', ['shop' => $shop])
@endif
