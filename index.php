<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="generator" content="">
		<title>Masuk</title>

		<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

		<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<style>
		.bd.placeholder-img{
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd.placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<link rel="stylesheet" href="assets/css/signin.css">
</head>
<body class="text-center">
	<form class="form-signin" method="post" action="cek_login.php">
	<img class="mb-4" src="assets/css/logo.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="username" class="sr-only">Username</label>
  <input type="text" id="username" class="form-control" placeholder="Username" name="username" required autofocus>
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" class="form-control" name="password" required>
  <div class="checkbox mb-3">
  	
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Masuk</button>
  <p class="mt-5 mb-3 text-muted">Ahmad Maulana &copy; 2021</p>
</form>
</body>
</html>