@extends('layouts.master')

@section('content')
<section class="contact ">
	<div class="contact-content">
		<div class="top-contact ">
			<h1>Nous contacter</h1>
		</div>
		<div class="form-contact">
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