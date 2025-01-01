<div class="min-h-screen flex flex-col bg-gray-50"> 
 <x-sidebar>
    <x-slot:title> {{ $title }} </x-slot:title>
      <section class="bg-white dark:bg-gray-900 flex-grow">
      <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
          <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white pl-2 border-l-4 border-primary-700 dark:border-white">Tambah Produk Baru</h2>
          <form action="/dashboard/stok" method="post">
            @csrf
              <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="w-full">
                    <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Produk</label>
                    <input 
                        type="text"
                        name="name" 
                        id="name" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                            @error('name') border-red-500 bg-red-50 @enderror
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-full"
                        autofocus
                        placeholder="Ketikkan nama produk disini"
                        required
                        value="{{ old('name') }}" 
                        
                    >
                    @error('name')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="harga_beli" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Beli</label>
                    <input 
                        type="number"
                        name="harga_beli" 
                        id="harga_beli" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                            @error('harga_beli') border-red-500 bg-red-50 @enderror
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-full"
                        
                        required
                        placeholder="Masukkan harga beli produk disini"
                        value="{{ old('harga_beli') }}" 
                        
                    >
                    @error('harga_beli')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="harga_jual" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Jual</label>
                    <input 
                        type="number"
                        name="harga_jual" 
                        id="harga_jual" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                            @error('harga_jual') border-red-500 bg-red-50 @enderror
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-full"
                        
                        required
                        placeholder="Masukkan harga jual produk disini"
                        value="{{ old('harga_jual') }}" 
                        
                    >
                    @error('harga_jual')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="sisa_stok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok Produk</label>
                    <input 
                        type="number"
                        name="sisa_stok" 
                        id="sisa_stok" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                            @error('sisa_stok') border-red-500 bg-red-50 @enderror
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-full"
                        
                        required
                        placeholder="Masukkan stok produk disini"
                        value="{{ old('sisa_stok') }}" 
                        
                    >
                    @error('sisa_stok')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            
                <div>
  <label for="kepemilikan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
    Kepemilikan
  </label>
  <div class="radio-input w-full max-w-sm p-4 border border-gray-300 rounded-lg shadow-md dark:border-gray-600 dark:bg-gray-800">
    <div class="flex flex-col gap-4">
      <!-- Radio Button 1 -->
      <label for="value-1" class="flex items-center justify-between p-3 border rounded-lg cursor-pointer transition bg-white dark:bg-gray-700">
        <div class="flex items-center gap-3">
          <input
            type="radio"
            id="value-1"
            name="kepemilikan"
            value="Ahsan Roti"
            class="radio-input hidden"
          />
          <span class="text-gray-900 dark:text-gray-300">Ahsan Roti</span>
        </div>
        <!-- Ikon centang, dimulai dalam kondisi hidden -->
        <i class="fas fa-check" style="display: none; color: white;"></i>
      </label>

      <!-- Radio Button 2 -->
      <label for="value-2" class="flex items-center justify-between p-3 border rounded-lg cursor-pointer transition bg-white dark:bg-gray-700">
        <div class="flex items-center gap-3">
          <input
            type="radio"
            id="value-2"
            name="kepemilikan"
            value="Titipan UMKM"
            class="radio-input hidden"
          />
          <span class="text-gray-900 dark:text-gray-300">Titipan UMKM</span>
        </div>
        <!-- Ikon centang, dimulai dalam kondisi hidden -->
        <i class="fas fa-check" style="display: none; color: white;"></i>
      </label>
    </div>
  </div>
</div>

                <div>
                    <label for="masa_berlaku" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masa Layak Konsumsi</label>
                    <input 
                        type="number"
                        name="masa_berlaku" 
                        id="masa_berlaku" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                            @error('masa_berlaku') border-red-500 bg-red-50 @enderror
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-full"
                        
                        required
                        placeholder="Masukkan masa layak konsumsi (hari)"
                        value="{{ old('masa_berlaku') }}" 
                    >
                    @error('masa_berlaku')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
              </div>
              <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                  Simpan
              </button>
          </form>
      </div>

      

    </section>
    <script>
        $(document).ready(function() {
            $('#product').select2({
                placeholder: "Pilih Produk",
                allowClear: true
            });

            $('#product').on('change', function() {
                const selectedOption = $(this).find('option:selected');
                const price = selectedOption.data('price');

                // Update input harga dan stok akhir
                $('#harga_beli').val(price ? price : '');
            });
        });
    </script>

  
<script>
  // Function to handle radio button selection
  function handleRadioSelection() {
    // Get all radio buttons
    const radioButtons = document.querySelectorAll('input[name="kepemilikan"]');
    
    // Loop through all radio buttons
    radioButtons.forEach(radio => {
      const label = radio.closest('label'); // Get the parent label
      const icon = label.querySelector('i'); // Get the icon inside the label
      const span = label.querySelector('span'); // Get the span for text color

      if (radio.checked) {
        // If the radio button is checked
        icon.style.display = 'inline-block'; // Show the icon
        label.classList.add('bg-blue-700'); // Change background to blue
        label.classList.remove('bg-white'); // Remove default background
        span.classList.remove('text-gray-900', 'dark:text-gray-300'); // Remove default text color
        span.classList.add('text-white'); // Change text color to white
      } else {
        // If the radio button is not checked
        icon.style.display = 'none'; // Hide the icon
        label.classList.remove('bg-blue-700'); // Remove selected styles
        label.classList.add('bg-white'); // Reapply default background
        span.classList.remove('text-white'); // Remove selected text color
        span.classList.add('text-gray-900', 'dark:text-gray-300'); // Reapply default text color
      }
    });
  }

  // Event listener for radio buttons
  document.addEventListener('DOMContentLoaded', function () {
    const radioButtons = document.querySelectorAll('input[name="kepemilikan"]');

    radioButtons.forEach(radio => {
      // Add event listener to each radio button
      radio.addEventListener('change', handleRadioSelection);

      // Initialize the state (for pre-selected radio buttons)
      if (radio.checked) {
        handleRadioSelection();
      }
    });
  });
</script>
  </x-sidebar>
  <x-footer></x-footer>
</div>