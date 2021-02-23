<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= INCLUDE_PATH_FULL ?>css/bootstrap.min.css">
	<link href="<?= INCLUDE_PATH_FULL ?>css/reset.css" rel="stylesheet" type="text/css">
	<link href="<?= INCLUDE_PATH_FULL ?>css/style.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="<?= INCLUDE_PATH_FULL ?>img/favicon.ico" type="image/x-icon"/>
	<title><?= self::titulo ?></title>
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="<?= INCLUDE_PATH ?>">MVC</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<?php
					foreach ($this->menuItems as $key => $value) {
						echo '<li class="nav-item">';
							echo '<a class="nav-link" href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a>';
						echo '</li>';
					}
				?>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
</header>

