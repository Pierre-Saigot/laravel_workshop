@extends('layouts.master')

@section('content')
<section class="stage ">
	<div class="left-content">
		@foreach ($posts as $post)
			<div class="item">
				<a class="item-link" href="{{ url('post/' . $post->id) }}"></a>
				<div class="left-item">
					<img class="image" src="{{url('images', $post->pictures->link)}}" alt="Image du post {{$post->titre}}">
				</div>
				<div class="right-item">
					<span  class="type">{{ $post->post_type }}</span >
					<a class="title" href="{{ url('post/' . $post->id) }}">{{ $post->title }}</a>
					<p class="description">{{ $post->description }}</p>	
					<p class="date-start">
						<i class="far fa-calendar-alt"></i>
						Débute le : {{$post->start}}
					</p> 	
				</div>
			</div>
		@endforeach
		{{ $posts->links() }}
	</div>
	<div class="right-content">
		<div class="search">
			<h1>Recherchez un(e) stage / formation </h1>
			<div class="input-search input-group">
				<input class="form-control" type="search" id="site-search" placeholder="Saisissez le titre d'un stage ou formation">
				<div class="input-group-append">
        				<button><i class='fas fa-search'></i></button>
  				</div>
			</div>
		</div>
		<button class="go-top">
			<i class="fas fa-angle-up"></i>
		</button>
	</div>
</section>

@endsection