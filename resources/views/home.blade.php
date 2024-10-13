@extends('yield/user/layout')

@section('body')
    {{-- Body Section --}}
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container-fluid px-md-0">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                        <div class="one-third order-md-last img" style="background-image:url(images/bg_1.jpg);">
                            <div class="overlay"></div>
                            <div class="overlay-1"></div>
                        </div>
                        <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax="properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Muhammad Zamzam Hidayattullah</span>
                                <h1 class="mb-4 mt-3">Siswa SMK <span>Bakti Nusantara</span> 666</h1>
                                <p>
                                    <a href="/About" class="btn btn-primary">Learn More</a>
                                    <a href="/Contact" class="btn btn-primary btn-outline-primary">Contact Me</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container-fluid px-md-0">
                    <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                        <div class="one-third order-md-last img" style="background-image:url(images/bg_2.jpg);">
                            <div class="overlay"></div>
                            <div class="overlay-1"></div>
                        </div>
                        <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax="properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">XII PPLG 1</span>
                                <h1 class="mb-4 mt-3">Jurusan <span>PPLG</span> Kelas 12.</h1>
                                <p>
                                    <a href="/About" class="btn btn-primary">Learn More</a>
                                    <a href="/Contact" class="btn btn-primary btn-outline-primary">Contact Me</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @parent
@endsection