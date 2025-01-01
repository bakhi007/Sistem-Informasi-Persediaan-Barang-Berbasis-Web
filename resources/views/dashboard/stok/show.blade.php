<div class="min-h-screen flex flex-col bg-gray-50"> 
 <x-sidebar>
    <x-slot:title> {{ $title }} </x-slot:title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <section class="bg-white dark:bg-gray-900 flex-grow">
      <!-- div button -->
      <div class="flex justify-end items-center">
    <!-- <button onclick="exportToExcel()" class="mr-10">
        <div class="ml-10 mt-4 overflow-x-visible relative w-14 h-14 overflow-y-clip group text-center">
            <div
                class="flex justify-center items-center w-14 h-14 transition-all duration-300 absolute top-0 group-hover:scale-[.60] group-hover:origin-top text-white">
                <img src="{{ url('/img/excel.png') }}" class="mr-3 h-10 w-auto" alt="Flowbite Logo" />
            </div>
            <div
                class="absolute text-black font-bold -bottom-10 left-1/2 text-sm text-center text-black whitespace-nowrap transition-all duration-300 transform -translate-x-1/2 group-hover:bottom-0">
                Cetak Laporan
            </div>
        </div>
    </button> -->

        <!-- Tombol Cetak Excel dan PDF -->
        <div class="flex items-center space-x-4 mr-10 mt-4">
                  <!-- tombol cetak excel -->
                  <button onclick="exportToExcel()" class="relative">
                      <div class="relative w-14 h-14 overflow-y-clip group text-center">
                          <div
                              class="flex justify-center items-center w-14 h-14 transition-all duration-300 absolute top-0 group-hover:scale-[.60] group-hover:origin-top text-white">
                              <img src="{{url('/img/excel.png')}}" class="mr-3 h-10" alt="Excel Logo" />
                          </div>
                          <div
                              class="absolute text-black font-bold -bottom-10 left-1/2 text-sm text-center whitespace-nowrap transition-all duration-300 transform -translate-x-1/2 group-hover:bottom-0">
                              Cetak Excel
                          </div>
                      </div>
                  </button>
                  <!-- end of tombol cetak excel -->

                   <!-- tombol cetak pdf -->
                   <a href="/export-pdf">
                      <button class="relative">
                        <div class="relative w-14 h-14 overflow-y-clip group text-center">
                            <div
                                class="flex justify-center items-center w-14 h-14 transition-all duration-300 absolute top-0 group-hover:scale-[.60] group-hover:origin-top text-white">
                                <img src="{{url('/img/pdf.webp')}}" class="mr-3 h-10" alt="PDF Logo" />
                            </div>
                            <div
                                class="absolute text-black font-bold -bottom-10 left-1/2 text-sm text-center whitespace-nowrap transition-all duration-300 transform -translate-x-1/2 group-hover:bottom-0">
                                Cetak PDF
                            </div>
                        </div>
                      </button>
                    </a>
              <!-- <button id="download-pdf" class="relative">
                  <div class="relative w-14 h-14 overflow-y-clip group text-center">
                      <div
                          class="flex justify-center items-center w-14 h-14 transition-all duration-300 absolute top-0 group-hover:scale-[.60] group-hover:origin-top text-white">
                          <img src="{{url('/img/pdf.webp')}}" class="mr-3 h-10" alt="PDF Logo" />
                      </div>
                      <div
                          class="absolute text-black font-bold -bottom-10 left-1/2 text-sm text-center whitespace-nowrap transition-all duration-300 transform -translate-x-1/2 group-hover:bottom-0">
                          Cetak PDF
                      </div>
                  </div>
              </button> -->
              <!-- end of tombol cetak pdf -->
              </div>
              <!-- end of tombol cetak -->
