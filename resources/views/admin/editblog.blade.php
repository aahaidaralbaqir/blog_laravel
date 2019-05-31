@extends("master")

@section("konten")
    <div class="col-md-12">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3>Ubah Blog</h3>
            </div>
        <hr>
        <form action="/admin/blog/ubah" method="post" enctype="multipart/form-data">
        <div class="form-group">
                <label for="judul">Judul</label>
                <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
                <input type="hidden" name="id_artikel" value="{{$data->id_artikel}}">
                <input type="text" value="{{$data->judul}}" name="judul" id="judul" class=form-control>
            </div> 
            <div class="form-group">
                <label for="isi">Isi</label>
                <textarea name="isi" id="isi" class=form-control><?= $data->isi; ?></textarea>
            <div class="form-group">
            </div>  
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" class=form-control>
            </div> 
            <div class="form-group">
                <label><input type="checkbox" name="gantiGambar"> Centang untuk mengganti gambar</label>
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan perubahan" class="btn btn-primary ">
            </div>
        </div>
        </form>
    </div>  
    </div>
@endsection