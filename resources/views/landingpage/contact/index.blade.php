@extends('landingpage.layouts.main')

@section('index')
    <section class="pb-0">
        <div class="bg-holder bg-size"
            style="background-image:url({!! asset('assets/img/gallery/hero-bg.png') !!});background-position:top center;background-size:cover;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 py-10">
                    <div class="img-contact"><img class="pt-7 pt-md-0 w-100" src="{!! asset('assets/img/illustrations/contact.png') !!}" alt="contact-img">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 py-7 px-5">

                    <div class="col-md-12">
                        <h1 class="text-black">Hubungi Kami!<br /></h1>
                        <p class="text-black">Isi form ini dan kami akan membalasnya. Jika ingin melalui email/nomor telepon
                            Anda bisa menghubungi langsung ke email <a class="text-succes">info@klinik.com</a> atau nomor
                            telepon di +62 712 3456 7890</p>
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('contact-form.store') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12 m-1">
                                <div class="form-group">
                                    <strong>Nama:</strong>
                                    <input type="text" name="name" class="form-control py-2" placeholder="Name"
                                        value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 m-2">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="text" name="email" class="form-control py-2" placeholder="Email"
                                        value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 m-2">
                                <div class="form-group">
                                    <strong>Nomor Telepon:</strong>
                                    <input type="text" name="phone" class="form-control py-2" placeholder="No Telepon"
                                        value="{{ old('phone') }}">

                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 m-2">
                                <div class="form-group">
                                    <strong>Tentang:</strong>
                                    <input type="text" name="subject" class="form-control py-2" placeholder="Tentang"
                                        value="{{ old('subject') }}">
                                    @if ($errors->has('subject'))
                                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12 m-2">
                                <div class="form-group">
                                    <strong>Pesan:</strong>
                                    <textarea name="message" rows="3" class="form-control py-1" placeholder="Pesan">{{ old('message') }}</textarea>

                                    @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group m-2">
                            <button class="btn btn-primary btn-submit w-25">Save</button>
                        </div>
                    </form>
                </div>

            </div>
    </section>
@endsection
