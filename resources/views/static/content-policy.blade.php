@extends('layouts.daisy')

@php
  seo()->locale('id_ID')
    ->title('Pedoman Konten')
    ->description('Pedoman konten '.config('app.name').' yang menjelaskan jenis konten jadwal lari yang diperbolehkan, dilarang, serta kebijakan moderasi dan pelaporan.');
@endphp

@section('content')

<div class="space-y-8">

  <section class="overflow-hidden rounded-3xl bg-gradient-to-br from-primary via-primary-focus to-secondary text-primary-content shadow-sm">

    <div class="px-6 py-10 lg:px-10 lg:py-14">

      <div class="max-w-3xl">

        <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-medium backdrop-blur">
          <x-icons.line.shield-check class="w-4 h-4" />
          <span>
            Kebijakan & moderasi
          </span>
        </div>

        <h1 class="mt-5 text-4xl font-bold tracking-tight leading-tight lg:text-5xl">
          Pedoman Konten
        </h1>

        <p class="mt-6 text-base leading-8 text-primary-content/85 lg:text-lg">
          Pedoman untuk menjaga kualitas, akurasi, dan kenyamanan pengguna dalam mengakses informasi jadwal lari di {{ config('app.name') }}.
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
            <x-icons.line.file-text class="w-5 h-5" />
          </div>

          <div class="min-w-0">

            <h2 class="text-xl font-bold">
              Ruang Lingkup Konten
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed">
              <p>
                Pedoman ini berlaku untuk seluruh informasi jadwal lari yang ditampilkan di {{ config('app.name') }}, termasuk judul, deskripsi, lokasi, waktu pelaksanaan, hingga sumber informasi event.
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
              Konten yang Diperbolehkan
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed [&_ul]:list-disc [&_ul]:pl-6">

              <ul>
                <li>Informasi jadwal lari yang bersifat publik dan dapat diakses umum</li>
                <li>Jadwal lari dari penyelenggara, komunitas, atau sumber terbuka lainnya</li>
                <li>Informasi pendukung seperti lokasi, waktu pelaksanaan, dan kontak penyelenggara</li>
                <li>Konten yang disajikan dengan itikad baik dan tidak menyesatkan</li>
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
              Konten yang Dilarang
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed [&_ul]:list-disc [&_ul]:pl-6">

              <ul>
                <li>Informasi jadwal lari yang palsu atau dimanipulasi</li>
                <li>Konten yang melanggar hukum atau hak pihak lain</li>
                <li>Spam, penipuan, atau promosi yang menyesatkan</li>
                <li>Konten yang mengandung ujaran kebencian atau diskriminasi</li>
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
                {{ config('app.name') }} berupaya menyajikan informasi jadwal lari seakurat mungkin, namun kami tidak menjamin seluruh informasi selalu lengkap atau terbaru.
              </p>

              <p>
                Pengguna tetap disarankan melakukan verifikasi langsung kepada penyelenggara event sebelum mengikuti kegiatan.
              </p>

            </div>

          </div>

        </div>

      </section>

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-4">

          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-info/10 text-info shrink-0">
            <x-icons.line.flag-2 class="w-5 h-5" />
          </div>

          <div class="min-w-0">

            <h2 class="text-xl font-bold">
              Pelaporan & Moderasi
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed [&_ul]:list-disc [&_ul]:pl-6">

              <p>
                Pengguna dapat melaporkan konten yang bermasalah melalui fitur pelaporan atau formulir kontak yang tersedia.
              </p>

              <ul>
                <li>Menyunting informasi yang tidak akurat</li>
                <li>Menyembunyikan atau menghapus konten</li>
                <li>Membatasi akses terhadap konten tertentu</li>
              </ul>

              <p>
                Tindakan moderasi dilakukan berdasarkan pertimbangan internal platform.
              </p>

            </div>

          </div>

        </div>

      </section>

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-4">

          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary shrink-0">
            <x-icons.line.information class="w-5 h-5" />
          </div>

          <div class="min-w-0">

            <h2 class="text-xl font-bold">
              Batas Tanggung Jawab
            </h2>

            <div class="prose prose-sm mt-3 max-w-none leading-relaxed">

              <p>
                {{ config('app.name') }} bukan penyelenggara event dan tidak bertanggung jawab atas perubahan, pembatalan, atau pelaksanaan kegiatan lari yang ditampilkan.
              </p>

              <p>
                Penggunaan informasi jadwal lari sepenuhnya menjadi tanggung jawab pengguna.
              </p>

            </div>

          </div>

        </div>

      </section>

    </article>

    <aside class="space-y-4">

      <div class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-3">

          <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-primary/10 text-primary shrink-0">
            <x-icons.line.refresh class="w-5 h-5" />
          </div>

          <div>

            <h3 class="font-semibold">
              Pedoman dapat berubah
            </h3>

            <p class="mt-1 text-sm leading-6 text-base-content/65">
              Pedoman ini dapat diperbarui sewaktu-waktu mengikuti perkembangan platform.
            </p>

          </div>

        </div>

      </div>

      <div class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-3">

          <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-success/10 text-success shrink-0">
            <x-icons.line.message-2 class="w-5 h-5" />
          </div>

          <div>

            <h3 class="font-semibold">
              Hubungi kami
            </h3>

            <p class="mt-1 text-sm leading-6 text-base-content/65">
              Jika menemukan konten bermasalah, silakan hubungi kami melalui formulir kontak.
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
