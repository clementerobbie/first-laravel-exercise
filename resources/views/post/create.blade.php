@extends('layouts/master')

@section('content')
<div class="col-md-8 blog-main">
	<form method="POST" action="\create">
		@csrf
		<div class="form-group">
			<label for="exampleInputEmail1">Title</label>
			<input type="text" class="form-control" name="title" required>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Body</label>
			<textarea class="form-control" name="body" required></textarea>
		</div>

		<button type="submit" class="btn btn-primary">Publish</button>
	</form>
</div>
@endsection