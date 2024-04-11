<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
        <form id="celebrityForm">
            <div class="mb-3">
            <label for="celebrityName" class="form-label">Celebrity Name</label>
            <input id="INPUT" type="text" class="form-control" id="celebrityName" placeholder="Enter celebrity name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>

        <div id="RESULT">

        </div>
    </div>
    </div>
</body>
</html>
