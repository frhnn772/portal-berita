@extends('master')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  @foreach($data as $thumbnail)
    <div class="carousel-item active">
      <img src="/{{$thumbnail->gambar_berita}}" class="img-fluid"alt="Wild Landscape"/>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@foreach($data as $item)
<div class="container px-4 px-lg-5 mt-5">
  <div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-12 col-xl-12">
        <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">{{ $item->judul_berita }}</h2>
            </a>
            <h3 class="post-subtitle">{{ $item->isi_berita }}</h3>
            <p class="post-meta">Posted By {{ $item->kreator }}</p>
          </div>
          <!-- Divider -->
          <hr class="my-4">
          <!-- Pager -->
        </div>
      </div>
    </div>
    @endforeach
    @endsection