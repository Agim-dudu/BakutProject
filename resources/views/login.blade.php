<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Login</title>
		<link
			href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
			rel="stylesheet"/>
		<link rel="stylesheet" href="{!! asset('assets/css/login.css')!!}" />
	</head>
	<body>
        <div class="background"></div>
		<div class="container">
			<span class="form__title">Login</span>
			<form class="form">
				<div class="form__group">
					<i class="ri-user-line form__icon"></i>
					<input type="text" placeholder="Name | Email" required class="form__input" />
					<span class="form__bar"></span>
				</div>
				<div class="form__group">
					<i class="ri-lock-line form__icon"></i>
					<input
						type="password"
						placeholder="Password"
						required
						class="form__input"
					/>
					<span class="form__bar"></span>
				</div>

				<button type="submit" class="form__button">Login</button>
				<p class="form__switch">
					Belum Punya Akun? <a href="{{ route('register.show') }}">Sign Up</a>
				</p>
			</form>
		</div>
	</body>
</html>