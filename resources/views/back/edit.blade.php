@extends('layouts.master')
	@section('content')
	<div class="edit ">
		<div class="edit-content">
			@if(count($post)>0)
			<div class="top-edit ">
				<h2>Modification d'un post
				</h2>	
			</div>
			<form method="POST" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate>
        			@csrf
				<div class="form-group form-row">
					<label for="title">Titre</label>
					<input id="title" type="text" class="form-control" name="title" placeholder="Titre de votre stage ou formation" required autofocus value="{{$post->title}}">
					<div class="valid-feedback">
						Titre valide.
					</div>
					<div class="invalid-feedback">
						Titre invalide.
					</div>
				</div>
				<div class="form-group row">
					<label for="description">Description</label>
					<textarea id="description" name="description" class="form-control" placeholder="Description de votre stage ou formation" required>{{$post->description}}</textarea>
					<div class="valid-feedback">
						Description valide.
					</div>
					<div class="invalid-feedback">
						Description invalide.
					</div>
				</div>
				<div class="form-group">
					<div class="picture">
						<label for="picture">Upload image</label>
						<input id="picture" type="file" name="picture" class="input-file">
						<div class="input-group">
							<input type="text" class="form-control" disabled placeholder="Image de votre stage ou formation" value="{{($post->pictures->link)}}">
							<div class="input-group-prepend">
								<button class="btn btn-blue btn-normal upload-field" type="button">
									<span><i class="fas fa-upload"></i></span>
									Upload
								</button>
							</div>
						</div>
					</div>
					<div class="valid-feedback">
						Image valide.
					</div>
					<div class="invalid-feedback">
						Image invalide.
					</div>
				</div>
				<div class="form-group row">
					<div class="custom-control custom-checkbox my-1 mr-sm-2">
						@if($post->status == "publié")
				    		<input type="checkbox" checked class="custom-control-input" id="statusPublish">
						@else
				    		<input type="checkbox" class="custom-control-input" id="statusPublish">
						@endif

						<input type="text" name="status" id="data-status" hidden>
				    <label class="custom-control-label" for="statusPublish">Mettre en ligne</label>
				  </div>
				</div>
				<div class="form-group row">
					<div class="date_start">
						<label for="start">Démarre le</label>
						<input id="start" name="start" class="form-control" type="date" placeholder="01/01/2018" required value="{{$post->start}}">
						<div class="valid-feedback">
							Date de démarrage valide.
						</div>
						<div class="invalid-feedback">
							Date de démarrage invalide.
						</div>
					</div>
					<div class="date_end">
						<label for="end">Termine le</label>
						<input id="end" name="end" class="form-control" type="date" placeholder="01/01/2018"  required value="{{$post->end}}">
						<div class="valid-feedback">
							Date de fin valide.
						</div>
						<div class="invalid-feedback">
							Date de fin invalide.
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="price">
						<label for="price">Prix</label>
						<div class="input-group">
							<input id="price" type="number" class="form-control" name="price" placeholder="500" required value="{{$post->price}}">
							<div class="input-group-append">
								<span class="input-group-text">€</span>
							</div>
							<div class="valid-feedback">
								Prix valide.
							</div>
							<div class="invalid-feedback">
								Prix invalide.
							</div>

						</div>
					</div>
					<div class="maxuser">
						<label for="max_users">Nombre de place disponible</label>
						<input id="max_users" type="number" class="form-control" name="max_users" placeholder="5" required value="{{$post->max_users}}">
						<div class="valid-feedback">
							Nombre de place disponiblevalide.
						</div>
						<div class="invalid-feedback">
							Nombre de place disponible invalide.
						</div>
					</div>
				</div>
				<div class="form-group row mb-0">
					<button type="submit" class="btn btn-grey btn-normal">
						<span><i class="fas fa-check"></i></span>
						Enregistrer
					</button>
				</div>
				{{csrf_field()}}
			</form>
		@endif 

		</div>
	</div>
@endsection
