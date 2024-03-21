<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Exercise 1</title>
</head>
<body>

<h2>Welcome to the Week 07 Tutorial</h2>
<button type="button" class="button" id="BUTTON_ID1">Button 1</button>
<button type="button" class="button" id="BUTTON_ID2">Button 2</button>
<button type="button" class="button" id="BUTTON_ID3">Button 3</button>

<script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous"></script>
<script>
	$(document).ready(function (){

	// jquery callback function for click events on the button

	$('#BUTTON_ID1').click(function () {
		alert("ALERT: This is an alert using ID")
	});

	$('.button').hover(function () {
		alert("ALERT: This is an alert using class")
	});

	});
</script>
</body>
</html>
