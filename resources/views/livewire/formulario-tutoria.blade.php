    {{-- Formulario venta tutoria --}}
<div class="text-center  my-10">
    <div class=" w-3/5 pb-10 pt-5 my-10 bg-gray-50 border border-gray-300 mx-auto rounded-md ">
       <h2 class=" font-bold text-2xl mb-2 text-blue-900">Encuentra tu clase en cuatro pasos </h2>
        <form  wire:submit="crear()" class=" mx-auto w-3/5">
    <input id="subject_name" wire:model="subject_name"type="text" class="w-full rounded-md shadow-lg my-3 border border-blue-900" placeholder="1. Materia" /><br>
    <input id="fare" wire:model="fare"type="number" class="w-full rounded-md shadow-lg my-3 border border-blue-900" placeholder="2. Oferte su tarifa" /><br>

    {{-- medio de pago --}}

    <div class=" text-left md:flex justify-items-start shadow-lg mb-3 py-1 bg-white rounded-md w-full mx-auto border border-blue-900">
        <h1 class="m-3 text-gray-500 flex-1" >3. Medio de pago </h1>
 <select wire:model="payment_method" name="payment_method" class="rounded-md w-2/5 mx-2 my-auto">
  <option value=""></option>
  <option value="tarjeta">Tarjeta</option>
  <option value="efectivo">Efectivo</option>
</select>
    </div>
              {{-- sitio tutoria --}}
     <div class="text-left md:flex justify-items-start shadow-lg mb-3 py-1 bg-white rounded-md w-full mx-auto border border-blue-900">
        <h1 class="m-3 text-gray-500 flex-1 ">4. Sitio para tutoria </h1>
      <select wire:model="site" name="site" class="rounded-md w-2/5 mx-2 my-auto">
  <option value=""></option>
  <option value="domicilio">Domilicio</option>
  <option value="online">Online</option>
</select>
    </div>
            <input class="bg-gray-500 cursor-pointer rounded-md p-1 text-white font-semibold text-lg" type="submit"  value="Borrar">
        <button class="bg-blue-900 hover:bg-blue-600 cursor-pointer rounded-md p-1 text-white font-semibold text-lg" type="submit"  >enviar</button>
      </form>
    </div>
</div>
