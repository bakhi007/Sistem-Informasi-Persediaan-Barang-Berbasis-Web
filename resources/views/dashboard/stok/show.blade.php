<div class="min-h-screen flex flex-col bg-gray-50"> 
 <x-sidebar>
    <x-slot:title> {{ $title }} </x-slot:title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <!-- DataTables Core -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Buttons -->
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

    <!-- PDFMake -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

    <section class="bg-white dark:bg-gray-900 flex-grow">
   
<!-- <div class="flex justify-between items-start">
<div>
    <label for="tanggalMulai">Tanggal Mulai:</label>
    <input type="date" id="tanggalMulai" class="border rounded" />

    <label for="tanggalAkhir">Tanggal Akhir:</label>
    <input type="date" id="tanggalAkhir" class="border rounded" />

    <button id="filterBtn" class="bg-blue-500 text-white px-4 py-2 rounded">Filter</button>
</div>

<button id="exportPDFButton" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">Export PDF</button>
<button id="exportExcelButton" class="px-4 py-2 bg-green-500 text-white rounded-lg shadow hover:bg-green-600">Export Excel</button>
</div> -->

<!-- Filter Tanggal New -->
<div class="flex justify-between items-start">
          <!-- div filter tanggal new -->
          <div class="border border-gray-300 p-4 rounded-md shadow-md ml-4 mt-4">
              <div class="flex flex-col md:flex-row items-center space-x-0 md:space-x-4 space-y-4 md:space-y-0">
                  <div class="w-full md:w-1/2">
                      <label for="tanggalMulai" class="block text-sm font-medium text-gray-700">Tanggal Mulai:</label>
                      <input type="date" id="tanggalMulai" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  </div>
                  <div class="w-full md:w-1/2">
                      <label for="tanggalAkhir" class="block text-sm font-medium text-gray-700">Tanggal Akhir:</label>
                      <input type="date" id="tanggalAkhir" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  </div>
              </div>
              <div class="flex items-end space-x-2 mt-4"> <!-- Pindahkan tombol di sini -->
                  <button id="filterBtn" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Filter</button>
                  <a href="{{ url()->current() }}">
                    <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                      Reset
                    </button>
                  </a>
              </div>
          </div>
          <!-- end of div filter tanggal new -->

          <div class="flex items-center space-x-4 mr-10 mt-4">
              <!-- tombol cetak pdf -->
              <button id="exportPDFButton" class="relative">
                <div class="relative w-14 h-14 overflow-y-clip group text-center">
                  <div class="flex justify-center items-center w-14 h-14 transition-all duration-300 absolute top-0 group-hover:scale-[.60] group-hover:origin-top text-white">
                    <img src="{{url('/img/pdf.webp')}}" class="mr-3 h-10" alt="PDF Logo" />
                  </div>
                  <div class="absolute text-black font-bold -bottom-10 left-1/2 text-sm text-center whitespace-nowrap transition-all duration-300 transform -translate-x-1/2 group-hover:bottom-0">
                    Cetak PDF
                  </div>
                </div>
              </button>

              <button id="exportExcelButton" class="relative">
                <div class="relative w-14 h-14 overflow-y-clip group text-center">
                  <div class="flex justify-center items-center w-14 h-14 transition-all duration-300 absolute top-0 group-hover:scale-[.60] group-hover:origin-top text-white">
                    <img src="{{url('/img/excel.png')}}" class="mr-3 h-10" alt="Excel Logo" />
                  </div>
                  <div class="absolute text-black font-bold -bottom-10 left-1/2 text-sm text-center whitespace-nowrap transition-all duration-300 transform -translate-x-1/2 group-hover:bottom-0">
                    Cetak Excel
                  </div>
                </div>
              </button>
            
          </div>
      </div>


      <!-- laporan -->
      <div class="p-8 mx-auto max-w-5xl lg:py-16" id="cetak-laporan">
        <!-- Header laporan -->
        <div class="flex justify-center items-center space-x-4">
          <div class="text-center">
            <h2 class="mb-0 text-xl font-bold text-gray-900 dark:text-white">Laporan Stok Barang</h2>
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
        <table id="laporan-stok-barang" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-4 py-3">No.</th>
              <th scope="col" class="px-4 py-3">Kode Produksi</th>
              <th scope="col" class="px-4 py-3">Nama Barang</th>
              <th scope="col" class="px-4 py-3">Tanggal Masuk</th>
              <th scope="col" class="px-4 py-3">Tanggal Kedaluwarsa</th>
              <th scope="col" class="px-4 py-3">Sisa Stok</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($productions as $production)
              <tr class="border-b dark:border-gray-700">
                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $loop->iteration }}
                </th>
                <td class="px-4 py-3">{{ ucwords(strtolower($production->kode_produksi)) }}</td>
                <td class="px-4 py-3">{{ ucwords(strtolower($production->product->name)) }}</td>
                <td class="px-4 py-3" data-created-at="{{ $production->created_at }}">
                    {{ \Carbon\Carbon::parse($production->created_at)->locale('id')->translatedFormat('j F Y') }}
                </td>
                <td class="px-4 py-3" data-created-at="{{ $production->tanggal_kedaluwarsa }}">
                    {{ \Carbon\Carbon::parse($production->tanggal_kedaluwarsa)->locale('id')->translatedFormat('j F Y') }}
                </td>
                <td class="px-4 py-3">{{ $production->stok_masuk }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <!-- Akhir Tabel -->
      </div>
      <!-- end of laporan -->

    </section>

    <script>
      function exportToExcel() {
        // Ambil data tabel dari view
        const products = @json($productions);
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
    const cetakNota = document.getElementById('cetak-laporan');

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

<!-- cetak pdf dengan dataTable -->
<script>
    $(document).ready(function () {
        // Deklarasikan variabel table di sini
        var table = $('#laporan-stok-barang').DataTable({
            pageLength: 5,
            language: {
                zeroRecords: "Tidak ada data yang ditemukan",
                info: "Menampilkan data _START_ sampai _END_ dari _TOTAL_ hasil",
                infoEmpty: "Menampilkan data 0 sampai 0 dari 0 hasil",
                infoFiltered: "(difilter dari _MAX_ total hasil)",
                search: "Cari:",
                paginate: {
                    first: "Pertama",
                    last: "Terakhir",
                    next: "Berikutnya",
                    previous: "Sebelumnya"
                }
            },
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'pdfHtml5',
                    text: '<span class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600">Export PDF</span>',
                    title: 'Laporan Stok Barang\nAhsan Bakery & Cake',
                    orientation: 'portrait',
                    pageSize: 'A4',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5]
                    },
                    customize: function (doc) {
                        const date = '{{ \Carbon\Carbon::now()->isoFormat("dddd, D MMMM YYYY") }}';
                        const username = '{{ auth()->user()->username }}';

                        doc.content.splice(1, 0, {
                            columns: [
                                {
                                    text: date,
                                    alignment: 'left',
                                    margin: [0, 5, 0, 5],
                                    fontSize: 10
                                },
                                {
                                    text: username,
                                    alignment: 'right',
                                    margin: [0, 5, 10, 0],
                                    fontSize: 10
                                }
                            ]
                        });

                        if (doc.content[5] && doc.content[5].table) {
                            doc.content[5].table.widths = ['10%', '18%', '18%', '18%', '18%', '18%'];
                            const tableBody = doc.content[5].table.body;

                            for (let i = 1; i < tableBody.length; i++) {
                                tableBody[i][0] = { text: i, alignment: 'center' };
                                if (i < tableBody.length) {
                                    tableBody[i][5] = { text: tableBody[i][5].text, alignment: 'center' };
                                }
                            }
                        }

                        // Tambahkan footer untuk tanggal dan tanda tangan manajer
                        doc.content.push({
                            columns: [
                                {
                                    text: 'Batang, {{ \Carbon\Carbon::now()->isoFormat("D MMMM YYYY") }}',
                                    alignment: 'right',
                                    margin: [0, 10, 0, 30],
                                    fontSize: 10
                                }
                            ]
                        });

                        doc.content.push({
                            columns: [
                                {
                                    text: 'Manager Ahsan Bakery & Cake',
                                    alignment: 'right',
                                    margin: [0, 20, 0, 0],
                                    fontSize: 10
                                }
                            ]
                        });
                    }
                },
                {
                    extend: 'excelHtml5',
                    text: 'Export Excel', // Teks tombol
                    title: 'Laporan Stok Barang\nAhsan Bakery & Cake',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5] // Kolom yang ingin diekspor
                    },
                },
            ]
        });

        // Filter data berdasarkan tanggal
        $('#filterBtn').on('click', function () {
    var minDate = $('#tanggalMulai').val();
    var maxDate = $('#tanggalAkhir').val();

    // Kosongkan filter sebelumnya
    $.fn.dataTable.ext.search = [];

    // Tambahkan filter baru
    $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
        // Mengambil tanggal dari kolom "Tanggal Masuk"
        var createdAt = new Date(data[3]); // data[3] adalah kolom Tanggal Masuk
        var min = minDate ? new Date(minDate) : null;
        var max = maxDate ? new Date(maxDate) : null;

        // Atur waktu untuk min dan max
        if (min) min.setHours(0, 0, 0, 0); // Set waktu start ke 00:00:00
        if (max) max.setHours(23, 59, 59, 999); // Set waktu end ke 23:59:59

        // Logika untuk memfilter
        if (
            (minDate === "" && maxDate === "") || // Tanpa filter
            (minDate === "" && createdAt <= max) || // Hanya max
            (min <= createdAt && maxDate === "") || // Hanya min
            (min <= createdAt && createdAt <= max) // Antara min dan max
        ) {
            return true;
        }
        return false;
    });

    // Redraw tabel untuk menerapkan filter
    table.draw();
});

        // Trigger tombol untuk ekspor PDF
        $('#exportPDFButton').on('click', function () {
            table.button(0).trigger();
        });

        $('.buttons-pdf').hide(); 

        // Trigger tombol untuk ekspor Excel
