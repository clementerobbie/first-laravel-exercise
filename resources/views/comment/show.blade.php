
<div class="card">
	<div class="card-body">
		<p class="blog-post-meta">{{ $comment->created_at->toFormattedDateString() }} by <a href="#">{{ $comment->user->name }}</a></p>
		<blockquote>
		{{ $comment->body }} 
		</blockquote>
	</div>
</div>
