<div class="min-h-screen flex flex-col bg-gray-50">
  <x-sidebar>
    <x-slot:title> {{ $title }} </x-slot:title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <section class="bg-white dark:bg-gray-900 flex-grow">
        <!-- div button -->
        <div class="flex justify-between items-start"> <!-- ubah items-center menjadi items-start -->
          <!-- div filter tanggal -->
          <div class="border border-gray-300 p-4 rounded-md shadow-md ml-4 mt-4"> <!-- tambahkan margin left dan margin top -->
              <div class="flex flex-col md:flex-row items-center space-x-0 md:space-x-4 space-y-4 md:space-y-0">
                  <div class="w-full md:w-1/2">
                      <label for="start_date" class="block text-sm font-medium text-gray-700">Mulai Tanggal</label>
                      <input type="date" id="start_date" name="start_date" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  </div>

                  <div class="w-full md:w-1/2">
                      <label for="end_date" class="block text-sm font-medium text-gray-700">Sampai Tanggal</label>
                      <input type="date" id="end_date" name="end_date" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  </div>
              </div>

              <div class="flex items-end space-x-2 mt-4">
                  <button onclick="filterData()" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      Filter
                  </button>

                  <a href="{{ url()->current() }}">
                      <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                          Reset
                      </button>
                  </a>
              </div>
          </div>
          <!-- end of div filter tanggal -->

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
              <button id="download-pdf" class="relative">
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
              <!-- end of tombol cetak pdf -->
          </div>
          <!-- end of tombol cetak -->
        </div>
        <!-- end of div button -->

          <!-- laporan -->
      <div class="p-8 mx-auto max-w-4xl lg:py-16" id="cetak-nota">
        <!-- Header laporan -->
        <div class="flex justify-center items-center space-x-4">
          <div class="text-center">
            <h2 class="mb-0 text-xl font-bold text-gray-900 dark:text-white">Laporan Barang Keluar</h2>
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
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3">No.</th>
                    <th scope="col" class="px-4 py-3">Nama Produk</th>
                    <th scope="col" class="px-4 py-3">Harga Jual</th>
                    <th scope="col" class="px-4 py-3">Jumlah Keluar</th>
                    <th scope="col" class="px-4 py-3">Tipe Keluar</th>
                    <th scope="col" class="px-4 py-3">Tanggal Keluar</th>
                </tr>
            </thead>
            <tbody>
               @php $counter = 1; @endphp
               @foreach ($athers as $ather)
                  <tr class="border-b dark:border-gray-700">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $counter }}</th>
                    <td class="px-4 py-3">{{ $ather->product->name }}</td>
                    <td class="px-4 py-3">Rp.{{ number_format($ather->harga_jual, 0, ',', '.') }}</td>
                    <td class="px-4 py-3">{{ $ather->stok_keluar }}</td>
                    <td class="px-4 py-3">{{ $ather->type->name }}</td>
                    <td class="px-4 py-3">{{ $ather->created_at->locale('id')->translatedFormat('j F Y') }}</td>
                  </tr>
               @php $counter++; @endphp
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
    
    </section>

    <!-- filter tanggal -->
    <script>
      function filterData() {
        const startDate = document.getElementById('start_date').value;
        const endDate = document.getElementById('end_date').value;

        if (startDate && endDate) {
          const url = new URL(window.location.href);
          url.searchParams.set('start_date', startDate);
          url.searchParams.set('end_date', new Date(endDate).toISOString().split('T')[0]);
          window.location.href = url;
        } else {
          alert('Harap pilih rentang tanggal yang valid!');
        }
      }
    </script>

    <script>
      let filteredAthers = @json($athers); // Menyimpan semua sale sebagai default
      function filterData() {
          const startDate = document.getElementById('start_date').value;
          const endDate = document.getElementById('end_date').value;

          // Ubah endDate menjadi akhir hari (23:59:59)
          const endDateAdjusted = new Date(new Date(endDate).setHours(23, 59, 59, 999));

          // Lakukan filter data
          filteredAthers = @json($athers).filter(ather => {
              const atherDate = new Date(ather.created_at);
              return atherDate >= new Date(startDate) && atherDate <= endDateAdjusted;
          });

          // Update tabel dengan data yang difilter
          updateTable(filteredAthers);
      }

      function updateTable(filteredAthers) {
          const tbody = document.querySelector("tbody");
          tbody.innerHTML = ""; // Kosongkan tabel sebelum diisi

          filteredAthers.forEach((ather, index) => {

              // Format tanggal ke dalam format "hari nama bulan tahun"
              const atherDate = new Date(ather.created_at);
              const formattedDate = new Intl.DateTimeFormat('id-ID', {
                  day: 'numeric',
                  month: 'long',
                  year: 'numeric'
              }).format(atherDate);

              const row = document.createElement("tr");
              row.className = "border-b dark:border-gray-700";
              row.innerHTML = `
                  <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      ${index + 1}
                  </th>
                  <td class="px-4 py-3">${ather.product.name}</td>
                  <td class="px-4 py-3">Rp.${ather.harga_jual}</td>
                  <td class="px-4 py-3">${ather.stok_keluar}</td>
                  <td class="px-4 py-3">${ather.type.name}</td>
                  <td class="px-4 py-3">${formattedDate}</td>
              `;
              tbody.appendChild(row);
          });
      }

      function exportToExcel() {
        // Buat array data untuk file Excel
        const data = [
            ["Laporan Barang Keluar"],
            ["Ahsan Bakery & Cake"],
            [`Tanggal: ${new Date().toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' })}`],
            [`{{ auth()->user()->username }}`],
            [],
            ["No.", "Nama Produk", "Harga Jual", "Qty Keluar", "Tipe Keluar", "Tanggal"]
        ];

        // Tambahkan data sale hasil filter
        filteredAthers.forEach((ather, index) => {
            data.push([
                index + 1, // Nomor urut
                ather.product.name,
                parseInt(ather.harga_jual),
                ather.stok_keluar,
                ather.type.name,
                new Date(ather.created_at).toLocaleDateString('id-ID'), // Tanggal sale
                
            ]);
        });

        // Buat workbook dan worksheet
        const worksheet = XLSX.utils.aoa_to_sheet(data);
        const workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, worksheet, "Laporan Barang Keluar");

        // Simpan file Excel
        XLSX.writeFile(workbook, "Laporan_Barang_Keluar.xlsx");
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

        // Tambahkan gambar ke PDF
        pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);

        // Unduh file PDF
        pdf.save('laporan_barang_keluar.pdf');
      });
    </script>

  </x-sidebar>
  <x-footer></x-footer>
</div>