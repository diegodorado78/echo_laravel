<div class="grid md:grid-cols-3 gap-4">
  {{-- primer columna que ocupa un espacio --}}
  <div class=" bg-gray-200 md:col-span-1 rounded-md py-4">
      <h1 class="font-medium text-sm text-gray-400 uppercase mb-4 text-center">Informacion basica </h1>
  <x-user-card />
  </div>
  {{-- segunda columna --}}
  <div class=" text-gray-500 md:col-span-2 text-center">
  {{-- hago uso de la var $course que llame desde el controller y se la pase a la vista course --}}
        <h1 class=" font-bold text-2xl mb-2 text-blue-900 text-center "> Estas son tus solicitudes pendientes </h1>
           {{-- SOLICITUDES -> crear componente--}}
           <section class="seccion2 my-20 text-center">
     <livewire:request-list>
     </section>

        </div>
     </div>