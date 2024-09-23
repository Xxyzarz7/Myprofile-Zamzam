<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('projects', [
            'title' => 'MyProfile-Zamzam-Projects',
            'posts' => [
                [
                    'id' => '1',
                    'image' => 'images/samurai.jpg',
                    'url-project' => '/Game-Samurai',
                    'date' => '21 Sep 2024',
                    'title' => 'Game Samurai',
                    'description' => 'Masuki dunia samurai yang penuh aksi dalam "Samurai Duel," sebuah pertarungan satu lawan satu yang intens dan mendebarkan. Dalam duel ini, dua pemain akan bertarung dalam arena yang berisi rintangan dan latar yang memukau, dengan tujuan utama untuk mengalahkan lawan dalam waktu 60 detik. Pilih karakter samurai yang unik, masing-masing dengan kemampuan khusus dan senjata ikonik. Pertarungan dimulai dengan ketegangan tinggi, di mana strategi, refleks, dan kecepatan menjadi kunci untuk meraih kemenangan. Gunakan serangan cepat dan kombinasi yang mematikan untuk menjatuhkan lawan atau memanfaatkan rintangan untuk bersembunyi dan merencanakan serangan balik. Setiap detik sangat berharga, dan pemain harus berhati-hati untuk menghindari serangan lawan sambil mencari kesempatan untuk memberikan serangan fatal. Siapakah yang akan keluar sebagai pemenang dalam duel epik ini? Hanya waktu yang akan menjawab. Bergabunglah dalam "Samurai Duel" dan buktikan siapa yang layak menjadi samurai terhebat!',
                ],
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Implementasi untuk menampilkan form pembuatan proyek
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Implementasi untuk menyimpan proyek baru
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $posts = [
            [
                'id' => '1',
                'image' => 'images/samurai.jpg',
                'url-project' => '/Game-Samurai',
                'date' => '21 Sep 2024',
                'title' => 'Game Samurai',
                'description' => 'Masuki dunia samurai yang penuh aksi dalam "Samurai Duel," sebuah pertarungan satu lawan satu yang intens dan mendebarkan. Dalam duel ini, dua pemain akan bertarung dalam arena yang berisi rintangan dan latar yang memukau, dengan tujuan utama untuk mengalahkan lawan dalam waktu 60 detik. Pilih karakter samurai yang unik, masing-masing dengan kemampuan khusus dan senjata ikonik. Pertarungan dimulai dengan ketegangan tinggi, di mana strategi, refleks, dan kecepatan menjadi kunci untuk meraih kemenangan. Gunakan serangan cepat dan kombinasi yang mematikan untuk menjatuhkan lawan atau memanfaatkan rintangan untuk bersembunyi dan merencanakan serangan balik. Setiap detik sangat berharga, dan pemain harus berhati-hati untuk menghindari serangan lawan sambil mencari kesempatan untuk memberikan serangan fatal. Siapakah yang akan keluar sebagai pemenang dalam duel epik ini? Hanya waktu yang akan menjawab. Bergabunglah dalam "Samurai Duel" dan buktikan siapa yang layak menjadi samurai terhebat!',
            ],
        ];

        $post = collect($posts)->firstWhere('id', $id);

        if ($post) {
            session(['post' => $post]);
            return redirect('/Post');
        }

        return redirect('/Projects')->with('error', 'Post not found.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Implementasi untuk menampilkan form edit proyek
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Implementasi untuk memperbarui proyek yang ada
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Implementasi untuk menghapus proyek
    }
}
