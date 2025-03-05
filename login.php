<?php
/* start Session */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$login_pw = "9de96279369af454cd76b83dd8736bd8";

	ob_start();
	session_start();
	require_once 'config_helper.php';
?>

<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/5.3.2/bootstrap.min.css"
          crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fontawesome/v5.0.13/all.css"
          crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="assets/spinner.css">
    <link rel="stylesheet" href="assets/custom.css">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%2210 0 100 100%22><text y=%22.90em%22 font-size=%2290%22>🖕🏻</text></svg>">
</head>
<body class="container">
	<h1>Login</h1>
	<form class="form" id="login-box" action="" method="post">
		<div class="card">
			<div class="card-body">
				<?php
					if (isset($_POST['password'])) {
						$pw = htmlspecialchars($_POST['password']);
						$pw = md5($pw);

						if ($pw === $login_pw) {
							$_SESSION['login'] = true;
							header('Location: index.php');
						} else {
							echo '<div class="alert alert-danger" role="alert">Das Passwort ist falsch.</div>';
						}
					}
				?>
				<div class="form-group row">
					<label for="password" class="col-sm-2 col-form-label">Passwort</label>
					<div class="col-sm-3">
						<input type="password" name="password" id="password" placeholder="Passwort" autofocus >
					</div>
					<div class="col-sm-7">
						<input type="submit" value="Login" class="btn btn-primary mb-2">
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>