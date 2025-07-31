@props(['id', 'maxWidth' => '2xl'])

@php
  $maxWidth = [
      'sm' => 'sm:max-w-sm',
      'md' => 'sm:max-w-md',
      'lg' => 'sm:max-w-lg',
      'xl' => 'sm:max-w-xl',
      '2xl' => 'sm:max-w-2xl',
  ][$maxWidth];
@endphp

<!-- Modal Backdrop -->
<div id="{{ $id }}" class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50 hidden">
  <!-- Background overlay -->
  <div class="fixed inset-0 bg-gray-500 opacity-75" onclick="closeModal('{{ $id }}')"></div>

  <!-- Modal content -->
  <div
    class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto relative">
    {{ $slot }}
  </div>
</div>

<script>
  function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.classList.remove('hidden');
      document.body.classList.add('overflow-hidden');
    }
  }

  function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
      modal.classList.add('hidden');
      document.body.classList.remove('overflow-hidden');
    }
  }

  // Close modal on ESC key
  document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
      const visibleModals = document.querySelectorAll('[id$="-modal"]:not(.hidden)');
      visibleModals.forEach(modal => {
        modal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
      });
    }
  });
</script>
