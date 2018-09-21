@extends('layouts.master')

@section('content')
<section class="formation">
	<div class="left-content">
		@foreach ($posts as $post)
			<div class="item">
				<a class="item-link" href="{{ url('post/' . $post->id) }}"></a>
				<div class="left-item">
					<img class="image" src="{{url('images', $post->pictures->link)}}" alt="Image du post {{$post->titre}}">
				</div>
				<div class="right-item">
					<span class="type">{{ $post->post_type }}</span >
					<a class="title" href="{{ url('post/' . $post->id) }}">{{ $post->title }}</a>
					<p class="date-start">
						<i class="far fa-calendar-alt"></i>
						Débute le : {{$post->start}}
					</p> 	
					<p class="description">{{ $post->description }}</p>	
				</div>
			</div>
		@endforeach
		{{ $posts->links() }}
	</div>
	<div class="right-content">
		<div class="search">
			<h1>Recherchez un(e) stage / formation </h1>
			<form action="{{route('search')}}" method="GET" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="input-search input-group">
					<input name="search" class="form-control" type="search" placeholder="Recherche...">
					<div class="input-group-append">
	        			<button type="submit"><i class='fas fa-search'></i></button>
	  				</div>
				</div>
			</form>
		</div>
		<button class="go-top">
			<i class="fas fa-angle-up"></i>
		</button>
	</div>
</section>

@endsection