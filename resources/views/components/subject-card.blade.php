 <div class="mx-auto my-10 ">

    {{-- <livewire:subjectlist> --}}
    <nav class="">
    <ul class="">
    <li class="md:inline-block shadow-lg  md:shadow-none text-black"> Materias populares:</li>
      {{-- @foreach ($subjects as $item) --}}
          <li class="li-materia">
        <a class="a-materia " href="#">
          Matemáticas
        </a>
      </li>
       <li class="li-materia">
        <a class="a-materia " href="#">
          Programación
        </a>
      </li>
      <li class="li-materia">
        <a class="a-materia " href="#">
          Inglés
        </a>
      </li>
      <li class="li-materia">
        <a class="a-materia " href="#">
          Diseño
        </a>
      </li>
      <li class="li-materia">
        <a class="a-materia " href="#">
          Física
        </a>
      </li>
      <li class="li-materia">
        <a class="a-materia " href="#">
          Español
        </a>
      </li>
      <li class="li-materia">
        <a class="a-materia " href="#">
          Geografía
        </a>
      </li>
      {{-- @endforeach --}}
    </ul>
  </nav><br>
  <a href="{{route('materias')}}">
        <button class="bg-blue-900 cursor-pointer text-lg text-white font-bold p-2 rounded-md">Ir a materias populares </button>
    </a>
    </div>