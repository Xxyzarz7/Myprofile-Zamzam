@extends('yield/admin/layout')

@section('body')
    {{-- Body Section --}}
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Update Project</span>
                    <h2 class="mb-4">Project</h2>
                </div>
            </div>
            {{-- form project --}}
            <form action="{{ route('Projects.update', $project->id) }}" class="bg-light p-4 p-md-5 contact-form" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="file" class="form-control @error('image') is-invalid @enderror" placeholder="Image" name="image">
                            @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control @error('url_project') is-invalid @enderror" placeholder="Url Project" name="url_project"  value="{{ old('url_project', $project->url_project) }}">
                            @error('url_project')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="date" class="form-control @error('date') is-invalid @enderror" placeholder="Tanggal" name="date" value="{{ old('date', $project->date) }}">
                            @error('date')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Judul" name="title" value="{{ old('title', $project->title) }}">
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="description" id="" cols="30" rows="7" class="form-control @error('description') is-invalid @enderror" placeholder="Deskripsi">{{ old('description', $project->description) }}</textarea>
                            @error('description')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>                    
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-primary py-3 px-5 w-100">
                    </div>                 
                </div>
            </form>
            {{-- end form --}}
        </div>
    </section>
    @parent
@endsection
