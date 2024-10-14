<x-sidebar>
<x-slot:title> {{ $title }} </x-slot:title>
  <section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Input Transaki Keluar</h2>
      <form action="/dashboard/transaksi/ather" method="post">
        @csrf
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
          <div class="w-full">
    <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Produk</label>
    <select id="product" name="product_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
        @error('product_id') border-red-500 bg-red-50 @enderror
        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-full"
        onchange="updateMaxStock()">
        
        <option value="" disabled selected>Pilih Produk</option>
        @foreach ($products as $product)
            <option value="{{ $product->id }}" data-sisa-stok="{{ $product->sisa_stok }}" 
                data-masa-berlaku="{{ $product->masa_berlaku }}" 
                data-price="{{ $product->harga_jual }}" 
                {{ old('product_id') == $product->id ? 'selected' : '' }}>
                {{ $product->name }}
            </option>
        @endforeach
    </select>
</div>

          <div class="w-full">
    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Keluar</label>
    <select id="type" name="type_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
        @error('type_id') border-red-500 bg-red-50 @enderror
        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-full"
        onchange="updateMaxStock()">
        
        <option value="" disabled selected>Pilih Tipe Keluar</option>
        @foreach ($types as $type)
            <option value="{{ $type->id }}" 
                {{ old('type_id') == $type->id ? 'selected' : '' }}>
                {{ $type->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="w-full">
    <label for="stok_keluar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok Keluar</label>
    <input 
        type="number"
        name="stok_keluar" 
        id="stok_keluar" 
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
            @error('stok_keluar') border-red-500 bg-red-50 @enderror
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="Ketikkan stok keluar" 
        required
        value="{{ old('stok_keluar')}}" 
        min="1" 
        oninput="calculateTotal()"
    >
    <small class="text-gray-600" id="max-stok-message"></small> <!-- Menampilkan pesan maksimal -->
    @error('stok_keluar')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>
             
              <div class="w-full">
    <label for="tanggal_keluar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Tanggal Keluar
    </label>
    <input 
        type="date" 
        name="tanggal_keluar" 
        id="tanggal_keluar" 
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
            @error('tanggal_keluar') border-red-500 bg-red-50 @enderror
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        required
        readonly
        value="{{ old('tanggal_keluar') }}"
    >
    @error('tanggal_keluar')
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
            $('#harga_jual').val(price ? price : '');
        });
    });
  </script>

<!-- max stok keluar -->
<script>
    function updateMaxStock() {
        const productSelect = document.getElementById('product');
        const selectedOption = productSelect.options[productSelect.selectedIndex];
        const sisaStok = selectedOption ? parseInt(selectedOption.dataset.sisaStok) : 0;

        const stokKeluarInput = document.getElementById('stok_keluar');
        stokKeluarInput.max = sisaStok; // Set max stok_keluar ke sisa_stok
        stokKeluarInput.value = ''; // Reset input stok_keluar
        document.getElementById('max-stok-message').textContent = `Sisa Stok : ${sisaStok}`; // Update pesan

        // Cek jika sisa_stok = 0
        if (sisaStok === 0) {
            stokKeluarInput.disabled = true; // Nonaktifkan input
            document.getElementById('max-stok-message').innerHTML += ' <span class="text-red-600">- Stok habis!</span>'; // Tambahkan pesan stok habis dengan warna merah
            stokKeluarInput.value = ''; // Reset nilai input
        } else {
            stokKeluarInput.disabled = false; // Aktifkan kembali input
            // Menghapus pesan stok habis jika ada
            const messageElement = document.getElementById('max-stok-message');
            messageElement.innerHTML = `Sisa Stok : ${sisaStok}`; // Reset pesan
        }
    }
</script>

<!-- Script untuk mengatur tanggal hari ini -->
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const today = new Date();
        const day = String(today.getDate()).padStart(2, '0'); // Menambahkan leading zero jika diperlukan
        const month = String(today.getMonth() + 1).padStart(2, '0'); // Bulan dimulai dari 0
        const year = today.getFullYear();
        const formattedDate = `${year}-${month}-${day}`;
        
        const dateInput = document.getElementById('tanggal_keluar');
        
        // Set nilai input jika tidak ada nilai yang disimpan sebelumnya
        if (!dateInput.value) {
            dateInput.value = formattedDate;
        }
    });
</script>
</x-sidebar>