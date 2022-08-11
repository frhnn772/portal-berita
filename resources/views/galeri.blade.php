@extends('master')

@section('content')
<!-- Gallery -->
<div class="row ">
  @foreach($data as $thumbnail)
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img src="/{{$thumbnail->gambar_berita}}"class="w-100 shadow-1-strong rounded mb-4"alt="Gambar">
  </div>
  @endforeach
</div>
<!-- Gallery -->
@endsection