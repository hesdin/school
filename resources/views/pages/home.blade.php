@extends('layouts.app')

@section('title', 'Sekolah Modern')

@section('content')
    <!-- Hero -->
    <section class="relative isolate min-h-[92vh] text-white">
      <!-- Background image -->
      <img
        src="https://images.unsplash.com/photo-1666533835045-3a1b3dfc3538?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        alt="Siswa" class="absolute inset-0 -z-10 h-full w-full object-cover" />
      <!-- Teal overlay like design -->
      <div class="absolute inset-0 -z-10 bg-teal-900/70"></div>
      <div class="absolute inset-0 -z-10 bg-gradient-to-r from-teal-900/70 via-teal-800/40 to-teal-700/10"></div>

      <div
        class="container mx-auto grid min-h-[92vh] grid-cols-1 items-center gap-8 px-4 md:grid-cols-12 md:gap-10 md:px-8">
        <!-- Left content -->
        <div class="md:col-span-7 lg:col-span-7">
          <div class="mb-6 flex items-center gap-3 text-slate-200/90">
            <span class="inline-block h-6 w-1 rounded bg-amber-500"></span>
            <span class="tracking-wide">WELCOME TO PURITY VII</span>
          </div>
          <h1 class="mb-6 text-3xl font-semibold leading-tight sm:text-4xl md:text-6xl lg:text-7xl">
            Unggul, Mandiri
            <br class="hidden md:block" />
            dan Berbudaya.
          </h1>
          <p class="mb-8 max-w-2xl text-base leading-relaxed text-slate-100/90 sm:mb-10 md:text-lg">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet eleifend nulla. Interdum et
            malesuada fames ac ante ipsum primis in faucibus. Pellentesque in rhoncus quam.
          </p>
          <div class="flex flex-col gap-3 sm:flex-row sm:gap-4">
            <a href="#info"
              class="inline-flex w-full items-center justify-center rounded-md border border-white/70 bg-transparent px-6 py-3 font-semibold text-white shadow hover:bg-white/10 sm:w-auto">
              INFO TERBARU
            </a>
            <a href="#daftar"
              class="inline-flex w-full items-center justify-center rounded-md bg-amber-500 px-6 py-3 font-semibold text-slate-900 shadow hover:bg-amber-600 hover:text-white sm:w-auto">
              DAFTAR ONLINE
            </a>
          </div>
        </div>

        <!-- Right stats -->
        <div class="md:col-span-5 lg:col-span-5">
          <div class="grid max-w-lg grid-cols-1 gap-8 sm:grid-cols-2">
            <!-- Siswa -->
            <div class="">
              <div class="mb-3 h-1 w-10 rounded bg-amber-500"></div>
              <div class="flex items-baseline gap-3">
                <div class="text-4xl font-extrabold md:text-5xl">320</div>
                <div class="italic text-slate-200/90">Siswa</div>
              </div>
              <p class="mt-2 text-slate-100/90">Siswa didik tahun arajan 2025-2026.</p>
            </div>
            <!-- Guru -->
            <div class="">
              <div class="mb-3 h-1 w-10 rounded bg-amber-500"></div>
              <div class="flex items-baseline gap-3">
                <div class="text-4xl font-extrabold md:text-5xl">35</div>
                <div class="italic text-slate-200/90">Guru</div>
              </div>
              <p class="mt-2 text-slate-100/90">Staff Tenaga pengajar professional.</p>
            </div>
          </div>

          <!-- Avatars + link -->
          <div class="mt-8 flex items-center gap-5">
            <div class="flex -space-x-3">
              <img class="h-10 w-10 rounded-full ring-2 ring-white/40 object-cover"
                src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=80&q=60"
                alt="avatar" />
              <img class="h-10 w-10 rounded-full ring-2 ring-white/40 object-cover"
                src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=80&q=60"
                alt="avatar" />
              <img class="h-10 w-10 rounded-full ring-2 ring-white/40 object-cover"
                src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?auto=format&fit=crop&w=80&q=60"
                alt="avatar" />
              <img class="h-10 w-10 rounded-full ring-2 ring-white/40 object-cover"
                src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=80&q=60"
                alt="avatar" />
              <img class="h-10 w-10 rounded-full ring-2 ring-white/40 object-cover"
                src="https://images.unsplash.com/photo-1545996124-0501ebae84d0?auto=format&fit=crop&w=80&q=60"
                alt="avatar" />
            </div>
            <a href="#" class="font-medium text-white hover:text-amber-300">Foto Gallery →</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Highlight cards -->
    <section id="info" class="bg-slate-50 py-12">
      <div class="container mx-auto px-4">
        <div class="grid gap-6 md:grid-cols-3">
          <article class="flex flex-col rounded-xl bg-white p-4 shadow">
            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=600&q=60"
              class="mb-4 h-40 w-full rounded-lg object-cover" alt="berita" />
            <div class="mb-1 text-sm text-slate-500">12 Mei 2024</div>
            <h3 class="mb-2 font-semibold text-slate-800">Kegiatan Donor Darah</h3>
            <p class="text-sm text-slate-600">Siswa mengikuti kegiatan sosial donor darah bersama PMI.</p>
          </article>
          <article class="flex flex-col rounded-xl bg-white p-4 shadow">
            <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=600&q=60"
              class="mb-4 h-40 w-full rounded-lg object-cover" alt="berita" />
            <div class="mb-1 text-sm text-slate-500">3 Mei 2024</div>
            <h3 class="mb-2 font-semibold text-slate-800">Lomba Sains Nasional</h3>
            <p class="text-sm text-slate-600">Tim sekolah meraih juara umum pada ajang bergengsi.</p>
          </article>
          <article class="flex flex-col rounded-xl bg-white p-4 shadow">
            <img src="https://images.unsplash.com/photo-1558021212-51b6ecfa0db9?auto=format&fit=crop&w=600&q=60"
              class="mb-4 h-40 w-full rounded-lg object-cover" alt="berita" />
            <div class="mb-1 text-sm text-slate-500">1 Mei 2024</div>
            <h3 class="mb-2 font-semibold text-slate-800">Pentas Seni</h3>
            <p class="text-sm text-slate-600">Penampilan kreativitas siswa dalam acara tahunan sekolah.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- Program Sekolah -->
    <section class="py-12 sm:py-14 md:py-16">
      <div class="container mx-auto px-4">
        <div class="mb-6 flex items-center justify-between sm:mb-8 md:mb-10">
          <h2 class="text-2xl font-semibold sm:text-3xl">Program Sekolah</h2>
          <a href="#"
            class="rounded-full border border-slate-300 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-slate-50">View
            All</a>
        </div>
        <div class="grid gap-4 sm:gap-6 md:grid-cols-3">
          <!-- Akademik -->
          <article class="flex items-start gap-4 rounded-xl border bg-white p-5 shadow-sm hover:shadow sm:p-6">
            <div
              class="flex h-12 w-12 items-center justify-center rounded-lg bg-amber-100 text-amber-700 font-semibold">A
            </div>
            <div>
              <h3 class="mb-1 text-lg font-semibold">Akademik</h3>
              <p class="mb-2 text-slate-600">Fokus pada pengembangan ilmu dan karakter melalui kurikulum nasional.</p>
              <a href="#" class="text-sm font-medium text-teal-700 hover:underline">Pelajari program →</a>
            </div>
          </article>
          <!-- Kepramukaan -->
          <article class="flex items-start gap-4 rounded-xl border bg-white p-5 shadow-sm hover:shadow sm:p-6">
            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-teal-100 text-teal-700 font-semibold">
              Pr</div>
            <div>
              <h3 class="mb-1 text-lg font-semibold">Kepramukaan</h3>
              <p class="mb-2 text-slate-600">Membentuk siswa disiplin, mandiri, peduli lingkungan dan sosial.</p>
              <a href="#" class="text-sm font-medium text-teal-700 hover:underline">Pelajari program →</a>
            </div>
          </article>
          <!-- Non Akademik -->
          <article class="flex items-start gap-4 rounded-xl border bg-white p-5 shadow-sm hover:shadow sm:p-6">
            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-100 text-blue-700 font-semibold">
              NA</div>
            <div>
              <h3 class="mb-1 text-lg font-semibold">Non-Akademik</h3>
              <p class="mb-2 text-slate-600">Ekskul olahraga, seni, literasi, dan lainnya untuk bakat siswa.</p>
              <a href="#" class="text-sm font-medium text-teal-700 hover:underline">Pelajari program →</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Pengumuman & Berita + Sidebar -->
    <section class="bg-slate-50 py-12 sm:py-14 md:py-16">
      <div class="container mx-auto grid items-start gap-8 px-4 md:grid-cols-12 md:gap-12 md:px-8">
        <!-- Left column: Pengumuman & Berita -->
        <div class="md:col-span-8">
          <!-- Pengumuman header -->
          <div class="mb-4 flex items-center justify-between sm:mb-6">
            <h2 class="text-2xl font-semibold sm:text-3xl">Pengumuman</h2>
            <a href="#"
              class="rounded-full border border-slate-300 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-white">View
              All</a>
          </div>
          <!-- Pengumuman list: 2 columns -->
          <div class="mb-10 grid gap-x-6 gap-y-6 sm:gap-x-8 md:mb-12 md:grid-cols-2">
            <!-- Item -->
            <article class="flex gap-4">
              <img src="https://images.unsplash.com/photo-1461532257246-777de18cd58b?auto=format&fit=crop&w=300&q=60"
                class="h-20 w-28 rounded-lg object-cover" alt="thumb" />
              <div>
                <h3 class="font-semibold leading-snug text-slate-900 hover:underline"><a href="#">Alumni 2009
                    ini sukses lulus dengan nilai tertinggi di kampusnya</a></h3>
                <div class="mt-2 text-sm text-slate-500">Jan. 28, 2024</div>
              </div>
            </article>
            <article class="flex gap-4">
              <img src="https://images.unsplash.com/photo-1502472584811-0a2f2feb8968?auto=format&fit=crop&w=300&q=60"
                class="h-20 w-28 rounded-lg object-cover" alt="thumb" />
              <div>
                <h3 class="font-semibold leading-snug text-slate-900 hover:underline"><a href="#">Cara Memilih
                    Extrakurikuler yang cocok untuk kami</a></h3>
                <div class="mt-2 text-sm text-slate-500">Jan. 28, 2024</div>
              </div>
            </article>
            <article class="flex gap-4">
              <img src="https://images.unsplash.com/photo-1596495578065-6e0763fa1178?auto=format&fit=crop&w=300&q=60"
                class="h-20 w-28 rounded-lg object-cover" alt="thumb" />
              <div>
                <h3 class="font-semibold leading-snug text-slate-900 hover:underline"><a href="#">Rumus
                    matematika yang sering dipakai dan dilupakan</a></h3>
                <div class="mt-2 text-sm text-slate-500">Jan. 28, 2024</div>
              </div>
            </article>
            <article class="flex gap-4">
              <img src="https://images.unsplash.com/photo-1596495578065-6e0763fa1178?auto=format&fit=crop&w=300&q=60"
                class="h-20 w-28 rounded-lg object-cover" alt="thumb" />
              <div>
                <h3 class="font-semibold leading-snug text-slate-900 hover:underline"><a href="#">Manfaat dari
                    Belajar Berkelompok Secara Rutin</a></h3>
                <div class="mt-2 text-sm text-slate-500">Jan. 28, 2024</div>
              </div>
            </article>
            <article class="flex gap-4">
              <img src="https://images.unsplash.com/photo-1596495578065-6e0763fa1178?auto=format&fit=crop&w=300&q=60"
                class="h-20 w-28 rounded-lg object-cover" alt="thumb" />
              <div>
                <h3 class="font-semibold leading-snug text-slate-900 hover:underline"><a href="#">Cara Belajar
                    Berhitung yang Mudah dan Cepat</a></h3>
                <div class="mt-2 text-sm text-slate-500">Jan. 28, 2024</div>
              </div>
            </article>
            <article class="flex gap-4">
              <img src="https://images.unsplash.com/photo-1590959651373-a3db0f38a961?auto=format&fit=crop&w=300&q=60"
                class="h-20 w-28 rounded-lg object-cover" alt="thumb" />
              <div>
                <h3 class="font-semibold leading-snug text-slate-900 hover:underline"><a href="#">Rian Rianto
                    Alumni 2009 Berhasil di Terima di Universitas di London</a></h3>
                <div class="mt-2 text-sm text-slate-500">Jan. 28, 2024</div>
              </div>
            </article>
          </div>

          <!-- Berita Sekolah header -->
          <div class="mb-4 mt-2 flex items-center justify-between sm:mb-6">
            <h2 class="text-2xl font-semibold sm:text-3xl">Berita Sekolah</h2>
            <a href="#"
              class="rounded-full border border-slate-300 px-4 py-2 text-sm font-medium text-slate-700 hover:bg-white">View
              All</a>
          </div>
          <!-- Berita list: stacked -->
          <div class="space-y-5 sm:space-y-6">
            <article class="flex flex-col gap-4 rounded-lg bg-white p-4 shadow-sm hover:shadow sm:flex-row sm:gap-5">
              <img src="https://images.unsplash.com/photo-1461532257246-777de18cd58b?auto=format&fit=crop&w=400&q=60"
                class="h-24 w-full rounded-lg object-cover sm:h-24 sm:w-36 md:h-32 md:w-48" alt="berita" />
              <div class="min-w-0">
                <h3 class="mb-1 text-base font-semibold leading-snug text-slate-900 hover:underline sm:text-lg"><a
                    href="#">Alumni 2009 ini sukses lulus dengan nilai tertinggi di kampusnya</a></h3>
                <p class="text-slate-600 sm:line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Vestibulum commodo arcu massa, ac consequat eros.</p>
                <div class="mt-3 text-sm text-slate-500">
                  Jan. 28, 2024
                  <a href="#" class="ml-4 font-semibold text-teal-700 hover:underline">KEGIATAN ALUMNI</a>
                </div>
              </div>
            </article>
            <article class="flex flex-col gap-4 rounded-lg bg-white p-4 shadow-sm hover:shadow sm:flex-row sm:gap-5">
              <img src="https://images.unsplash.com/photo-1502472584811-0a2f2feb8968?auto=format&fit=crop&w=400&q=60"
                class="h-24 w-full rounded-lg object-cover sm:h-24 sm:w-36 md:h-32 md:w-48" alt="berita" />
              <div class="min-w-0">
                <h3 class="mb-1 text-base font-semibold leading-snug text-slate-900 hover:underline sm:text-lg"><a
                    href="#">Cara Memilih Extrakurikuler yang cocok untuk kami</a></h3>
                <p class="text-slate-600 sm:line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Vestibulum commodo arcu massa, ac consequat eros.</p>
                <div class="mt-3 text-sm text-slate-500">
                  Jan. 28, 2024
                  <a href="#" class="ml-4 font-semibold text-teal-700 hover:underline">PRESTASI</a>
                </div>
              </div>
            </article>
          </div>
        </div>

        <!-- Right sidebar -->
        <aside class="md:col-span-4 md:sticky md:top-24">
          <!-- Quote -->
          <figure class="mb-8 rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-100">
            <div class="mb-3 text-3xl text-slate-300">“</div>
            <blockquote class="italic text-slate-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
              ut fermentum orci. Praesent tortor tortor, volutpat a lacinia nec, consequat in est.</blockquote>
          </figure>
          <!-- Principal -->
          <div class="mb-8 flex items-center gap-4 rounded-xl bg-white p-5 shadow-sm ring-1 ring-slate-100">
            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=120&q=60"
              class="h-14 w-14 rounded-full object-cover" alt="kepala sekolah" />
            <div>
              <div class="flex items-center gap-2">
                <div class="font-semibold text-slate-900">Karen Swandewi</div>
                <span
                  class="inline-flex h-4 w-4 items-center justify-center rounded-full bg-sky-500 text-[10px] text-white">✔</span>
              </div>
              <div class="text-sm text-slate-500">Kepala Sekolah</div>
            </div>
          </div>
          <!-- Keunggulan card -->
          <div class="rounded-xl bg-teal-800 p-6 text-white shadow-sm">
            <div class="mb-4 text-lg font-semibold tracking-wide">KEUNGGULAN</div>
            <ul class="space-y-4">
              <li class="flex gap-3">
                <span
                  class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded bg-amber-500 text-sm font-bold text-slate-900">1</span>
                <p>Biaya pendidikan gratis<br />Suspendisse gravida eleifend erat, egestas</p>
              </li>
              <li class="flex gap-3">
                <span
                  class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded bg-amber-500 text-sm font-bold text-slate-900">2</span>
                <p>Fasilitas lengkap gravida eleifend erat, egestas</p>
              </li>
              <li class="flex gap-3">
                <span
                  class="mt-1 inline-flex h-6 w-6 items-center justify-center rounded bg-amber-500 text-sm font-bold text-slate-900">3</span>
                <p>Guru bersertifikasi egestas suspendisse gravida eleifend</p>
              </li>
            </ul>
          </div>
        </aside>
      </div>
    </section>

    <!-- Tenaga Pengajar -->
    <section class="py-12">
      <div class="container mx-auto px-4">
        <h2 class="mb-8 text-center text-3xl font-semibold">Tenaga Pengajar</h2>
        <div class="flex gap-6 overflow-x-auto pb-4">
          <div class="min-w-[200px] rounded-xl bg-white p-4 text-center shadow">
            <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?auto=format&fit=crop&w=200&q=60"
              class="mx-auto mb-4 h-32 w-32 rounded-full object-cover" alt="guru" />
            <h3 class="font-medium">Budi Santoso</h3>
            <p class="text-sm text-slate-500">Guru Matematika</p>
          </div>
          <div class="min-w-[200px] rounded-xl bg-white p-4 text-center shadow">
            <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?auto=format&fit=crop&w=200&q=60"
              class="mx-auto mb-4 h-32 w-32 rounded-full object-cover" alt="guru" />
            <h3 class="font-medium">Siti Aminah</h3>
            <p class="text-sm text-slate-500">Guru Bahasa</p>
          </div>
          <div class="min-w-[200px] rounded-xl bg-white p-4 text-center shadow">
            <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=200&q=60"
              class="mx-auto mb-4 h-32 w-32 rounded-full object-cover" alt="guru" />
            <h3 class="font-medium">Rahma Wijaya</h3>
            <p class="text-sm text-slate-500">Guru IPA</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Pendaftaran -->
    <section id="daftar" class="bg-gradient-to-r from-teal-900 to-teal-700 py-16 text-center text-white">
      <h2 class="mb-4 text-3xl font-semibold">Bergabung dengan Sekolah Kami</h2>
      <p class="mb-8">Daftar online sekarang dan raih masa depan gemilang bersama kami.</p>
      <a href="#"
        class="rounded-md bg-amber-500 px-8 py-3 font-medium text-white shadow hover:bg-amber-600">Daftar Online</a>
    </section>

    <!-- Footer is provided by layout -->
@endsection
