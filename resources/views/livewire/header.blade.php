<div class="shadow-lg">
  <div class="bg-blue-900 py-1"></div>
  <nav class="bg-gradient-to-tr from-gray-700 to-gray-900 py-2">
   <a href="">
     <img src="{{asset('images/echo_logo.png')}}" class="h-20 mx-auto">
  </a>
  <div class=" text-blue-900 text-right md:space-x-2 px-5 ">
    @auth
    <a href="{{url('dashboard')}}" class=" text-sm">
     Dashboard
    </a>
    @else
    <a href="{{url('login')}}" class=" md:mx-2 inline-block text-gray-100 hover:text-gray-400   text-sm  font-medium duration-700">
     Login
    </a>
    <a href="{{url('register')}}" class="inline-block text-gray-100  hover:text-gray-400 mx-auto text-sm font-medium duration-700 ">
     Registro
    </a>
    @endif
  </div>
  </nav>
      <div class="bg-blue-900 py-1"></div>
</div>
