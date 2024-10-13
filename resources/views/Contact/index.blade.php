@extends('yield/admin/layout')

@section('body')
    {{-- Body Section --}}
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Data Contact</span>
                    <h2 class="mb-4">Contact</h2>
                </div>
            </div>
            {{-- table --}}
            <div class="bg-light p-4 p-md-5 contact-form">
                <div class="table-responsive">
                    <table id="myTable" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Pesan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $contacts as $contact )
                            <tr>
                                <td>{{ $contact->nama }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->pesan }}</td>
                                <td>
                                    <form id="delete-form-{{ $contact->id }}" action="{{ route('Contact.destroy', $contact->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger" onclick="sweetalert2({{ $contact->id }})">
                                            <i class="bi bi-trash3-fill"></i>
                                        </button>
                                    </form>
                                </td>                            
                            </tr>
                            @empty
                                <b>PESAN KOSONG</b>
                            @endforelse
                            {{ $contacts->links() }}
                        </tbody>
                    </table>
                </div>
            </div> <br> <br>
            {{-- end table --}}
        </div>
    </section>
    @parent
@endsection 