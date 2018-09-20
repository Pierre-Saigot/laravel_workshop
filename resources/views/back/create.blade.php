@extends('layouts.master')
	@section('content')
	<div class="create ">
		<div class="create-content">
			<div class="top-create">
				<h1>Création d'une formation ou stage</h1>	
			</div>
			<form action="{{ url('/dashboard') }}" method="post" enctype="multipart/form-data">
				<div class="form-group form-row">
					<label for="titre">Titre</label>
					<input id="titre" type="text" class="form-control" name="titre" placeholder="Titre de votre stage ou formation" required autofocus>
				</div>
				<div class="form-group row">
					<label for="description">Description</label>
					<textarea id="description" name="description" class="form-control" placeholder="Description de votre stage ou formation" required></textarea>
				</div>
				<div class="form-group">
					<div class="picture">
						<label for="picture">Upload image</label>
						<input id="picture" type="file" name="picture" class="input-file" accept="image/*">
						<div class="input-group">
							<input type="text" class="form-control" disabled  accept="image/*"placeholder="Image de votre stage ou formation" value="image.png">
							<div class="input-group-prepend">
								<button class="btn btn-blue btn-normal upload-field" type="button">
									<span><i class="fas fa-file-upload"></i></span>
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
					<div class="date_start">
						<label for="start">Date du début :</label>
						<input id="start" name="start" class="form-control" type="date" placeholder="01/01/2018" required>
					</div>
					<div class="date_end">
						<label for="end">Date de fin : </label>
						<input id="end" name="end" class="form-control" type="date" placeholder="01/01/2018"  required>
					</div>
				</div>
				<div class="form-group row">
					<div class="maxuser">
						<label for="max_users">Nombre d'étudiants</label>
						<input id="max_users" type="number" class="form-control" name="max_users" placeholder="5" required>
					</div>
					<div class="price">
						<label for="price">Coût</label>
						<div class="input-group">
							<input id="price" type="number" class="form-control" name="price" placeholder="250" required>
							<div class="input-group-append">
								<span class="input-group-text">€</span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row mb-0">
					<button type="submit" class="btn btn-grey btn-add btn-normal">
						<span><i class="fa fa-plus-square"></i></span>
						Terminé
					</button>
				</div>
				{{csrf_field()}}
			</form>
		</div>
	</div>
@endsection
