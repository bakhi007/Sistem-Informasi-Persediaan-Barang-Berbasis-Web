<x-sidebar>
  
  <section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Input Pembelian</h2>
      <form action="/dashboard/transaksi/purchase" method="post">
        @csrf
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
            <div class="sm:col-span-2">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Nama
                </label>
                <input 
                    type="text" 
                    name="nama" 
                    id="nama" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                        @error('nama') border-red-500 bg-red-50 @enderror
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Ketikkan nama roti" 
                    required
                    autofocus
                    value="{{ old('nama')}}"
                >
                @error('nama')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full">
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white disabled readonly">Deskripsi</label>
                <input 
                    type="text"
                    name="deskripsi" 
                    id="deskripsi" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                        @error('deskripsi') border-red-500 bg-red-50 @enderror
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"

                    placeholder="Ketikkan deskripsi" 
                    required
                    value="{{ old('deskripsi')}}" 
                >
                @error('deskripsi')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">harga</label>
    <input 
        type="number"
        name="harga" 
        id="harga" 
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
            @error('harga') border-red-500 bg-red-50 @enderror
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="Ketikkan harga" 
        required
        value="{{ old('harga')}}" 
        oninput="calculateTotal()"
    >
    @error('harga')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>
<div class="w-full">
    <label for="jumlah_barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Barang</label>
    <input 
        type="number"
        name="jumlah_barang" 
        id="jumlah_barang" 
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
            @error('jumlah_barang') border-red-500 bg-red-50 @enderror
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        placeholder="Ketikkan jumlah_barang" 
        required
        value="{{ old('jumlah_barang')}}" 
        oninput="calculateTotal()"
    >
    @error('jumlah_barang')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>
<div>
    <label for="total_harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">total_harga</label>
    <input 
        type="text"
        name="total_harga" 
        id="total_harga" 
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
            @error('total_harga') border-red-500 bg-red-50 @enderror
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        required
        disabled
        value="{{ old('total_harga')}}" 
    >
    @error('total_harga')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
</div>
<div class="sm:col-span-2">
    <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        tanggal
    </label>
    <input 
        type="date" 
        name="tanggal" 
        id="tanggal" 
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
            @error('tanggal') border-red-500 bg-red-50 @enderror
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
        required
        autofocus
        disabled
        value="{{ old('tanggal')}}"
    >
    @error('tanggal')
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
function calculateTotal() {
    const harga = parseFloat(document.getElementById('harga').value) || 0;
    const jumlahBarang = parseFloat(document.getElementById('jumlah_barang').value) || 0;
    const totalHarga = harga * jumlahBarang;

    document.getElementById('total_harga').value = totalHarga.toFixed(0);
}
</script>

<script>
    // Set the date input to today's date
    document.addEventListener('DOMContentLoaded', (event) => {
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('tanggal').value = today;
    });
</script>

</x-sidebar>