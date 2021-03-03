<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Echo Learning</title>
 <link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">
</head>
<body class="bg-gradient-to-tr from-green-300 to-indigo-300 ">
 <div class="  container w-4/5 mx-auto bg-white shadow-xl">
<header>
      <livewire:header>
<x-autenticacion/>
</header>
  <main class="py-5 ">
      @yield('lista')
      @yield('content')
  </main>
  <footer>
     <livewire:footer>
  </footer>
 </div>
</body>
</html>