<div class="card">
	<div class="card-body">
		<form method="POST" action="/post/{{$post->id}}/comment">
			@csrf
			<div class="form-group">

				<textarea class="form-control" name="comment" placeholder="Post a Comment.." required></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Comment</button>
		</form>
	</div>
</div>