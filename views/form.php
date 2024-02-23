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
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="text-center">
            <h1 class="mb-5">Search for Movies</h1>
            <form action="<?php echo site_url('Movies/search'); ?>" method="post" class="row g-3 justify-content-center">
                <div class="col-auto">
                    <select name="searchType" id="searchType" class="form-select">
                        <option value="genre">Genre</option>
                        <option value="rating">IMDB Rating</option>
                    </select>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="searchQuery" name="searchQuery" placeholder="Enter search query" required>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Search</button>
                </div>
            </form>

            <!-- Link to view all movies -->
            <div class="mt-4">
                <a href="/Week_04/index.php/movies/allmovies" class="btn btn-secondary">View All Movies</a>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

</body>
</html>