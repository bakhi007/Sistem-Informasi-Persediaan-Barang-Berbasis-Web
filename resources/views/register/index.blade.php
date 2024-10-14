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
        <a href="/">
      <h2 class="font-bold text-2xl text-[#002D74]">Selamat Datang</h2>
        </a>
      <p class="text-sm mt-4 text-[#002D74]">Silakan isi kolom di bawah untuk registrasi</p>

      <form action="/register" method="post" class="flex flex-col gap-4">
        @csrf
        <input class="p-2 mt-4 rounded-xl border @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="Name" autocomplete="off" required value="{{ old('name')}}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input class="p-2  rounded-xl border @error('username') is-invalid @enderror" type="text" name="username" id="username" placeholder="Username" autocomplete="off" required value="{{ old('username')}}">
        @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <!-- <input class="p-2  rounded-xl border @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="Email" autocomplete="off" required value="{{ old('email')}}">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror -->

        <input class="p-2  rounded-xl border @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300">Register</button>
      </form>
      

    </div>

    <!-- image -->
    <div class="md:block hidden w-1/2">
      <img class="rounded-2xl" src="https://images.unsplash.com/photo-1501891037204-8754d498396b?q=80&w=1370&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
    </div>
  </div>
</section>
</body>
</html>