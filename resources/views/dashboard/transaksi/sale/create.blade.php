<x-sidebar>
<x-slot:title> {{ $title }} </x-slot:title>
  <section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 id="current-date" class="text-right mb-4 text-xl font-bold text-gray-900 dark:text-white"></h2>
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Input Penjualan / Kasir</h2>
      <form action="/dashboard/transaksi/sale" method="post">
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
                    value="{{ old('harga_jual') }}" 
                    readonly
                >
                @error('harga_jual')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
            
              <!-- <div>
                <label for="jumlah_harga_jual" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Harga Jual</label>
                <input 
                    type="number"
                    name="jumlah_harga_jual" yang terhubung ke database
                    id="jumlah_harga_jual" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                        @error('jumlah_harga_jual') border-red-500 bg-red-50 @enderror
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required
                    readonly
                    value="{{ old('jumlah_harga_jual')}}" 
                >
                @error('jumlah_harga_jual')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
              </div> -->

            <div>
                <label for="diskon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diskon</label>
                <input 
                type="number"
                name="diskon" 
                id="diskon" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                    @error('diskon') border-red-500 bg-red-50 @enderror
                    dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                min="0"
                step="500"
                placeholder="Ketikkan diskon (opsional)"
                value="{{ old('diskon', 0) }}"
                oninput="calculateTotal()"
            >

                @error('diskon')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>


              <!-- <div>
                <label for="total_harga_jual" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Harga Jual</label>
                <input 
                    type="number"
                    name="total_harga_jual" 
                    id="total_harga_jual" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                        @error('total_harga_jual') border-red-500 bg-red-50 @enderror
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required
                    readonly
                    value="{{ old('total_harga_jual')}}" 
                >
                @error('total_harga_jual')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
              </div> -->

            <div>
                <label for="uang_terima" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Uang Terima</label>
                <input 
                    type="number"
                    name="uang_terima" 
                    id="uang_terima" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                        @error('uang_terima') border-red-500 bg-red-50 @enderror
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    min="0"
                    step="500"
                    placeholder="Ketikkan uang yang diterima"
                    value="{{ old('uang_terima')}}"
                    oninput="calculateTotal()"
                >
                @error('uang_terima')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
              <!-- <div>
                <label for="kembalian" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kembalian</label>
                <input 
                    type="number"
                    name="kembalian" 
                    id="kembalian" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                        @error('kembalian') border-red-500 bg-red-50 @enderror
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required
                    readonly
                    value="{{ old('kembalian')}}" 
                >
                @error('kembalian')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
              </div> -->
             
            <div class="w-full">
                <label for="tanggal_penjualan" class="hidden block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Tanggal Penjualan
                </label>
                <input 
                    type="date" 
                    name="tanggal_penjualan" 
                    id="tanggal_penjualan" 
                    class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                        @error('tanggal_penjualan') border-red-500 bg-red-50 @enderror
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required
                    readonly
                    disabled
                    value="{{ old('tanggal_penjualan') }}"
                >
                @error('tanggal_penjualan')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

<div class="sm:col-span-2">
          <div class="space-y-4 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800 w-full">
            <div class="space-y-2">
              <dl class="flex items-center justify-between gap-4">
                  <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Jumlah Harga</dt>
                  <dd id="jumlah_harga_jual" class="text-base font-medium text-gray-900 dark:text-white">Rp.{{ number_format($default_jumlah_harga_jual) }}</dd>
              </dl>

              
              <dl class="flex items-center justify-between gap-4">
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Diskon</dt>
                <dd id="diskon_display" class="text-base font-medium text-green-500">Rp.{{ number_format($default_diskon) }}</dd>
              </dl>


              <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2">
                  <dt class="text-base font-bold text-gray-900 dark:text-gray-400">Total Bayar</dt>
                  <dd id="total_harga_jual" class="text-base font-medium text-gray-900 dark:text-white">Rp.{{ number_format($default_total_harga_jual) }}</dd>
              </dl>


              <dl class="flex items-center justify-between gap-4">
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Uang Terima</dt>
                <dd id="uang_terima_display" class="text-base font-medium text-gray-900 dark:text-white">Rp.{{ number_format($default_uang_terima) }}</dd>
              </dl>

              <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                <dt class="text-base font-bold text-gray-900 dark:text-white">Kembalian</dt>
                <dd id="kembalian_display" class="text-base font-bold text-gray-900 dark:text-white">Rp.{{ number_format($default_kembalian) }}</dd>
              </dl>
            </div>
          </div>
          <input type="hidden" name="jumlah_harga_jual" id="hidden_jumlah_harga_jual" value="{{ old('jumlah_harga_jual', $default_jumlah_harga_jual) }}">
          <input type="hidden" name="diskon" id="hidden_diskon" value="{{ old('diskon', $default_diskon) }}">
          <input type="hidden" name="total_harga_jual" id="hidden_total_harga_jual" value="{{ old('total_harga_jual', $default_total_harga_jual) }}">
          <input type="hidden" name="uang_terima" id="hidden_uang_terima" value="{{ old('uang_terima', $default_uang_terima) }}">
          <input type="hidden" name="kembalian" id="hidden_kembalian" value="{{ old('kembalian', $default_kembalian) }}">

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

<!-- diskon -->
<!-- <script>
function validateDiscount(input) {
    const value = parseInt(input.value) || 0; // Default to 0 if NaN
    input.value = Math.max(value, 0); // Pastikan tidak kurang dari 0
}
</script> -->


