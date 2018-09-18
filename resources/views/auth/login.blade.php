@extends('layouts.master')
@section('content')
<div class="login gradient">
	<div class="login-content">
		<div class="top-login gradient">
			<h1>Connexion</h1>
		</div>
		<div class="form-login">
			<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
				@csrf
				<div class="form-group row">
					<label for="email">Adresse mail</label>
					<input id="email" type="email" placeholder="admin@admin.fr" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus autocomplete="off" >
					@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>
								Veuillez saisir une adresse email valide.
							</strong>
						</span>
					@endif
				</div>
				<div class="form-group row">
					<label for="password">Mot de passe</label>
					<input id="password" type="password" placeholder="admin" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="off" >
					@if ($errors->has('password'))
						<span class="invalid-feedback" role="alert">
							<strong>
								Veuillez saisir un mot de passe valide.
							</strong>
						</span>
					@endif
				</div>
				<div class="form-group row">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
						<label class="form-check-label" for="remember">Rester connecté</label>
					</div>
				</div>
				<div class="form-group row mb-0">
					<button type="submit" class="btn btn-normal btn-connect">
						<span><i class="fas fa-sign-in-alt"></i></span>
						Connexion
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
