@extends('master')

@section('content')
<div class="row mt-4 mb-2">
    <div class="col-6 ">
        <h4>Semua Berita</h4>
    </div>
    <div class="col-6 ">
        <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-success float-end"><i class="fas fa-plus"></i> Tambah Berita</button>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-sm table-hover mb-0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul berita</th>
                        <th scope="col">Kreator</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Waktu Rilis</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $data)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$data -> judul_berita}}</td>
                        <td>{{$data -> kreator}}</td>
                        <td><img alt="img" class="rounded-2 " src="/{{ $data->gambar_berita }}" width="50px"></td>
                        <td>{{$data -> created_at}}</td>
                        <td>
                            <a href="" class="btn btn-info btn-sm" title="Detail"><i class="fas fa-eye"></i></a>
                            <a href="ubah/{{$data->id}}" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                            <a href="hapus/{{$data->id}}" class="btn btn-danger btn-sm" title="Hapus"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Berita Baru</h5>
            </div>
            <form action="{{url('tambah_berita')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
                        <input type="text" name="judul_berita" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Kreator</label>
                        <input type="text" name="kreator" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Isi Berita</label>
                        <textarea name="isi_berita" id="exampleFormControlTextarea1" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gambar Berita</label>
                        <input type="file" name="gambar_berita" class="form-control" id="exampleFormControlInput1" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection