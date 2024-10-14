<x-sidebar>
<x-slot:title> {{ $title }} </x-slot:title> 
<!-- <a href="/home"><h1>Welcome, bro!</h1></a> -->
<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">

  <div class="mb-2 mx-auto max-w-screen-xl px-4 lg:px-12">
  @if (session()->has('success'))
      <!-- Success -->
      <div class="mb-4 flex justify-between text-green-200 shadow-inner rounded p-3 bg-green-600">
        <p class="self-center">
          <strong>{{ session('success')}} </strong>
        </p>
        <strong class="text-xl align-center cursor-pointer alert-del">&times;</strong>
      </div>
    @endif
      <!-- Start coding here -->
      <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
          <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">

              <!-- search -->
              <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-0 flex-shrink-0">
                  <form method="GET" action="{{ route('stok.index') }}" class="flex items-center">
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
                  <a href="/dashboard/transaksi/purchase">
                  <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                      <!-- <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                      </svg> -->
                      <svg class="h-3.5 w-3.5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 0a256 256 0 1 0 0 512A256 256 0 1 0 256 0zM127 297c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l71 71L232 120c0-13.3 10.7-24 24-24s24 10.7 24 24l0 214.1 71-71c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L273 409c-9.4 9.4-24.6 9.4-33.9 0L127 297z"/></svg>
                      Pembelian
                  </button>
                  </a>
                  <a href="/dashboard/transaksi/sale">
                  <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                  <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM385 215c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-71-71L280 392c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-214.1-71 71c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9L239 103c9.4-9.4 24.6-9.4 33.9 0L385 215z"/></svg>
                      Penjualan
                  </button>
                  </a>
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
            <th scope="col" class="px-4 py-3">Jenis Produk</th>
            <th scope="col" class="px-4 py-3">Harga Beli</th>
            <th scope="col" class="px-4 py-3">Harga Jual</th>
            <th scope="col" class="px-4 py-3">Sisa Stok</th>
            <th scope="col" class="px-4 py-3">Kepemilikan</th>
            <!-- <th scope="col" class="px-4 py-3">Masa Berlaku (Hari)</th> -->
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr class="border-b dark:border-gray-700 {{ $product->sisa_stok <= 3 ? 'bg-red-200 dark:bg-red-800' : '' }}">
            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->name }}</th>
            <td class="px-4 py-3">Rp.{{ number_format($product->harga_beli, 0, ',', '.') }}</td>
            <td class="px-4 py-3">Rp.{{ number_format($product->harga_jual, 0, ',', '.') }}</td>
            <td class="px-4 py-3">{{ $product->sisa_stok }}</td>
            <td class="px-4 py-3">{{ $product->kepemilikan }}</td>
            <!-- <td class="px-4 py-3">{{ $product->masa_berlaku }}</td> -->
        </tr>
        @endforeach
    </tbody>
</table>

        </div>
      </div>
      <!-- filter -->
      <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700 border border-gray-300 dark:border-gray-600">
    <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Urutkan berdasarkan</h6>
    <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
        <li>
            <span class="block px-2 py-1 font-bold text-gray-900 dark:text-gray-100">Harga Beli</span> <!-- Indikator tidak bisa diklik -->
        </li>
        <li>
            <a href="?sort=harga_beli_desc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('sort') === 'harga_beli_desc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
                Tertinggi
                @if(request('sort') === 'harga_beli_desc') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
        <li>
            <a href="?sort=harga_beli_asc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('sort') === 'harga_beli_asc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
                Terendah
                @if(request('sort') === 'harga_beli_asc') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
    </ul>

    <ul class="space-y-2 text-sm mt-4">
        <li>
            <span class="block px-2 py-1 font-bold text-gray-900 dark:text-gray-100">Harga Jual</span> <!-- Indikator tidak bisa diklik -->
        </li>
        <li>
            <a href="?sort=harga_jual_desc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('sort') === 'harga_jual_desc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
                Tertinggi
                @if(request('sort') === 'harga_jual_desc') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
        <li>
            <a href="?sort=harga_jual_asc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('sort') === 'harga_jual_asc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
                Terendah
                @if(request('sort') === 'harga_jual_asc') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
    </ul>

    <ul class="space-y-2 text-sm mt-4">
        <li>
            <span class="block px-2 py-1 font-bold text-gray-900 dark:text-gray-100">Stok</span> <!-- Indikator tidak bisa diklik -->
        </li>
        <li>
            <a href="?sort=sisa_stok_desc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('sort') === 'sisa_stok_desc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
                Terbanyak
                @if(request('sort') === 'sisa_stok_desc') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
        <li>
            <a href="?sort=sisa_stok_asc" class="block px-2 py-1 text-gray-900 dark:text-gray-100 
                {{ request('sort') === 'sisa_stok_asc' ? 'bg-gray-200 dark:bg-gray-600' : '' }}">
                Tersedikit
                @if(request('sort') === 'sisa_stok_asc') 
                    <span class="text-green-500">✔️</span>
                @endif
            </a>
        </li>
    </ul>
</div>
<!-- end of filter -->
      {{ $products->links() }}
  </div>
  
  </section>
  <script> // Script For Close alert

  var alert_del = document.querySelectorAll('.alert-del');
  alert_del.forEach((x) =>
  x.addEventListener('click', function () {
      x.parentElement.classList.add('hidden');
  })
  );
  </script>
  <script>
  document.addEventListener('DOMContentLoaded', function () {
      const checkboxes = document.querySelectorAll('input[name="categories[]"]');
      
      checkboxes.forEach(checkbox => {
          checkbox.addEventListener('change', function () {
              const selectedCategories = Array.from(checkboxes)
                  .filter(cb => cb.checked)
                  .map(cb => cb.value);
              
              fetchFilteredPosts(selectedCategories);
          });
      });

      function fetchFilteredPosts(categories) {
          fetch('/path-to-your-endpoint', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
              },
              body: JSON.stringify({ categories })
          })
          .then(response => response.json())
          .then(data => {
              updatePosts(data.posts);
          })
          .catch(error => console.error('Error:', error));
      }

      function updatePosts(posts) {
          const postsContainer = document.getElementById('posts-container');
          postsContainer.innerHTML = posts.map(post => `
              <tr class="border-b dark:border-gray-700">
                  <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">${post.title}</th>
                  <td class="px-4 py-3">
                      <span class="bg-${post.category.color}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-800 dark:text-primary-800">
                          ${post.category.name}
                      </span>
                  </td>
                  <!-- Tombol aksi di sini -->
              </tr>
          `).join('');
      }
  });
</script>

</x-sidebar>