</div>

      <!-- laporan -->
      <div class="p-8 mx-auto max-w-3xl lg:py-16" id="cetak-nota">
        <!-- Header laporan -->
        <div class="flex justify-center items-center space-x-4">
          <div class="text-center">
            <h2 class="mb-0 text-xl font-bold text-gray-900 dark:text-white">Laporan Stok Harian</h2>
            <p class="text-sm text-gray-700 dark:text-gray-400">Ahsan Bakery & Cake</p>
          </div>
        </div>
        <div class="mb-3 flex justify-between items-center">
          <h3 class="mt-2 font-normal text-gray-900 dark:text-white">
            {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM YYYY') }}
          </h3>
          <h3>{{ auth()->user()->username }}</h3>
        </div>

        <!-- Garis Pembatas -->
        <hr class="border-t-2 border-gray-900 dark:border-gray-300">

        <!-- Tabel Produk -->
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-4 py-3">No.</th>
              <th scope="col" class="px-4 py-3">Nama Produk</th>
              <th scope="col" class="px-4 py-3">Harga Beli</th>
              <th scope="col" class="px-4 py-3">Harga Jual</th>
              <th scope="col" class="px-4 py-3">Sisa Stok</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
              <tr class="border-b dark:border-gray-700">
                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $loop->iteration }}
                </th>
                <td class="px-4 py-3">{{ ucwords(strtolower($product->name)) }}</td>
                <td class="px-4 py-3">Rp.{{ number_format($product->harga_beli, 0, ',', '.') }}</td>
                <td class="px-4 py-3">Rp.{{ number_format($product->harga_jual, 0, ',', '.') }}</td>
                <td class="px-4 py-3">{{ $product->sisa_stok }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <!-- Akhir Tabel -->

        <div>
          <h3 class="mt-6 mr-3 font-normal text-gray-900 dark:text-white text-right">
            Batang, {{ \Carbon\Carbon::now()->isoFormat('D MMMM YYYY') }}
          </h3>
          <h3 class="mt-20 font-normal text-gray-900 dark:text-white text-right">
            Manager Ahsan Bakery & Cake
          </h3>
        </div>
      </div>
      <!-- end of laporan -->

    </section>

    <script>
      function exportToExcel() {
        // Ambil data tabel dari view
        const products = @json($products);
        const kasir = "{{ auth()->user()->username }}";

        // Buat array data untuk file Excel
        const data = [
          ["Laporan Stok Harian"],
          ["Ahsan Bakery & Cake"],
          [`Tanggal: ${new Date().toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' })}`],
          [`${kasir}`],
          [], // Baris kosong
          ["No.", "Nama Produk", "Harga Beli", "Harga Jual", "Sisa Stok"]
        ];

        // Tambahkan data produk ke array data
        products.forEach((product, index) => {
          data.push([
            index + 1, // Nomor urut
            product.name,
            parseInt(product.harga_beli),
            parseInt(product.harga_jual),
            product.sisa_stok,
          ]);
        });

        // Buat workbook dan worksheet
        const worksheet = XLSX.utils.aoa_to_sheet(data);
        const workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, worksheet, "Laporan Stok Harian");

        // Simpan file Excel
        XLSX.writeFile(workbook, "Laporan_Stok_Harian.xlsx");
      }
    </script>

    <!-- cetak pdf -->
    <script>
  document.getElementById('download-pdf').addEventListener('click', async () => {
    const { jsPDF } = window.jspdf;

    // Ambil elemen HTML yang akan dicetak
    const cetakNota = document.getElementById('cetak-nota');

    // Ubah elemen HTML ke canvas menggunakan html2canvas
    const canvas = await html2canvas(cetakNota, {
      scale: 2, // Perbesar resolusi canvas
      useCORS: true, // Menghindari masalah CORS jika ada
    });

    const imgData = canvas.toDataURL('image/png'); // Konversi canvas ke format gambar
    const pdf = new jsPDF('p', 'mm', 'a4'); // Buat dokumen PDF ukuran A4

    // Hitung ukuran elemen agar pas di halaman PDF
    const pdfWidth = pdf.internal.pageSize.getWidth();
    const pdfHeight = (canvas.height * pdfWidth) / canvas.width;

    // Hitung tinggi gambar untuk halaman pertama dan kedua
    const halfPdfHeight = pdfHeight / 2;

    // Tambahkan gambar untuk halaman pertama (setengah atas)
    pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, halfPdfHeight);

    // Tambahkan halaman kedua
    pdf.addPage();

    // Tambahkan gambar untuk halaman kedua (setengah bawah)
    pdf.addImage(imgData, 'PNG', 0, -halfPdfHeight, pdfWidth, halfPdfHeight);

    // Unduh file PDF
    pdf.save('laporan_stok_harian.pdf');
  });
</script>


  </x-sidebar>
  <x-footer></x-footer>
</div> 