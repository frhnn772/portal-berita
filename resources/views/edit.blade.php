@extends ('master')

@section('content')


@foreach($berita as $berita)
<form action="/ubah_berita/{{$berita->id}}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="modal-body">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
            <input type="text" name="judul_berita" class="form-control" id="exampleFormControlInput1" value="{{$berita->kreator}}" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kreator</label>
            <input type="text" name="kreator" class="form-control" id="exampleFormControlInput1" value="{{$berita->judul_berita}}" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Isi Berita</label>
            <textarea name="isi_berita" id="exampleFormControlTextarea1" class="form-control" rows="3" required>{{$berita->isi_berita}}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Gambar Berita</label>
            <input type="file" name="gambar_berita" class="form-control" id="exampleFormControlInput1">
            <img class="mt-2" src="/{{$berita->gambar_berita}}" width="200px">
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-warning">Ubah</button>
</form>
@endforeach

@endsection