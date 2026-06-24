@extends('layouts.daisy')

@php
  seo()->locale('id_ID')
    ->title('Kebijakan Privasi')
    ->description('Halaman ini menjelaskan kebijakan privasi '.config('app.name').', termasuk pengelolaan data pengguna, penggunaan informasi, dan perlindungan privasi terkait layanan jadwal lari.');
@endphp

@section('content')

<div class="space-y-8">

  <section class="overflow-hidden rounded-3xl bg-gradient-to-br from-primary via-primary-focus to-secondary text-primary-content shadow-sm">

    <div class="px-6 py-10 lg:px-10 lg:py-14">

      <div class="max-w-3xl">

        <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-medium backdrop-blur">
          <x-icons.line.lock class="w-4 h-4" />
          <span>
            Privasi & data pengguna
          </span>
        </div>

        <h1 class="mt-5 text-4xl font-bold tracking-tight leading-tight lg:text-5xl">
          Kebijakan Privasi
        </h1>

        <p class="mt-6 text-base leading-8 text-primary-content/85 lg:text-lg">
          Penjelasan mengenai bagaimana {{ config('app.name') }} mengelola data pengguna, penggunaan informasi, dan perlindungan privasi dalam layanan jadwal lari.
        </p>

        <div class="mt-6 inline-flex items-center gap-2 rounded-2xl bg-white/10 px-4 py-2 text-sm text-primary-content/80 backdrop-blur">
          <x-icons.line.calendar-2 class="w-4 h-4" />
          <span>
            Terakhir diperbarui: 10 Januari 2026
          </span>
        </div>

      </div>

    </div>

  </section>

  <div class="grid gap-6 lg:grid-cols-[1fr_320px]">

    <article class="space-y-6">

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-4">

          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary shrink-0">
            <x-icons.line.information class="w-5 h-5" />
          </div>

          <div class="min-w-0">

            <h2 class="text-xl font-bold">
              Ruang Lingkup Layanan
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed [&_ul]:list-disc [&_ul]:pl-6">

              <p>
                {{ config('app.name') }} adalah platform untuk membantu pengguna menemukan dan mengelola informasi jadwal lari.
              </p>

              <ul>
                <li>Menjelajah jadwal lari</li>
                <li>Menyimpan event favorit</li>
                <li>Membagikan jadwal lari</li>
                <li>Mengekspor jadwal ke kalender</li>
                <li>Melaporkan konten atau event</li>
              </ul>

            </div>

          </div>

        </div>

      </section>

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-4">

          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-success/10 text-success shrink-0">
            <x-icons.line.database class="w-5 h-5" />
          </div>

          <div class="min-w-0">

            <h2 class="text-xl font-bold">
              Informasi yang Dikumpulkan
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed [&_ul]:list-disc [&_ul]:pl-6">

              <h3>Informasi akun</h3>

              <ul>
                <li>Nama atau nama tampilan</li>
                <li>Alamat Pos-el</li>
                <li>Informasi autentikasi akun</li>
              </ul>

              <h3>Aktivitas pengguna</h3>

              <ul>
                <li>Markah buku jadwal lari</li>
                <li>Riwayat berbagi jadwal</li>
                <li>Riwayat ekspor kalender</li>
                <li>Laporan yang dikirimkan</li>
              </ul>

              <h3>Informasi teknis</h3>

              <ul>
                <li>Alamat IP</li>
                <li>Jenis browser dan perangkat</li>
                <li>Sistem operasi</li>
                <li>Halaman yang diakses</li>
              </ul>

            </div>

          </div>

        </div>

      </section>

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-4">

          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-info/10 text-info shrink-0">
            <x-icons.line.settings-3 class="w-5 h-5" />
          </div>

          <div class="min-w-0">

            <h2 class="text-xl font-bold">
              Penggunaan Data
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed [&_ul]:list-disc [&_ul]:pl-6">

              <ul>
                <li>Menyediakan layanan {{ config('app.name') }}</li>
                <li>Menyimpan preferensi pengguna</li>
                <li>Menampilkan jadwal yang relevan</li>
                <li>Mengelola fitur kalender dan markah buku</li>
                <li>Menangani moderasi dan pelaporan konten</li>
                <li>Meningkatkan keamanan platform</li>
              </ul>

            </div>

          </div>

        </div>

      </section>

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-4">

          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-warning/10 text-warning shrink-0">
            <x-icons.line.cookie class="w-5 h-5" />
          </div>

          <div class="min-w-0">

            <h2 class="text-xl font-bold">
              Cookie & Penyimpanan Lokal
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed">

              <p>
                Kami menggunakan cookie atau penyimpanan lokal untuk mendukung sesi login, preferensi pengguna, dan beberapa fitur penting lainnya.
              </p>

            </div>

          </div>

        </div>

      </section>

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-4">

          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-error/10 text-error shrink-0">
            <x-icons.line.shield-check class="w-5 h-5" />
          </div>

          <div class="min-w-0">

            <h2 class="text-xl font-bold">
              Keamanan & Berbagi Data
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed">

              <p>
                Kami tidak menjual data pribadi pengguna. Data hanya dapat dibagikan kepada penyedia layanan teknis atau jika diwajibkan oleh hukum.
              </p>

              <p>
                Kami juga menerapkan langkah keamanan yang wajar untuk membantu melindungi informasi pengguna.
              </p>

            </div>

          </div>

        </div>

      </section>

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-4">

          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary shrink-0">
            <x-icons.line.user class="w-5 h-5" />
          </div>

          <div class="min-w-0">

            <h2 class="text-xl font-bold">
              Hak Pengguna
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed [&_ul]:list-disc [&_ul]:pl-6">

              <ul>
                <li>Mengakses data pribadi</li>
                <li>Memperbarui informasi akun</li>
                <li>Menghapus akun sesuai ketentuan</li>
                <li>Menarik persetujuan fitur tertentu</li>
              </ul>

            </div>

          </div>

        </div>

      </section>

    </article>

    <aside class="space-y-4">

      <div class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-3">

          <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-success/10 text-success shrink-0">
            <x-icons.line.eye-off class="w-5 h-5" />
          </div>

          <div>

            <h3 class="font-semibold">
              Privasi pengguna
            </h3>

            <p class="mt-1 text-sm leading-6 text-base-content/65">
              Aktivitas pengguna seperti markah buku dan riwayat penggunaan tidak ditampilkan ke publik.
            </p>

          </div>

        </div>

      </div>

      <div class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-3">

          <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-primary/10 text-primary shrink-0">
            <x-icons.line.message-2 class="w-5 h-5" />
          </div>

          <div>

            <h3 class="font-semibold">
              Hubungi kami
            </h3>

            <p class="mt-1 text-sm leading-6 text-base-content/65">
              Jika memiliki pertanyaan terkait privasi atau data pengguna, silakan hubungi kami melalui formulir kontak.
            </p>

            <a
              href="{{ route('message.contact') }}"
              class="btn btn-sm btn-primary mt-4 rounded-xl"
            >
              Formulir kontak
            </a>

          </div>

        </div>

      </div>

    </aside>

  </div>

</div>

@endsection
