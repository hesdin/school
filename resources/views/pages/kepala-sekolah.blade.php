@extends('layouts.app')

@section('title', ($teacher['name'] ?? 'Detail Tenaga Pengajar'))

@section('content')
  <!-- Decorative header like the reference -->
  <section class="relative isolate h-56 w-full sm:h-48 md:h-56 lg:h-64">
    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=2069&auto=format&fit=crop"
      alt="Chalkboard" class="absolute inset-0 -z-10 h-full w-full object-cover" />
    <!-- layer gelap tipis untuk keseluruhan -->
    <div class="absolute inset-0 -z-10 bg-black/40"></div>
    <!-- gradient lebih gelap & smooth -->
    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-black/60 via-black/40 to-transparent"></div>
  </section>

  <section class="container mx-auto px-4 pt-10 pb-20 md:pt-14">
    {{-- Breadcrumb opsional --}}
    {{-- @include('partials.breadcrumbs', [
        'items' => [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Profil', 'url' => route('profil')],
            ['label' => 'Tenaga Pengajar', 'url' => route('profil.tenaga')],
            ['label' => $teacher['name'] ?? 'Detail Tenaga Pengajar'],
        ],
    ]) --}}

    <div class="mx-auto max-w-3xl">
      <!-- Profile header -->
      <div class="mb-6 flex items-center gap-4">
        <img src="{{ $teacher['img'] ?? 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=360&auto=format&fit=crop' }}"
          alt="Foto Tenaga Pengajar"
          class="h-20 w-20 rounded-full object-cover ring-4 ring-white shadow md:h-24 md:w-24" />
        <div>
          <div class="flex items-center gap-2">
            <h1 class="text-2xl font-semibold md:text-3xl">{{ $teacher['name'] ?? 'Nama Guru' }}</h1>
            <!-- verified badge -->
            <span class="inline-flex items-center justify-center rounded-full bg-sky-500 p-0.5 text-white"
              title="Terverifikasi">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4">
                <path fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.172 7.707 8.879a1 1 0 10-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd" />
              </svg>
            </span>
          </div>
          <div class="text-slate-600">{{ $teacher['role'] ?? 'Tenaga Pendidik' }}</div>
        </div>
      </div>

      <!-- Description -->
      <div class="mx-auto max-w-3xl space-y-5 leading-relaxed text-slate-700">
        <p>
          Sed hendrerit nibh at lorem imperdiet, vitae luctus neque suscipit. Phasellus vitae finibus lacus. Etiam
          pellentesque pellentesque lorem, et blandit nisl mollis vitae. Quisque lectus augue, luctus eu convallis ut,
          hendrerit non erat. Vestibulum commodo vitae nibh sed pretium. Suspendisse ac nunc porta, vulputate magna vel,
          semper turpis. Vestibulum euismod elit at nisi vestibulum pharetra. Phasellus non dignissim libero. Aenean quis
          magna metus. Nunc in ligula tempus, viverra nibh eget, vulputate augue. Suspendisse suscipit cursus leo in
          mollis. Nunc eget dolor eget arcu viverra venenatis id nec enim. In justo lacus, egestas in venenatis sed,
          placerat in neque.
        </p>
        <p>
          Nunc in vestibulum ipsum. Phasellus aliquam velit eu gravida tincidunt. Duis ipsum lectus, ornare blandit massa
          faucibus, pellentesque vulputate enim. Pellentesque habitant morbi tristique senectus et netus et malesuada
          fames ac turpis egestas. Nulla laoreet felis eget velit consectetur, non pretium ex tincidunt. Nunc et interdum
          nunc, eget tristique quam. Duis sodales vehicula est, non iaculis ligula laoreet in. Vestibulum eleifend vitae
          elit vestibulum varius. Cras tempus imperdiet dui, eget porttitor dolor pharetra ac. Nullam suscipit urna ipsum,
          eu consequat tellus tempus at. Phasellus est purus, ultrices et porttitor non, dignissim vitae ante. In vitae
          libero sem. Nunc vehicula dolor eu tempor venenatis. Nunc nisi purus, ullamcorper vitae lacus id, iaculis
          eleifend enim.
        </p>
      </div>

      <!-- Awards table -->
      <div class="mx-auto mt-8 max-w-3xl overflow-hidden rounded-lg border border-slate-200 bg-white">
        <table class="min-w-full text-left text-sm">
          <thead class="bg-slate-50 text-slate-700">
            <tr>
              <th class="px-4 py-3 font-semibold">Penghargaan</th>
              <th class="w-28 px-4 py-3 text-center font-semibold">Tahun</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-200">
            <tr class="odd:bg-white even:bg-slate-50">
              <td class="px-4 py-3">Finalis Innovative Teacher Competition NTTC 2021</td>
              <td class="px-4 py-3 text-center">2021</td>
            </tr>
            <tr class="odd:bg-white even:bg-slate-50">
              <td class="px-4 py-3">Guru Aktif Literasi dan Pembina Literasi Sekolah</td>
              <td class="px-4 py-3 text-center">2021</td>
            </tr>
            <tr class="odd:bg-white even:bg-slate-50">
              <td class="px-4 py-3">Guru berprestasi Malaysia Teacher Award 2020, Malaysia Innovation Teacher Award
                (MIICA)</td>
              <td class="px-4 py-3 text-center">2020</td>
            </tr>
            <tr class="odd:bg-white even:bg-slate-50">
              <td class="px-4 py-3">Juara 3 Menulis Artikel Tingkat Nasional</td>
              <td class="px-4 py-3 text-center">2020</td>
            </tr>
            <tr class="odd:bg-white even:bg-slate-50">
              <td class="px-4 py-3">Juara 3 Lomba E‑Mobil KI HAJAR DEWANTARA</td>
              <td class="px-4 py-3 text-center">2020</td>
            </tr>
            <tr class="odd:bg-white even:bg-slate-50">
              <td class="px-4 py-3">Pembina Literasi Sekolah</td>
              <td class="px-4 py-3 text-center">2020</td>
            </tr>
            <tr class="odd:bg-white even:bg-slate-50">
              <td class="px-4 py-3">Pemakalah terbaik SPMI</td>
              <td class="px-4 py-3 text-center">2019</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- CTA link -->
      <div class="mt-6 text-center">
        <a href="{{ route('profil.tenaga') }}"
          class="text-[13px] font-semibold tracking-wider text-teal-700 hover:underline">LIHAT GURU LAINNYA</a>
      </div>
  </section>
@endsection
