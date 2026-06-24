@extends('layouts.daisy')

@php
  seo()->locale('id_ID')
    ->title('Tentang '. config('app.name'), 'Direktori Jadwal Lari di Indonesia')
    ->description('Situs web '.config('app.name').' adalah platform yang membantu pelari menemukan, menyimpan, dan membagikan jadwal lari dengan mudah.')
@endphp

@section('content')

<div class="space-y-8">

  <section class="overflow-hidden rounded-3xl bg-gradient-to-br from-primary via-primary-focus to-secondary text-primary-content shadow-sm">

    <div class="px-6 py-10 lg:px-10 lg:py-14">

      <div class="max-w-3xl">

        <div class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-medium backdrop-blur">
          <x-icons.line.information class="w-4 h-4" />
          <span>
            Tentang platform
          </span>
        </div>

        <h1 class="mt-5 text-4xl font-bold tracking-tight leading-tight lg:text-5xl">
          Tentang {{ config('app.name') }}
        </h1>

        <p class="mt-6 text-base leading-8 text-primary-content/85 lg:text-lg">
          Platform untuk membantu pelari menemukan, menyimpan, dan membagikan jadwal lari dengan lebih mudah, cepat, dan terstruktur.
        </p>

      </div>

    </div>

  </section>

  <div class="grid gap-6 lg:grid-cols-[1fr_320px]">

    <article class="space-y-6">

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="prose prose-sm max-w-none leading-relaxed [&_p]:my-4 [&_ul]:my-4 [&_ol]:my-4 [&_li]:my-1 [&_ul]:list-disc [&_ul]:pl-6">

          <p>
            Situs web <strong>{{ config('app.name') }}</strong> dibuat untuk membantu pelari menemukan informasi jadwal lari dalam satu tempat yang lebih rapi dan mudah diakses.
          </p>

          <p>
            Kami percaya informasi event olahraga seharusnya lebih mudah ditemukan, tidak tersebar di banyak platform, dan tetap nyaman diakses baik dari desktop maupun mobile.
          </p>

        </div>

      </section>

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-4">

          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary shrink-0">
            <x-icons.line.calendar-event class="w-5 h-5" />
          </div>

          <div>

            <h2 class="text-xl font-bold">
              Apa yang bisa dilakukan?
            </h2>

            <div class="prose prose-sm mt-3 max-w-none [&_ul]:list-disc [&_ul]:pl-6">

              <ul>
                <li>Menjelajah jadwal lari dari berbagai daerah</li>
                <li>Menyimpan event favorit</li>
                <li>Membagikan event ke komunitas lain</li>
                <li>Mengekspor jadwal ke kalender pribadi</li>
              </ul>

            </div>

          </div>

        </div>

      </section>

      <section class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-start gap-4">

          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary shrink-0">
            <x-icons.line.users class="w-5 h-5" />
          </div>

          <div>

            <h2 class="text-xl font-bold">
              Untuk siapa?
            </h2>

            <div class="prose prose-sm mt-3 max-w-none [&_ul]:list-disc [&_ul]:pl-6">

              <ul>
                <li>Pelari yang mencari event dengan cepat</li>
                <li>Komunitas yang ingin membagikan kegiatan</li>
                <li>Fotografer event olahraga</li>
                <li>Siapa pun yang tertarik dengan dunia lari</li>
              </ul>

            </div>

          </div>

        </div>

      </section>

    </article>

    <aside class="space-y-4">

      <div class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-center gap-3">

          <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-success/10 text-success">
            <x-icons.line.shield-check class="w-5 h-5" />
          </div>

          <div>

            <h3 class="font-semibold">
              Fokus pada kualitas
            </h3>

            <p class="mt-1 text-sm leading-6 text-base-content/65">
              Informasi jadwal terus diperbarui dan diverifikasi secara bertahap.
            </p>

          </div>

        </div>

      </div>

      <div class="rounded-3xl border border-base-300 bg-base-100 p-6 shadow-sm">

        <div class="flex items-center gap-3">

          <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-primary/10 text-primary">
            <x-icons.line.rocket class="w-5 h-5" />
          </div>

          <div>

            <h3 class="font-semibold">
              Terus berkembang
            </h3>

            <p class="mt-1 text-sm leading-6 text-base-content/65">
              Fitur baru akan terus ditambahkan untuk membantu komunitas lari.
            </p>

          </div>

        </div>

      </div>

    </aside>

  </div>

</div>

@endsection
