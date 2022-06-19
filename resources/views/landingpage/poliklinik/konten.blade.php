@extends('landingpage.poliklinik')
@section('content')
<section class="bg-secondary">
  <div class="bg-holder" style="background-image:url({{ url($) }});background-position:center;background-size:contain;">
  </div>
  <!--/.bg-holder-->

  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-5 col-xxl-6"><img class="img-fluid" src="assets/img/gallery/eye-care.png" alt="..." /></div>
      <div class="col-md-7 col-xxl-6 text-center text-md-start">
        <h2 class="fw-bold text-light mb-4 mt-4 mt-lg-0">Eye Care with Top Professionals<br class="d-none d-sm-block" />and In Budget.</h2>
        <p class="text-light">We've built a healthcare system that puts your needs first.<br class="d-none d-sm-block" />For us, there is nothing more important than the health of <br class="d-none d-sm-block" />you and your loved ones. </p>
        <div class="py-3"><a class="btn btn-lg btn-light rounded-pill" href="#!" role="button">Learn more </a></div>
      </div>
    </div>
  </div>
</section>
<section class="py-5">
    <div class="bg-holder bg-size" style="background-image:url({!! asset('assets/img/gallery/doctors-bg.png') !!});background-position:top center;background-size:contain;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
      <div class="row flex-center">
        <div class="col-xl-10 px-0">
          <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
            <div class="carousel-inner">
                @foreach ($data as $dokter)

                <div class="carousel-item {{ ($dokter->id == 1)?'active':'' }}" data-bs-interval="10000">
                    <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                        
                        {{-- card --}}
                        
                  <div class="col-md-12 mb-8 mb-md-0">
                    <div class="card card-span h-100 shadow">
                      <div class="card-body d-flex flex-column flex-center py-5"><img src="{{ url($dokter->image) }}" width="128" alt="..." />
                        <h5 class="mt-3">{{ $dokter->name }}</h5>
                        <p class="mb-0 fs-xxl-1">{{ $dokter->jk }}</p>
                        <p class="text-600 mb-0">{{ $dokter->HP }}</p>
                        <p class="text-600 mb-4">{{ $dokter->alamat }}</p>
                        <div class="text-center">
                          <button class="btn btn-outline-secondary rounded-pill" type="submit">View Profile</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
                </div>
            </div>
            @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection