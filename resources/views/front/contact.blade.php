@extends('layouts.master')

@section('content')
<section class="contact ">
	<div class="contact-content">
		<div class="top-contact ">
			<h1>Nous contacter</h1>
		</div>
		<div class="form-contact">
			<form action="#">
				<div class="form-group row">
					<label for="contact-email">Votre email : </label>
					<input id="contact-email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="contact-email" value="{{ old('email') }}" required autofocus placeholder="exemple@exemple.com">
					@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>
								Veuillez saisir une adresse email valide.
							</strong>
						</span>
					@endif
				</div>
				<div class="form-group row">
					<label for="contact-description">Votre message : </label>
					<textarea id="contact-description" name="contact-description" class="form-control" placeholder="Message..."> 
					</textarea>
				</div>
				<div class="form-group row mb-0">
					<button type="submit" class="btn btn-normal btn-submit btn-grey">
						<span><i class="fas fa-envelope"></i></span>
						Envoyer
					</button>
				</div>
			</form>
		</div>
	</div>


</section>

@endsection