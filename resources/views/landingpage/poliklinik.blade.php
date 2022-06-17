@extends('landingpage.layouts.main')

@section('index')
<section class="pb-0">

    <div class="container">
      <div class="row">
        <div class="col-12 py-3">
          <div class="bg-holder bg-size" style="background-image:url({!! asset('assets/img/gallery/bg-departments.png') !!});background-position:top center;background-size:contain;">
          </div>
          <!--/.bg-holder-->

          <h1 class="text-center">Poliklinik</h1>
        </div>
      </div>
    </div>
    <!-- end of .container-->

  </section>

  <section class="py-0">

    <div class="container">
      <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
        @foreach($data as $item)
        <div class="col-auto col-md-4 col-lg-auto text-xl-start">
          <div class="d-flex flex-column align-items-center">
            <div class="icon-box text-center"><a class="text-decoration-none" href="{{ url('poliklinik/'.$item->id) }}"><img class="mb-3 deparment-icon" src="{!! asset('assets/img/icons/neurology.png') !!}" alt="..." /><img class="mb-3 deparment-icon-hover" src="{!! asset('assets/img/icons/neurology.svg') !!}" alt="..." />
                <p class="fs-1 fs-xxl-2 text-center">{{ $item->poli }}</p>
              </a></div>
          </div>
        </div>
        @endforeach
      </div>

      @yield('content')
      {{-- lklk --}}
    </div>
    <!-- end of .container-->

  </section>
@endsection