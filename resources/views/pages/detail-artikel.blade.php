@extends('layouts.app')

@section('title', 'Rumus matematika yang sering di pakai dan di lupakan')

@section('content')
  <!-- Hero (keep simple to match listing pages) -->
  <section class="relative overflow-hidden bg-teal-800/90">
    <div class="container mx-auto px-4 py-10 md:py-14">
      <h1 class="text-2xl md:text-3xl font-semibold text-white">Rumus matematika yang sering di pakai dan di lupakan</h1>
      <p class="mt-2 text-teal-100">Home • Pengumuman • Rumus matematika yang sering di pakai dan di lupakan</p>
    </div>
  </section>

  <!-- Content -->
  <section class="container mx-auto px-4 py-10 md:py-14">
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
      <!-- Detail artikel -->
      <div class="space-y-6 lg:col-span-2">
        <img src="https://images.unsplash.com/photo-1598257006626-48b0c252070d?q=80&w=1600&auto=format&fit=crop" alt="Siswa SMA" class="w-full rounded-xl border border-slate-200" />

        <!-- Meta row -->
        <div class="flex flex-wrap items-center justify-between gap-3">
          <div class="flex items-center gap-2 text-sm text-slate-500">
            <span class="inline-flex items-center gap-1">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 text-teal-600"><path fill-rule="evenodd" d="M10 3.5a6.5 6.5 0 100 13 6.5 6.5 0 000-13zM6.25 10a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0z" clip-rule="evenodd"/></svg>
              purity
            </span>
            <span>·</span>
            <span>Jan 28, 2024</span>
          </div>
          <div class="flex items-center gap-2">
            <a href="#" class="inline-flex h-8 w-8 items-center justify-center rounded-full border border-slate-200 text-slate-500 hover:text-teal-700">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-4 w-4"><path d="M24 4.56c-.88.4-1.83.67-2.83.8a4.92 4.92 0 002.15-2.7 9.86 9.86 0 01-3.12 1.2A4.92 4.92 0 0016.62 3c-2.72 0-4.93 2.2-4.93 4.92 0 .39.04.78.13 1.14A13.97 13.97 0 011.67 3.15a4.93 4.93 0 001.52 6.58 4.9 4.9 0 01-2.23-.62v.06c0 2.38 1.7 4.37 3.95 4.82-.42.12-.86.18-1.31.18-.32 0-.64-.03-.95-.09.64 2 2.5 3.46 4.7 3.5A9.88 9.88 0 010 19.54 13.95 13.95 0 007.55 21.5c9.06 0 14.02-7.5 14.02-14.02 0-.21 0-.42-.02-.63A10.02 10.02 0 0024 4.56z"/></svg>
            </a>
            <a href="#" class="inline-flex h-8 w-8 items-center justify-center rounded-full border border-slate-200 text-slate-500 hover:text-teal-700">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-4 w-4"><path d="M12 2.04c-5.5 0-9.96 4.46-9.96 9.96 0 4.41 2.86 8.15 6.84 9.47.5.09.68-.22.68-.48v-1.7c-2.78.61-3.37-1.18-3.37-1.18-.45-1.15-1.1-1.45-1.1-1.45-.9-.62.07-.61.07-.61 1 .07 1.52 1.04 1.52 1.04.9 1.54 2.36 1.1 2.94.85.09-.65.35-1.1.63-1.35-2.22-.25-4.56-1.11-4.56-4.93 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.28.1-2.66 0 0 .84-.27 2.75 1.02A9.54 9.54 0 0112 6.8c.85 0 1.7.11 2.5.32 1.9-1.29 2.74-1.02 2.74-1.02.55 1.38.2 2.41.1 2.66.64.7 1.03 1.6 1.03 2.68 0 3.83-2.34 4.67-4.57 4.92.36.31.67.92.67 1.86v2.75c0 .27.18.58.69.48 3.98-1.32 6.83-5.06 6.83-9.47 0-5.5-4.46-9.96-9.96-9.96z"/></svg>
            </a>
            <a href="#" class="inline-flex h-8 w-8 items-center justify-center rounded-full border border-slate-200 text-slate-500 hover:text-teal-700">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-4 w-4"><path d="M22.23 5.924c-.793.353-1.644.592-2.54.7a4.46 4.46 0 001.958-2.46 8.93 8.93 0 01-2.828 1.08 4.46 4.46 0 00-7.59 4.067c0 .35.04.69.115 1.016-3.705-.186-6.99-1.96-9.19-4.66a4.46 4.46 0 00-.604 2.244 4.46 4.46 0 001.98 3.71 4.44 4.44 0 01-2.02-.56v.057a4.46 4.46 0 003.57 4.37 4.47 4.47 0 01-2.014.076 4.47 4.47 0 004.16 3.09A8.94 8.94 0 012 19.54 12.61 12.61 0 008.84 21.5c7.55 0 11.69-6.25 11.69-11.67 0-.18-.006-.35-.015-.53a8.34 8.34 0 002.035-2.13z"/></svg>
            </a>
            <a href="#" class="inline-flex h-8 w-8 items-center justify-center rounded-full border border-slate-200 text-slate-500 hover:text-teal-700">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-4 w-4"><path d="M22.68 0H1.32C.59 0 0 .59 0 1.32v21.36C0 23.41.59 24 1.32 24H12.8v-9.28H9.69V11.2h3.12V8.49c0-3.1 1.89-4.79 4.66-4.79 1.33 0 2.47.1 2.81.14v3.26h-1.93c-1.52 0-1.82.72-1.82 1.78V11.2h3.63l-.47 3.52h-3.16V24h6.2c.73 0 1.32-.59 1.32-1.32V1.32C24 .59 23.41 0 22.68 0z"/></svg>
            </a>
          </div>
        </div>

        <!-- Content paragraphs -->
        <div class="prose max-w-none prose-slate">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum commodo arcu massa, ac consequat eros
            placerat quis. Aenean velit mi, consequat eget odio nec, lobortis cursus sapien. Ut eu mauris id mauris gravida commodo vitae sit amet velit. Nulla facilisi. Quisque sed dignissim turpis. Integer porta accumsan venenatis. Nunc sit amet arcu vitae quam porttitor efficitur. Fusce quis eros suscipit, mollis neque a, convallis nisi. Etiam ac dolor libero.
          </p>
          <p>
            Vivamus scelerisque purus ut facilisis ultricies. Nullam ornare, lacus fringilla finibus tempus, mauris mauris pulvinar ipsum, nec viverra mi libero vitae elit. Nulla consequat id turpis non lobortis. Nulla viverra ligula ultricies, rutrum augue id, fermentum dui. Maecenas imperdiet quis libero at condimentum. Sed commodo in magna sed semper. Vestibulum quam magna, ullamcorper a purus, a cursus congue lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere volutpat quis nulla convallis, at semper lacus dictum. Integer pharetra quam ut neque suscipit condimentum.
          </p>
          <p>
            Vestibulum venenatis nulla vitae augue vulputate consequat. Aenean rhoncus nisi ac libero tincidunt, vitae efficitur velit pulvinar. Praesent rutrum eleifend fringilla. Vestibulum volutpat rhoncus ipsum, vitae fermentum tortor hendrerit id.
          </p>
        </div>

        <!-- Tags -->
        <div class="mt-4 flex flex-wrap gap-3">
          <a href="#" class="inline-flex items-center rounded-md bg-teal-50 px-3 py-1 text-sm font-medium text-teal-700 ring-1 ring-inset ring-teal-200">#Matematika</a>
          <a href="#" class="inline-flex items-center rounded-md bg-teal-50 px-3 py-1 text-sm font-medium text-teal-700 ring-1 ring-inset ring-teal-200">#Tips dan Trik</a>
        </div>

        <!-- Related -->
        <h2 class="mt-8 text-lg font-semibold tracking-wide text-slate-900">ARTIKEL TERKAIT</h2>
        <div class="mt-4 divide-y divide-slate-200 rounded-md border border-slate-200 bg-white">
          <a href="#" class="flex items-start gap-4 p-4 hover:bg-slate-50">
            <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?q=80&w=400&auto=format&fit=crop" alt="Belajar kelompok" class="h-16 w-24 rounded object-cover" />
            <div class="flex-1">
              <h3 class="font-semibold text-slate-800">Cara Belajar Berhitung yang Mudah dan Cepat</h3>
              <p class="mt-1 text-xs text-slate-500">Jan 26, 2024</p>
              <p class="mt-1 text-sm text-slate-600 line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum commodo arcu massa, ac consequat eros placerat quis.</p>
            </div>
          </a>
          <a href="#" class="flex items-start gap-4 p-4 hover:bg-slate-50">
            <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?q=80&w=400&auto=format&fit=crop" alt="Perpustakaan" class="h-16 w-24 rounded object-cover" />
            <div class="flex-1">
              <h3 class="font-semibold text-slate-800">Pengumuman Libur Natal 2022</h3>
              <p class="mt-1 text-xs text-slate-500">Jan 27, 2024</p>
              <p class="mt-1 text-sm text-slate-600 line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in nisl et metus iaculis convallis vel eu ex.</p>
            </div>
          </a>
          <a href="#" class="flex items-start gap-4 p-4 hover:bg-slate-50">
            <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?q=80&w=400&auto=format&fit=crop" alt="Ekstrakurikuler" class="h-16 w-24 rounded object-cover" />
            <div class="flex-1">
              <h3 class="font-semibold text-slate-800">Pengumuman Lomba Tari Andar Daerah 2023</h3>
              <p class="mt-1 text-xs text-slate-500">Jan 27, 2024</p>
              <p class="mt-1 text-sm text-slate-600 line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum consequat neque.</p>
            </div>
          </a>
          <a href="#" class="flex items-start gap-4 p-4 hover:bg-slate-50">
            <img src="https://images.unsplash.com/photo-1587578932405-7f99cbea3f84?q=80&w=400&auto=format&fit=crop" alt="Kegiatan kebun" class="h-16 w-24 rounded object-cover" />
            <div class="flex-1">
              <h3 class="font-semibold text-slate-800">Cuti Bersama Lebaran 2024</h3>
              <p class="mt-1 text-xs text-slate-500">Jan 27, 2024</p>
              <p class="mt-1 text-sm text-slate-600 line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in nisl et metus iaculis convallis.</p>
            </div>
          </a>
          <a href="#" class="flex items-start gap-4 p-4 hover:bg-slate-50">
            <img src="https://images.unsplash.com/photo-1518085250887-2f903c200fee?q=80&w=400&auto=format&fit=crop" alt="Ujian" class="h-16 w-24 rounded object-cover" />
            <div class="flex-1">
              <h3 class="font-semibold text-slate-800">Pengumuman Hasil Ujian Ulangan Semester</h3>
              <p class="mt-1 text-xs text-slate-500">Jan 27, 2024</p>
              <p class="mt-1 text-sm text-slate-600 line-clamp-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum consequat neque.</p>
            </div>
          </a>
        </div>
      </div>

      <!-- Sidebar: Pengumuman -->
      <aside class="lg:col-span-1">
        <h2 class="text-xl font-semibold text-slate-800">Pengumuman</h2>
        <ul class="mt-4 space-y-4">
          <li class="flex items-start gap-3 rounded-md border border-slate-200 bg-white p-3 shadow-sm">
            <span class="shrink-0 text-sm font-semibold text-amber-600">#1</span>
            <div class="flex-1">
              <p class="text-sm font-medium text-slate-800">Alumni 2009 ini sukses lulus dengan nilai tertinggi di kampusnya</p>
            </div>
            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=300&auto=format&fit=crop" alt="Alumni" class="h-10 w-10 rounded object-cover" />
          </li>
          <li class="flex items-start gap-3 rounded-md border border-slate-200 bg-white p-3 shadow-sm">
            <span class="shrink-0 text-sm font-semibold text-amber-600">#2</span>
            <div class="flex-1">
              <p class="text-sm font-medium text-slate-800">Cara Memilih Ekstrakurikuler yang cocok untuk kami</p>
            </div>
            <img src="https://images.unsplash.com/photo-1476480862126-209bfaa8edc8?q=80&w=300&auto=format&fit=crop" alt="Ekstrakurikuler" class="h-10 w-10 rounded object-cover" />
          </li>
          <li class="flex items-start gap-3 rounded-md border border-slate-200 bg-white p-3 shadow-sm">
            <span class="shrink-0 text-sm font-semibold text-amber-600">#3</span>
            <div class="flex-1">
              <p class="text-sm font-medium text-slate-800">Rumus matematika yang sering di pakai dan di lupakan</p>
            </div>
            <img src="https://images.unsplash.com/photo-1518131678677-a9b6112a8b1a?q=80&w=300&auto=format&fit=crop" alt="Matematika" class="h-10 w-10 rounded object-cover" />
          </li>
          <li class="flex items-start gap-3 rounded-md border border-slate-200 bg-white p-3 shadow-sm">
            <span class="shrink-0 text-sm font-semibold text-amber-600">#4</span>
            <div class="flex-1">
              <p class="text-sm font-medium text-slate-800">Manfaat dari Belajar Berkelompok Secara Rutin</p>
            </div>
            <img src="https://images.unsplash.com/photo-1517935706615-2717063c2225?q=80&w=300&auto=format&fit=crop" alt="Belajar kelompok" class="h-10 w-10 rounded object-cover" />
          </li>
          <li class="flex items-start gap-3 rounded-md border border-slate-200 bg-white p-3 shadow-sm">
            <span class="shrink-0 text-sm font-semibold text-amber-600">#5</span>
            <div class="flex-1">
              <p class="text-sm font-medium text-slate-800">Cara Belajar Berhitung yang Mudah dan Cepat</p>
            </div>
            <img src="https://images.unsplash.com/photo-1520975954732-35dd22f47525?q=80&w=300&auto=format&fit=crop" alt="Belajar berhitung" class="h-10 w-10 rounded object-cover" />
          </li>
        </ul>
      </aside>
    </div>
  </section>
@endsection

