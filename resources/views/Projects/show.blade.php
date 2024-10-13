@extends('yield/user/layout')

@section('body')
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                        <h2 class="mb-4">{{ $project->title }}</h2>
                        <img src="{{ asset('/storage/projects/'.$project->image) }}" alt="" class="responsive-img">
                        <span class="subheading">{{ $project->date }}</span>
                        <p>{{ $project->description }}</p>
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