<x-sidebar>
  <x-slot:title> {{ $title }} </x-slot:title>  
  
  <!-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
        <div
          class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64"
        ><img src="img/ahsan.png" alt=""></div>
        <div
    class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64 p-4 bg-white shadow-md hover:shadow-lg transition-shadow duration-300"
>
    <h2 class="text-xl font-bold mb-2">Produk Terlaris Hari Ini</h2>
    <p class="text-gray-700">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
    </p>
</div>

        <div
          class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
        ></div>
        <div
          class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
        ></div>
  </div> -->
  
     
      <div class="grid grid-cols-2 gap-4 mb-4">
      <a href="/dashboard/transaksi/sale">
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-auto p-4 bg-white shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col items-center">
        <h2 class="text-lg pl-2 md:text-xl lg:text-2xl font-bold mb-2 text-gray-800 shadow-md flex items-center w-full">
            <span class="mr-2">📈</span> <span>Produk Terlaris Hari Ini</span>
        </h2>

        <p class="text-base md:text-lg font-bold text-center text-gray-800 bg-blue-50 p-3 rounded-lg shadow-md w-full">
            {{ $topSale->product->name ?? 'Belum ada penjualan' }}
        </p>
        <div class="flex flex-col items-center justify-center mt-4">
            @if ($topSale && $topSale->total_stok > 0)
                <img src="{{ asset('img/cake.png') }}" alt="Produk Terlaris" class="w-1/3 h-auto mb-2 md:w-1/4">
            @else
                <img src="{{ asset('img/empty.webp') }}" alt="Tidak Ada Penjualan" class="w-1/3 h-auto mb-2 md:w-1/4">
            @endif

            <h2 class="text-lg md:text-xl font-bold text-gray-800">
                Jumlah Terjual: 
                <span class="{{ $topSale && $topSale->total_stok > 0 ? 'text-green-500' : 'text-red-500' }}">
                    {{ $topSale->total_stok ?? 0 }}
                </span>
            </h2>
        </div>
    </div>
</a>

<a href="/dashboard/stok">
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-auto p-4 bg-white shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col items-center">
        <h2 class="text-lg pl-2 md:text-xl lg:text-2xl font-bold mb-2 text-gray-800 shadow-md flex items-center w-full">
            <span class="mr-2">⚠️</span> <span>Peringatan Stok Rendah</span>
        </h2>

        <div class="flex flex-col items-center justify-center mt-4">
            @if ($isStokRendah)
                <img src="{{ asset('img/panic.avif') }}" alt="Stok Rendah" class="w-1/3 h-auto mb-2">
            @else
                <img src="{{ asset('img/aman.jpg') }}" alt="Stok Aman" class="w-1/3 h-auto mb-2">
            @endif
        </div>

        <div class="mt-4">
            @if ($isStokRendah)
                <p class="text-red-500 font-bold">
                    Sepertinya ada barang yang stoknya kurang. <span class="text-black">Cek disini</span>
                </p>
            @else
                <p class="text-green-500 font-bold">Stok Aman</p>
            @endif
        </div>
    </div>
</a>

      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
        <div
          class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64"
        ></div>
        <div
          class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
        ></div>
        <div
          class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
        ></div>
        <div
          class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"
        ></div>
      </div>
      <div
        class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"
      ></div>
      <div class="grid grid-cols-2 gap-4">
        <div
          class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
        ></div>
        <div
          class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
        ></div>
        <div
          class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
        ></div>
        <div
          class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"
        ></div>
      </div>
</x-sidebar>