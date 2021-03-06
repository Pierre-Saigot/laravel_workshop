@extends('layouts.master')
@section('content')
<div class="dashboard ">
	<div class="notif"></div>
	<div class="dashboard-content">
		<div class="table">
			<div class="top-table ">
				<div class="top-table-title">
					<h2>Administration</h2>
				</div>
				<div class="top-table-action">
					<a href="{{url('post/create')}}" class="btn btn-grey btn-normal btn-add">
						<span><i class="fas fa-edit"></i></span>
						Ajouter un stage / formation
					</a>
				</div>			
			</div>
			<table class="table table-bordered table-hover">
				<thead>
					<th>Titre</th>
					<th>Type</th>
					<th>Crée le</th>
					<th>Statut</th>
					<th>Action</th>
				</thead>
				<tbody>
					@foreach ($posts as $post)
						<tr>
							<td>{{ $post->title }}</td>
							<td>{{ $post->post_type }}</td>
							<td>{{ $post->created_at }}</td>
							<td>
								@if($post->status == "publié")
									<span><i class="fa fa-check"></i></span>
								@else
									<span><i class="fa fa-times"></i></span>
								@endif
							</td>
							<td>
								<a href="{{ url('post/' . $post->id) }}" class="btn btn-icon btn-view btn-shadow btn-grey" id="view_post-{{$post->id}}" data-toggle="tooltip" title="Voir" target="blank">
									<span><i class="fa fa-eye"></i></span>
								</a>
								<a href="post/edit/{{ $post->id }}" class="btn btn-grey btn-icon btn-shadow btn-edit" id="edit_post-{{$post->id}}" data-toggle="tooltip" title="Modifier">
									<span><i class="far fa-edit"></i></span>
								</a>
								<a class="btn btn-red trigger-delete btn-shadow btn-icon" data-id="{{$post->id}}" data-toggle="tooltip" title="Supprimer">
									<span><i class="far fa-trash-alt"></i></span>
								</a>
								
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="popup_remove">
			<div class="popup_content">
				<div class="top_popup">
					<h2>Supression d'un stage ou d'une formation</h2>		
				</div>
				<div class="body_popup">
					<p>	
						Êtes-vous sûr ? 
					</p>
					<div class="btn_action">
						<a class="btn trigger-cancel btn-yellow btn-normal btn-cancel">
							<span><i class="fas fa-ban"></i></span>
							Annuler
						</a>
						<a href="" id="delete-this-one" type="submit" class="btn btn-red btn-normal btn-remove">
							<span><i class="fas fa-trash-alt"></i></span>
							Supprimer
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

