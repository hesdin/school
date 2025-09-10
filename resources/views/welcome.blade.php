<!doctype html>
<html lang="id" class="h-full bg-white scroll-smooth">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>TP PKK Pusat — Beranda</title>
  <meta name="description"
    content="Gerakan PKK untuk pemberdayaan & kesejahteraan keluarga — tumbuh dari, oleh, dan untuk masyarakat.">
  <!-- Tailwind (CDN) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        container: {
          center: true,
          padding: {
            DEFAULT: '1rem',
            lg: '2rem'
          }
        },
        extend: {
          colors: {
            // Palet sederhana terinspirasi warna logo PKK (biru + aksen kuning)
            brand: {
              50: '#eef5ff',
              100: '#d8e9ff',
              200: '#b4d4ff',
              300: '#86b9ff',
              400: '#5698f2',
              500: '#1f6bbd',
              /* Biru utama */
              600: '#19579a',
              700: '#15467d',
              800: '#103667',
              900: '#0c2950'
            },
            accent: {
              500: '#f5c84b'
            } /* Kuning aksen */
          },
          fontFamily: {
            sans: ['Inter', 'ui-sans-serif', 'system-ui', 'Segoe UI', 'Helvetica', 'Arial', 'Noto Sans',
              'Apple Color Emoji', 'Segoe UI Emoji'
            ]
          },
          boxShadow: {
            soft: '0 10px 30px -12px rgba(0,0,0,.15)'
          }
        }
      }
    }
  </script>
  <!-- Inter font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body class="h-full font-sans text-slate-800 antialiased">
  <!-- Skip link -->
  <a href="#main"
    class="sr-only focus:not-sr-only focus:absolute focus:top-3 focus:left-3 focus:z-50 bg-brand-600 text-white px-3 py-2 rounded-md">Loncat
    ke konten</a>

  <!-- Topbar ringkas -->
  <div class="bg-slate-50 border-b border-slate-100 text-sm">
    <div class="container flex items-center justify-between py-2 gap-4">
      <div class="flex items-center gap-4">
        <a href="mailto:tppkkpst@gmail.com" class="inline-flex items-center gap-2 hover:opacity-80"
          aria-label="Email TP PKK Pusat">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" class="shrink-0">
            <path d="M4 6h16v12H4z" stroke="currentColor" stroke-width="1.5" />
            <path d="m4 7 8 6 8-6" stroke="currentColor" stroke-width="1.5" />
          </svg>
          <span class="text-slate-600">tppkkpst@gmail.com</span>
        </a>
        <span class="hidden sm:inline text-slate-400">|</span>
        <span class="hidden sm:inline-flex items-center gap-2 text-slate-600">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
            <path d="M12 2C8 2 5 5.1 5 9.1c0 5 7 12.8 7 12.8s7-7.8 7-12.8C19 5.1 16 2 12 2Z" stroke="currentColor"
              stroke-width="1.5" />
            <circle cx="12" cy="9" r="2.5" stroke="currentColor" stroke-width="1.5" />
          </svg>
          Jl. Raya Pasar Minggu No. 19, Jakarta Selatan
        </span>
      </div>
      <a href="https://www.youtube.com/channel/UC46ItUcWmIbw_x_QYu2lt7Q"
        class="inline-flex items-center gap-2 text-slate-600 hover:opacity-80">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
          <path d="M10 15l5.19-3L10 9v6z" />
          <path
            d="M21.58 7.19a2.75 2.75 0 0 0-1.94-1.95C17.94 4.75 12 4.75 12 4.75s-5.94 0-7.64.49A2.75 2.75 0 0 0 2.42 7.19 28.6 28.6 0 0 0 2 12a28.6 28.6 0 0 0 .42 4.81 2.75 2.75 0 0 0 1.94 1.95c1.7.49 7.64.49 7.64.49s5.94 0 7.64-.49a2.75 2.75 0 0 0 1.94-1.95A28.6 28.6 0 0 0 22 12a28.6 28.6 0 0 0-.42-4.81z" />
        </svg>
        YouTube
      </a>
    </div>
  </div>

  <!-- Header / Nav -->
  <header class="sticky top-0 z-40 bg-white/80 backdrop-blur border-b border-slate-100">
    <div class="container flex items-center justify-between py-3">
      <a href="#" class="flex items-center gap-3">
        <img alt="Logo TP PKK Pusat" class="h-10 w-10"
          src="https://tppkkpusat.org/wp-content/uploads/2025/02/3.-LOGO-PKK-TANPA-BACKGROUND-1-300x300.png">
        <span class="font-semibold tracking-tight text-slate-900">TP PKK Pusat</span>
      </a>
      <nav aria-label="Navigasi utama" class="hidden md:flex items-center gap-6">
        <a href="#program" class="hover:text-brand-600">Program</a>
        <a href="#agenda" class="hover:text-brand-600">Agenda</a>
        <a href="#berita" class="hover:text-brand-600">Berita</a>
        <a href="#mitra" class="hover:text-brand-600">Mitra</a>
        <a href="#kontak" class="hover:text-brand-600">Kontak</a>
        <a href="/tentangkami/"
          class="inline-flex items-center bg-brand-600 text-white px-4 py-2 rounded-md hover:bg-brand-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-brand-400">Tentang</a>
      </nav>
      <button id="mobileMenuButton"
        class="md:hidden inline-flex items-center justify-center rounded-md p-2 hover:bg-slate-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-brand-400"
        aria-controls="mobileMenu" aria-expanded="false" aria-label="Buka menu">
        <svg width="24" height="24" fill="none" stroke="currentColor">
          <path stroke-width="1.5" d="M4 7h16M4 12h16M4 17h16" />
        </svg>
      </button>
    </div>
    <!-- Mobile menu -->
    <div id="mobileMenu" class="md:hidden hidden border-t border-slate-100">
      <div class="container py-3 grid gap-2">
        <a href="#program" class="py-2">Program</a>
        <a href="#agenda" class="py-2">Agenda</a>
        <a href="#berita" class="py-2">Berita</a>
        <a href="#mitra" class="py-2">Mitra</a>
        <a href="#kontak" class="py-2">Kontak</a>
        <a href="/tentangkami/" class="py-2 font-semibold text-brand-700">Tentang</a>
      </div>
    </div>
  </header>

  <main id="main">
    <!-- HERO -->
    <section class="relative">
      <div class="absolute inset-0 -z-10 bg-gradient-to-b from-brand-50 via-white to-white"></div>
      <div class="container py-16 md:py-24 grid md:grid-cols-2 gap-10 items-center">
        <div>
          <h1 class="text-3xl md:text-5xl font-bold leading-tight tracking-tight text-slate-900">
            Gerakan PKK untuk <span class="text-brand-600">Pemberdayaan & Kesejahteraan</span> Keluarga
          </h1>
          <p class="mt-5 text-lg text-slate-600">
            Tumbuh dari, oleh, dan untuk masyarakat — mendorong keluarga Indonesia sebagai pelopor perubahan.
          </p>
          <div class="mt-8 flex flex-wrap gap-3">
            <a href="/tentangkami/"
              class="inline-flex items-center gap-2 bg-brand-600 text-white px-5 py-3 rounded-md hover:bg-brand-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-brand-400">
              Pelajari Tentang PKK
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
              </svg>
            </a>
            <a href="#program"
              class="inline-flex items-center gap-2 px-5 py-3 rounded-md border border-slate-200 hover:bg-slate-50">
              Lihat Program Unggulan
            </a>
          </div>
          <!-- Agenda chips ringkas (empat agenda prioritas) -->
          <div id="agenda" class="mt-8 flex flex-wrap gap-2">
            <span class="text-sm px-3 py-1 rounded-full bg-slate-100">Ketahanan Ekonomi</span>
            <span class="text-sm px-3 py-1 rounded-full bg-slate-100">Revolusi Mental</span>
            <span class="text-sm px-3 py-1 rounded-full bg-slate-100">Pelayanan Dasar</span>
            <span class="text-sm px-3 py-1 rounded-full bg-slate-100">Lingkungan Hidup</span>
          </div>
        </div>
        <div class="relative">
          <div class="aspect-[4/3] rounded-2xl bg-gradient-to-tr from-brand-600 to-brand-400 shadow-soft">
            <img
              src="https://tppkkpusat.org/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-25-at-16.30.15-scaled.jpeg"
              alt="">
          </div>
          <!-- Jika ingin pakai foto, taruh <img> di atas dengan class yang sama -->
        </div>
      </div>
    </section>

    <!-- PROGRAM UNGGULAN -->
    <section id="program" class="py-16 md:py-24 border-t border-slate-100">
      <div class="container">
        <div class="flex items-end justify-between gap-6">
          <div>
            <h2 class="text-2xl md:text-3xl font-semibold tracking-tight">Program Unggulan</h2>
            <p class="mt-2 text-slate-600">Empat fokus program strategis TP PKK Pusat.</p>
          </div>
          <a href="/berita/" class="hidden md:inline-flex items-center gap-2 text-brand-700 hover:opacity-80">Lihat
            semua berita
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
              <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
            </svg>
          </a>
        </div>

        <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Card -->
          <article class="rounded-xl border border-slate-200 p-6 hover:shadow-soft transition">
            <div class="h-10 w-10 rounded-lg bg-brand-50 text-brand-700 grid place-content-center font-semibold">01
            </div>
            <h3 class="mt-4 font-semibold">PAAREDI</h3>
            <p class="mt-1 text-sm text-slate-600">Pola Asuh Anak dan Remaja di Era Digital.</p>
            <a href="#" class="mt-4 inline-flex items-center gap-2 text-sm text-brand-700">Pelajari
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
              </svg>
            </a>
          </article>

          <article class="rounded-xl border border-slate-200 p-6 hover:shadow-soft transition">
            <div class="h-10 w-10 rounded-lg bg-brand-50 text-brand-700 grid place-content-center font-semibold">02
            </div>
            <h3 class="mt-4 font-semibold">Pendidikan & Ekonomi Keluarga</h3>
            <p class="mt-1 text-sm text-slate-600">Peningkatan kualitas pendidikan dan pengelolaan ekonomi keluarga.
            </p>
            <a href="#" class="mt-4 inline-flex items-center gap-2 text-sm text-brand-700">Pelajari
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
              </svg>
            </a>
          </article>

          <article class="rounded-xl border border-slate-200 p-6 hover:shadow-soft transition">
            <div class="h-10 w-10 rounded-lg bg-brand-50 text-brand-700 grid place-content-center font-semibold">03
            </div>
            <h3 class="mt-4 font-semibold">AKU HATINYA PKK</h3>
            <p class="mt-1 text-sm text-slate-600">Halaman Asri, Teratur, Indah, dan Nyaman.</p>
            <a href="#" class="mt-4 inline-flex items-center gap-2 text-sm text-brand-700">Pelajari
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
              </svg>
            </a>
          </article>

          <article class="rounded-xl border border-slate-200 p-6 hover:shadow-soft transition">
            <div class="h-10 w-10 rounded-lg bg-brand-50 text-brand-700 grid place-content-center font-semibold">04
            </div>
            <h3 class="mt-4 font-semibold">Keluarga Sehat Tanggap Bencana</h3>
            <p class="mt-1 text-sm text-slate-600">Gerakan keluarga sehat, tanggap & tangguh bencana.</p>
            <a href="#" class="mt-4 inline-flex items-center gap-2 text-sm text-brand-700">Pelajari
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
              </svg>
            </a>
          </article>
        </div>
      </div>
    </section>

    <!-- BERITA TERBARU -->
    <section id="berita" class="py-16 md:py-24">
      <div class="container">
        <div class="flex items-end justify-between gap-6">
          <div>
            <h2 class="text-2xl md:text-3xl font-semibold tracking-tight">Berita Terbaru</h2>
            <p class="mt-2 text-slate-600">Sorotan kegiatan & publikasi TP PKK Pusat.</p>
          </div>
          <a href="/berita/" class="hidden md:inline-flex items-center gap-2 text-brand-700 hover:opacity-80">Lihat
            semua
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
              <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
            </svg>
          </a>
        </div>

        <div class="mt-8 grid md:grid-cols-3 gap-6">
          <!-- Kartu berita (statis; nanti ganti ke dynamic dari CMS) -->
          <article class="group rounded-xl border border-slate-200 overflow-hidden hover:shadow-soft transition">
            <div class="aspect-[4/3] bg-slate-100"></div>
            <div class="p-5">
              <span class="text-xs uppercase tracking-wide text-slate-500">Publikasi PKK</span>
              <h3 class="mt-2 font-semibold group-hover:text-brand-700">Judul Berita Terkini #1</h3>
              <p class="mt-1 text-sm text-slate-600">Ringkasan singkat berita atau highlight kegiatan PKK.</p>
              <a href="#" class="mt-4 inline-flex items-center gap-2 text-sm text-brand-700">Baca selengkapnya
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                  <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
              </a>
            </div>
          </article>

          <article class="group rounded-xl border border-slate-200 overflow-hidden hover:shadow-soft transition">
            <div class="aspect-[4/3] bg-slate-100"></div>
            <div class="p-5">
              <span class="text-xs uppercase tracking-wide text-slate-500">Publikasi PKK</span>
              <h3 class="mt-2 font-semibold group-hover:text-brand-700">Judul Berita Terkini #2</h3>
              <p class="mt-1 text-sm text-slate-600">Ringkasan singkat berita atau highlight kegiatan PKK.</p>
              <a href="#" class="mt-4 inline-flex items-center gap-2 text-sm text-brand-700">Baca selengkapnya
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                  <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
              </a>
            </div>
          </article>

          <article class="group rounded-xl border border-slate-200 overflow-hidden hover:shadow-soft transition">
            <div class="aspect-[4/3] bg-slate-100"></div>
            <div class="p-5">
              <span class="text-xs uppercase tracking-wide text-slate-500">Publikasi PKK</span>
              <h3 class="mt-2 font-semibold group-hover:text-brand-700">Judul Berita Terkini #3</h3>
              <p class="mt-1 text-sm text-slate-600">Ringkasan singkat berita atau highlight kegiatan PKK.</p>
              <a href="#" class="mt-4 inline-flex items-center gap-2 text-sm text-brand-700">Baca selengkapnya
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                  <path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- MITRA -->
    <section id="mitra" class="py-10 border-y border-slate-100 bg-slate-50">
      <div class="container">
        <div class="text-center">
          <p class="text-sm uppercase tracking-wider text-slate-500">Mitra Kerja</p>
          <h2 class="mt-1 text-xl md:text-2xl font-semibold">Berkolaborasi dengan berbagai lembaga</h2>
        </div>

        <!-- Logo strip -->
        <div class="mt-6 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 items-center">
          <div
            class="h-16 bg-white border border-slate-200 rounded-lg grid place-content-center text-sm text-slate-600">
            Kemendagri</div>
          <div
            class="h-16 bg-white border border-slate-200 rounded-lg grid place-content-center text-sm text-slate-600">
            KemenPPPA</div>
          <div
            class="h-16 bg-white border border-slate-200 rounded-lg grid place-content-center text-sm text-slate-600">
            BNN</div>
          <div
            class="h-16 bg-white border border-slate-200 rounded-lg grid place-content-center text-sm text-slate-600">
            Bapanas</div>
          <div
            class="h-16 bg-white border border-slate-200 rounded-lg grid place-content-center text-sm text-slate-600">
            Nestlé</div>
          <div
            class="h-16 bg-white border border-slate-200 rounded-lg grid place-content-center text-sm text-slate-600">
            PKK se-Indonesia</div>
        </div>
      </div>
    </section>

    <!-- LIMA FUNGSI -->
    <section class="py-16 md:py-24">
      <div class="container">
        <h2 class="text-2xl md:text-3xl font-semibold tracking-tight">Lima Fungsi TP PKK Pusat</h2>
        <div class="mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="rounded-xl border border-slate-200 p-6">
            <h3 class="font-semibold">Fasilitator</h3>
            <p class="mt-2 text-slate-600 text-sm">Siap bekerja sama dengan seluruh elemen masyarakat untuk menciptakan
              lingkungan kelompok yang kondusif.</p>
          </div>
          <div class="rounded-xl border border-slate-200 p-6">
            <h3 class="font-semibold">Perencana</h3>
            <p class="mt-2 text-slate-600 text-sm">Menentukan strategi, mengintegrasikan dan mengoordinasikan pekerjaan
              organisasi agar mencapai target.</p>
          </div>
          <div class="rounded-xl border border-slate-200 p-6">
            <h3 class="font-semibold">Pelaksana</h3>
            <p class="mt-2 text-slate-600 text-sm">Mengumpulkan, mengolah, dan mengompilasi data untuk implementasi
              program kerja.</p>
          </div>
          <div class="rounded-xl border border-slate-200 p-6">
            <h3 class="font-semibold">Pengendali</h3>
            <p class="mt-2 text-slate-600 text-sm">Melakukan pengawasan, penetapan standar, dan pemberlakuan kode etik.
            </p>
          </div>
          <div class="rounded-xl border border-slate-200 p-6">
            <h3 class="font-semibold">Penggerak</h3>
            <p class="mt-2 text-slate-600 text-sm">Berkoordinasi lintas instansi untuk mengembangkan kemampuan dan
              keterampilan SDM.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA + KONTAK -->
    <section id="kontak" class="py-16 md:py-24 bg-gradient-to-b from-slate-50 to-white border-t border-slate-100">
      <div class="container grid lg:grid-cols-3 gap-10">
        <div class="lg:col-span-2">
          <h2 class="text-2xl md:text-3xl font-semibold tracking-tight">Hubungi Kami</h2>
          <p class="mt-2 text-slate-600">Untuk kemitraan, informasi program, dan publikasi.</p>

          <form class="mt-6 grid sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm text-slate-600">Nama</label>
              <input type="text"
                class="mt-1 w-full rounded-md border-slate-300 focus:border-brand-500 focus:ring-brand-500"
                placeholder="Nama lengkap">
            </div>
            <div>
              <label class="block text-sm text-slate-600">Email</label>
              <input type="email"
                class="mt-1 w-full rounded-md border-slate-300 focus:border-brand-500 focus:ring-brand-500"
                placeholder="email@contoh.id">
            </div>
            <div class="sm:col-span-2">
              <label class="block text-sm text-slate-600">Pesan</label>
              <textarea rows="4" class="mt-1 w-full rounded-md border-slate-300 focus:border-brand-500 focus:ring-brand-500"
                placeholder="Tulis pesan Anda di sini..."></textarea>
            </div>
            <div>
              <button type="button"
                class="inline-flex items-center gap-2 bg-brand-600 text-white px-5 py-3 rounded-md hover:bg-brand-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-brand-400">
                Kirim
              </button>
            </div>
          </form>
        </div>

        <aside class="rounded-2xl border border-slate-200 p-6 bg-white">
          <h3 class="font-semibold">Alamat</h3>
          <p class="mt-2 text-sm text-slate-700">Jl. Raya Pasar Minggu RT:007, RW:001, No. 19<br>Pejaten Timur, Pasar
            Minggu, Jakarta Selatan, 12510</p>
          <div class="mt-4 text-sm text-slate-700">
            <p>Email: <a href="mailto:tppkkpst@gmail.com"
                class="text-brand-700 hover:underline">tppkkpst@gmail.com</a></p>
            <p class="mt-1">YouTube: <a href="https://www.youtube.com/channel/UC46ItUcWmIbw_x_QYu2lt7Q"
                class="text-brand-700 hover:underline">TP PKK Pusat</a></p>
          </div>
        </aside>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="border-t border-slate-100">
    <div class="container py-8 grid md:grid-cols-2 gap-6">
      <div class="flex items-center gap-3">
        <img alt="Logo TP PKK Pusat" class="h-9 w-9"
          src="https://tppkkpusat.org/wp-content/uploads/2025/02/3.-LOGO-PKK-TANPA-BACKGROUND-1-300x300.png">
        <div>
          <p class="font-semibold">TP PKK Pusat</p>
          <p class="text-sm text-slate-600">Hak Cipta Laman Resmi TP PKK Pusat ©</p>
        </div>
      </div>
      <nav class="flex flex-wrap items-center gap-x-6 gap-y-2 text-sm">
        <a href="/tentangkami/" class="hover:text-brand-700">Tentang</a>
        <a href="#program" class="hover:text-brand-700">Program</a>
        <a href="#agenda" class="hover:text-brand-700">Agenda</a>
        <a href="#berita" class="hover:text-brand-700">Berita</a>
        <a href="#kontak" class="hover:text-brand-700">Kontak</a>
      </nav>
    </div>
  </footer>

  <!-- Interaksi kecil -->
  <script>
    const mobileBtn = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    if (mobileBtn && mobileMenu) {
      mobileBtn.addEventListener('click', () => {
        const isOpen = !mobileMenu.classList.contains('hidden');
        mobileMenu.classList.toggle('hidden');
        mobileBtn.setAttribute('aria-expanded', String(!isOpen));
      });
    }
  </script>
</body>

</html>
