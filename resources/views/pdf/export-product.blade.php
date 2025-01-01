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
        <div style="display: flex; justify-content: space-between; margin-bottom: 1rem;">
          <h3 style="margin-top: 0.5rem; font-weight: normal; color: #1f2937;">
            {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM YYYY') }}
          </h3>
          <h3>Kasir: {{ auth()->user()->username }}</h3>
        </div>

        <!-- Garis Pembatas -->
        <hr style="border-top: 2px solid #1f2937;">

        <!-- Tabel Produk -->
        <table style="width: 100%; font-size: 0.875rem; text-align: left; color: #6b7280;">
          <thead style="text-transform: uppercase; color: #374151; background-color: #f9fafb;">
            <tr>
              <th style="padding: 0.75rem 1rem;">No.</th>
              <th style="padding: 0.75rem 1rem;">Nama Produk</th>
              <th style="padding: 0.75rem 1rem;">Harga Beli</th>
              <th style="padding: 0.75rem 1rem;">Harga Jual</th>
              <th style="padding: 0.75rem 1rem;">Sisa Stok</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
              <tr style="border-bottom: 1px solid #e5e7eb;">
                <th scope="row" style="padding: 0.75rem 1rem; font-weight: medium; color: #1f2937;">
                {{ $loop->iteration }}
                </th>
                <td style="padding: 0.75rem 1rem;">{{ $product->name }}</td>
                <td style="padding: 0.75rem 1rem;">Rp.{{ number_format($product->harga_beli, 0, ',', '.') }}</td>
                <td style="padding: 0.75rem 1rem;">Rp.{{ number_format($product->harga_jual, 0, ',', '.') }}</td>
                <td style="padding: 0.75rem 1rem;">{{ $product->sisa_stok }}</td>
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