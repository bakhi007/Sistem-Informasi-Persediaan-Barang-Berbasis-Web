<x-sidebar>
<x-slot:title> {{ $title }} </x-slot:title>
  <section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
  <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white pl-2 border-l-4 border-primary-700 dark:border-white">
    Edit Produk
</h2>

      <form action="/dashboard/stok/{{ $product->id }}" method="post">
        @method('put')
        @csrf
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
            <div class="w-full col-span-2">
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
                    value="{{ old('name', $product->name) }}" 
                    
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
                    value="{{ old('harga_beli', $product->harga_beli) }}" 
                    
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
                    value="{{ old('harga_jual', $product->harga_jual) }}" 
                    
                >
                @error('harga_jual')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
          
          </div>
          <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
              Ubah Produk
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
  // Function to change style based on the radio button checked
  function changeStyle(radio) {
    const labels = document.querySelectorAll('label');
    const spans = document.querySelectorAll('span');

    // Reset all labels and spans to default
    labels.forEach(label => {
      label.classList.remove('bg-black', 'border-black');
      label.classList.add('bg-white', 'border-gray-300');
      label.classList.remove('hover:bg-gray-100');  // Disable hover effect
    });
    spans.forEach(span => {
      span.classList.remove('text-white');
      span.classList.add('text-gray-900');
    });

    // Apply styles to the checked radio's label
    const checkedLabel = radio.closest('label');
    checkedLabel.classList.add('bg-black', 'border-black');
    const checkedSpan = checkedLabel.querySelector('span');
    checkedSpan.classList.add('text-white');
  }

  // Initialize the radio button state on page load
  document.addEventListener('DOMContentLoaded', function() {
    // Select all radio buttons with name 'kepemilikan'
    const radioButtons = document.querySelectorAll('input[name="kepemilikan"]');
    
    radioButtons.forEach(radio => {
      // Attach the style change function when radio button is clicked
      radio.addEventListener('change', function() {
        changeStyle(radio);  // Call the style function when radio button changes
      });

      // Apply style if the radio button is already checked on page load
      if (radio.checked) {
        changeStyle(radio);
      }
    });
  });
</script>

</x-sidebar>