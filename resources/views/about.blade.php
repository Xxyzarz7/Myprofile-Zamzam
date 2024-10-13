@extends('yield/user/layout')

@section('body')
    {{-- Body Section --}}
    <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                             style="background-image:url(images/profil.jpg);">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">
                            <div class="col-md-12 heading-section ftco-animate">
                                <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">Tentang Saya</h2>
                                <p>Nama saya Muhammad Zamzam Hidayattullah. Saya lahir di Bandung pada 26 Mei 2007. Saat ini, saya adalah siswa kelas 12 jurusan PPLG di SMK Bakti Nusantara 666. Saya sedang berada di tahap akhir pendidikan menengah kejuruan, dan fokus mempersiapkan diri untuk melanjutkan ke jenjang yang lebih tinggi atau memasuki dunia kerja. Di masa depan, saya bercita-cita menjadi seorang programmer. Saya juga pernah mengikuti pelatihan di Latihan Mobile bersama PT. LPTK, seleksi lomba Mobile di PT. Fathforce, serta mengerjakan proyek peminjaman barang.</p>
                                <div class="row progress-circle mb-5">

                                    {{-- Skills Web --}}
                                    <div class="col-lg-4 mb-4 mt-4">
                                        <div class="bg-white rounded-lg shadow p-4">
                                            <h2 class="h5 font-weight-bold text-center mb-2">Web</h2>
                                            <div class="progress mx-auto" data-value='5'>
                                                <span class="progress-left">
                                                    <span class="progress-bar border-primary"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar border-primary"></span>
                                                </span>
                                                <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                    <div class="h2 font-weight-bold">5<sup class="small">%</sup></div>
                                                </div>
                                            </div>
                                            <div class="row text-center mt-2">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Skills Mobile --}}
                                    <div class="col-lg-4 mb-4 mt-4">
                                        <div class="bg-white rounded-lg shadow p-4">
                                            <h2 class="h5 font-weight-bold text-center mb-2">Mobile</h2>
                                            <div class="progress mx-auto" data-value='7'>
                                                <span class="progress-left">
                                                    <span class="progress-bar border-primary"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar border-primary"></span>
                                                </span>
                                                <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                    <div class="h2 font-weight-bold">7<sup class="small">%</sup></div>
                                                </div>
                                            </div>
                                            <div class="row text-center mt-2">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Skills Design --}}
                                    <div class="col-lg-4 mb-4 mt-4">
                                        <div class="bg-white rounded-lg shadow p-4">
                                            <h2 class="h5 font-weight-bold text-center mb-2">Desain</h2>
                                            <div class="progress mx-auto" data-value='3'>
                                                <span class="progress-left">
                                                    <span class="progress-bar border-primary"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar border-primary"></span>
                                                </span>
                                                <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                    <div class="h2 font-weight-bold">3<sup class="small">%</sup></div>
                                                </div>
                                            </div>
                                            <div class="mt-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @parent
@endsection