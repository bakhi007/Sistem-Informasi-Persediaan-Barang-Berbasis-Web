<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
  <style>
      body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
      }
      .text-center {
          text-align: center;
      }
      .text-right {
          text-align: right;
      }
      .font-bold {
          font-weight: bold;
      }
      .font-normal {
          font-weight: normal;
      }
      .text-gray-900 {
          color: #1f2937; /* Warna untuk teks gelap */
      }
      .text-gray-700 {
          color: #374151; /* Warna untuk teks abu-abu */
      }
      .text-gray-500 {
          color: #6b7280; /* Warna untuk teks lebih terang */
      }
      .border-t-2 {
          border-top-width: 2px;
      }
      .border-b {
          border-bottom-width: 1px;
      }
      .bg-gray-50 {
          background-color: #f9fafb; /* Warna latar belakang terang */
      }
      .uppercase {
          text-transform: uppercase;
      }
      .w-full {
          width: 100%;
      }
      .py-3 {
          padding-top: 0.75rem;
          padding-bottom: 0.75rem;
      }
      .px-4 {
          padding-left: 1rem;
          padding-right: 1rem;
      }
      /* Tambahkan lebih banyak style sesuai kebutuhan */
  </style>
</head>
<body>
   <!-- laporan -->
   <div style="padding: 2rem; max-width: 800px; margin: auto;" id="cetak-nota">
        <!-- Header laporan -->
        <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 1rem;">
          <div style="text-align: center;">
            <h2 style="margin: 0; font-size: 1.25rem; font-weight: bold; color: #1f2937;">{{ $title }}</h2>
            <p style="font-size: 0.875rem; color: #374151;">Ahsan Bakery & Cake</p>
          </div>
        </div>
        <div style="margin-bottom: 1rem;">
  <!-- Baris pertama: Hari, tanggal di kanan -->
  <div style="margin-bottom: 0.5rem; text-align: right;">
    <h3 style="font-weight: normal; color: #1f2937; margin: 0;">
      {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM YYYY') }}
    </h3>
    <h3 id="pendapatan" style="font-weight: 400; color: #1f2937; margin: 0;">
      Pendapatan: +Rp{{ number_format($totalPendapatan, 0, ',', '.') }}
    </h3>
  </div>

  <!-- Baris kedua: Pendapatan -->
  <div>
  <h3 style="font-weight: normal; color: #1f2937; margin: 0;">
      Kasir: {{ auth()->user()->username }}
    </h3>
  </div>
</div>


        <!-- Garis Pembatas -->
        <hr style="border-top: 2px solid #1f2937;">

        <!-- Tabel Produk -->
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="px-4 py-3">No.</th>
        <th scope="col" class="px-4 py-3">No. Nota</th>
        <th scope="col" class="px-4 py-3">Tanggal</th>
        <th scope="col" class="px-4 py-3">Pendapatan</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($notas as $index => $nota)
        <tr class="border-b dark:border-gray-700">
          <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
          {{ $index + 1 }}
          </th>
          <td class="px-4 py-3">{{ $nota->token }}</td>
          <td class="px-4 py-3">{{ $nota->created_at->locale('id')->translatedFormat('j F Y') }}</td>
          <td class="px-4 py-3">+Rp.{{ number_format($nota->total_bayar, 0, ',', '.') }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
        <!-- Akhir Tabel -->

        <div>
          <h3 style="margin-top: 1.5rem; margin-right: 1rem; font-weight: normal; color: #1f2937; text-align: right;">
            Batang, {{ \Carbon\Carbon::now()->isoFormat('D MMMM YYYY') }}
          </h3>
          <h3 style="margin-top: 5rem; font-weight: normal; color: #1f2937; text-align: right;">
            Manager Ahsan Bakery & Cake
          </h3>
        </div>
      </div>
      <!-- end of laporan -->
</body>
</html>