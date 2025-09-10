<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function profil()
    {
        return view('pages.profil');
    }

    public function program()
    {
        return view('pages.program');
    }

    public function galeri()
    {
        return view('pages.galeri');
    }

    public function informasi()
    {
        return view('pages.informasi');
    }

    // Informasi submenu pages
    public function informasiArtikel()
    {
        return view('pages.artikel');
    }

    public function informasiKegiatanAlumni()
    {
        return view('pages.kegiatan-alumni');
    }

    public function informasiPengumuman()
    {
        return view('pages.pengumuman');
    }

    // Detail artikel
    public function detailArtikel()
    {
        return view('pages.detail-artikel');
    }

    // Profil submenu pages
    public function fasilitas()
    {
        return view('pages.fasilitas');
    }

    public function kepalaSekolah()
    {
        return view('pages.kepala-sekolah');
    }

    public function tenagaPengajar()
    {
        return view('pages.tenaga-pengajar');
    }

    // Detail tenaga pengajar
    public function detailTenaga(string $slug)
    {
        $teachers = [
            [
                'slug' => 'safitri-wandari-spd',
                'name' => 'Safitri Wandari S.pd',
                'role' => 'Kepala Sekolah',
                'img'  => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=1000&auto=format&fit=crop',
            ],
            [
                'slug' => 'dra-rusmala-nainggolan',
                'name' => 'Dra. Rusmala Nainggolan',
                'role' => 'Wakil Kepala Sekolah',
                'img'  => 'https://images.unsplash.com/photo-1554151228-14d9def656e4?q=80&w=1000&auto=format&fit=crop',
            ],
            [
                'slug' => 'nurhilaludin-spdi',
                'name' => 'Nurhilaludin, S.Pd.I',
                'role' => 'Guru Fisika',
                'img'  => 'https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?q=80&w=1000&auto=format&fit=crop',
            ],
            [
                'slug' => 'nuliyani-s',
                'name' => 'Nuliyani S',
                'role' => 'Guru Sejarah',
                'img'  => 'https://images.unsplash.com/photo-1552374196-c4e7ffc6e126?q=80&w=1000&auto=format&fit=crop',
            ],
            [
                'slug' => 'alfira-yuanita-spd',
                'name' => 'Alfira Yuanita Spd.',
                'role' => 'Bahasa Indonesia',
                'img'  => 'https://images.unsplash.com/photo-1544006659-f0b21884ce1d?q=80&w=1000&auto=format&fit=crop',
            ],
            [
                'slug' => 'septiana-andini',
                'name' => 'Septiana Andini',
                'role' => 'Guru Matematika',
                'img'  => 'https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?q=80&w=1000&auto=format&fit=crop',
            ],
            [
                'slug' => 'yuda-pardianan',
                'name' => 'Yuda Pardianan',
                'role' => 'Guru Penjas',
                'img'  => 'https://images.unsplash.com/photo-1607746882042-944635dfe10e?q=80&w=1000&auto=format&fit=crop',
            ],
            [
                'slug' => 'wahyu-perdana',
                'name' => 'Wahyu Perdana',
                'role' => 'Guru Agama',
                'img'  => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1000&auto=format&fit=crop',
            ],
        ];

        $teacher = collect($teachers)->firstWhere('slug', $slug);
        abort_if(!$teacher, 404);

        return view('pages.kepala-sekolah', compact('teacher'));
    }
}
