@extends('layouts.master')
@section('content')
<div class="dashboard gradient">
	<div class="notif"></div>
	<div class="dashboard-content">
		<div class="table">
			<div class="top-table gradient">
				<div class="top-table-title">
					<h1>Administration</h1>
				</div>
				<div class="top-table-action">
					<a href="{{url('post/create')}}" class="btn btn-grey btn-normal btn-add">
						<span><i class="fas fa-edit"></i></span>
						Ajouter un stage / formation
					</a>
					<!-- <button class="btn btn-red btn-normal btn-remove-multiple">
						<span><i class="fas fa-trash-alt"></i></span>
						Supression multiple
					</button> -->
				</div>			
			</div>
			<table class="table table-bordered table-hover">
				<thead>
					<!-- <th><i class="fas fa-trash-alt"></i></th> -->
					<th>Titre</th>
					<th>Type</th>
					<th>Crée le</th>
					<th>Statut</th>
					<th>Action(s)</th>
				</thead>
				<tbody>
					@foreach ($posts as $post)
						<tr>
							<!-- <td> <input type="checkbox"> </td> -->
							<td>{{ $post->titre }}</td>
							<td>{{ $post->post_type }}</td>
							<td>{{ $post->created_at }}</td>
							<td></td>
							<td>
								<a href="{{ url('post/' . $post->id) }}" class="btn btn-icon btn-view btn-grey" id="view_post-{{$post->id}}" data-toggle="tooltip" title="Voir" target="blank">
									<span><i class="fa fa-eye"></i></span>
								</a>
								<a href="post/edit/{{ $post->id }}" class="btn btn-grey btn-icon btn-edit" id="edit_post-{{$post->id}}" data-toggle="tooltip" title="Modifier">
									<span><i class="far fa-edit"></i></span>
								</a>
								<a href="{{route('post.destroy',$post->id)}}" class="btn btn-red btn-icon" id="remove_post-{{$post->id}}" data-toggle="tooltip" title="Supprimer">
									<span><i class="far fa-trash-alt"></i></span>
								</a>
								
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="popup_remove">
			{{ csrf_token() }}
			<a href="javascript:;" class="btn-close_remove">
				<i class="far fa-times-circle"></i>
			</a>
			<div class="popup_content">
				<div class="top_popup gradient">
					<h2>Supression d'un(e) stage ou d'une formation</h2>		
				</div>
				<div class="body_popup">
					<p>	
						Êtes-vous sûr de vouloir supprimer ce stage / cette formation ? 
					</p>
					<p>{{$post->name}}</p>
					<div class="btn_action">
						<a href="{{route('post.destroy', ['id' => $post->id])}}" type="submit" class="btn btn-red btn-normal btn-remove">
							<span><i class="fas fa-trash-alt"></i></span>
							Supprimer
						</a>
						<button type="submit" class="btn btn-yellow btn-normal btn-cancel">
							<span><i class="fas fa-ban"></i></span>
							Annuler
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

