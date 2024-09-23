@extends('yield/layout')

@section('body')
    {{-- Body Section --}}
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Contact</span>
                    <h2 class="mb-4">Contact Saya</h2>
                </div>
            </div>
            {{-- Form Pesan --}}
            <div class="row block-9">
                <div class="col-md-8">
                    <form action="#" class="bg-light p-4 p-md-5 contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Pesan"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Kirim" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- Account --}}
                <div class="col-md-4 d-flex pl-md-5">
                    <div class="row">
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="text">
                                <p><span>Alamat:</span> Indonesia, Jawa Barat, Bandung, Cileunyi RT 001 RW 014</p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="text">
                                <p><span>Nomor:</span> <a href="tel:0895708462226">0895708462226</a></p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-paper-plane"></span>
                            </div>
                            <div class="text">
                                <p><span>Email:</span> <a href="mailto:zamzamhidayattullah27@gmail.com">zamzamhidayattullah27@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="dbox w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-globe"></span>
                            </div>
                            <div class="text">
                                <p><span>Website:</span> <a href="#">MyProfile-Zamzam</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @parent
@endsection