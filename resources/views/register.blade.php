@extends("master")

@section("konten")


<div class="col-md-10  mx-auto">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        {{ $message }}
</div>
@endif

<div class="card">
	<div class="card-header">
		<h3>Form Register</h3>
	</div>
	<div class="card-body">
		<form action="/register" method="POST">
		<div class="form-group row">
			<label class="col-sm-2">Username</label>
			<input type="text" name="username" class="form-control col-sm-9">
			<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
		</div>
		<div class="form-group row"	>
			<label class="form-label col-sm-2">Password</label>
			<input type="password" name="password" class="form-control col-sm-9">
		</div>
		
		<div class="form-group">
			<input type="submit" name="login" class="btn btn-primary" value="Register">
		</div>
		</form>
	</div>
</div>
</div>
@endsection