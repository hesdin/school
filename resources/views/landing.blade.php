<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sekolah Modern</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="font-sans text-slate-800 antialiased">
    <!-- Navbar -->
    <header class="fixed inset-x-0 top-0 z-50 bg-white shadow">
        <nav class="container mx-auto flex items-center justify-between px-4 py-3 md:px-8">
            <div class="text-teal-700 text-xl font-semibold">SekolahKu</div>
            <ul class="hidden gap-6 md:flex">
                <li><a href="#" class="hover:text-teal-600">Home</a></li>
                <li><a href="#" class="hover:text-teal-600">Profil</a></li>
                <li><a href="#" class="hover:text-teal-600">Program</a></li>
                <li><a href="#" class="hover:text-teal-600">Galeri</a></li>
                <li><a href="#" class="hover:text-teal-600">Informasi</a></li>
            </ul>
            <a href="#" class="ml-4 rounded-md bg-amber-500 px-4 py-2 text-sm font-medium text-white shadow hover:bg-amber-600">Daftar Online</a>
        </nav>
    </header>

    <main class="pt-16">
        <!-- Hero -->
        <section class="relative flex h-screen items-center justify-center text-center text-white">
            <img src="https://images.unsplash.com/photo-1600794006667-5ad72a9db845?auto=format&fit=crop&w=1400&q=80" alt="Siswa" class="absolute inset-0 h-full w-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-r from-teal-900/70 to-blue-900/70"></div>
            <div class="relative z-10 max-w-3xl px-4">
                <h1 class="mb-4 text-4xl font-semibold md:text-5xl">Unggul, Mandiri, dan Berbudaya.</h1>
                <p class="mb-8 text-lg">Sekolah modern dengan kurikulum unggulan dan lingkungan belajar yang nyaman.</p>
                <div class="flex flex-col items-center justify-center gap-4 sm:flex-row">
                    <a href="#info" class="rounded-md bg-white px-6 py-3 font-medium text-teal-700 shadow hover:bg-slate-100">Info Terbaru</a>
                    <a href="#daftar" class="rounded-md bg-amber-500 px-6 py-3 font-medium text-white shadow hover:bg-amber-600">Daftar Online</a>
                </div>
                <div class="mt-10 flex justify-center gap-10">
                    <div class="flex items-center gap-3">
                        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=80&q=60" class="h-10 w-10 rounded-full object-cover" alt="alumni" />
                        <div>
                            <div class="text-2xl font-bold">850+</div>
                            <div class="text-sm">Siswa Aktif</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=80&q=60" class="h-10 w-10 rounded-full object-cover" alt="prestasi" />
                        <div>
                            <div class="text-2xl font-bold">120</div>
                            <div class="text-sm">Prestasi</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Highlight cards -->
        <section id="info" class="bg-slate-50 py-12">
            <div class="container mx-auto px-4">
                <div class="grid gap-6 md:grid-cols-3">
                    <article class="flex flex-col rounded-xl bg-white p-4 shadow">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=600&q=60" class="mb-4 h-40 w-full rounded-lg object-cover" alt="berita" />
                        <div class="mb-1 text-sm text-slate-500">12 Mei 2024</div>
                        <h3 class="mb-2 font-semibold text-slate-800">Kegiatan Donor Darah</h3>
                        <p class="text-sm text-slate-600">Siswa mengikuti kegiatan sosial donor darah bersama PMI.</p>
                    </article>
                    <article class="flex flex-col rounded-xl bg-white p-4 shadow">
                        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?auto=format&fit=crop&w=600&q=60" class="mb-4 h-40 w-full rounded-lg object-cover" alt="berita" />
                        <div class="mb-1 text-sm text-slate-500">3 Mei 2024</div>
                        <h3 class="mb-2 font-semibold text-slate-800">Lomba Sains Nasional</h3>
                        <p class="text-sm text-slate-600">Tim sekolah meraih juara umum pada ajang bergengsi.</p>
                    </article>
                    <article class="flex flex-col rounded-xl bg-white p-4 shadow">
                        <img src="https://images.unsplash.com/photo-1558021212-51b6ecfa0db9?auto=format&fit=crop&w=600&q=60" class="mb-4 h-40 w-full rounded-lg object-cover" alt="berita" />
                        <div class="mb-1 text-sm text-slate-500">1 Mei 2024</div>
                        <h3 class="mb-2 font-semibold text-slate-800">Pentas Seni</h3>
                        <p class="text-sm text-slate-600">Penampilan kreativitas siswa dalam acara tahunan sekolah.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Program Sekolah -->
        <section class="py-12">
            <div class="container mx-auto px-4">
                <h2 class="mb-8 text-center text-3xl font-semibold">Program Sekolah</h2>
                <div class="grid gap-8 md:grid-cols-3">
                    <div class="overflow-hidden rounded-xl bg-white shadow">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=600&q=60" class="h-48 w-full object-cover" alt="Akademik" />
                        <div class="p-6">
                            <h3 class="mb-2 text-xl font-semibold">Akademik</h3>
                            <p class="mb-4 text-slate-600">Program akademik berfokus pada pengembangan ilmu pengetahuan dan karakter.</p>
                            <ul class="space-y-2 text-slate-600">
                                <li class="flex items-start"><span class="mr-2 text-teal-600">✓</span>Kurikulum nasional</li>
                                <li class="flex items-start"><span class="mr-2 text-teal-600">✓</span>Laboratorium lengkap</li>
                            </ul>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-xl bg-white shadow">
                        <img src="https://images.unsplash.com/photo-1508171555877-63bbe71a1285?auto=format&fit=crop&w=600&q=60" class="h-48 w-full object-cover" alt="Kepramukaan" />
                        <div class="p-6">
                            <h3 class="mb-2 text-xl font-semibold">Kepramukaan</h3>
                            <p class="mb-4 text-slate-600">Membentuk siswa yang disiplin, mandiri, dan peduli lingkungan.</p>
                            <ul class="space-y-2 text-slate-600">
                                <li class="flex items-start"><span class="mr-2 text-teal-600">✓</span>Latihan rutin</li>
                                <li class="flex items-start"><span class="mr-2 text-teal-600">✓</span>Kegiatan kemah</li>
                            </ul>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-xl bg-white shadow">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=600&q=60" class="h-48 w-full object-cover" alt="Non-Akademik" />
                        <div class="p-6">
                            <h3 class="mb-2 text-xl font-semibold">Non-Akademik</h3>
                            <p class="mb-4 text-slate-600">Beragam ekstrakurikuler untuk menyalurkan bakat dan minat siswa.</p>
                            <ul class="space-y-2 text-slate-600">
                                <li class="flex items-start"><span class="mr-2 text-teal-600">✓</span>Olahraga dan seni</li>
                                <li class="flex items-start"><span class="mr-2 text-teal-600">✓</span>Klub literasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pengumuman & Berita -->
        <section class="bg-slate-50 py-12">
            <div class="container mx-auto px-4">
                <div class="grid gap-12 md:grid-cols-2">
                    <div>
                        <h2 class="mb-6 text-2xl font-semibold">Pengumuman</h2>
                        <div class="space-y-4">
                            <div class="flex gap-4">
                                <img src="https://images.unsplash.com/photo-1581091012184-5c1b37cc8439?auto=format&fit=crop&w=200&q=60" class="h-20 w-20 rounded object-cover" alt="pengumuman" />
                                <div>
                                    <h3 class="font-medium text-slate-800">Ujian Tengah Semester</h3>
                                    <div class="text-sm text-slate-500">1 Juni 2024</div>
                                    <p class="text-sm text-slate-600">Pelaksanaan UTS dimulai 1 Juni 2024. Persiapkan diri sebaik mungkin.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=200&q=60" class="h-20 w-20 rounded object-cover" alt="pengumuman" />
                                <div>
                                    <h3 class="font-medium text-slate-800">Libur Hari Raya</h3>
                                    <div class="text-sm text-slate-500">20 April 2024</div>
                                    <p class="text-sm text-slate-600">Sekolah akan libur selama satu minggu dalam rangka Hari Raya.</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="mt-4 inline-block font-medium text-teal-700">Lihat semua →</a>
                    </div>
                    <div>
                        <h2 class="mb-6 text-2xl font-semibold">Berita Sekolah</h2>
                        <div class="space-y-4">
                            <div class="flex gap-4">
                                <img src="https://images.unsplash.com/photo-1604881991589-b0f4b35d4951?auto=format&fit=crop&w=200&q=60" class="h-20 w-20 rounded object-cover" alt="berita" />
                                <div>
                                    <h3 class="font-medium text-slate-800">Workshop Guru</h3>
                                    <div class="text-sm text-slate-500">5 Mei 2024</div>
                                    <p class="text-sm text-slate-600">Guru mengikuti workshop inovasi pembelajaran di era digital.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=200&q=60" class="h-20 w-20 rounded object-cover" alt="berita" />
                                <div>
                                    <h3 class="font-medium text-slate-800">Bakti Sosial</h3>
                                    <div class="text-sm text-slate-500">28 April 2024</div>
                                    <p class="text-sm text-slate-600">Siswa berpartisipasi dalam kegiatan bakti sosial di desa sekitar.</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="mt-4 inline-block font-medium text-teal-700">Lihat semua →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tenaga Pengajar -->
        <section class="py-12">
            <div class="container mx-auto px-4">
                <h2 class="mb-8 text-center text-3xl font-semibold">Tenaga Pengajar</h2>
                <div class="flex gap-6 overflow-x-auto pb-4">
                    <div class="min-w-[200px] rounded-xl bg-white p-4 text-center shadow">
                        <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?auto=format&fit=crop&w=200&q=60" class="mx-auto mb-4 h-32 w-32 rounded-full object-cover" alt="guru" />
                        <h3 class="font-medium">Budi Santoso</h3>
                        <p class="text-sm text-slate-500">Guru Matematika</p>
                    </div>
                    <div class="min-w-[200px] rounded-xl bg-white p-4 text-center shadow">
                        <img src="https://images.unsplash.com/photo-1544725176-7c40e5a2c9f9?auto=format&fit=crop&w=200&q=60" class="mx-auto mb-4 h-32 w-32 rounded-full object-cover" alt="guru" />
                        <h3 class="font-medium">Siti Aminah</h3>
                        <p class="text-sm text-slate-500">Guru Bahasa</p>
                    </div>
                    <div class="min-w-[200px] rounded-xl bg-white p-4 text-center shadow">
                        <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=200&q=60" class="mx-auto mb-4 h-32 w-32 rounded-full object-cover" alt="guru" />
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
            <a href="#" class="rounded-md bg-amber-500 px-8 py-3 font-medium text-white shadow hover:bg-amber-600">Daftar Online</a>
        </section>

        <!-- Footer -->
        <footer class="bg-slate-900 py-12 text-slate-300">
            <div class="container mx-auto grid gap-8 px-4 md:grid-cols-4">
                <div>
                    <h3 class="mb-4 text-lg font-semibold text-white">SekolahKu</h3>
                    <p class="text-sm">Sekolah modern yang mengedepankan nilai religius, cerdas, dan berbudaya.</p>
                </div>
                <div>
                    <h3 class="mb-4 text-lg font-semibold text-white">Info Terbaru</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">Kegiatan Donor Darah</a></li>
                        <li><a href="#" class="hover:text-white">Ujian Tengah Semester</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-4 text-lg font-semibold text-white">Kontak</h3>
                    <ul class="space-y-2 text-sm">
                        <li>Jl. Merdeka No.1</li>
                        <li>Telp: (021) 123456</li>
                        <li>Email: info@sekolahku.sch.id</li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-4 text-lg font-semibold text-white">Navigasi</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">Profil</a></li>
                        <li><a href="#" class="hover:text-white">Program</a></li>
                        <li><a href="#" class="hover:text-white">Galeri</a></li>
                        <li><a href="#" class="hover:text-white">Informasi</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 text-center text-sm">© 2024 SekolahKu. All rights reserved.</div>
        </footer>
    </main>
</body>

</html>
