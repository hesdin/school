@extends('layouts.app')

@section('title', 'Artikel')

@section('content')
  <!-- Hero -->
  <section class="relative overflow-hidden bg-teal-800/90">
    <div class="container mx-auto px-4 py-12 md:py-16">
      <h1 class="text-3xl md:text-4xl font-semibold text-white">Artikel</h1>
      <p class="mt-2 text-teal-100">Kumpulan artikel tentang informasi sekolah terbaru</p>
    </div>
    <!-- Decorative circles (simple) -->
    <div class="pointer-events-none absolute inset-y-0 right-0 hidden w-1/3 md:block">
      <div class="absolute right-10 top-6 h-20 w-20 rounded-full border border-teal-300/30"></div>
      <div class="absolute right-16 top-24 h-10 w-10 rounded-full border border-teal-300/30"></div>
      <div class="absolute right-24 top-40 grid grid-cols-3 gap-2 opacity-40">
        <span class="h-2 w-2 rounded-full bg-teal-200/20"></span>
        <span class="h-2 w-2 rounded-full bg-teal-200/20"></span>
        <span class="h-2 w-2 rounded-full bg-teal-200/20"></span>
        <span class="h-2 w-2 rounded-full bg-teal-200/20"></span>
        <span class="h-2 w-2 rounded-full bg-teal-200/20"></span>
        <span class="h-2 w-2 rounded-full bg-teal-200/20"></span>
        <span class="h-2 w-2 rounded-full bg-teal-200/20"></span>
        <span class="h-2 w-2 rounded-full bg-teal-200/20"></span>
        <span class="h-2 w-2 rounded-full bg-teal-200/20"></span>
      </div>
    </div>
  </section>

  <!-- Content -->
  <section class="container mx-auto px-4 py-10 md:py-14">
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
      <!-- Articles list -->
      <div class="space-y-6 lg:col-span-2">
        <!-- Card 1 -->
        <article
          class="flex flex-col gap-4 rounded-lg border border-slate-200 bg-white p-4 shadow-sm md:flex-row md:items-start">
          <a href="{{ route('informasi.artikel.detail') }}">
            <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?q=80&w=1200&auto=format&fit=crop"
              alt="Siswa belajar berkelompok" class="h-44 w-full rounded-md object-cover md:h-32 md:w-48" />
          </a>
          <div class="flex-1">
            <h3 class="text-lg font-semibold text-slate-800">
              <a href="{{ route('informasi.artikel.detail') }}" class="hover:text-teal-700">Manfaat dari Belajar Berkelompok Secara Rutin</a>
            </h3>
            <p class="mt-1 text-xs text-slate-500">Jan 28, 2024</p>
            <p class="mt-2 text-slate-600">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum commodo arcu massa, ac consequat eros
              placerat quis. Aenean velit mi, consequat eget odio nec, lobortis.
            </p>
          </div>
        </article>

        <!-- Divider -->
        <div class="border-t border-slate-200"></div>

        <!-- Card 2 -->
        <article
          class="flex flex-col gap-4 rounded-lg border border-slate-200 bg-white p-4 shadow-sm md:flex-row md:items-start">
          <a href="{{ route('informasi.artikel.detail') }}">
            <img src="https://images.unsplash.com/photo-1517935706615-2717063c2225?q=80&w=1200&auto=format&fit=crop"
              alt="Guru melatih siswa olahraga" class="h-44 w-full rounded-md object-cover md:h-32 md:w-48" />
          </a>
          <div class="flex-1">
            <h3 class="text-lg font-semibold text-slate-800">
              <a href="{{ route('informasi.artikel.detail') }}" class="hover:text-teal-700">Sosok guru yang humoris calon guru terbaik 2022 – 2023</a>
            </h3>
            <p class="mt-1 text-xs text-slate-500">Jan 26, 2024</p>
            <p class="mt-2 text-slate-600">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tincidunt quam ut sem ornare convallis.
              Quisque porta viverra ante vel malesuada. Aenean posuere condimentum sapien.
            </p>
          </div>
        </article>

        <!-- Divider -->
        <div class="border-t border-slate-200"></div>

        <!-- Card 3 -->
        <article
          class="flex flex-col gap-4 rounded-lg border border-slate-200 bg-white p-4 shadow-sm md:flex-row md:items-start">
          <a href="{{ route('informasi.artikel.detail') }}">
            <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?q=80&w=1200&auto=format&fit=crop"
              alt="Ekstrakurikuler sekolah" class="h-44 w-full rounded-md object-cover md:h-32 md:w-48" />
          </a>
          <div class="flex-1">
            <h3 class="text-lg font-semibold text-slate-800">
              <a href="{{ route('informasi.artikel.detail') }}" class="hover:text-teal-700">Tips memilih ekstrakurikuler sesuai minat siswa</a>
            </h3>
            <p class="mt-1 text-xs text-slate-500">Feb 10, 2024</p>
            <p class="mt-2 text-slate-600">
              Morbi non accumsan dui. Integer efficitur, arcu nec posuere efficitur, ipsum urna pulvinar augue, sit amet
              tristique ligula nibh at metus.
            </p>
          </div>
        </article>

        <!-- Divider -->
        <div class="border-t border-slate-200"></div>

        <!-- Card 4 -->
        <article
          class="flex flex-col gap-4 rounded-lg border border-slate-200 bg-white p-4 shadow-sm md:flex-row md:items-start">
          <a href="{{ route('informasi.artikel.detail') }}">
            <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&w=1200&auto=format&fit=crop"
              alt="Budaya literasi di sekolah" class="h-44 w-full rounded-md object-cover md:h-32 md:w-48" />
          </a>
          <div class="flex-1">
            <h3 class="text-lg font-semibold text-slate-800">
              <a href="{{ route('informasi.artikel.detail') }}" class="hover:text-teal-700">Membangun budaya literasi di sekolah</a>
            </h3>
            <p class="mt-1 text-xs text-slate-500">Mar 5, 2024</p>
            <p class="mt-2 text-slate-600">
              Sed fermentum, massa sit amet dictum luctus, libero magna dictum augue, non convallis nisl felis nec
              libero. Aliquam erat volutpat.
            </p>
          </div>
        </article>

        <!-- Divider -->
        <div class="border-t border-slate-200"></div>

        <!-- Card 5 -->
        <article
          class="flex flex-col gap-4 rounded-lg border border-slate-200 bg-white p-4 shadow-sm md:flex-row md:items-start">
          <a href="{{ route('informasi.artikel.detail') }}">
            <img src="https://images.unsplash.com/photo-1518085250887-2f903c200fee?q=80&w=1200&auto=format&fit=crop"
              alt="Persiapan ujian semester" class="h-44 w-full rounded-md object-cover md:h-32 md:w-48" />
          </a>
          <div class="flex-1">
            <h3 class="text-lg font-semibold text-slate-800">
              <a href="{{ route('informasi.artikel.detail') }}" class="hover:text-teal-700">Cara efektif persiapan ujian semester</a>
            </h3>
            <p class="mt-1 text-xs text-slate-500">Apr 1, 2024</p>
            <p class="mt-2 text-slate-600">
              Praesent ut mi at tellus suscipit rhoncus. Cras pulvinar, odio vitae dictum varius, lacus odio gravida
              magna, ut varius mi arcu in orci.
            </p>
          </div>
        </article>
      </div>

      <!-- Sidebar: Pengumuman -->
      <aside class="lg:col-span-1">
        <h2 class="text-xl font-semibold text-slate-800">Pengumuman</h2>
        <ul class="mt-4 space-y-4">
          <!-- Item 1 -->
          <li class="flex items-start gap-3 rounded-md border border-slate-200 bg-white p-3 shadow-sm">
            <span class="shrink-0 text-sm font-semibold text-amber-600">#1</span>
            <div class="flex-1">
              <p class="text-sm font-medium text-slate-800">Alumni 2009 ini sukses lulus dengan nilai tertinggi di
                kampusnya</p>
            </div>
            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=300&auto=format&fit=crop"
              alt="Alumni" class="h-10 w-10 rounded object-cover" />
          </li>
          <!-- Item 2 -->
          <li class="flex items-start gap-3 rounded-md border border-slate-200 bg-white p-3 shadow-sm">
            <span class="shrink-0 text-sm font-semibold text-amber-600">#2</span>
            <div class="flex-1">
              <p class="text-sm font-medium text-slate-800">Cara Memilih Ekstrakurikuler yang cocok untuk kami</p>
            </div>
            <img src="https://images.unsplash.com/photo-1476480862126-209bfaa8edc8?q=80&w=300&auto=format&fit=crop"
              alt="Ekstrakurikuler" class="h-10 w-10 rounded object-cover" />
          </li>
          <!-- Item 3 -->
          <li class="flex items-start gap-3 rounded-md border border-slate-200 bg-white p-3 shadow-sm">
            <span class="shrink-0 text-sm font-semibold text-amber-600">#3</span>
            <div class="flex-1">
              <p class="text-sm font-medium text-slate-800">Rumus matematika yang sering di pakai dan di lupakan</p>
            </div>
            <img src="https://images.unsplash.com/photo-1476480862126-209bfaa8edc8?q=80&w=300&auto=format&fit=crop"
              alt="Matematika" class="h-10 w-10 rounded object-cover" />
          </li>

          <!-- Item 4 -->
          <li class="flex items-start gap-3 rounded-md border border-slate-200 bg-white p-3 shadow-sm">
            <span class="shrink-0 text-sm font-semibold text-amber-600">#4</span>
            <div class="flex-1">
              <p class="text-sm font-medium text-slate-800">Jadwal kegiatan class meeting semester ini</p>
            </div>
            <img src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?q=80&w=300&auto=format&fit=crop"
              alt="Class meeting" class="h-10 w-10 rounded object-cover" />
          </li>

          <!-- Item 5 -->
          <li class="flex items-start gap-3 rounded-md border border-slate-200 bg-white p-3 shadow-sm">
            <span class="shrink-0 text-sm font-semibold text-amber-600">#5</span>
            <div class="flex-1">
              <p class="text-sm font-medium text-slate-800">Pembukaan pendaftaran siswa baru tahun ajaran berikut</p>
            </div>
            <img src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?q=80&w=300&auto=format&fit=crop"
              alt="PPDB" class="h-10 w-10 rounded object-cover" />
          </li>
        </ul>
      </aside>
    </div>
  </section>
@endsection