<!-- hitung total_harga_jual -->
<!-- <script>
function calculateTotal() {
    const hargaJual = parseFloat(document.getElementById('harga_jual').value) || 0;
    const stokKeluar = parseFloat(document.getElementById('stok_keluar').value) || 0;
    let diskon = parseFloat(document.getElementById('diskon').value);

    // Jika diskon tidak diisi, set ke 0
    if (isNaN(diskon)) {
        diskon = 0;
    }

    // Hitung jumlah harga_jual
    const jumlahHargaJual = hargaJual * stokKeluar;
    const totalHargaJual = Math.max(jumlahHargaJual - diskon, 0);
    
    // Set nilai ke input
    document.getElementById('jumlah_harga_jual').value = jumlahHargaJual.toFixed(2);
    document.getElementById('total_harga_jual').value = totalHargaJual.toFixed(2);

    calculateKembalian(); // Panggil fungsi untuk menghitung kembalian
}

function calculateKembalian() {
    const totalHargaJual = parseFloat(document.getElementById('total_harga_jual').value) || 0;
    const uangTerima = parseFloat(document.getElementById('uang_terima').value) || 0;

    // Hitung kembalian
    const kembalian = uangTerima - totalHargaJual;

    // Set nilai ke input kembalian
    document.getElementById('kembalian').value = Math.max(kembalian, 0).toFixed(2);
}

// Tambahkan event listener pada input uang terima
document.getElementById('uang_terima').addEventListener('input', calculateKembalian);
</script> -->
<script>
function updateHargaJual() {
    const productSelect = document.getElementById('product');
    const selectedOption = productSelect.options[productSelect.selectedIndex];

    // Ambil harga jual dari data attribute
    const hargaJual = parseFloat(selectedOption.getAttribute('data-price'));
    document.getElementById('harga_jual').value = hargaJual.toFixed(2);

    // Hitung total saat produk dipilih
    calculateTotal();
}

function calculateTotal() {
    const stokKeluar = parseFloat(document.getElementById('stok_keluar').value) || 0;
    const hargaJual = parseFloat(document.getElementById('harga_jual').value) || 0;
    const diskon = parseFloat(document.getElementById('diskon').value) || 0;
    const uangTerima = parseFloat(document.getElementById('uang_terima').value) || 0;

    // Hitung jumlah harga jual
    const jumlahHargaJual = stokKeluar * hargaJual;

    // Hitung total harga jual setelah diskon
    const totalHarga = jumlahHargaJual - diskon;

    // Hitung kembalian setelah uang diterima
    const kembalian = uangTerima - totalHarga;

    // Update elemen dengan nilai yang dihitung
    document.getElementById('jumlah_harga_jual').innerText = `Rp.${number_format(jumlahHargaJual, 0)}`;
    document.getElementById('diskon_display').innerText = `Rp.${number_format(diskon, 0)}`;
    document.getElementById('total_harga_jual').innerText = `Rp.${number_format(totalHarga, 0)}`;
    document.getElementById('uang_terima_display').innerText = `Rp.${number_format(uangTerima, 0)}`; // Update uang terima display
    document.getElementById('kembalian_display').innerText = `Rp.${number_format(kembalian, 0)}`; // Update kembalian display

    // Update input tersembunyi
document.getElementById('hidden_jumlah_harga_jual').value = jumlahHargaJual.toFixed(2);
document.getElementById('hidden_diskon').value = diskon.toFixed(2);
document.getElementById('hidden_total_harga_jual').value = totalHarga.toFixed(2);
document.getElementById('hidden_uang_terima').value = uangTerima.toFixed(2);
document.getElementById('hidden_kembalian').value = kembalian.toFixed(2);

}



// Utility function to format numbers
function number_format(number, decimals = 0) {
    return number.toLocaleString('id-ID', { minimumFractionDigits: decimals, maximumFractionDigits: decimals });
}


</script>



<!-- Script untuk mengatur tanggal hari ini -->
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const today = new Date();
        const day = today.getDate(); // Ambil tanggal
        const year = today.getFullYear(); // Ambil tahun

        // Array untuk nama bulan
        const months = [
            'Januari', 'Februari', 'Maret', 'April', 
            'Mei', 'Juni', 'Juli', 'Agustus', 
            'September', 'Oktober', 'November', 'Desember'
        ];
        
        const month = months[today.getMonth()]; // Ambil nama bulan berdasarkan indeks

        // Format tanggal
        const formattedDate = `${day} ${month} ${year}`;
        
        // Set nilai ke elemen h2
        const dateHeader = document.getElementById('current-date');
        dateHeader.textContent = `${formattedDate}`;

        const dateInput = document.getElementById('tanggal_penjualan');
        
        // Set nilai input jika tidak ada nilai yang disimpan sebelumnya
        if (!dateInput.value) {
            dateInput.value = `${year}-${String(today.getMonth() + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
        }
    });
</script>

<!-- harga jual -->
<script>
function updateHargaJual() {
    const productId = document.getElementById('product_id').value;

    // Lakukan fetch untuk mendapatkan harga produk berdasarkan ID
    fetch(`/api/products/${productId}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('jumlah_harga_jual').innerText = `$${data.harga_jual.toFixed(2)}`;
        });
}
</script>
</x-sidebar>