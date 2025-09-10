@extends('layouts.app')

@section('title', 'Tenaga Pendidik')

@section('content')
  <!-- Hero -->
  <section class="relative">
    <div class="relative h-56 w-full overflow-hidden sm:h-66">
      <img src="https://zaferina.com/purity7/wp-content/uploads/2025/09/Hero-in3.webp"
        alt="Perlengkapan belajar di meja kelas" class="h-full w-full object-cover" />
      <div class="absolute inset-0 bg-gradient-to-r from-slate-900/80 via-slate-900/40 to-transparent"></div>
      <div class="absolute inset-0 flex items-end">
        <div class="container mx-auto w-full px-4 pb-8">
          <h1 class="text-3xl font-semibold text-white sm:text-4xl">Tenaga Pendidik</h1>
          <p class="mt-2 max-w-3xl text-slate-100/90">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut
            amet eleifend nulla. Sumber foto : @globalmadani.sch.id</p>
        </div>
      </div>
    </div>
  </section>

  @php
    $teachers = [
        ['slug' => 'safitri-wandari-spd', 'name' => 'Safitri Wandari S.pd', 'role' => 'Kepala Sekolah', 'img' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=1000&auto=format&fit=crop'],
        ['slug' => 'dra-rusmala-nainggolan', 'name' => 'Dra. Rusmala Nainggolan', 'role' => 'Wakil Kepala Sekolah', 'img' => 'https://images.unsplash.com/photo-1554151228-14d9def656e4?q=80&w=1000&auto=format&fit=crop'],
        ['slug' => 'nurhilaludin-spdi', 'name' => 'Nurhilaludin, S.Pd.I', 'role' => 'Guru Fisika', 'img' => 'https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=1000&auto=format&fit=crop'],
        ['slug' => 'nuliyani-s', 'name' => 'Nuliyani S', 'role' => 'Guru Sejarah', 'img' => 'https://images.unsplash.com/photo-1552374196-c4e7ffc6e126?q=80&w=1000&auto=format&fit=crop'],
        ['slug' => 'alfira-yuanita-spd', 'name' => 'Alfira Yuanita Spd.', 'role' => 'Bahasa Indonesia', 'img' => 'https://images.unsplash.com/photo-1544006659-f0b21884ce1d?q=80&w=1000&auto=format&fit=crop'],
        ['slug' => 'septiana-andini', 'name' => 'Septiana Andini', 'role' => 'Guru Matematika', 'img' => 'https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?q=80&w=1000&auto=format&fit=crop'],
        ['slug' => 'yuda-pardianan', 'name' => 'Yuda Pardianan', 'role' => 'Guru Penjas', 'img' => 'https://images.unsplash.com/photo-1607746882042-944635dfe10e?q=80&w=1000&auto=format&fit=crop'],
        ['slug' => 'wahyu-perdana', 'name' => 'Wahyu Perdana', 'role' => 'Guru Agama', 'img' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1000&auto=format&fit=crop'],
    ];
  @endphp

  <!-- Grid Tenaga Pendidik -->
  <section class="container mx-auto px-4 py-12">
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
      @foreach ($teachers as $t)
        <a href="{{ route('profil.tenaga.detail', ['slug' => $t['slug']]) }}"
          class="group relative block overflow-hidden rounded-lg bg-white shadow-lg focus:outline-none focus:ring-2 focus:ring-teal-600/50">
          <img src="{{ $t['img'] }}" alt="{{ $t['name'] }}"
            class="aspect-[3/3] w-full object-cover transition duration-300 group-hover:scale-[1.02]" />
          <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-slate-900/85 via-slate-900/10 to-transparent"></div>
          <div class="absolute bottom-0 left-0 right-0 p-5 text-white">
            <h3 class="text-xl font-semibold">{{ $t['name'] }}</h3>
            <p class="text-sm text-slate-100/90">{{ $t['role'] }}</p>
          </div>
        </a>
      @endforeach
    </div>
  </section>
@endsection
