<!doctype html>
<html lang="en">

<head>
	<title>Login To Pulau Bakut</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo e(asset('/')); ?>assets/login-register/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(<?php echo e(asset('assets/login-register/images/bag.png')); ?>); ">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Wisata Alam Pulau Bakut</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center"> <a href="<?php echo e(route('register')); ?>"
								style="font-weight:bold; color:#259632">Register</a></h3>
						<form action="<?php echo e(route('login.auth')); ?>" class="signin-form" method="post">
							<?php echo csrf_field(); ?>
							<div class="form-group">
								<input type="email" class="form-control  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
									placeholder="Email" required id="email" name="email" value="<?php echo e(old('email')); ?>">
								<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="invalid-feedback">
									<?php echo e($message); ?>

								</div>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>
							<div class="form-group">
								<input id="password" type="password"
									class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"
									placeholder="Password" required>
								<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="invalid-feedback">
									<?php echo e($message); ?>

								</div>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								<span toggle="#password-field"
									class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3"
									style="background-color:#ffff ;">Submit</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
							</div>
						</form>
						<p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
						<div class="social d-flex text-center">
							<a href="<?php echo e(route('login.facebook')); ?>" class="px-2 py-2 mr-md-1 rounded"><span
									class="ion-logo-facebook mr-2"></span> Facebook</a>
							
							<a href="<?php echo e(route('login.google')); ?>" class="px-2 py-2 ml-md-1 rounded">
								Login with Google
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo e(asset('/')); ?>assets/login-register/js/jquery.min.js"></script>
	<script src="<?php echo e(asset('/')); ?>assets/login-register/js/popper.js"></script>
	<script src="<?php echo e(asset('/')); ?>assets/login-register/js/bootstrap.min.js"></script>
	<script src="<?php echo e(asset('/')); ?>assets/login-register/js/main.js"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\ProjectPulauBakut\resources\views/login.blade.php ENDPATH**/ ?>