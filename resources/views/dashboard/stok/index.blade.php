<x-sidebar>
  <style>
    ul {
      list-style: none;
    }
    .example-2 {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .example-2 .icon-content {
      margin: 0 10px;
      position: relative;
    }
    .example-2 .icon-content .tooltip {
      position: absolute;
      top: -30px;
      left: 50%;
      width: auto;
      transform: translateX(-50%);
      color: #000;
      padding: 6px 10px;
      border-radius: 5px;
      z-index: 10;
      opacity: 0;
      visibility: hidden;
      font-size: 0.875rem;
      font-weight: 500;
      font-family: 'Inter', sans-serif;
      white-space: nowrap;
      text-align: center;
      transition: all 0.3s ease;
    }
    .example-2:hover .edit-svgIcon {
      width: 20px;
      transition-duration: 0.7s;
      transform: translateY(60%);
      -webkit-transform: rotate(360deg);
      -moz-transform: rotate(360deg);
      -o-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
      transform: rotate(360deg);
    }
    .example-2 .icon-content:hover .tooltip {
      opacity: 1;
      visibility: visible;
      top: -40px;
    }
    .example-2 .icon-content a {
      position: relative;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 40px;
      height:40px;
      border-radius: 50%;
      color: #4d4d4d;
      background-color: #ccd5ae;
      transition: all 0.3s ease-in-out;
      z-index: 1;
    }
    .example-2 .icon-content a:hover {
      box-shadow: 3px 2px 45px 0px rgb(0 0 0 / 12%);
    }
    .example-2 .icon-content a svg {
      position: relative;
      z-index: 1;
      width: 20px;
      height: 20px;
    }
    .example-2 .icon-content a:hover {
      color: white;
    }
    .example-2 .icon-content a .filled {
      position: absolute;
      top: auto;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 0;
      background-color: #000;
      transition: all 0.3s ease-in-out;
    }
    .example-2 .icon-content a:hover .filled {
      height: 100%;
    }

    .example-2 .icon-content a[data-social="telegram"] .filled,
    .example-2 .icon-content a[data-social="telegram"] ~ .tooltip {
      background-color: yellow;
    }
  </style>
  <x-slot:title> {{ $title }} </x-slot:title> 
  <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
    <div class="mb-2 mx-auto max-w-screen-xl px-4 lg:px-0">
      <!-- Pesan Notifikasi Sukses -->
      @if (session()->has('success'))
        <!-- Success -->
        <div class="mb-4 flex justify-between text-green-200 shadow-inner rounded p-3 bg-green-600">
          <p class="self-center">
            <strong>{{ session('success')}} </strong>
          </p>
          <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
        </div>
      @endif
        
      <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
          <!-- search -->
          <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-0 flex-shrink-0">
            <form method="GET" action="{{ route('stok.index') }}" class="flex items-center">
              <label for="search" class="sr-only">Search</label>
              <div class="relative w-full flex">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <input type="search" id="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" style="width: 300px;" placeholder="Cari barang disini..">
                <button type="submit" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-r-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                  Cari
                </button>
              </div>
            </form>
          </div>
          <!-- end of search -->

          <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">

            <!-- tombol add produk -->
            @can('is-admin')
            <a href="/dashboard/stok/create">
              <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                </svg>
                Tambah Produk Baru
              </button>
            </a>
            @endcan
            
            <!-- tombol ke laporan harian -->
            <a href="/dashboard/stok/show">
              <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                <i class="fa-solid fa-file-export mr-2"></i>
                Laporan Harian
              </button>
            </a>
            
            <!-- tombol filter -->
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
        </div>

        <div class="overflow-x-auto">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3">Kode Produk</th>
                    <th scope="col" class="px-4 py-3">Jenis Produk</th>
                    <th scope="col" class="px-4 py-3">Harga Beli</th>
                    <th scope="col" class="px-4 py-3">Harga Jual</th>
                    <th scope="col" class="px-4 py-3">Sisa Stok</th>
                    <th scope="col" class="px-4 py-3">Masa Layak Konsumsi</th>
                    <th scope="col" class="px-4 py-3">Kepemilikan</th>
                    @can('is-admin')
                    <th scope="col" class="px-4 py-3">Action</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="border-b dark:border-gray-700 {{ $product->sisa_stok <= 3 ? 'bg-red-200 dark:bg-red-800' : '' }}">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->kode_barang }}</th>
                    <td class="px-4 py-3">{{ ucwords($product->name) }}</td>
                    <td class="px-4 py-3">Rp.{{ number_format($product->harga_beli, 0, ',', '.') }}</td>
                    <td class="px-4 py-3">Rp.{{ number_format($product->harga_jual, 0, ',', '.') }}</td>
                    <td class="px-4 py-3">
                        @if ($product->sisa_stok === 0)
                            <img src="{{ asset('img/kosong.png') }}" alt="Kosong" class="w-20 h-auto">
                        @else
                            {{ $product->sisa_stok }}
                        @endif
                    </td>
                    <td class="px-4 py-3">{{ $product->masa_berlaku }} Hari</td>
                    <td class="px-4 py-3">{{ $product->kepemilikan }}</td>
                    <td class="px-4 py-3">
                      @can('is-admin')
                      <ul class="example-2">
                        <li class="icon-content">
                          <a data-social="telegram" aria-label="Telegram" href="/dashboard/stok/{{ $product->id }}/edit">
                            <div class="filled"></div>
                            <svg class="edit-svgIcon" viewBox="0 0 512 512">
                              <path
                                d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"
                              ></path>
                            </svg>
                          </a>
                          <div class="tooltip">Edit Produk</div>
                        </li>
                      </ul>
                      @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
        
      <!-- isian filter -->
      <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700 border border-gray-300 dark:border-gray-600">
        <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Urutkan berdasarkan</h6>
        <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
          <li>
            <a href="{{ url('/dashboard/stok') }}" class="block px-2 py-1 font-bold text-gray-900 dark:text-gray-100">
              Reset Filter
            </a>
          </li>
          <li>
            <span class="block px-2 py-1 font-bold text-gray-900 dark:text-gray-100">Harga Beli</span> 
          </li>
          <li>
            <a href="?sort=harga_beli_desc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 {{ request('sort') === 'harga_beli_desc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
              Tertinggi
              @if(request('sort') === 'harga_beli_desc') 
                <span class="text-green-500">✔️</span>
              @endif
            </a>
          </li>
          <li>
            <a href="?sort=harga_beli_asc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 {{ request('sort') === 'harga_beli_asc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
              Terendah
              @if(request('sort') === 'harga_beli_asc') 
                <span class="text-green-500">✔️</span>
              @endif
            </a>
          </li>
        </ul>

        <ul class="space-y-2 text-sm mt-4">
          <li>
            <span class="block px-2 py-1 font-bold text-gray-900 dark:text-gray-100">Harga Jual</span>
          </li>
          <li>
            <a href="?sort=harga_jual_desc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 {{ request('sort') === 'harga_jual_desc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
              Tertinggi
              @if(request('sort') === 'harga_jual_desc') 
                <span class="text-green-500">✔️</span>
              @endif
            </a>
          </li>
          <li>
            <a href="?sort=harga_jual_asc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 {{ request('sort') === 'harga_jual_asc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
              Terendah
              @if(request('sort') === 'harga_jual_asc') 
                <span class="text-green-500">✔️</span>
              @endif
            </a>
          </li>
        </ul>

        <ul class="space-y-2 text-sm mt-4">
          <li>
            <span class="block px-2 py-1 font-bold text-gray-900 dark:text-gray-100">Stok</span> 
          </li>
          <li>
            <a href="?sort=sisa_stok_desc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 {{ request('sort') === 'sisa_stok_desc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
              Terbanyak
              @if(request('sort') === 'sisa_stok_desc') 
                <span class="text-green-500">✔️</span>
              @endif
            </a>
          </li>
          <li>
            <a href="?sort=sisa_stok_asc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 {{ request('sort') === 'sisa_stok_asc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
              Tersedikit
              @if(request('sort') === 'sisa_stok_asc') 
                <span class="text-green-500">✔️</span>
              @endif
            </a>
          </li>
        </ul>
      </div>
      <!-- end of filter -->
      
      <!-- Pagination -->
      {{ $products->links() }}
    </div>
  </section>
  
  <!-- Script For Close alert -->
  <script> 
    var alert_del = document.querySelectorAll('.alert-del');
    alert_del.forEach((x) =>
    x.addEventListener('click', function () {
        x.parentElement.classList.add('hidden');
    })
    );
  </script>
</x-sidebar>