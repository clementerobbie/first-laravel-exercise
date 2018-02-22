@extends('layouts/master')

@section('content')
<div class="col-md-8 blog-main">
	<h3 class="pb-3 mb-4 font-italic border-bottom">
		About this Post
	</h3>

	<div class="card">
		<div class="card-body">
			<div class="blog-post">
				<h2 class="blog-post-title">

					{{ $post->title }}

				</h2>
				<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">{{ $post->user->name }}</a></p>

				<p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
				<hr>
				<blockquote>
					{{ $post->body }}
				</blockquote>
				<p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>

					@foreach($post->comment as $comment)
					@include('comment/show')
					@endforeach
				
				@include('comment/create')
				
			</div>
		</div>
	</div>
</div>
@endsection