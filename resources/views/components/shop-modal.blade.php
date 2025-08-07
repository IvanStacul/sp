{{-- Shop Modal Component --}}
<div id="shop-modal-{{ $shop->id }}" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true" onclick="closeShopModal('{{ $shop->id }}')"></div>

    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

    <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
      <div class="sm:flex sm:items-start">
        <div class="w-full">
          <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
              {{ $shop->name }}
            </h3>
            <button onclick="closeShopModal('{{ $shop->id }}')" class="text-gray-400 hover:text-gray-600">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>

          @if($shop->image)
            <div class="mb-4">
              <img src="{{ Storage::url($shop->image) }}" alt="{{ $shop->name }}" class="w-full h-48 object-cover rounded-lg">
            </div>
          @endif

          <div class="space-y-3">
            <div class="flex items-start">
              <svg class="w-5 h-5 text-gray-400 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              <div>
                <p class="text-gray-900 font-medium">Dirección</p>
                <p class="text-gray-600">{{ $shop->address }}</p>
              </div>
            </div>

            @if($shop->formatted_phones)
              <div class="flex items-start">
                <svg class="w-5 h-5 text-gray-400 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <div>
                  <p class="text-gray-900 font-medium">Teléfono</p>
                  <p class="text-gray-600">{{ $shop->formatted_phones }}</p>
                </div>
              </div>
            @endif

            @if($shop->formatted_mobiles)
              <div class="flex items-start">
                <svg class="w-5 h-5 text-gray-400 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                </svg>
                <div>
                  <p class="text-gray-900 font-medium">Celular</p>
                  <p class="text-gray-600">{{ $shop->formatted_mobiles }}</p>
                </div>
              </div>
            @endif

            @if($shop->email)
              <div class="flex items-start">
                <svg class="w-5 h-5 text-gray-400 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <div>
                  <p class="text-gray-900 font-medium">Email</p>
                  <a href="mailto:{{ $shop->email }}" class="text-blue-600 hover:text-blue-800 transition-colors">{{ $shop->email }}</a>
                </div>
              </div>
            @endif

            @if($shop->operating_hours)
              <div class="flex items-start">
                <svg class="w-5 h-5 text-gray-400 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div>
                  <p class="text-gray-900 font-medium">Horarios</p>
                  <p class="text-gray-600">{{ $shop->operating_hours }}</p>
                  @if($shop->operating_days)
                    <p class="text-gray-500 text-sm">{{ $shop->operating_days }}</p>
                  @endif
                </div>
              </div>
            @endif

            @if($shop->description)
              <div class="border-t pt-3">
                <p class="text-gray-900 font-medium mb-2">Descripción</p>
                <p class="text-gray-600">{{ $shop->description }}</p>
              </div>
            @endif

            @if($shop->additional_details)
              <div class="border-t pt-3">
                <p class="text-gray-900 font-medium mb-2">Información Adicional</p>
                <div class="text-gray-600 prose prose-sm max-w-none">
                  {!! nl2br(e($shop->additional_details)) !!}
                </div>
              </div>
            @endif

            {{-- Social Media Links --}}
            @if($shop->has_social_media)
              <div class="border-t pt-3">
                <p class="text-gray-900 font-medium mb-3">Enlaces</p>
                <div class="flex space-x-3">
                  @if($shop->website)
                    <a href="{{ $shop->website }}" target="_blank" class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                      <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                      </svg>
                      Sitio Web
                    </a>
                  @endif

                  @if($shop->facebook)
                    <a href="https://facebook.com/{{ $shop->facebook }}" target="_blank" class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                      <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                      </svg>
                      Facebook
                    </a>
                  @endif

                  @if($shop->instagram)
                    <a href="https://instagram.com/{{ $shop->instagram }}" target="_blank" class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors">
                      <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.62 5.367 11.987 11.988 11.987 6.62 0 11.987-5.367 11.987-11.987C23.004 5.367 17.637.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.328-1.297C4.243 14.414 3.5 12.78 3.5 10.987S4.243 7.56 5.121 6.282c.88-.808 2.031-1.297 3.328-1.297 1.297 0 2.448.49 3.328 1.297.878 1.278 1.621 2.912 1.621 4.705s-.743 3.427-1.621 4.705c-.88.807-2.031 1.296-3.328 1.296z"/>
                      </svg>
                      Instagram
                    </a>
                  @endif
                </div>
              </div>
            @endif
          </div>
        </div>
      </div>

      {{-- Action Buttons --}}
      <div class="mt-5 sm:mt-6 sm:flex sm:flex-row-reverse">
        @if($shop->whatsapp)
          <a href="{{ $shop->whatsapp_link }}" target="_blank"
             class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 transition-colors sm:ml-3 sm:w-auto sm:text-sm">
            Contactar por WhatsApp
          </a>
        @endif
        <button onclick="closeShopModal('{{ $shop->id }}')"
                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 transition-colors sm:mt-0 sm:w-auto sm:text-sm">
          Cerrar
        </button>
      </div>
    </div>
  </div>
</div>

<script>
function openShopModal(shopId) {
  document.getElementById('shop-modal-' + shopId).classList.remove('hidden');
  document.body.style.overflow = 'hidden';
}

function closeShopModal(shopId) {
  document.getElementById('shop-modal-' + shopId).classList.add('hidden');
  document.body.style.overflow = 'auto';
}

// Close modal when pressing ESC
document.addEventListener('keydown', function(event) {
  if (event.key === 'Escape') {
    document.querySelectorAll('[id^="shop-modal-"]').forEach(modal => {
      modal.classList.add('hidden');
    });
    document.body.style.overflow = 'auto';
  }
});
</script>
