@extends("master")

@section("judul","Berikut data tutorial yang berhasil tersimpan di database.")

@section("konten")
<div class="col-md-12 mt-4">
    
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            {{ $message }}
    </div>
@endif

<div class="card">
	<div class="card-header">
		<h3>Data Tutorial</h3>
	</div>
	<div class="card-body">
		<a href="blog/baru" class="btn btn-primary mb-3">Data baru</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>Id</td>
					<td>Judul</td>
					<td>Slug</td>
					<td>Aksi</td>
				</tr	>
			</thead>
			<tbody>
				@foreach($data as $s)
					<tr>
						<td>{{$s->id_artikel}}</td>
						<td>{{$s->judul}}</td>
						<td>{{$s->slug}}</td>
						<td><a href="/admin/blog/ubah/{{$s->id_artikel}}" class="btn btn-primary btn-sm">Ubah</a> <a href="/admin/blog/hapus/{{$s->id_artikel}}" class="btn btn-danger btn-sm">Hapus</a></td>
					</tr>
				@endforeach				
			</tbody>
		</table>
	</div>
</div>
</div>
@endsection