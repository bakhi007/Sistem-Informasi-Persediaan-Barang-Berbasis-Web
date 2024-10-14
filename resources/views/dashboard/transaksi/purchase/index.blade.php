<x-sidebar>
<x-slot:title> {{ $title }} </x-slot:title>
<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
    <div class="mx-auto max-w-screen-xl px-4 lg:px-0">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
              
               
                <!-- search -->
<div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-0 flex-shrink-0">
    <form method="GET" action="{{ route('purchase.index') }}" class="flex items-center">
        <label for="search" class="sr-only">Search</label>
        <div class="relative w-full flex">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
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
                    <a href="/dashboard/transaksi/purchase/create">
                    <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Input Pembelian
                    </button>
                    </a>
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
                </div>
            </div>
            <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-4 py-3">Jenis Produk</th>
            <th scope="col" class="px-4 py-3">Stok Masuk</th>
            <th scope="col" class="px-4 py-3">Harga</th>
            <th scope="col" class="px-4 py-3">Total Harga</th>
            <th scope="col" class="px-4 py-3">Tanggal Pembelian</th>
            <th scope="col" class="px-4 py-3">Tanggal Kedaluwarsa</th>
            <th scope="col" class="px-4 py-3">
                <span class="sr-only">Actions</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($purchases as $purchase)
        <tr class="border-b dark:border-gray-700">
            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $purchase->product->name }}</th>
            <td class="px-4 py-3">{{ $purchase->stok_masuk }}</td>
            <td class="px-4 py-3">Rp.{{ number_format($purchase->harga_beli, 0, ',', '.') }}</td>
            <td class="px-4 py-3">Rp.{{ number_format($purchase->jumlah_harga_beli, 0, ',', '.') }}</td>
            <td class="px-4 py-3">{{ \Carbon\Carbon::parse($purchase->tanggal_produksi)->locale('id')->translatedFormat('j F Y') }}</td>
            <td class="px-4 py-3">{{ \Carbon\Carbon::parse($purchase->tanggal_kedaluwarsa)->locale('id')->translatedFormat('j F Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>



            </div>
            
        </div>
 <!-- filter -->
 <div id="filterDropdown" class="z-10 hidden w-96 p-3 bg-white rounded-lg shadow dark:bg-gray-700 border border-gray-300 dark:border-gray-600 mt-2 absolute md:left-[-60px]">
    <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Urutkan berdasarkan</h6>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <span class="block font-bold text-gray-900 dark:text-gray-100">Stok Masuk</span>
            <ul class="space-y-2 text-sm">
                <li>
                    <a href="?sort=stok_masuk_desc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                        {{ request('sort') === 'stok_masuk_desc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
                        Tertinggi
                        @if(request('sort') === 'stok_masuk_desc') 
                            <span class="text-green-500">✔️</span>
                        @endif
                    </a>
                </li>
                <li>
                    <a href="?sort=stok_masuk_asc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                        {{ request('sort') === 'stok_masuk_asc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
                        Terendah
                        @if(request('sort') === 'stok_masuk_asc') 
                            <span class="text-green-500">✔️</span>
                        @endif
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <span class="block font-bold text-gray-900 dark:text-gray-100">Total Harga</span>
            <ul class="space-y-2 text-sm">
                <li>
                    <a href="?sort=jumlah_harga_beli_desc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                        {{ request('sort') === 'jumlah_harga_beli_desc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
                        Tertinggi
                        @if(request('sort') === 'jumlah_harga_beli_desc') 
                            <span class="text-green-500">✔️</span>
                        @endif
                    </a>
                </li>
                <li>
                    <a href="?sort=jumlah_harga_beli_asc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                        {{ request('sort') === 'jumlah_harga_beli_asc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
                        Terendah
                        @if(request('sort') === 'jumlah_harga_beli_asc') 
                            <span class="text-green-500">✔️</span>
                        @endif
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <span class="block font-bold text-gray-900 dark:text-gray-100">Tanggal Pembelian</span>
            <ul class="space-y-2 text-sm">
                <li>
                    <a href="?sort=tanggal_produksi_desc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                        {{ request('sort') === 'tanggal_produksi_desc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
                        Terbaru
                        @if(request('sort') === 'tanggal_produksi_desc') 
                            <span class="text-green-500">✔️</span>
                        @endif
                    </a>
                </li>
                <li>
                    <a href="?sort=tanggal_produksi_asc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                        {{ request('sort') === 'tanggal_produksi_asc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
                        Terlama
                        @if(request('sort') === 'tanggal_produksi_asc') 
                            <span class="text-green-500">✔️</span>
                        @endif
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <span class="block font-bold text-gray-900 dark:text-gray-100">Tanggal Kedaluwarsa</span>
            <ul class="space-y-2 text-sm">
                <li>
                    <a href="?sort=tanggal_kedaluwarsa_desc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                        {{ request('sort') === 'tanggal_kedaluwarsa_desc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
                        Masih Lama
                        @if(request('sort') === 'tanggal_kedaluwarsa_desc') 
                            <span class="text-green-500">✔️</span>
                        @endif
                    </a>
                </li>
                <li>
                    <a href="?sort=tanggal_kedaluwarsa_asc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                        {{ request('sort') === 'tanggal_kedaluwarsa_asc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
                        Bentar Lagi
                        @if(request('sort') === 'tanggal_kedaluwarsa_asc') 
                            <span class="text-green-500">✔️</span>
                        @endif
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end of filter -->





        {{ $purchases->links() }}
    </div>
    
    </section>
</x-sidebar>