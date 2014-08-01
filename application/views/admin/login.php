<html>
	<head>
		<title>Login | Kisah dari Desa Whiteland</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login.css">
	</head>
	<body>
		<div class="title center"><span class="desc">You are about to enter the King's chamber.</span></div>
		<div class="wrapper center">
			<form action="<?php echo base_url();?>index.php/admin/login/" method="post">
				<input type="text" name="user" placeholder="Username" class="block">
				<input type="password" name="pass" placeholder="Password" class="block">
				<button type="submit">Login</button>
			</form>
		</div>
		<div class="block center">
			<a href="<?php echo base_url();?>">Go back</a>
		</div>
	</body>
</html>