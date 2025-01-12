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
      <!-- div button -->
      <!-- <div class="flex justify-between items-start">
          
          <div class="border border-gray-300 p-4 rounded-md shadow-md ml-4 mt-4">
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
          <div class="flex items-center space-x-4 mr-10 mt-4">
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
          </div>
      </div> -->
      <!-- end of div button -->

      <!-- Filter Tanggal New -->
      <div class="flex justify-between items-start">
          <!-- div filter tanggal new -->
          <div class="border border-gray-300 p-4 rounded-md shadow-md ml-4 mt-4">
              <div class="flex flex-col md:flex-row items-center space-x-0 md:space-x-4 space-y-4 md:space-y-0">
                  <div class="w-full md:w-1/2">
                      <label for="startDate" class="block text-sm font-medium text-gray-700">Tanggal Mulai:</label>
                      <input type="date" id="startDate" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  </div>
                  <div class="w-full md:w-1/2">
                      <label for="endDate" class="block text-sm font-medium text-gray-700">Tanggal Akhir:</label>
                      <input type="date" id="endDate" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  </div>
              </div>
              <div class="flex items-end space-x-2 mt-4"> <!-- Pindahkan tombol di sini -->
                  <button id="filterButton" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Filter</button>
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

      <!-- nota -->
<div class="p-8 mx-auto max-w-4xl lg:py-16" id="cetak-nota">
  <!-- Header nota -->
  <div class="flex justify-center items-center space-x-4">
    <div class="text-center">
      <h2 class="mb-0 text-xl font-bold text-gray-900 dark:text-white">Laporan Penjualan</h2>
      <p class="text-sm text-gray-700 dark:text-gray-400">Ahsan Bakery & Cake</p>
    </div>
  </div>
  <div class="flex justify-between items-center">
    <h3 class="mt-2 font-normal text-gray-900 dark:text-white">
      {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM YYYY') }}
    </h3>
    <h3>{{ auth()->user()->username }}</h3>
  </div>
  <div class="mb-3 flex justify-between items-center">
    <h3 class="font-normal text-gray-900 dark:text-white" id="pendapatan">
      Pendapatan: +Rp{{ number_format($totalPendapatanBulanIni, 0, ',', '.') }}
    </h3>
  </div>
  <!-- Garis Pembatas -->
  <hr class="border-t-2 border-gray-900 dark:border-gray-300">
 

  <table id="notaTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
      <th scope="col" class="px-4 py-3">No.</th>
      <th scope="col" class="px-4 py-3">No. Nota</th>
      <th scope="col" class="px-4 py-3">Tanggal</th>
      <th scope="col" class="px-4 py-3">Pendapatan</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($notas as $index => $nota)
      <tr class="border-b dark:border-gray-700">
        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
          {{ $index + 1 }}
        </th>
        <td class="px-4 py-3">{{ $nota->token }}</td>
        <td class="px-4 py-3" data-created-at="{{ $nota->created_at }}">{{ $nota->created_at->locale('id')->translatedFormat('j F Y') }}</td>
        <td class="px-4 py-3">+Rp.{{ number_format($nota->total_bayar, 0, ',', '.') }}</td>
      </tr>
    @endforeach
</tbody>
</table>
  <!-- Akhir Tabel -->
 
</div>
<!-- akhir nota -->

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
        let filteredNotas = @json($notas); // Menyimpan semua nota sebagai default

        function filterData() {
        const startDate = document.getElementById('start_date').value;
        const endDate = document.getElementById('end_date').value;

        // Ubah endDate menjadi akhir hari (23:59:59)
        const endDateAdjusted = new Date(new Date(endDate).setHours(23, 59, 59, 999));

        // Lakukan filter data
        filteredNotas = @json($notas).filter(nota => {
            const notaDate = new Date(nota.created_at);
            return notaDate >= new Date(startDate) && notaDate <= endDateAdjusted;
        });

        // Update tabel dengan data yang difilter
        updateTable(filteredNotas);
    }


    function updateTable(filteredNotas) {
        const tbody = document.querySelector("tbody");
        tbody.innerHTML = ""; // Kosongkan tabel sebelum diisi

        let totalPendapatan = 0; // Untuk menghitung total pendapatan
        filteredNotas.forEach((nota, index) => {
            totalPendapatan += nota.total_bayar; // Tambahkan ke total pendapatan

            // Format tanggal ke dalam format "hari nama bulan tahun"
            const notaDate = new Date(nota.created_at);
            const formattedDate = new Intl.DateTimeFormat('id-ID', {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            }).format(notaDate);

            const row = document.createElement("tr");
            row.className = "border-b dark:border-gray-700";
            row.innerHTML = `
                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ${index + 1}
                </th>
                <td class="px-4 py-3">${nota.token}</td>
                <td class="px-4 py-3">${formattedDate}</td>
                <td class="px-4 py-3">+Rp ${nota.total_bayar.toLocaleString('id-ID')}</td>
            `;
            tbody.appendChild(row);
        });

        // Update total pendapatan di atas tabel
        document.getElementById('pendapatan').innerText = `Pendapatan: +Rp ${totalPendapatan.toLocaleString('id-ID')}`;
    }

        function exportToExcel() {
            // Buat array data untuk file Excel
            const data = [
                ["Laporan Penjualan"],
                ["Ahsan Bakery & Cake"],
                [`Tanggal: ${new Date().toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' })}`],
                [`{{ auth()->user()->username }}`],
                [`Pendapatan: Rp ${filteredNotas.reduce((sum, nota) => sum + nota.total_bayar, 0).toLocaleString('id-ID')}`],
                [],
                ["No.", "No. Nota", "Tanggal", "Pendapatan"]
            ];

            // Tambahkan data nota hasil filter
            filteredNotas.forEach((nota, index) => {
                data.push([
                    index + 1, // Nomor urut
                    nota.token, // Token nota
                    new Date(nota.created_at).toLocaleDateString('id-ID'), // Tanggal nota
                    parseInt(nota.total_bayar), // Pendapatan
                ]);
            });

            // Buat workbook dan worksheet
            const worksheet = XLSX.utils.aoa_to_sheet(data);
            const workbook = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(workbook, worksheet, "Laporan Penjualan");

            // Simpan file Excel
            XLSX.writeFile(workbook, "Laporan_Nota_Penjualan.xlsx");
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
        pdf.save('laporan_nota_penjualan.pdf');
      });
    </script>
    
    <script>
    $(document).ready(function () {
        // Inisialisasi DataTable
        const table = $('#notaTable').DataTable({
            // paging: false,          // Menyembunyikan pagination
            // searching: false,       // Menyembunyikan fitur pencarian
            // info: false,            // Menyembunyikan informasi jumlah data
            // ordering: false,        // Menonaktifkan fitur sorting pada kolom
            // lengthChange: false,     // Menyembunyikan dropdown jumlah data per halaman
            pageLength: 10,
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
              title: 'Laporan Penjualan\nAhsan Bakery & Cake',
              orientation: 'portrait',
              pageSize: 'A4',
              exportOptions: {
                  columns: [0, 1, 2, 3] // Kolom yang ingin diekspor
              },
              customize: function (doc) {
                  const date = '{{ \Carbon\Carbon::now()->isoFormat("dddd, D MMMM YYYY") }}';
                  const username = '{{ auth()->user()->username }}';

                  // Menghitung total pendapatan dari data tabel yang terlihat
                  let totalPendapatan = 0;
                  const filteredData = table.rows({ filter: 'applied' }).data();

                  filteredData.each(function (data) {
                      const totalBayar = parseInt(data[3].replace(/\D/g, '')); // Menghapus simbol non-numeric
                      totalPendapatan += totalBayar;
                  });

                  const pendapatan = 'Pendapatan: Rp ' + totalPendapatan.toLocaleString('id-ID');

                  // Tambahkan tanggal, nama pengguna, dan pendapatan ke header
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
                              margin: [0, 5, 10, 5],
                              fontSize: 10
                          }
                      ]
                  });

                  doc.content.splice(2, 0, {
                      text: pendapatan,
                      alignment: 'left',
                      margin: [10, 0, 0, 10],
                      fontSize: 10
                  });

                  // Atur lebar kolom tabel dan ratakan kolom "No." di tengah
                  if (doc.content[3] && doc.content[3].table) {
                      doc.content[3].table.widths = ['10%', '30%', '30%', '30%'];
                      const tableBody = doc.content[3].table.body;

                      // Menambahkan nomor urut mulai dari 1
                      for (let i = 1; i < tableBody.length; i++) {
                          tableBody[i][0] = { text: i, alignment: 'center' }; // Kolom No.
                          tableBody[i][1].alignment = 'center'; // Kolom No. Nota
                          tableBody[i][2].alignment = 'center'; // Kolom Tanggal
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
              },
              visible: false
          },
                {
                    extend: 'excelHtml5',
                    text: 'Export Excel', // Teks tombol
                    title: 'Laporan Penjualan\nAhsan Bakery & Cake',
                    exportOptions: {
                        columns: [0, 1, 2, 3] // Kolom yang ingin diekspor
                    },
                },
            ],
        });

        // Filter berdasarkan tanggal
        $('#filterButton').on('click', function () {
            const startDate = $('#startDate').val();
            const endDate = $('#endDate').val();

            // Reset filter
            $.fn.dataTable.ext.search.splice(0, $.fn.dataTable.ext.search.length);

            // Filter baru
            $.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
                const createdAtString = $(table.row(dataIndex).node())
                    .find('td[data-created-at]')
                    .data('created-at');
                if (!createdAtString) return true;

                const createdAt = new Date(createdAtString);
                const start = startDate ? new Date(startDate) : null;
                const end = endDate ? new Date(endDate) : null;

                if (start) start.setHours(0, 0, 0, 0);
                if (end) end.setHours(23, 59, 59, 999);

                return (!start && !end) || 
                      (!start && createdAt <= end) || 
                      (start && !end && createdAt >= start) || 
                      (start && end && createdAt >= start && createdAt <= end);
            });

            // Terapkan filter ke tabel
            table.draw();

            // Hitung ulang total pendapatan berdasarkan data yang terlihat
            let totalPendapatan = 0;
            table.rows({ filter: 'applied' }).every(function () {
                const data = this.data();
                const totalBayar = parseInt(data[3].replace(/\D/g, '')); // Kolom pendapatan
                totalPendapatan += totalBayar;
            });

            // Perbarui elemen pendapatan di halaman
            $('#pendapatan').text(
                'Pendapatan: +Rp' + totalPendapatan.toLocaleString('id-ID')
            );
        });

        // Trigger tombol untuk ekspor PDF
        $('#exportPDFButton').on('click', function () {
            table.button(0).trigger();
        });

        $('.buttons-pdf').hide(); // Sembunyikan tombol default

        // Trigger tombol untuk ekspor Excel
