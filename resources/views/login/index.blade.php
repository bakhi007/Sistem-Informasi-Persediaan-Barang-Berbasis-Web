<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
    <link rel="icon" href="{{url('/img/R.png')}}">
</head>
<body>
<div class="flex flex-col min-h-screen">
<section class="flex items-center justify-center flex-grow">
  <!-- login container -->
  <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center" style="max-height: 80vh;">
    <!-- form -->
    <div class="md:w-1/2 px-4 md:px-8">

      @if (session()->has('success'))
        <!-- Success -->
        <div class="mb-4 flex justify-between text-green-200 shadow-inner rounded p-3 bg-green-600">
          <p class="self-center">
            <strong>{{ session('success')}} </strong>
          </p>
          <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
        </div>
      @endif

      @if (session()->has('loginError'))
        <!-- loginError -->
        <div class="mb-4 flex justify-between text-red-200 shadow-inner rounded p-3 bg-red-600">
          <p class="self-center">
            <strong>{{ session('loginError')}} </strong>
          </p>
          <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
        </div>
      @endif

       
          
      <h2 class="font-bold text-2xl text-[#002D74]">Selamat Datang</h2>
       
      <p class="text-sm mt-4 text-[#002D74]">Silakan isi kolom di bawah untuk login</p>

      <form action="/login" method="post" class="mb-4 flex flex-col gap-4">
        @csrf

        <input class="p-2 mt-4 rounded-xl border @error('username') is-invalid @enderror" type="username" name="username" id="username" placeholder="Username" autocomplete="off" autofocus required value="{{ old('username')}}">
        @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input class="p-2  rounded-xl border" type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
        

        <button class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300">Login</button>
      </form>
      <small>Lupa password? <a href="/forgot_password" class="hover:underline text-blue-500">Klik disini</a></small>

    </div>

    <!-- image -->
    <div class="md:block hidden w-1/2">
      <img class="rounded-2xl" src="img/login.avif" style="max-height: 70vh;">
    </div>
  </div>
</section>
<x-footer></x-footer>
</div>
<script> // Script For Close alert

var alert_del = document.querySelectorAll('.alert-del');
alert_del.forEach((x) =>
  x.addEventListener('click', function () {
    x.parentElement.classList.add('hidden');
  })
);
</script>
</body>
</html>