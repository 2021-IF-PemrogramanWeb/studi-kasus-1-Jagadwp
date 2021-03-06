<?php
session_start();

if(isset($_SESSION['login'])) {
	header("Location: /table.php");
	exit;
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
			integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<link rel="stylesheet" href="style.css" />
		<title>Jagad's Website</title>
	</head>
	<body>
		<div class="login-box" style="width: 45%; margin: 5vh auto">
			<div class="login-logo" align="center" style="font-size: 2rem">
				<a href="/table.php"
					><img src="/src/img/1_Primary_logo_on_transparent_234x66.png" alt="logo" class="logo-img"
				/></a>
			</div>
			<!-- /.login-logo -->
			<div class="card my-4">
				<div class="card-body login-card-body">
					<p class="login-box-msg text-center fw-bold">Sign in to start your session</p>

					<form action="/login.php" method="POST">
						<div class="input-group mb-3">
							<input type="email" class="form-control" placeholder="Email" name="email" />
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" class="form-control" placeholder="Password" name="password" />
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-10">
								<div class="icheck-primary">
									<input type="checkbox" id="remember" />
									<label for="remember"> Remember Me </label>
								</div>
							</div>
							<!-- /.col -->
							<div class="col-md-12 col-lg-2">
								<button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
							</div>
							<!-- /.col -->
						</div>
					</form>

					<div class="social-auth-links text-center mt-3 mb-3">
						<a href="/table.php" class="btn btn-block btn-primary my-2"> Table Page</a>
						<a href="/graph.php" class="btn btn-block btn-danger my-2"> Graph Page </a>
					</div>
					<!-- /.social-auth-links -->

					<p class="mb-1">
						<a href="forgot-password.html">I forgot my password</a>
					</p>
					<p class="mb-0">
						<a href="register.html" class="text-center">Register a new membership</a>
					</p>
				</div>
				<!-- /.login-card-body -->
			</div>
		</div>

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"
		></script>
	</body>
</html>
