    {{-- Formulario venta tutoria --}}
<div class="text-center  my-10">
    <div class=" w-3/5 pb-10 pt-5 my-10 bg-gray-50 border border-gray-300 mx-auto rounded-md ">
       <h2 class=" font-bold text-2xl mb-2 text-blue-900">Encuentra tu clase en cuatro pasos </h2>
        <form  class=" mx-auto w-3/5"action="">
    <input type="text" class="w-full rounded-md shadow-lg my-3 border border-blue-900" placeholder="1. Materia" /><br>
    <input type="text" class="w-full rounded-md shadow-lg my-3 border border-blue-900" placeholder="2. Oferte su tarifa" /><br>
            {{-- medio de pago --}}
    <div class=" md:flex justify-items-start shadow-lg mb-3 py-1 bg-white rounded-md w-full mx-auto border border-blue-900">
        <h1 class="m-3 text-gray-500 flex-1" >3. Medio de pago </h1>
       <label for="medio" class="text-gray-500 my-3 flex-1">Tarjeta
                <input  name="medio" type="radio" class="form-checkbox rounded-lg h-5 w-5 text-blue-900" >
        </label>
        <label for="medio" class="text-gray-500 my-3 flex-1">Efectivo
                <input name="medio" type="radio" class="form-checkbox rounded-lg h-5 w-5 text-blue-900" >
            </label>
    </div>
              {{-- sitio tutoria --}}
     <div class=" md:flex justify-items-start shadow-lg mb-3 py-1 bg-white rounded-md w-full mx-auto border border-blue-900">
        <h1 class="m-3 text-gray-500 flex-none ">4. Sitio para tutoria </h1>
       <label  for="sitio" class="text-gray-500 my-3 flex-1">Domicilio
                <input name="sitio" type="radio" class="form-checkbox rounded-lg h-5 w-5 text-blue-900" >
        </label>
        <label for="sitio" class="text-gray-500 my-3 flex-1">Online
                <input name="sitio" type="radio" class="form-checkbox rounded-lg h-5 w-5 text-blue-900" >
            </label>
    </div>
            <input class="bg-gray-500 cursor-pointer rounded-md p-1 text-white font-semibold text-lg" type="submit"  value="Borrar">
        <input class="bg-blue-900 cursor-pointer rounded-md p-1 text-white font-semibold text-lg" type="submit"  value="Enviar">
      </form>
    </div>
</div>
