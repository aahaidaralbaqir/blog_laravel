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
                <h3>Tambah Blog</h3>
            </div>
        <hr>
        <form action="/admin/blog/simpan" method="post" enctype="multipart/form-data">
        <div class="form-group">
                <label for="judul">Judul</label>
                <input type="hidden" name="_token" value="<?= csrf_token(); ?>">
                <input type="text" name="judul" id="judul" class=form-control>
            </div> 
            <div class="form-group">
                <label for="isi">Isi</label>
                <textarea name="isi" id="isi" class=form-control></textarea>
            </div> 
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" class=form-control>
            </div> 
            <div class="form-group">
                <input type="submit" value="Simpan data" class="btn btn-primary ">
            </div>
        </div>
        </form>
    </div>  
    </div>
@endsection