$('#exportExcelButton').on('click', function () {
    // Hitung total pendapatan dari data tabel
    let totalPendapatan = 0;
    table.rows({ filter: 'applied' }).every(function () {
        const data = this.data();
        const totalBayar = parseInt(data[3].replace(/\D/g, ''));
        totalPendapatan += totalBayar;
    });

    const pendapatanText = totalPendapatan; // Simpan total pendapatan sebagai integer

    // Buat array untuk data Excel
    const rows = [];

    // Tambahkan header tambahan di atas tabel
    rows.push(['Laporan Penjualan']);
    rows.push(['Ahsan Bakery & Cake']);
    rows.push(['']);
    rows.push([`Tanggal: ${new Date().toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' })}`]);
    rows.push([`{{ auth()->user()->username }}`]);
    rows.push([`Pendapatan: ${pendapatanText}`]); // Pendapatan sebagai integer
    rows.push(['']); // Baris kosong sebelum tabel

    // Ambil header tabel
    const header = ['No.', 'No. Nota', 'Tanggal', 'Pendapatan'];
    rows.push(header);

    // Ambil data dari body tabel
    const filteredRows = table.rows({ filter: 'applied' }).data(); // Ambil data yang telah difilter
    filteredRows.each(function (data, index) {
        const noNota = data[1]; // No. Nota
        const tanggal = data[2]; // Tanggal
        const pendapatan = parseInt(data[3].replace(/\D/g, '')); // Pendapatan tanpa simbol dan format

        // Tambahkan baris dengan nomor urut, No. Nota, Tanggal, dan Pendapatan sebagai integer
        rows.push([
            index + 1, // Nomor urut dimulai dari 1
            noNota,
            tanggal,
            pendapatan, // Pendapatan sebagai integer
        ]);
    });

    // Buat worksheet dan workbook
    const worksheet = XLSX.utils.aoa_to_sheet(rows);
    const workbook = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(workbook, worksheet, 'Laporan Nota');

    // Simpan file Excel
    XLSX.writeFile(workbook, 'Laporan_Nota_Penjualan.xlsx');
});
    });
</script>

  </x-sidebar>
  <x-footer></x-footer>
</div>