@extends('backend.admin.index')
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
                  @if ($mahasantri == 0)
                    -
                  @else
                    {{ $mahasantri }}
                  @endif
                </h3>

                <p>Biodata Mahasantri</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-users fa-1x"></i>
              </div>
              <a href="{{ route('mahasantri.index') }}" class="small-box-footer">Melihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning-emphasis">
              <div class="inner">
                <h3>
                  @if ($survei == 0)
                    -
                  @else
                    {{ $survei }}
                  @endif
                </h3>

                <p>Data Survei</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-file-pen icon-feature  d-block mb-3 fa-3x"></i>
              </div>
              <a href="{{ route('survei.index') }}" class="small-box-footer">Melihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning-emphasis">
              <div class="inner">
                <h3>
                  @if ($bacaquran == 0)
                    -
                  @else
                    {{ $bacaquran }}
                  @endif
                </h3>

                <p>Data Bacaan Al Qur’an</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-book-quran"></i>
              </div>
              <a href="{{ route('baca-quran.index') }}" class="small-box-footer">Melihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning-emphasis">
              <div class="inner">
                <h3>
                  @if ($wawancara == 0)
                    -
                  @else
                    {{ $wawancara }}
                  @endif
                </h3>

                <p>Data Tanya Jawab</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-file-lines"></i>
              </div>
              <a href="{{ route('tanya-jawab.index')}}" class="small-box-footer">Melihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        
        <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning-emphasis">
              <div class="inner">
                <h3>
                  @if ($dtr == 0)
                    -
                  @else
                    {{ $dtr }}
                  @endif
                </h3>

                <p>Data DTR Seleksi</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-award"></i>
              </div>
              <a href="{{ route('dtr.index') }}" class="small-box-footer">Melihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        
       

        </div>
     
      </div>
    </section>
  </div>
  
@endsection