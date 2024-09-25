<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body>
<section class="bg-gray-50 min-h-screen flex items-center justify-center">
  <!-- login container -->
  <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
    <!-- form -->
    <div class="md:w-1/2 px-8 md:px-16">

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

        <a href="/">
          
      <h2 class="font-bold text-2xl text-[#002D74]">Selamat Datang</h2>
        </a>
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
      <!-- <small>Belum punya akun? <a href="/register" class="hover:underline text-blue-500">Registrasi sekarang</a></small> -->

    </div>

    <!-- image -->
    <div class="md:block hidden w-1/2">
      <img class="rounded-2xl" src="img/login.avif">
    </div>
  </div>
</section>
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