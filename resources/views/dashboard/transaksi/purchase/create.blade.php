<x-sidebar>
<x-slot:title> {{ $title }} </x-slot:title>
  <section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Input Pembelian</h2>
      <form action="/dashboard/transaksi/purchase" method="post">
        @csrf
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
          <div class="w-full">
    <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Produk</label>
    <select id="product" name="product_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
        @error('product_id') border-red-500 bg-red-50 @enderror
        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-full"
        onchange="updateExpiryDate()">
        
        <option value="" disabled selected>Pilih Produk</option>
        @foreach ($products as $product)
            <option value="{{ $product->id }}" data-masa-berlaku="{{ $product->masa_berlaku }}" 
                data-price="{{ $product->harga_beli }}" 
                {{ old('product_id') == $product->id ? 'selected' : '' }}>
                {{ $product->name }}
            </option>
        @endforeach
    </select>
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
        value="{{ old('harga_beli') }}" 
        readonly
    >
    @error('harga_beli')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>
            <div class="w-full">
                <label for="stok_masuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok Masuk</label>
                <input 
                    type="number"
                    name="stok_masuk" 
                    id="stok_masuk" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                        @error('stok_masuk') border-red-500 bg-red-50 @enderror
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Ketikkan stok masuk" 
                    required
                    value="{{ old('stok_masuk')}}" 
                    oninput="calculateTotal()"
                >
                @error('stok_masuk')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
              </div>
              <div>
                <label for="jumlah_harga_beli" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Harga Beli</label>
                <input 
                    type="number"
                    name="jumlah_harga_beli" 
                    id="jumlah_harga_beli" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                        @error('jumlah_harga_beli') border-red-500 bg-red-50 @enderror
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required
                    readonly
                    value="{{ old('jumlah_harga_beli')}}" 
                >
                @error('jumlah_harga_beli')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
              </div>
             
              <div class="w-full">
    <label for="tanggal_produksi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Tanggal Pembelian
    </label>
    <input 
        type="date" 
        name="tanggal_produksi" 
        id="tanggal_produksi" 
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
            @error('tanggal_produksi') border-red-500 bg-red-50 @enderror
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        required
        readonly
        value="{{ old('tanggal_produksi') }}"
    >
    @error('tanggal_produksi')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>

<div class="w-full">
    <label for="tanggal_kedaluwarsa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Tanggal Kedaluwarsa
    </label>
    <input 
        type="date" 
        name="tanggal_kedaluwarsa" 
        id="tanggal_kedaluwarsa" 
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
            @error('tanggal_kedaluwarsa') border-red-500 bg-red-50 @enderror
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        required
        value="{{ old('tanggal_kedaluwarsa') }}"
        readonly
    >
    @error('tanggal_kedaluwarsa')
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
function calculateTotal() {
    const hargaBeli = document.getElementById('harga_beli').value;
    const stokMasuk = document.getElementById('stok_masuk').value;
    
    // Hitung total harga_beli
    const jumlahHargaBeli = hargaBeli * stokMasuk;
    
    // Set nilai ke input jumlah_harga_beli
    document.getElementById('jumlah_harga_beli').value = jumlahHargaBeli;
}
</script>

<!-- penambahan tanggal_kedaluwarsa -->
<script>
    // Set the date input to today's date
    document.addEventListener('DOMContentLoaded', (event) => {
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('tanggal_produksi').value = today;
    });

    function updateExpiryDate() {
        const purchaseDate = new Date(document.getElementById('tanggal_produksi').value);
        const productSelect = document.getElementById('product');
        const selectedOption = productSelect.options[productSelect.selectedIndex];
        
        if (selectedOption) {
            const masaBerlaku = parseInt(selectedOption.getAttribute('data-masa-berlaku'), 10); // Ambil masa berlaku
            const expiryDate = new Date(purchaseDate);

            // Tambahkan masa berlaku (dalam hari) ke tanggal pembelian
            expiryDate.setDate(purchaseDate.getDate() + masaBerlaku);

            // Format tanggal kedaluwarsa ke YYYY-MM-DD
            const yyyy = expiryDate.getFullYear();
            const mm = String(expiryDate.getMonth() + 1).padStart(2, '0'); // Bulan dimulai dari 0
            const dd = String(expiryDate.getDate()).padStart(2, '0');
            const formattedDate = `${yyyy}-${mm}-${dd}`;

            document.getElementById('tanggal_kedaluwarsa').value = formattedDate;
        }
    }
</script>
</x-sidebar>