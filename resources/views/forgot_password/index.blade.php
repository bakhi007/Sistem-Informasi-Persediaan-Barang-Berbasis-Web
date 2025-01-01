<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lupa Password</title>
</head>
<body>
<div class="flex flex-col min-h-screen">
<section class="flex items-center justify-center flex-grow">
    <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
        <!-- Form -->
        <div class="md:w-1/2 px-4 md:px-8">
            <h2 class="font-bold text-2xl text-[#002D74]">Selamat Datang</h2>
            @if(session('error'))
                <div class="bg-red-500 text-white p-4 rounded mt-2 flex items-center justify-between">
                    <span>{{ session('error') }}</span>
                    <strong class="text-xl cursor-pointer alert-del ml-2">&times;</strong>
                </div>
            @endif
            
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded mt-2 flex items-center justify-between">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <strong class="text-xl cursor-pointer alert-del ml-2">&times;</strong>
                </div>
            @endif

            <p class="text-sm mt-4 text-[#002D74]">Isi kolom di bawah untuk ubah password</p>

            <form action="/forgot_password" method="post" class="flex flex-col gap-4">
                @csrf
                
                <input class="p-2 mt-4 rounded-xl border" type="text" name="username" id="username" placeholder="Username" autofocus autocomplete="off" required value="{{ old('username') }}">
                <input class="p-2 rounded-xl border" type="password" name="default_password" id="default_password" placeholder="Default Password" autocomplete="off" required>
                
                
                <input class="p-2 mb-2 rounded-xl border" type="password" name="new_password" id="new_password" placeholder="Password Baru" autocomplete="off" required oninput="checkPasswordLength()">
                
                <small id="password-indicator" class="text-sm text-gray-600" style="margin-top: -8px;"></small>
                
                <button type="submit" class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300">Ubah</button>
                @if (session('success'))
                <small>Password berhasil diubah! <a href="/login" class="hover:underline text-blue-500">Klik disini untuk Login</a></small>
                @endif
            </form>
        </div>
        <!-- Image -->
        <div class="md:block hidden w-1/2 flex justify-end">
            <img class="rounded-2xl ml-auto" src="img/changePassword.avif" style="max-height: 70vh;">
        </div>
    </div>
</section>

  <x-footer></x-footer>
  <script> // Script For Close alert

var alert_del = document.querySelectorAll('.alert-del');
alert_del.forEach((x) =>
  x.addEventListener('click', function () {
    x.parentElement.classList.add('hidden');
  })
);
</script>
  <script>
function checkPasswordLength() {
    const passwordInput = document.getElementById('new_password');
    const indicator = document.getElementById('password-indicator');
    
    if (passwordInput.value.length < 8) {
        indicator.textContent = "Password harus minimal 8 karakter.";
        indicator.classList.remove('text-green-500');
        indicator.classList.add('text-red-500');
    } else {
        indicator.textContent = "Password sudah memenuhi syarat.";
        indicator.classList.remove('text-red-500');
        indicator.classList.add('text-green-500');
    }
}
</script>
</div>
</body>
</html>