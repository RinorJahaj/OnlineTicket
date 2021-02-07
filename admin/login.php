<?php include '../classes/AdminLogin.php'; ?>

<?php 
	$al = new AdminLogin();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$admin_user = $_POST['admin_user'];
		$admin_password = md5(str)$_POST['admin_password'];

		$loginChck = $al->adminLogin($admin_user, $admin_password);
	}
?>


<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="admin_user"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="admin_password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Login to go to your dashboard</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>