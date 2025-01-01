<x-sidebar>
    <x-slot:title> {{ $title }} </x-slot:title>
    <section class="bg-gray-50 dark:bg-gray-900">
    @if (session()->has('success'))
        <!-- Pesan Sukses -->
        <div class="mb-4 flex justify-between text-green-200 shadow-inner rounded p-3 bg-green-600">
          <p class="self-center">
            <strong>{{ session('success')}} </strong>
          </p>
          <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
        </div>
      @endif

      <div class="mx-auto max-w-screen-xl px-4 lg:px-28">
          <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
              <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <!-- search -->
                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-0 flex-shrink-0">
                    <form method="GET" action="{{ route('users.index') }}" class="flex items-center">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full flex">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="search" id="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" style="width: 300px;" placeholder="Cari barang disini..">
                            <button type="submit" class="mr-2 flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-r-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                Cari
                            </button>
                        </div>
                    </form>
                    <button type="button" onclick="window.location='{{ route('users.index') }}'" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
    Reset
</button>
                </div>
                <!-- end of search -->

                <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                  <!-- Tombol Input Pembelian -->
                  <a href="/dashboard/transaksi/users/create">
                      <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                          <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                              <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                          </svg>
                            Tambah Karyawan
                      </button>
                  </a>
                  <!-- Akhir Tombol Input Pembelian -->

                  <!-- Tombol Filter -->
                  <div class="flex items-center space-x-3 w-full md:w-auto">
                      <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                          </svg>
                              Filter
                          <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                              <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                          </svg>
                      </button>
                  </div>
                  <!-- Akhir Tombol Filter -->
                </div>
              </div>

              <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                      <tr>
                          <th scope="col" class="px-4 py-3">Nama</th>
                          <th scope="col" class="px-4 py-3">Role</th>
                          <th scope="col" class="px-4 py-3"><span class="sr-only">Actions</span></th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($users as $user)
                      <tr class="border-b dark:border-gray-700">
                          <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $user->username }}</th>
                          <td class="px-4 py-3">{{ $user->role }}</td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
          </div>

          <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow-lg dark:bg-gray-700 border border-gray-300 dark:border-gray-600">
    <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Urutkan berdasarkan</h6>
    <ul class="space-y-2 text-sm">
        <li>
            <span class="block px-2 py-1 font-bold text-gray-900 dark:text-gray-100">Rentang Waktu</span>
        </li>
        <li>
            <a href="?date_range=today" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('date_range') === 'today' ? 'bg-gray-200 dark:bg-gray-600' : '' }} 
                hover:bg-gray-200 dark:hover:bg-gray-600 transition duration-200 ease-in-out rounded-md">
                Hari Ini
                @if(request('date_range') === 'today') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
        <li>
            <a href="?date_range=7_days" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('date_range') === '7_days' ? 'bg-gray-200 dark:bg-gray-600' : '' }} 
                hover:bg-gray-200 dark:hover:bg-gray-600 transition duration-200 ease-in-out rounded-md">
                7 Hari Terakhir
                @if(request('date_range') === '7_days') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
        <li>
            <a href="?date_range=1_month" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('date_range') === '1_month' ? 'bg-gray-200 dark:bg-gray-600' : '' }} 
                hover:bg-gray-200 dark:hover:bg-gray-600 transition duration-200 ease-in-out rounded-md">
                1 Bulan Terakhir
                @if(request('date_range') === '1_month') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
        <li>
            <a href="?date_range=6_months" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('date_range') === '6_months' ? 'bg-gray-200 dark:bg-gray-600' : '' }} 
                hover:bg-gray-200 dark:hover:bg-gray-600 transition duration-200 ease-in-out rounded-md">
                6 Bulan Terakhir
                @if(request('date_range') === '6_months') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
        <li>
            <a href="?date_range=1_year" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('date_range') === '1_year' ? 'bg-gray-200 dark:bg-gray-600' : '' }} 
                hover:bg-gray-200 dark:hover:bg-gray-600 transition duration-200 ease-in-out rounded-md">
                1 Tahun Terakhir
                @if(request('date_range') === '1_year') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
    </ul>
</div>

          {{ $users->links() }}
      </div>
    </section>
     <!-- Untuk menutup pesan  -->
  <script>
    var alert_del = document.querySelectorAll('.alert-del');
    alert_del.forEach((x) =>
    x.addEventListener('click', function () {
        x.parentElement.classList.add('hidden');
    })
    );
  </script>
  </x-sidebar>