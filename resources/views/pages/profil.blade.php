@extends('layouts.app')

@section('title', 'Profil Sekolah')

@section('content')
  <section class="container mx-auto px-4 py-16">
    @include('partials.breadcrumbs', [
      'items' => [
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Profil Sekolah']
      ]
    ])
    <h1 class="mb-3 text-3xl font-semibold">Profil Sekolah</h1>
    <p class="text-slate-600">Halaman masih dalam pengembangan.</p>
  </section>
@endsection
