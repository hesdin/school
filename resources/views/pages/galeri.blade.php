@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
    <!-- Hero section -->
    <section class="bg-teal-700 text-white">
        <div class="container mx-auto px-4 py-12 text-center md:py-16">
            <h1 class="text-3xl font-semibold sm:text-4xl md:text-5xl">Gallery</h1>
            <p class="mx-auto mt-4 max-w-3xl text-teal-100">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet eleifend
                nulla. Sumber foto : <span class="underline decoration-teal-200/60">globalmadani.sch.id</span>
            </p>
        </div>
    </section>

    <!-- Gallery grid -->
    @php
        $photos = [
            ['title' => 'Lab Komputer', 'src' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a5a?auto=format&fit=crop&w=1200&q=60'],
            ['title' => 'Kantin', 'src' => 'https://images.unsplash.com/photo-1490111718993-d98654ce6cf7?auto=format&fit=crop&w=1200&q=60'],
            ['title' => 'Ruang Baca', 'src' => 'https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=1200&q=60'],
            ['title' => 'Teman Belajar', 'src' => 'https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&fit=crop&w=1200&q=60'],
            ['title' => 'Berkreasi di Kelas', 'src' => 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=1200&q=60'],
            ['title' => 'Kegiatan Pramuka', 'src' => 'https://images.unsplash.com/photo-1519681394354-3f07f5b4cd49?auto=format&fit=crop&w=1200&q=60'],
            ['title' => 'Ekstrakurikuler', 'src' => 'https://images.unsplash.com/photo-1496307042754-b4aa456c4a2d?auto=format&fit=crop&w=1200&q=60'],
            ['title' => 'Kegiatan Literasi', 'src' => 'https://images.unsplash.com/photo-1497633762265-9d179a990aa6?auto=format&fit=crop&w=1200&q=60'],
            ['title' => 'Siswa Berprestasi', 'src' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1200&q=60'],
        ];
    @endphp

    <section class="bg-white py-10 sm:py-12 md:py-16"
             x-data="{ open:false, src:'', title:'', show(item){ this.src=item.src; this.title=item.title; this.open=true }, close(){ this.open=false } }"
             @keydown.escape.window="close()">
        <div class="container mx-auto px-4">
            <div class="grid gap-4 sm:gap-5 md:gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($photos as $item)
                    <button type="button" @click="show(@js($item))"
                            class="group relative overflow-hidden rounded-lg bg-slate-100 text-left shadow focus:outline-none focus:ring-2 focus:ring-teal-500">
                        <img src="{{ $item['src'] }}" alt="{{ $item['title'] }}"
                             class="h-52 w-full object-cover transition-transform duration-500 group-hover:scale-105 md:h-56" />
                        <span class="sr-only">Buka gambar {{ $item['title'] }}</span>
                        <span class="pointer-events-none absolute inset-x-0 bottom-0 p-3 sm:p-4">
                            <span class="block rounded-md bg-gradient-to-t from-black/70 via-black/40 to-transparent p-3">
                                <span class="text-sm font-medium text-white">{{ $item['title'] }}</span>
                            </span>
                        </span>
                    </button>
                @endforeach
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div x-show="open" x-transition.opacity class="fixed inset-0 z-50 bg-black/80" @click.self="close()">
            <button @click="close()" aria-label="Tutup"
                    class="fixed right-5 top-5 inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/90 text-slate-800 shadow hover:bg-white">
                ✕
            </button>
            <div class="container mx-auto flex h-full items-center justify-center px-4 py-10">
                <figure class="max-w-5xl">
                    <img :src="src" :alt="title" class="mx-auto max-h-[80vh] w-auto rounded-lg shadow-2xl" />
                    <figcaption class="mt-4 text-center text-white/90" x-text="title"></figcaption>
                </figure>
            </div>
        </div>
    </section>
@endsection
