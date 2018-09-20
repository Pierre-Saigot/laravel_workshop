@extends('layouts.master')

@section('content')
<section class="home">
	<div class="left-content">
		<h2>Les formations & stages récents : </h2>
		@foreach ($posts as $post)
		 	@if($post->status)
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
			@endif
		@endforeach
	</div>
	<div class="right-content">
		<div class="search">
			<h1>Recherche stage ou formation </h1>

			<form action="{{route('searchHome')}}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="input-search input-group">
					<input name="search" class="form-control" type="search" placeholder="Recherche...">
					<div class="input-group-append">
	        			<button type="submit"><i class='fas fa-search'></i></button>
	  				</div>
				</div>
			</form>
		</div>
	</div>
</section>

@endsection