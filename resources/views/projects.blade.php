@extends('yield/layout')

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
                @foreach ($posts as $data)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="{{ $data['url-project'] }}">
                                <div class="block-20" style="background-image: url({{ $data['image'] }});"></div>
                            </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center mb-3 meta">
                                    <p class="mb-0">
                                        <span class="mr-2">{{ $data['date'] }}</span>
                                    </p>
                                </div>
                                <a href="{{ route('Projects.show', $data['id']) }}">
                                    <h3 class="heading">{{ $data['title'] }}</h3>
                                    <p class="card-text">{{ Str::limit($data['description'], 100) }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>            
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
        </div>
    </section>
    @parent
@endsection 
