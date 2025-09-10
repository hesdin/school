<footer class="bg-teal-900/95 text-slate-100">
  <div class="container mx-auto px-4 py-14 md:py-16">
    <div class="grid gap-10 md:grid-cols-12">
      <!-- Brand + intro -->
      <div class="md:col-span-4">
        <div class="mb-6 flex items-center gap-3">
          <!-- Simple shield logo -->
          <span class="inline-flex h-12 w-12 items-center justify-center rounded-md bg-white/10 ring-1 ring-white/20">
            <svg viewBox="0 0 24 24" class="h-7 w-7 text-white" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M12 3l7 3v6c0 4.418-3.582 8-8 8s-8-3.582-8-8V6l9-3z" stroke-linejoin="round" />
              <path d="M9.5 12l2 2 3-4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </span>
          <div>
            <div class="text-xl font-semibold leading-tight">PURITY SCHOOL</div>
            <div class="text-[13px] tracking-wide text-slate-200">INTERNATIONAL SCHOOL</div>
          </div>
        </div>
        <p class="max-w-md text-slate-100/90">
          Unggul, Mandiri dan Berbudaya. Lorem ipsum dolor sit amet, consectetur adipiscing Phasellus sit amet
          eleifend nulla.
        </p>
      </div>

      <!-- Info Update -->
      <div class="md:col-span-3">
        <h3 class="text-2xl font-semibold">Info Update</h3>
        <div class="mt-3 h-px w-24 bg-white/20"></div>
        <ul class="mt-6 space-y-4">
          <li class="flex gap-4">
            <span
              class="inline-flex h-7 w-8 rounded-full items-center justify-center bg-amber-500 text-sm font-bold text-slate-900">1</span>
            <a href="#" class="leading-snug hover:underline">Alumni 2009 ini sukses lulus dengan nilai tertinggi
              di kampusnya</a>
          </li>
          <li class="flex gap-4">
            <span
              class="inline-flex h-7 w-8 rounded-full items-center justify-center bg-amber-500 text-sm font-bold text-slate-900">2</span>
            <a href="#" class="leading-snug hover:underline">Cara Memilih Extrakurikuler yang cocok untuk kami</a>
          </li>
          <li class="flex gap-4">
            <span
              class="inline-flex h-7 w-8 rounded-full items-center justify-center bg-amber-500 text-sm font-bold text-slate-900">3</span>
            <a href="#" class="leading-snug hover:underline">Rumus matematika yang sering di pakai dan di
              lupakan</a>
          </li>
        </ul>
      </div>

      <!-- Kontak Info -->
      <div class="md:col-span-3">
        <h3 class="text-2xl font-semibold">Kontak Info</h3>
        <div class="mt-3 h-px w-24 bg-white/20"></div>
        <div class="mt-6 space-y-4">
          <p class="max-w-xs text-slate-100/90">Jl. Ngurah Rai-Gianyar, Gianyar, Kec. Gianyar, Kabupaten Gianyar, Bali
            80511</p>
          <div class="flex items-center gap-3">
            <svg class="h-5 w-5 text-white/80" fill="none" stroke="currentColor" stroke-width="1.6"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2 5.5C2 4.12 3.12 3 4.5 3h1.3c.54 0 1.01.35 1.16.86l.77 2.56c.13.44-.02.91-.38 1.2l-1.06.88a.75.75 0 00-.18.96 13.8 13.8 0 005.73 5.73.75.75 0 00.96-.18l.88-1.06c.29-.36.76-.51 1.2-.38l2.56.77c.51.15.86.62.86 1.16v1.3A2.5 2.5 0 0118.5 21h-1C9.6 21 3 14.4 3 6.5v-1z" />
            </svg>
            <span>0365 788 899</span>
          </div>
          <div class="flex items-center gap-3">
            <svg class="h-5 w-5 text-white/80" fill="none" stroke="currentColor" stroke-width="1.6"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6l8 6 8-6M4 6h16v12H4z" />
            </svg>
            <span>info@sekolah.ac.id</span>
          </div>
          <div class="flex items-center gap-3">
            <svg class="h-5 w-5 text-white/80" fill="none" stroke="currentColor" stroke-width="1.6"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 11a4 4 0 100-8 4 4 0 000 8zm0 2c-4.418 0-8 2.239-8 5v2h16v-2c0-2.761-3.582-5-8-5z" />
            </svg>
            <a href="#" class="hover:underline">Google Map</a>
          </div>
        </div>
      </div>

      <!-- Navigasi -->
      <div class="md:col-span-2">
        <h3 class="text-2xl font-semibold">Navigasi</h3>
        <div class="mt-3 h-px w-24 bg-white/20"></div>
        <ul class="mt-6 space-y-3">
          <li><a class="inline-flex items-center gap-2 hover:underline" href="{{ route('profil') }}"><span>→</span>
              Profil Sekolah</a></li>
          <li><a class="inline-flex items-center gap-2 hover:underline" href="{{ route('galeri') }}"><span>→</span>
              Gallery</a></li>
          <li><a class="inline-flex items-center gap-2 hover:underline" href="{{ route('informasi') }}"><span>→</span>
              Pengumuman</a></li>
          <li><a class="inline-flex items-center gap-2 hover:underline" href="{{ route('informasi') }}"><span>→</span>
              Kontak Sekolah</a></li>
          <li><a class="inline-flex items-center gap-2 hover:underline" href="{{ route('informasi') }}"><span>→</span>
              Daftar Guru</a></li>
        </ul>
      </div>
    </div>

    <!-- Divider + copyright -->
    <div class="mt-12 border-t border-white/15 pt-6 text-center text-sm text-slate-100/90">
      Copyright ©{{ date('Y') }} — <span class="font-semibold">GP Purity VII School</span>
    </div>
  </div>
  @stack('footer')
</footer>
