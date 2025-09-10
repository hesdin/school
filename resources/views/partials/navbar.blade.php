<header
  x-data="{ open: false, scrolled: false }"
  x-init="scrolled = window.scrollY > 10; window.addEventListener('scroll', () => { scrolled = window.scrollY > 10 })"
  @scroll.window="scrolled = window.scrollY > 10"
  :class="scrolled ? 'bg-white/70 backdrop-blur-md shadow-md' : 'bg-white shadow'"
  class="fixed inset-x-0 top-0 z-50 border-b-4 border-amber-500 transition-all duration-300">
  <nav class="container mx-auto flex items-center justify-between px-4 py-3 md:px-8">
    <!-- Brand -->
    <a href="{{ route('home') }}" class="text-teal-700 text-xl font-semibold">SekolahKu</a>

    <!-- Desktop nav -->
    <ul class="hidden items-center gap-6 md:flex">
      <li>
        <a href="{{ route('home') }}"
           class="hover:text-teal-600 {{ request()->routeIs('home') ? 'text-teal-700 font-semibold' : '' }}">Home</a>
      </li>
      <li class="relative" x-data="{ openProfil: false }">
        <button @click="openProfil = !openProfil" @keydown.escape.window="openProfil = false"
                :class="openProfil || {{ request()->routeIs('profil*') ? 'true' : 'false' }} ? 'text-teal-700 font-semibold' : ''"
                class="inline-flex items-center gap-1 hover:text-teal-600">
          <span>Profil</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.937a.75.75 0 111.08 1.04l-4.24 4.5a.75.75 0 01-1.08 0l-4.24-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>
        <div x-show="openProfil" x-transition @click.outside="openProfil = false"
             class="absolute right-0 mt-2 w-56 rounded-md bg-white py-2 text-sm shadow-lg ring-1 ring-black/5 z-50">
          <a href="{{ route('profil') }}" class="block px-3 py-2 hover:bg-slate-50">Profile Sekolah</a>
          <a href="{{ route('profil.fasilitas') }}" class="block px-3 py-2 hover:bg-slate-50">Fasilitas Sekolah</a>
          <a href="{{ route('profil.kepala') }}" class="block px-3 py-2 hover:bg-slate-50">Kepala Sekolah</a>
          <a href="{{ route('profil.tenaga') }}" class="block px-3 py-2 hover:bg-slate-50">Tenaga Pengajar</a>
        </div>
      </li>
      <li>
        <a href="{{ route('program') }}"
           class="hover:text-teal-600 {{ request()->routeIs('program') ? 'text-teal-700 font-semibold' : '' }}">Program</a>
      </li>
      <li>
        <a href="{{ route('galeri') }}"
           class="hover:text-teal-600 {{ request()->routeIs('galeri') ? 'text-teal-700 font-semibold' : '' }}">Galeri</a>
      </li>
      <li class="relative" x-data="{ openInformasi: false }">
        <button @click="openInformasi = !openInformasi" @keydown.escape.window="openInformasi = false"
                :class="openInformasi || {{ request()->routeIs('informasi*') ? 'true' : 'false' }} ? 'text-teal-700 font-semibold' : ''"
                class="inline-flex items-center gap-1 hover:text-teal-600">
          <span>Informasi</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.937a.75.75 0 111.08 1.04l-4.24 4.5a.75.75 0 01-1.08 0l-4.24-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>
        <div x-show="openInformasi" x-transition @click.outside="openInformasi = false"
             class="absolute right-0 mt-2 w-56 rounded-md bg-white py-2 text-sm shadow-lg ring-1 ring-black/5 z-50">
          <a href="{{ route('informasi.artikel') }}" class="block px-3 py-2 hover:bg-slate-50">Artikel</a>
          <a href="{{ route('informasi.kegiatan') }}" class="block px-3 py-2 hover:bg-slate-50">Kegiatan Alumni</a>
          <a href="{{ route('informasi.pengumuman') }}" class="block px-3 py-2 hover:bg-slate-50">Pengumuman</a>
        </div>
      </li>
    </ul>

    <!-- CTA desktop -->
    <a href="{{ route('informasi') }}"
      class="ml-4 hidden rounded-md bg-amber-500 px-4 py-2 text-sm font-medium text-white shadow hover:bg-amber-600 md:inline-flex">Daftar
      Online</a>

    <!-- Hamburger button (mobile) -->
    <button @click="open = !open" :aria-expanded="open" aria-controls="mobile-menu"
            class="inline-flex items-center justify-center rounded-md p-2 text-slate-700 hover:bg-slate-100 md:hidden"
            aria-label="Toggle navigation">
      <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </nav>

  <!-- Mobile menu -->
  <div id="mobile-menu" class="md:hidden" x-show="open" x-transition @click.outside="open = false">
    <div class="container mx-auto px-4 pb-4">
      <div class="mt-2 space-y-1 rounded-md border bg-white p-2 shadow">
        <a href="{{ route('home') }}"
           class="block rounded px-3 py-2 {{ request()->routeIs('home') ? 'bg-teal-50 text-teal-700 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">Home</a>
        <div x-data="{ openProfil: {{ request()->routeIs('profil*') ? 'true' : 'false' }} }" class="rounded">
          <button @click="openProfil = !openProfil" class="flex w-full items-center justify-between rounded px-3 py-2 text-left text-slate-700 hover:bg-slate-50">
            <span>Profil</span>
            <svg :class="openProfil ? 'rotate-180' : ''" class="h-4 w-4 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.937a.75.75 0 111.08 1.04l-4.24 4.5a.75.75 0 01-1.08 0l-4.24-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>
          <div x-show="openProfil" x-transition class="mt-1 space-y-1 pl-2">
            <a href="{{ route('profil') }}" class="block rounded px-3 py-2 {{ request()->routeIs('profil') ? 'bg-teal-50 text-teal-700 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">Profile Sekolah</a>
            <a href="{{ route('profil.fasilitas') }}" class="block rounded px-3 py-2 {{ request()->routeIs('profil.fasilitas') ? 'bg-teal-50 text-teal-700 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">Fasilitas Sekolah</a>
            <a href="{{ route('profil.kepala') }}" class="block rounded px-3 py-2 {{ request()->routeIs('profil.kepala') ? 'bg-teal-50 text-teal-700 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">Kepala Sekolah</a>
            <a href="{{ route('profil.tenaga') }}" class="block rounded px-3 py-2 {{ request()->routeIs('profil.tenaga') ? 'bg-teal-50 text-teal-700 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">Tenaga Pengajar</a>
          </div>
        </div>
        <a href="{{ route('program') }}"
           class="block rounded px-3 py-2 {{ request()->routeIs('program') ? 'bg-teal-50 text-teal-700 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">Program</a>
        <a href="{{ route('galeri') }}"
           class="block rounded px-3 py-2 {{ request()->routeIs('galeri') ? 'bg-teal-50 text-teal-700 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">Galeri</a>
        <div x-data="{ openInformasi: {{ request()->routeIs('informasi*') ? 'true' : 'false' }} }" class="rounded">
          <button @click="openInformasi = !openInformasi" class="flex w-full items-center justify-between rounded px-3 py-2 text-left text-slate-700 hover:bg-slate-50">
            <span>Informasi</span>
            <svg :class="openInformasi ? 'rotate-180' : ''" class="h-4 w-4 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.937a.75.75 0 111.08 1.04l-4.24 4.5a.75.75 0 01-1.08 0l-4.24-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>
          <div x-show="openInformasi" x-transition class="mt-1 space-y-1 pl-2">
            <a href="{{ route('informasi.artikel') }}" class="block rounded px-3 py-2 {{ request()->routeIs('informasi.artikel') ? 'bg-teal-50 text-teal-700 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">Artikel</a>
            <a href="{{ route('informasi.kegiatan') }}" class="block rounded px-3 py-2 {{ request()->routeIs('informasi.kegiatan') ? 'bg-teal-50 text-teal-700 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">Kegiatan Alumni</a>
            <a href="{{ route('informasi.pengumuman') }}" class="block rounded px-3 py-2 {{ request()->routeIs('informasi.pengumuman') ? 'bg-teal-50 text-teal-700 font-semibold' : 'text-slate-700 hover:bg-slate-50' }}">Pengumuman</a>
          </div>
        </div>
        <div class="px-2 pt-2">
          <a href="{{ route('informasi') }}" class="inline-flex w-full items-center justify-center rounded-md bg-amber-500 px-4 py-2 text-sm font-medium text-white shadow hover:bg-amber-600">Daftar Online</a>
        </div>
      </div>
    </div>
  </div>

  @stack('navbar')
</header>
