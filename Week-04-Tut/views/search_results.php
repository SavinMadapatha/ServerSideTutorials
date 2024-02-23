<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="container mt-5">
    <h2>Movie Search Results</h2>
    <?php if ($movies && count($movies) > 0): ?>
        <div class="list-group">
            <?php foreach ($movies as $movie): ?>
                <a class="list-group-item list-group-item-action">
                    <h5 class="mb-1"><?= htmlspecialchars($movie['title'], ENT_QUOTES, 'UTF-8') ?></h5>
                    <p class="mb-1">Genre: <?= htmlspecialchars($movie['genre'], ENT_QUOTES, 'UTF-8') ?></p>
                    <div><small>Director: <?= htmlspecialchars($movie['director'], ENT_QUOTES, 'UTF-8') ?></small></div>
                    <div><small>IMDB Rating: <?= htmlspecialchars($movie['imdb_rating'], ENT_QUOTES, 'UTF-8') ?></small></div>
                    <div><small>Release Year: <?= htmlspecialchars($movie['release_year'], ENT_QUOTES, 'UTF-8') ?></small></div>
                </a>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No movies found.</p>
    <?php endif; ?>
</div>
</body>
</html>