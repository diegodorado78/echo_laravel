<div class=" text-blue-900 text-right md:space-x-2 px-5 my-2 ">
    @auth
    <a href="{{url('dashboard')}}" class="md:mx-2 inline-block text-gray-500 hover:text-blue-900   text-md  font-semibold duration-700">
      <i class="uil uil-user"></i>
        Perfil
    </a>
    @else
    <a href="{{url('login')}}" class=" md:mx-2 inline-block text-gray-500 hover:text-blue-900   text-md  font-semibold duration-700">
     Login
    </a>
    <a href="{{url('register')}}" class="inline-block text-gray-500 hover:text-blue-900 mx-auto text-md font-semibold duration-700 ">
     Registro
    </a>
    @endif
  </div>