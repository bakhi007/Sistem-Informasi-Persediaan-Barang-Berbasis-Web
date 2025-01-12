<div class="min-h-screen flex flex-col bg-gray-50">
  <x-sidebar>
    <x-slot:title> {{ $title }} </x-slot:title>
      <section class="bg-white dark:bg-gray-900 flex-grow">
      <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
          <h2 id="current-date" class="mb-4 text-xl font-bold text-gray-900 dark:text-white text-right"></h2>
          <h2 class="mb-6 text-xl font-bold text-gray-900 dark:text-white pl-2 border-l-4 border-primary-700 dark:border-white">Input Penjualan</h2>
          <form action="/sale?id={{ $token }}" method="post" id="form1" novalidate>
            @csrf
            <input type="hidden" name="form_type" value="form1">
              <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="w-full col-span-2">
                    <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Produk</label>
                    <select id="product" name="product_id" class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                        @error('product_id') border-red-500 bg-red-50 @enderror
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 w-full"
                        onchange="updateMaxStock()">
                        
                        <option value="" disabled selected>Pilih Produk</option>
                        @foreach ($productions as $production)
                            <option value="{{ $production->product_id }}" 
                                data-sisa-stok="{{ $production->stok_masuk }}" 
                                data-masa-berlaku="{{ $production->product->masa_berlaku }}" 
                                data-price="{{ $production->product->harga_jual }}" 
                                {{ old('product_id') == $production->product_id ? 'selected' : '' }}>
                                {{ $production->kode_produksi }} - {{ $production->product->name }}
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
                    >
                    <small class="text-gray-600" id="max-stok-message"></small>
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
                  >
                  @error('diskon')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                  @enderror
                </div>

                <div>
                    <label for="jumlah_harga_jual" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Harga Jual</label>
                    <input 
                        type="number"
                        name="jumlah_harga_jual" yang terhubung ke database
                        id="jumlah_harga_jual" 
                        class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                            @error('jumlah_harga_jual') border-red-500 bg-red-50 @enderror
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        required
                        readonly
                        value="{{ old('jumlah_harga_jual')}}" 
                        
                    >
                    @error('jumlah_harga_jual')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                
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
                          value="{{ old('tanggal_penjualan') }}"
                      >
                      @error('tanggal_penjualan')
                          <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                      @enderror
                  </div>
                </div>
                <button 
                    type="button" 
                    id="btn-tambah" 
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800"
                >
                    <i class="fa-solid fa-cart-shopping mr-2"></i>  
                    Tambah ke Keranjang
                </button>

          </form>

          <form action="">
              <div class="my-6 sm:col-span-2 space-y-4 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800 w-full">
                  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                          <tr>
                              <th scope="col" class="px-4 py-3">Jenis Produk</th>
                              <th scope="col" class="px-4 py-3">Stok Keluar</th>
                              <th scope="col" class="px-4 py-3">Harga Jual</th>
                              <th scope="col" class="px-4 py-3">Jumlah Harga</th>
                              <th scope="col" class="px-4 py-3">Diskon</th>
                              <th scope="col" class="px-4 py-3">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($sales as $sale)
                              <tr class="border-b dark:border-gray-700 bg-white" id="sale-{{ $sale->id }}">
                                  <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $sale->product->name }}</th>
                                  <td class="px-4 py-3">{{ $sale->stok_keluar }}</td>
                                  <td class="px-4 py-3">Rp.{{ number_format($sale->harga_jual, 0, ',', '.') }}</td>
                                  <td class="px-4 py-3">Rp.{{ number_format($sale->jumlah_harga_jual, 0, ',', '.') }}</td>
                                  <td class="px-4 py-3">Rp.{{ number_format($sale->diskon, 0, ',', '.') }}</td>
                                  <td class="px-4 py-3">
                                      <button type="button" class="text-red-600 hover:underline" data-id="{{ $sale->id }}" onclick="deleteSale(this)">Hapus</button>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </form>

          <div id="alertModal" class="sm:col-span-2 hidden mb-4 flex justify-between text-red-200 shadow-inner rounded p-3 bg-red-600">
              <p class="self-center">
                  <strong>Pembayaran kurang!</strong>
              </p>
              <strong class="text-xl align-center cursor-pointer alert-del" onclick="hideWarning()">&times;</strong>
          </div>

        <form action="/nota?id={{ $token }}" method="post" id="form2" novalidate>
        @csrf
        <input type="hidden" name="form_type" value="form2">
          <div class="sm:col-span-2">
              <div class="space-y-4 rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-700 dark:bg-gray-800 w-full">
                <div class="space-y-2">

                  <dl class="flex items-center justify-between gap-4">
                      <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Total Jumlah Harga</dt>
                      <dd id="total_jumlah_harga" class="text-base font-medium text-gray-900 dark:text-white">Rp.{{ number_format($default_jumlah_harga_jual, 0, ',', '.') }}</dd>
                  </dl>

                  
                  <dl class="flex items-center justify-between gap-4">
                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Total Diskon</dt>
                    <dd id="total_diskon" class="text-base font-medium text-green-500">Rp.{{ number_format($default_diskon, 0, ',', '.') }}</dd>
                  </dl>


                  <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2">
                      <dt class="text-base font-bold text-gray-900 dark:text-gray-400">Total Bayar</dt>
                      <dd id="total_bayar" class="text-base font-medium text-gray-900 dark:text-white">Rp.{{ number_format($default_total_harga_jual, 0, ',', '.') }}</dd>
                  </dl>

                  <dl class="flex items-center justify-between gap-4">
                      <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Uang Terima</dt>
                      <dd>
                          <input type="number" id="uang_terima" name="uang_terima" value="{{ $default_uang_terima }}" class="text-base font-medium text-gray-900 dark:text-white border border-gray-300 rounded px-2 py-1 w-full" oninput="calculateKembalian()">
                      </dd>
                  </dl>

                  <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                      <dt class="text-base font-bold text-gray-900 dark:text-white">Kembalian</dt>
                      <dd id="kembalian" class="text-base font-bold text-gray-900 dark:text-white">Rp.{{ number_format($default_kembalian, 0, ',', '.') }}</dd>
                  </dl>
                </div>
              </div>

              <!-- input hidden -->
              <input type="hidden" id="sales_count" value="{{ $sales->count() }}">
              <input type="hidden" name="total_jumlah_harga" id="hidden_jumlah_harga_jual" value="{{ old('jumlah_harga_jual', $default_jumlah_harga_jual) }}">
              <input type="hidden" name="total_diskon" id="hidden_total_diskon" value="{{ old('diskon', $default_diskon) }}">
              <input type="hidden" name="total_bayar" id="hidden_total_harga_jual" value="{{ old('total_harga_jual', $default_total_harga_jual) }}">
              <input type="hidden" name="kembalian" id="hidden_kembalian" value="{{ old('kembalian', $default_kembalian) }}">

              <button type="submit" id="btn-simpan" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                  Simpan
              </button>
          </div>
        </form>

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

            const maxStokMessage = document.getElementById('max-stok-message');

            // Cek sisa stok dan tampilkan pesan yang sesuai
            if (sisaStok > 0) {
                stokKeluarInput.disabled = false; // Aktifkan input jika ada sisa stok
                maxStokMessage.innerHTML = `Sisa Stok : ${sisaStok}`; // Tampilkan pesan sisa stok
                maxStokMessage.classList.remove('text-red-600'); // Hapus class merah jika ada
            } else {
                stokKeluarInput.disabled = true; // Nonaktifkan input jika stok habis
                maxStokMessage.innerHTML = `Sisa Stok : <span class="text-red-600">${sisaStok} - Stok habis!</span>`; // Tampilkan pesan stok habis
            }
        }
    </script>

    <script>
        document.getElementById('stok_keluar').addEventListener('input', function() {
            const stokKeluar = parseInt(this.value) || 0;
            const hargaJual = parseInt(document.getElementById('harga_jual').value) || 0;
            const jumlahHargaJual = stokKeluar * hargaJual;
            document.getElementById('jumlah_harga_jual').value = jumlahHargaJual;
        });
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
    <!-- <script>
    // calculate.js

    function updateHargaJual() {
        const productSelect = document.getElementById('product');
        const selectedOption = productSelect.options[productSelect.selectedIndex];

        // Ambil harga jual dari atribut data
        const hargaJual = parseFloat(selectedOption.getAttribute('data-price')) || 0;
        document.getElementById('harga_jual').value = hargaJual.toFixed(2);

        // Hitung total saat produk dipilih
        calculateTotal();
    }

    function calculateTotal() {
        const stokKeluar = parseFloat(document.getElementById('stok_keluar').value) || 0;
        const hargaJual = parseFloat(document.getElementById('harga_jual').value) || 0;
        const diskon = parseFloat(document.getElementById('diskon').value) || 0;

        // Hitung jumlah harga jual
        const jumlahHargaJual = stokKeluar * hargaJual;

        // Hitung total harga setelah diskon
        const totalHarga = jumlahHargaJual - diskon;

        // Update elemen dengan nilai yang dihitung
        document.getElementById('jumlah_harga_jual').innerText = `Rp. ${number_format(jumlahHargaJual, 0)}`;
        document.getElementById('total_diskon').innerText = `Rp. ${number_format(diskon, 0)}`;
        document.getElementById('total_harga_jual').innerText = `Rp. ${number_format(totalHarga, 0)}`;

        // Update input tersembunyi
        document.getElementById('hidden_jumlah_harga_jual').value = jumlahHargaJual.toFixed(2);
        document.getElementById('hidden_diskon').value = diskon.toFixed(2);
        document.getElementById('hidden_total_harga_jual').value = totalHarga.toFixed(2);

        // Hitung Kembalian setiap kali Total Bayar atau Uang Terima diupdate
        updateKembalian();
    }

    // Fungsi untuk menghitung Kembalian
    function updateKembalian() {
        const uangTerima = parseFloat(document.getElementById('uang_terima').value) || 0;
        const totalHarga = parseFloat(document.getElementById('hidden_total_harga_jual').value) || 0;

        // Hitung kembalian
        let kembalian = 0;
        if (uangTerima >= totalHarga) {
            kembalian = uangTerima - totalHarga;
        }

        // Update elemen Kembalian
        document.getElementById('kembalian').innerText = `Rp. ${number_format(kembalian, 0)}`;
        document.getElementById('hidden_kembalian').value = kembalian.toFixed(2);
    }

    // Tambahkan event listener pada input uang_terima untuk menghitung ulang saat diinput
    document.getElementById('uang_terima').addEventListener('input', function() {
        updateKembalian();
    });

    // Utility function untuk memformat angka
    function number_format(number, decimals = 0) {
        return number.toLocaleString('id-ID', { minimumFractionDigits: decimals, maximumFractionDigits: decimals });
    }
    </script> -->

    <script>
        function calculateKembalian() {
            const totalBayar = parseInt("{{ $default_total_harga_jual }}") || 0;
            const uangTerima = parseInt(document.getElementById('uang_terima').value) || 0;
            const kembalian = uangTerima - totalBayar;

            document.getElementById('kembalian').textContent = `Rp.${new Intl.NumberFormat('id-ID').format(kembalian)}`;
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

    <!-- warning -->
    <script>
      document.getElementById('btn-simpan').addEventListener('click', function(event) {
    // Ambil nilai dari input hidden sales_count
    const salesCount = parseInt(document.getElementById('sales_count').value) || 0;

    // Periksa apakah sales kosong
    if (salesCount === 0) {
        event.preventDefault(); // Hentikan pengiriman form
        alert('Tidak dapat menyimpan data!');
        return;
    }

    // Ambil nilai uang terima dan total harga
    const uangTerima = parseFloat(document.getElementById('uang_terima').value) || 0;
    const totalHarga = parseFloat(document.getElementById('hidden_total_harga_jual').value) || 0;

    // Cek apakah uang terima kurang dari total bayar
    if (uangTerima < totalHarga) {
        event.preventDefault(); // Hentikan pengiriman form
        document.getElementById('alertModal').classList.remove('hidden'); // Tampilkan modal
    }
});

// Event listener untuk menutup modal
document.getElementById('closeModal').addEventListener('click', function() {
    document.getElementById('alertModal').classList.add('hidden'); // Sembunyikan modal
});

    </script>

    <script>
        // Prevent default form 1 submission
        document.getElementById("form1").addEventListener("submit", function(event) {
            event.preventDefault();
        });

        // Handle form1 submission when 'Tambah' button is clicked
        document.getElementById("btn-tambah").addEventListener("click", function() {
            document.getElementById("form1").submit(); // Submit form1 only when 'Tambah' is clicked
        });

        // No need to add any code for the 'Simpan' button in form2, as it will submit form2 by default
    </script>

    <!--  -->

    <!-- Tambah ke table -->
    <!-- <script>
        // Variabel untuk melacak status tabel
        let isTableEmpty = true;

        // Fungsi untuk memvalidasi input sebelum menambah ke tabel
        function validateInput() {
            const stokKeluarInput = document.getElementById('stok_keluar');
            const stokKeluar = parseInt(stokKeluarInput.value);
            const hargaJualInput = document.getElementById('harga_jual');
            const hargaJual = parseFloat(hargaJualInput.value);
            
            // Hanya aktifkan validasi jika tabel masih kosong
            if (isTableEmpty) {
                if (!stokKeluarInput.value || stokKeluar < 1) {
                    alert('Harap isi Stok Keluar dengan benar (minimal 1).');
                    return false; // Mencegah penambahan jika input tidak valid
                }
                if (!hargaJualInput.value || hargaJual <= 0) {
                    alert('Harap isi Harga Jual dengan benar (minimal lebih dari 0).');
                    return false; // Mencegah penambahan jika input tidak valid
                }
            }
            
            return true; // Input valid
        }

        // Menangani klik tombol "Tambah"
        document.getElementById('addButton').addEventListener('click', function() {
            // Lakukan validasi input
            if (validateInput()) {
                const productSelect = document.getElementById('product');
                const stokKeluarInput = document.getElementById('stok_keluar');
                const hargaJualInput = document.getElementById('harga_jual');
                const diskonInput = document.getElementById('diskon');

                const productName = productSelect.options[productSelect.selectedIndex]?.text;
                const stokKeluar = parseInt(stokKeluarInput.value);
                const hargaJual = parseFloat(hargaJualInput.value);
                const diskon = parseFloat(diskonInput.value) || 0;

                // Pastikan produk terpilih
                if (productSelect.value) {
                    const jumlahHarga = hargaJual * stokKeluar;

                    const newRow = document.createElement('tr');
                    newRow.innerHTML = `
                        <td class="px-4 py-2">${productName}</td>
                        <td class="px-4 py-2">${stokKeluar}</td>
                        <td class="px-4 py-2">${hargaJual}</td>
                        <td class="px-4 py-2 jumlah-harga">${jumlahHarga}</td>
                        <td class="px-4 py-2 diskon">${diskon}</td>
                        <td class="px-4 py-2">
                            <button class="text-red-600" onclick="removeRow(this)">Hapus</button>
                        </td>
                    `;

                    document.getElementById('sales-table-body').appendChild(newRow);

                    updateTotalJumlahHarga();
                    updateTotalDiskon();

                    // Set status tabel tidak kosong
                    isTableEmpty = document.querySelectorAll('#sales-table-body tr').length === 0;

                    // Reset input form
                    productSelect.selectedIndex = 0;
                    stokKeluarInput.value = '';
                    hargaJualInput.value = '';
                    diskonInput.value = 0;

                    // Nonaktifkan validasi setelah data ditambahkan ke tabel
                    if (!isTableEmpty) {
                        isTableEmpty = false; // Nonaktifkan validasi
                    }
                } else {
                    alert('Harap lengkapi semua input yang diperlukan.');
                }
            }
        });

        function removeRow(button) {
            const row = button.closest('tr');
            row.parentNode.removeChild(row);

            updateTotalJumlahHarga();
            updateTotalDiskon();

            // Cek apakah tabel masih kosong
            isTableEmpty = document.querySelectorAll('#sales-table-body tr').length === 0;
        }

        function updateTotalJumlahHarga() {
            let totalJumlahHarga = 0;

            document.querySelectorAll('.jumlah-harga').forEach(cell => {
                totalJumlahHarga += parseFloat(cell.textContent);
            });

            document.getElementById('jumlah_harga_jual').innerText = `Rp. ${number_format(totalJumlahHarga)}`;
            document.getElementById('hidden_jumlah_harga_jual').value = totalJumlahHarga.toFixed(2);

            updateTotalBayar();
        }

        function updateTotalDiskon() {
            let totalDiskon = 0;

            document.querySelectorAll('.diskon').forEach(cell => {
                totalDiskon += parseFloat(cell.textContent);
            });

            document.getElementById('total_diskon').innerText = `Rp. ${number_format(totalDiskon)}`;
            document.getElementById('hidden_diskon').value = totalDiskon.toFixed(2);

            updateTotalBayar();
        }

        function updateTotalBayar() {
            const totalJumlahHarga = parseFloat(document.getElementById('hidden_jumlah_harga_jual').value) || 0;
            const totalDiskon = parseFloat(document.getElementById('hidden_diskon').value) || 0;

            const totalBayar = totalJumlahHarga - totalDiskon;

            document.getElementById('total_harga_jual').innerText = `Rp. ${number_format(totalBayar)}`;
            document.getElementById('hidden_total_harga_jual').value = totalBayar.toFixed(2);
        }

        function number_format(number, decimals = 0) {
            return number.toLocaleString('id-ID', { minimumFractionDigits: decimals, maximumFractionDigits: decimals });
        }

        // Menangani klik tombol "Simpan"
        document.getElementById('btn-simpan').addEventListener('click', function(event) {
            const stokKeluarInput = document.getElementById('stok_keluar');
            const hargaJualInput = document.getElementById('harga_jual');

            // Validasi saat simpan hanya berlaku jika tabel kosong
            if (isTableEmpty && (!stokKeluarInput.value || parseInt(stokKeluarInput.value) < 1)) {
                alert('Harap isi Stok Keluar dengan benar (minimal 1).');
                event.preventDefault(); // Mencegah pengiriman form
            }

            if (isTableEmpty && (!hargaJualInput.value || parseFloat(hargaJualInput.value) <= 0)) {
                alert('Harap isi Harga Jual dengan benar (minimal lebih dari 0).');
                event.preventDefault(); // Mencegah pengiriman form
            }
        });
    </script> -->

    <script>
      // Mendapatkan query string dari URL
      const urlParams = new URLSearchParams(window.location.search);

      // Mengecek apakah parameter `id` ada
      if (!urlParams.has('id')||urlParams.get('id')=="") {
          // Jika tidak ada, redirect ke halaman /sales
          window.location.href = "http://http://127.0.0.1:8000//dashboard/transaksi/sale";
      }

    </script>

<script>
    function deleteSale(button) {
        const id = button.getAttribute('data-id');
        
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            fetch(`/sale/delete/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    // Hapus baris dari tabel
                    document.getElementById(`sale-${id}`).remove();
                    alert('Data berhasil dihapus.');
                    // Reload halaman
                    window.location.reload();
                } else {
                    alert('Gagal menghapus data. Silakan coba lagi.');
                    // Reload halaman
                    window.location.reload();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat menghapus data.');
                // Reload halaman
                window.location.reload();
            });
        }
    }
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
  <x-footer></x-footer>
</div>