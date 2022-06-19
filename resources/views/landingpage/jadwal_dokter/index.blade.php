@extends('landingpage.layouts.main')

@section('index')
    <section class="pb-0">

        <div class="container">
            <div class="row">
                <div class="col-12 py-3">
                    <!--/.bg-holder-->


                    <h1 class="text-center">Jadwal Dokter</h1>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section class="py-5">
        <div class="bg-holder bg-size"
            style="background-image:url({!! asset('assets/img/gallery/doctors-bg.png') !!});background-position:top center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row text-center">
                <div class="col-xl-12 col-md-12 px-0 py-5">
                    <h2>Dokter Berpengalaman Kami</h2>
                </div>
                @foreach ($data as $item)
                    <div class="col-md-4 m-2">
                        <div class="card card-span h-100 shadow">
                            {{-- <div class="card-body d-flex flex-column flex-center py-5">
                                <figure><img src="{!! asset('assets/img/gallery/dokter1.png') !!}" width="128" alt="..." /></figure>
                            </div> --}}
                            <div class="num_bd">
                                <p class="my-2">{{ $item->waktu }}</p>
                                <p class="my-2">{{ $item->id_dokter }}</p>
                                <p class="my-2">{{ $item->id_poliklinik }}</p>

                                <div class="text-center">
                                    <button class="btn btn-outline-secondary rounded-pill" type="submit">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