$('#exportExcelButton').on('click', function () {
    
    // Buat array untuk data Excel
    const rows = [];

    // Tambahkan header tambahan di atas tabel
    rows.push(['Laporan Stok Barang']);
    rows.push(['Ahsan Bakery & Cake']);
    rows.push(['']);
    rows.push([`Tanggal: ${new Date().toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' })}`]);
    rows.push([`{{ auth()->user()->username }}`]);
    rows.push(['']); // Baris kosong sebelum tabel

    // Ambil header tabel
    const header = ['No.', 'Kode Produksi', 'Nama Barang', 'Tanggal Masuk', 'Tanggal Kedaluwarsa', 'Sisa Stok'];
    rows.push(header);

    // Ambil data dari body tabel
    const filteredRows = table.rows({ filter: 'applied' }).data(); // Ambil data yang telah difilter
    filteredRows.each(function (data, index) {
        const kodeProduksi = data[1]; // Kode Produksi
        const namaBarang = data[2]; // namaBarang
        const tanggalMasuk = data[3]; // tanggalMasuk tanpa simbol dan format
        const tanggalKedaluwarsa = data[4]; // tanggalMasuk tanpa simbol dan format
        const sisaStok = data[5]; // tanggalMasuk tanpa simbol dan format

        // Tambahkan baris dengan nomor urut, Kode Produksi, namaBarang, dan tanggalMasuk sebagai integer
        rows.push([
            index + 1, // Nomor urut dimulai dari 1
            kodeProduksi,
            namaBarang,
            tanggalMasuk, // tanggalMasuk sebagai integer
            tanggalKedaluwarsa, // tanggalMasuk sebagai integer
            sisaStok, // tanggalMasuk sebagai integer
        ]);
    });

    // Buat worksheet dan workbook
    const worksheet = XLSX.utils.aoa_to_sheet(rows);
    const workbook = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(workbook, worksheet, 'Laporan Stok Barang');

    // Simpan file Excel
    XLSX.writeFile(workbook, 'Laporan_Stok_Barang.xlsx');
});

    });
</script>

  </x-sidebar>
  <x-footer></x-footer>
</div> 