@extends('yield/admin/layout')

@section('body')
    {{-- Body Section --}}
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Data Projects</span>
                    <h2 class="mb-4">Projects</h2>
                </div>
            </div>
            {{-- table --}}
            <div class="bg-light p-4 p-md-5 contact-form">
                <div class="table-responsive">
                    <table id="myTable" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>Url Project</th>
                                <th>Tanggal</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Loop untuk menampilkan setiap project --}}
                            @forelse ( $projects as $project )
                            <tr>
                                <td>{{ $project->url_project }}</td>
                                <td>{{ $project->date }}</td>
                                <td>{{ $project->title }}</td>
                                <td>{{ Str::limit( $project->description, 10) }}</td>
                                <td>
                                    <form id="delete-form-{{ $project->id }}" action="{{ route('Projects.destroy', $project->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('Projects.edit', $project->id) }}" class="btn btn-success">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger" onclick="sweetalert({{ $project->id }})">
                                            <i class="bi bi-trash3-fill"></i>
                                        </button>
                                    </form>
                                    
                                </td>               
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">PESAN KOSONG</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- Link paginasi --}}
                    {{ $projects->links() }}
                </div>
            </div>
        </div>
    </section>
    @parent
@endsection
