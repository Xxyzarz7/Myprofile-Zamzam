@extends('yield/user/layout')

@section('body')
    {{-- Body Section --}}
    <section class="ftco-section bg-light" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Project</span>
                    <h2>Project Saya</h2>
                </div>
            </div>
            {{-- Bagian Project --}}
            <div class="row d-flex">
                @forelse ( $projects as $project )
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{ $project->url_project }}">
                            <div class="block-20" style="background-image: url({{ asset('/storage/projects/'.$project->image) }});"></div>
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">{{ $project->date }}</span>
                                </p>
                            </div>
                            <a href="{{ route('Projects.show', $project->id) }}">
                                <h3 class="heading">{{ $project->title }}</h3>
                                <p class="card-text">{{ Str::limit( $project->description, 100) }}</p>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col text-center">
                    <b>PROJECTS KOSONG</b>
                </div>
                @endforelse
            </div>
            {{-- Link paginasi --}}
            <div class="row justify-content-center">
                {{ $projects->links() }}
            </div>
        </div>
    </section>
    @parent
@endsection