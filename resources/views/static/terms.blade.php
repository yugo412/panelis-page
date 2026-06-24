@extends('layouts.daisy')

@php
  seo()->locale('id_ID')
    ->title('Syarat dan Ketentuan Penggunaan')
    ->description('Halaman ini menjelaskan syarat dan ketentuan penggunaan situs web '.config('app.name').', termasuk tanggung jawab pengguna dan batasan layanan jadwal lari.');
@endphp

@section('content')

<div class="space-y-8">

  <section class="overflow-hidden rounded-3xl bg-gradient-to-br from-primary via-primary-focus to-secondary text-primary-content shadow-sm">

    <div class="px-6 py-10 lg:px-10 lg:py-14">

      <div class="max-w-3xl">

        <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-medium backdrop-blur">
          <x-icons.line.file-text class="w-4 h-4" />
          <span>
            Ketentuan penggunaan
          </span>
        </div>

        <h1 class="mt-5 text-4xl font-bold tracking-tight leading-tight lg:text-5xl">
          Syarat & Ketentuan
        </h1>

        <p class="mt-6 text-base leading-8 text-primary-content/85 lg:text-lg">
          Ketentuan yang mengatur penggunaan layanan {{ config('app.name') }}, termasuk hak, tanggung jawab, dan batasan penggunaan platform jadwal lari.
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

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed">

              <p>
                {{ config('app.name') }} menyediakan platform untuk mengakses, menyimpan, dan membagikan informasi jadwal lari yang bersifat publik.
              </p>

              <p>
                Informasi event dapat berasal dari berbagai sumber dan tidak selalu dikelola langsung oleh kami.
              </p>

            </div>

          </div>

        </div>

      </section>

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-4">

          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-success/10 text-success shrink-0">
            <x-icons.line.checkbox-circle class="w-5 h-5" />
          </div>

          <div class="min-w-0">

            <h2 class="text-xl font-bold">
              Penggunaan yang Diperbolehkan
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed [&_ul]:list-disc [&_ul]:pl-6">

              <ul>
                <li>Mencari dan melihat jadwal lari</li>
                <li>Menyimpan jadwal sebagai favorit</li>
                <li>Membagikan event kepada pengguna lain</li>
                <li>Mengekspor jadwal ke kalender pribadi</li>
              </ul>

            </div>

          </div>

        </div>

      </section>

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-4">

          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-error/10 text-error shrink-0">
            <x-icons.line.alert class="w-5 h-5" />
          </div>

          <div class="min-w-0">

            <h2 class="text-xl font-bold">
              Larangan Penggunaan
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed [&_ul]:list-disc [&_ul]:pl-6">

              <ul>
                <li>Menyalahgunakan informasi untuk tujuan melanggar hukum</li>
                <li>Menyebarkan informasi palsu atau menyesatkan</li>
                <li>Mengganggu keamanan dan operasional layanan</li>
                <li>Menggunakan sistem otomatis tanpa izin</li>
              </ul>

            </div>

          </div>

        </div>

      </section>

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-4">

          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-warning/10 text-warning shrink-0">
            <x-icons.line.search-eye class="w-5 h-5" />
          </div>

          <div class="min-w-0">

            <h2 class="text-xl font-bold">
              Akurasi Informasi
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed">

              <p>
                Kami berupaya menyajikan informasi jadwal lari seakurat mungkin, namun tidak menjamin seluruh data selalu lengkap, terbaru, atau bebas kesalahan.
              </p>

              <p>
                Pengguna disarankan untuk melakukan verifikasi langsung kepada penyelenggara event sebelum mengikuti kegiatan.
              </p>

            </div>

          </div>

        </div>

      </section>

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-4">

          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-info/10 text-info shrink-0">
            <x-icons.line.shield-check class="w-5 h-5" />
          </div>

          <div class="min-w-0">

            <h2 class="text-xl font-bold">
              Moderasi Konten
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed [&_ul]:list-disc [&_ul]:pl-6">

              <p>
                Kami berhak menyunting, membatasi, atau menghapus konten yang dianggap melanggar kebijakan platform.
              </p>

              <ul>
                <li>Konten yang melanggar hukum</li>
                <li>Konten yang dilaporkan pengguna lain</li>
                <li>Konten yang bertentangan dengan pedoman platform</li>
              </ul>

            </div>

          </div>

        </div>

      </section>

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-4">

          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary shrink-0">
            <x-icons.line.alert class="w-5 h-5" />
          </div>

          <div class="min-w-0">

            <h2 class="text-xl font-bold">
              Disclaimer & Batas Tanggung Jawab
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed">

              <p>
                Informasi jadwal lari di {{ config('app.name') }} disediakan sebagaimana adanya dan hanya untuk tujuan informasi.
              </p>

              <p>
                {{ config('app.name') }} bukan penyelenggara event dan tidak bertanggung jawab atas perubahan jadwal, pembatalan kegiatan, atau kerugian yang timbul akibat penggunaan informasi pada platform.
              </p>

            </div>

          </div>

        </div>

      </section>

    </article>

    <aside class="space-y-4">

      <div class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-3">

          <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-warning/10 text-warning shrink-0">
            <x-icons.line.refresh class="w-5 h-5" />
          </div>

          <div>

            <h3 class="font-semibold">
              Ketentuan dapat berubah
            </h3>

            <p class="mt-1 text-sm leading-6 text-base-content/65">
              Kami dapat memperbarui layanan dan ketentuan penggunaan sewaktu-waktu sesuai kebutuhan platform.
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
              Jika memiliki pertanyaan atau masukan terkait syarat penggunaan, silakan hubungi kami melalui formulir kontak.
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
