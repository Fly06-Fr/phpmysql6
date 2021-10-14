<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/jokes.css">
		<title><?=$title?></title>
	</head>
	<body>
	<nav>
		<header>
			<h1>Internet Joke Database</h1>
		</header>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/joke/list">Jokes List</a></li>
			<li><a href="/joke/edit">Add a new Joke</a></li>
                        <?php if ($user && $user->hasPermission(Ijdb\Entity\Author::EDIT_CATEGORIES)): ?>
			<li><a href="/category/list">Categories list</a></li>
			<?php endif; ?>	
			<?php if ($loggedIn): ?>
			<li><a href="/logout">Log out</a></li>
			<?php else: ?>
			<li><a href="/login">Log in</a></li>
			<?php endif; ?>
			<?php if ($user && $user->hasPermission(Ijdb\Entity\Author::EDIT_USER_ACCESS)): ?>
			<li><a href="/author/list">Users list</a></li>
			<?php endif; ?>	                        
		</ul>
	</nav>

	<main>
	<?=$output?>
	</main>

	<footer>
	&copy; IJDB 2017
	</footer>
	</body>
</html>