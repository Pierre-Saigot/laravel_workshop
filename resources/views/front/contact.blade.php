@extends('layouts.master')

@section('content')
<section class="contact ">
	<div class="contact-content">
		<div class="top-contact ">
			<h2>Nous contacter</h2>
		</div>
		<div class="form-contact">
			
			@if (\Session::has('success'))
				<div class="alert alert-success" role="alert">
				  Le message a été envoyé avec succès.
				</div>
			@endif
			
			<form action="{{route('sendmail')}}" method="POST">
				{{csrf_field()}}
				<div class="form-group row">
					<label for="email">Votre email : </label>
					<input id="email" type="email" class="form-control" name="email" required autofocus placeholder="exemple@exemple.com">
					@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>
								Veuillez saisir une adresse email valide.
							</strong>
						</span>
					@endif
				</div>
				<div class="form-group row">
					<label for="message">Votre message : </label>
					<textarea id="message" name="message" required class="form-control" placeholder="Message..."> 
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