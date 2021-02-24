<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
          <h1  class="font-bold text-2xl text-blue-900 text-center border-b"> Registro de usuario </h1>


          <div class="mt-4">
        <h1 id="user_type" class="block mt-1 w-4/5 mx-auto text-center text-gray-600 font-bold"> Elija un tipo de usuario </h1>
          <select class=" text-gray-500 block my-5 mx-auto w-4/5 border-blue-900 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="user_type" id="user_type">
          <option value="estudiante">Estudiante</option>
          <option value="tutor">Tutor</option>
           </select>
            </div>
            {{-- DATOS PERSONALES --}}
                    <h1 id="user_type" class="block my-2 w-4/5 mx-auto text-center text-gray-600 font-bold"> Datos personales </h1>
            <div>
                <x-jet-input id="name" class="block mt-1 mx-auto w-4/5" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nombre" />
            </div>
             <div>
                <x-jet-input id="a_paterno" class="block mt-1 mx-auto w-4/5" type="text" name="a_paterno" :value="old('a_paterno')" required autofocus autocomplete="a_paterno" placeholder="Primer Apellido" />
            </div>
            <div>
                <x-jet-input id="a_materno" class="block mt-1 mx-auto w-4/5" type="text" name="a_materno" :value="old('a_materno')" required autofocus autocomplete="a_materno" placeholder="Segundo Apellido" />
            </div>
            {{-- GENERO --}}
         <div class="mt-1">
        <h1 id="user_type" class="block mt-1 w-4/5 mx-auto r text-gray-500 font-bold"> Género </h1>
          <select class=" text-gray-500 block my-1 mx-auto w-4/5 border-blue-900 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" name="user_type" id="user_type">
          <option value="estudiante">Masculino</option>
          <option value="tutor">Femenino</option>
          <option value="tutor">No binario</option>
           </select>
            </div>
             <div>
                <x-jet-input id="telefono" class="block mt-1 mx-auto w-4/5" type="text" name="telefono" :value="old('telefono')" required autofocus autocomplete="telefono" placeholder="Teléfono" />
            </div>
             <div>
               <h1 class="block mt-1 w-4/5 mx-auto r text-gray-500 font-bold"> Fecha de Nacimiento</h1>
                <x-jet-input id="fecha_nacimiento" class="block mt-1 mx-auto w-4/5 text-gray-500" type="date" name="fecha_nacimiento" :value="old('fecha_nacimiento')" required autofocus autocomplete="fecha_nacimiento" placeholder="Fecha de Nacimiento" />
            </div>
            {{-- DATOS DE LOGEO --}}
               <h1  class="block my-2 w-4/5 mx-auto text-center text-gray-600 font-bold"> Datos de Ingreso </h1>
            <div class="mt-4">
                <x-jet-input id="email" class="block mt-1 mx-auto w-4/5" type="email" name="email" :value="old('email')" required  placeholder="Email"/>
            </div>

            <div class="mt-4">
                <x-jet-input id="password" class="block mt-1 mx-auto w-4/5" type="password" name="password" required autocomplete="new-password" placeholder="Contraseña"/>
            </div>

            <div class="mt-4">
                <x-jet-input id="password_confirmation" class="block mt-1 mx-auto w-4/5" type="password" name="password_confirmation" required autocomplete="new-password" placeholder=" Confirmar contraseña" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-blue-900" href="{{ route('login') }}">
                    {{ __('Ya registrado?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Registrar') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
