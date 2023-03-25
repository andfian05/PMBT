@extends('backend.panitia-a.index')
@section('content')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning-emphasis">
              <div class="inner">
                <h3>
                  @if ($testsurvei == '')
                    -
                  @else
                    {{ $testsurvei }}
                  @endif
                </h3>
                <p>Test Survei</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-users fa-1x"></i>
              </div>
              <a href="{{ route('test-survey.create') }}" class="small-box-footer">Mulai Tes <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection