<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cinema</title>
	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/vegas.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
</head>
<body>
	<header class="header box-shadow">
            <div class="container">
                <a href="<?php echo BASE_URL; ?>" class="grid-4">cine<span>+</span></a>
                <nav class="grid-12 header_nav">
                    <ul>
                        <li><a href="#ingressos">Ingressos</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#contato">Contato</a></li>
                        <li><a href="login.html">Login</a></li>
                    </ul>
                </nav>
            </div>
	</header>
	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
    <footer class="footer">
		<div class="container ">
                    <p>Footer</p>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<!-- <script src="http://code.jquery.com/jquery.min.js"></script> -->
	<script src="<?php echo BASE_URL; ?>assets/js/vegas.min.js"></script>
	<script src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>