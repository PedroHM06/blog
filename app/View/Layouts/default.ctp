<!doctype html>
<html lang="pt">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/jquery-confirm.css" rel="stylesheet">
	<link href="css/jquery-confirm.min.css" rel="stylesheet">
	

	<title>Posts</title>
</head>

<body class="d-flex flex-column vh-100">
	<header>
		<nav class="navbar navbar-dark bg-dark fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="https://book.cakephp.org/2/en/_static/logo-cake.png" alt="">
				</a>
			</div>
		</nav>
	</header>
	<main class="flex-grow-1 d-flex align-items-center">
		<div class="container py-5 mt-5">
			<?php echo $this->fetch('content'); ?>
		</div>
	</main>
	<footer class="footer mt-auto py-3 bg-dark text-white">
        <div class="container">
            <p class="text-white">&copy; 2024 Pedro, Inc</p>
        </div>
    </footer>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-confirm.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>


