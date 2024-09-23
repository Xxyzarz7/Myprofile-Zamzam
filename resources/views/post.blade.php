@extends('yield/layout')

@section('body')
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    @if (session('post'))
                        <h2 class="mb-4">{{ session('post')['title'] }}</h2>
                        <img src="{{ session('post')['image'] }}" alt="" class="responsive-img">
                        <span class="subheading">{{ session('post')['date'] }}</span>
                        <p>{{ session('post')['description'] }}</p>
                    @else
                        <p>Tidak ada data yang ditemukan.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @parent
@endsection

<style>
    .responsive-img {
        width: 100%;
        height: auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    @media (min-width: 768px) {
        .responsive-img {
            width: 75%;
            max-width: 75%;
        }
    }
</style>