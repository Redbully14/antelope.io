<!-- Antelope.io - Sign-in Component -->
<div class="sign-in-from" style="padding: 30px;">

	<h1 class="mb-0">Sign in</h1>
	<p>Please enter your email address and password.</p>

	@if($errors->first())
		<x-elements.alert type="danger" message="The email or password that you have entered is incorrect."/>
	@endif

	<form method="POST" action="{{ route('login') }}" class="mt-4">
		@csrf

		<div class="form-group">
			<label for="email">Email address</label>
			<input type="email" class="form-control mb-0 @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Email" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control mb-0 @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
		</div>

		<div class="d-inline-block w-100">

			<div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
				<input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
				<label class="custom-control-label" for="remember">Remember Me</label>
			</div>

			<button type="submit" class="btn btn-primary float-right">Sign in</button>
			
		</div>

	</form>

</div>
<!-- #END - Sign-in Component -->