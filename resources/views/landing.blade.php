<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Ahsan Bakery & Cake</title>
    <link rel="icon" href="{{url('/img/R.png')}}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="flex flex-col min-h-screen">
      <section class="flex items-center justify-center flex-grow">
        <div class="text-center">
          <!-- Slogan Ahsan Bakery & Cake -->
          <p class="max-w-2xl mb-2 font-light text-gray-700 lg:mb-0 dark:text-gray-300" 
            style="font-family: 'Pacifico', cursive; font-size: 1.5rem;">
            Ahsan Rotinya, Ahsan Rasanya
          </p>
          <!-- Logo Ahsan Bakery & Cake -->
          <img src="img/bb.png" alt="" width="400" class="mb-2"> 
          <!-- Tombol menuju halaman login -->
          <a href="/login">
            <button class="group/button relative inline-flex items-center justify-center overflow-hidden rounded-md bg-primary-700 backdrop-blur-lg px-6 py-1 text-base font-semibold text-white transition-all duration-300 ease-in-out hover:scale-110 hover:shadow-xl hover:shadow-blue-600/50 border border-white/20">
              <span class="text-lg">Mulai</span>
              <div class="absolute inset-0 flex h-full w-full justify-center [transform:skew(-13deg)_translateX(-100%)] group-hover/button:duration-1000 group-hover/button:[transform:skew(-13deg)_translateX(100%)]">
                <div class="relative h-full w-10 bg-white/30"></div>
              </div>
            </button>
          </a>
        </div>
      </section>
      <x-footer></x-footer>
    </div>
  </body>
</html>