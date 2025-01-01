<x-sidebar>
<x-slot:title> {{ $title }} </x-slot:title>
<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
    <div class="mx-auto max-w-screen-xl px-4 lg:px-0">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="flex flex-col md:flex-row items-center justify-end space-y-3 md:space-y-0 md:space-x-4 p-4">
  <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
    <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 mb-1 md:mb-0" onclick="redirect()">
      <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
      </svg>
      Input Penjualan
    </button>
    <a href="{{ url()->current() }}">
    <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 mb-1 md:mb-0">
      Reset
    </button>
    </a>
    <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
      <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
      </svg>
      Filter
      <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
      </svg>
    </button>
  </div>
</div>


            <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-4 py-3">No. Nota</th>
            <th scope="col" class="px-4 py-3">Total Jumlah Harga</th>
            <th scope="col" class="px-4 py-3">Total Diskon</th>
            <th scope="col" class="px-4 py-3">Total Bayar</th>
            <th scope="col" class="px-4 py-3">Uang Terima</th>
            <th scope="col" class="px-4 py-3">Kembalian</th>
            <th scope="col" class="px-4 py-3">Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notas as $nota)
        <tr class="border-b dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 cursor-pointer" onclick="window.location='http://127.0.0.1:8000/dashboard/report/sale?id={{$nota->token}}'">
            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $nota->token }}</th>
            <td class="px-4 py-3">Rp.{{ number_format($nota->total_jumlah_harga, 0, ',', '.') }}</td>
            <td class="px-4 py-3">Rp.{{ number_format($nota->total_diskon, 0, ',', '.') }}</td>
            <td class="px-4 py-3">Rp.{{ number_format($nota->total_bayar, 0, ',', '.') }}</td>
            <td class="px-4 py-3">Rp.{{ number_format($nota->uang_terima, 0, ',', '.') }}</td>
            <td class="px-4 py-3">Rp.{{ number_format($nota->kembalian, 0, ',', '.') }}</td>
            <td class="px-4 py-3">{{ $nota->created_at->locale('id')->translatedFormat('j M Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

            </div>
        </div>

      <!-- Filter Dropdown -->
<div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow-lg dark:bg-gray-700 border border-gray-300 dark:border-gray-600">
    <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Urutkan berdasarkan</h6>
    <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
        <li>
            <span class="block px-2 py-1 font-bold text-gray-900 dark:text-gray-100">Rentang Waktu</span>
        </li>
        <li>
            <a href="?range=today" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('range') === 'today' ? 'bg-gray-200 dark:bg-gray-600' : '' }} 
                hover:bg-gray-200 dark:hover:bg-gray-600 transition duration-200 ease-in-out rounded-md">
                Hari Ini
                @if(request('range') === 'today') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
        <li>
            <a href="?range=last_7_days" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('range') === 'last_7_days' ? 'bg-gray-200 dark:bg-gray-600' : '' }} 
                hover:bg-gray-200 dark:hover:bg-gray-600 transition duration-200 ease-in-out rounded-md">
                7 Hari Terakhir
                @if(request('range') === 'last_7_days') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
        <li>
            <a href="?range=last_30_days" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('range') === 'last_30_days' ? 'bg-gray-200 dark:bg-gray-600' : '' }} 
                hover:bg-gray-200 dark:hover:bg-gray-600 transition duration-200 ease-in-out rounded-md">
                1 Bulan Terakhir
                @if(request('range') === 'last_30_days') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
        <li>
            <a href="?range=last_6_months" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('range') === 'last_6_months' ? 'bg-gray-200 dark:bg-gray-600' : '' }} 
                hover:bg-gray-200 dark:hover:bg-gray-600 transition duration-200 ease-in-out rounded-md">
                6 Bulan Terakhir
                @if(request('range') === 'last_6_months') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
        <li>
            <a href="?range=last_1_year" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('range') === 'last_1_year' ? 'bg-gray-200 dark:bg-gray-600' : '' }} 
                hover:bg-gray-200 dark:hover:bg-gray-600 transition duration-200 ease-in-out rounded-md">
                1 Tahun Terakhir
                @if(request('range') === 'last_1_year') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
    </ul>
</div>
<!-- End of Filter -->

{{ $notas->links() }}



        
        
    </div>
    </section>
    <script>
    function generateRandomNumber(length) {
        let result = '';
        for (let i = 0; i < length; i++) {
            result += Math.floor(Math.random() * 10); // Menghasilkan angka acak antara 0-9
        }
        return result;
    }

    function generateTransactionId() {
        const firstPart = generateRandomNumber(8); // Menghasilkan 8 angka acak untuk bagian pertama
        const secondPart = generateRandomNumber(8); // Menghasilkan 8 angka acak untuk bagian kedua

        return `Nota-${firstPart}-${secondPart}`; // Menggabungkan kedua bagian
    }
    
    function redirect() {
        window.location.href = `http://127.0.0.1:8000/dashboard/transaksi/sale/create?id=${generateTransactionId()}`;
    }
</script>
    
</x-sidebar>