<div class="min-h-screen flex flex-col bg-gray-50"> 
  <x-sidebar>
    <x-slot:title> {{ $title }} </x-slot:title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <section class="bg-white dark:bg-gray-900 flex-grow">

    <div class="flex justify-between items-center">
    <!-- Tombol Baru -->
    <a href="/dashboard/transaksi/sale"> 
  <button
    class="bg-blue-700 text-center w-36 rounded-md h-10 relative text-white text-sm font-bold group ml-10 mt-4"
    type="button"
  >
    <div
      class="bg-white rounded-md h-8 w-1/4 flex items-center justify-center absolute left-1 top-[4px] group-hover:w-[136px] z-10 duration-500">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="25px" width="25px">
        <path d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM215 127c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-71 71L392 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-214.1 0 71 71c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L103 273c-9.4-9.4-9.4-24.6 0-33.9L215 127z" fill="#000"/>
      </svg>
    </div>
    <p class="translate-x-2 text-white font-bold text-sm group-hover:text-blue-700">Kembali</p>
  </button>

  </a>

    <!-- Tombol Cetak Nota -->
    <button id="printNotaBtn" class="mr-10">
      <div class="ml-8 mt-4 overflow-x-visible relative w-14 h-14 overflow-y-clip group text-center">
        <div
          class="flex justify-center items-center w-14 h-14 transition-all duration-300 absolute top-0 group-hover:scale-[.60] group-hover:origin-top text-white">
          <img src="{{url('/img/pdf.webp')}}" class="mr-3 w-44" alt="Flowbite Logo"/>
        </div>
        <div
          class="absolute text-black font-bold -bottom-10 left-1/2 text-sm text-center text-black whitespace-nowrap transition-all duration-300 transform -translate-x-1/2 group-hover:bottom-0">
          Cetak Nota
        </div>
      </div>
    </button>
  </div>


      <!-- nota -->
      <div class="p-8 mx-auto max-w-2xl lg:py-16" id="cetak-nota">
        <div class="flex justify-center items-center space-x-0">
            <img src="{{ url('/img/ahsan.png') }}" alt="Flowbite Logo" class="w-32 pt-5"/>
            <div>
                <h2 class="mb-0 text-xl font-bold text-gray-900 dark:text-white">Ahsan Bakery & Cake</h2>
                <h3>Jl. Raya Sedayu, Bandar, Batang, Jawa Tengah</h3>
                <h3>51254</h3>
            </div>
        </div>
        <div class="flex justify-between items-center mt-6 mb-2">
          <h3 class="ml-4">{{ $nota->token }}</h3>
          <h3 class="font-normal text-gray-900 dark:text-white">
            {{ \Carbon\Carbon::parse($nota->created_at)->translatedFormat('l, j F Y') }}
          </h3>
        </div>

        <hr class="border-gray-900 dark:border-gray-300">

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3">Jumlah</th>
                    <th scope="col" class="px-4 py-3">Nama Produk</th>
                    <th scope="col" class="px-4 py-3">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)
                <tr class=" dark:border-gray-700">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $sale->stok_keluar }}</th>
                    <td class="px-4 py-3 text-base">{{ $sale->product->name }}</td> <!-- Pastikan relasi ada -->
                    <td class="px-4 py-3 text-base">Rp.{{ number_format($sale->harga_jual, 0, ',', '.') }}</td> <!-- Format harga jika perlu -->
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Akhir Tabel -->

        <div class="mt-8 space-y-4 border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800 w-full">
              <div class="space-y-2">
                <dl class="flex items-center justify-between gap-4">
                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Total Jumlah Harga</dt>
                    <dd id="total_jumlah_harga" class="text-base font-medium text-gray-900 dark:text-white">Rp.{{ number_format($nota->total_jumlah_harga, 0, ',', '.') }}</dd>
                </dl>

                
                <dl class="flex items-center justify-between gap-4">
                  <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Total Diskon</dt>
                  <dd id="total_diskon" class="text-base font-medium text-green-500">Rp.{{ number_format($nota->total_diskon, 0, ',', '.') }}</dd>
                </dl>


                <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2">
                    <dt class="text-base font-bold text-gray-900 dark:text-gray-400">Total Bayar</dt>
                    <dd id="total_bayar" class="text-base font-medium text-gray-900 dark:text-white">Rp.{{ number_format($nota->total_bayar, 0, ',', '.') }}</dd>
                </dl>

                <dl class="flex items-center justify-between gap-4 border-gray-200 pt-2">
                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Pembayaran</dt>
                    <dd id="total_bayar" class="text-base font-medium text-gray-900 dark:text-white">Rp.{{ number_format($nota->uang_terima, 0, ',', '.') }}</dd>
                </dl>

                

                <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                    <dt class="text-base font-bold text-gray-900 dark:text-white">Kembalian</dt>
                    <dd id="kembalian" class="text-base font-bold text-gray-900 dark:text-white">Rp.{{ number_format($nota->kembalian, 0, ',', '.') }}</dd>
                </dl>
              </div>
            </div>
            <hr class="border-gray-900 dark:border-gray-300">
            <h3 class="mt-6 font-normal text-gray-900 dark:text-white text-center">
            Terima Kasih Telah Berbelanja di Ahsan Bakery & Cake!
            </h3>
            <h3 class="mb-6 font-normal text-gray-900 dark:text-white text-center" style="font-family: 'Pacifico', cursive; font-size: 1.5rem;">
                Ahsan Rotinya, Ahsan Rasanya
            </h3>
            <h2 class="text-base text-center font-bold text-gray-900 dark:text-gray-400">Delivery Order </h2>
            <h2 class="text-base text-center font-bold text-gray-900 dark:text-gray-400">
              <i class="fa-brands fa-whatsapp text-xl"></i> 085799442322
            </h2>
      </div>
    </section>
    <script>
      document.getElementById("printNotaBtn").addEventListener("click", function () {
    const cetakNota = document.getElementById("cetak-nota");

    // Tingkatkan skala pada html2canvas untuk resolusi lebih tinggi
    html2canvas(cetakNota, { scale: 3 }).then(canvas => { // Ubah skala sesuai kebutuhan, misalnya 2 atau 3
      const imgData = canvas.toDataURL("image/png");

      // Inisialisasi PDF dengan jsPDF
      const pdf = new jspdf.jsPDF("p", "pt", "a4");

      // Hitung ukuran gambar sesuai dengan PDF dan skala tinggi/lebar
      const imgWidth = pdf.internal.pageSize.getWidth();
      const imgHeight = (canvas.height * imgWidth) / canvas.width;

      pdf.addImage(imgData, "PNG", 0, 0, imgWidth, imgHeight, '', 'FAST');
      pdf.save("nota.pdf");
    });
  });


    </script>
  </x-sidebar>
  <x-footer></x-footer>
</div>