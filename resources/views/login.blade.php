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
@if(Session::has('username'))
	<div class="alert alert-danger">
		{{Session::get('username')}}
	</div>
@endif
@if(Session::has('password'))
	<div class="alert alert-danger">
		{{Session::get('password')}}
	</div>
@endif
<div class="card">
	<form action="/login" method="POST">
	<div class="card-header">
		<h3>Form Login</h3>
	</div>
	<div class="card-body">
		<div class="form-group row">
			<label class="col-sm-2">Username</label>
			<input type="hidden" name="_token" value="<?= csrf_token(); ?>">
			<input type="text" name="username" class="form-control col-sm-9">	
		</div>
		<div class="form-group row"	>
			<label class="form-label col-sm-2">Password</label>
			<input type="password" name="password" class="form-control col-sm-9">
		</div>
		<div class="form-group">
			<input type="submit" name="login" class="btn btn-primary" value="Login">
		</div>
	</div>
	</form>
</div>
</div>
@endsection