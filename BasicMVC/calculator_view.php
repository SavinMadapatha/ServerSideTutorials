<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CALCULATOR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .calculator {
            max-width: 320px;
            margin: 50px auto;
        }
        .form-control {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="calculator">
        <h2 class="text-center">Calculator</h2>
        <form action="<?php echo base_url('index.php/CalculatorController/index'); ?>" method="post">
            <div class="form-group">
                <input type="number" name="number1" class="form-control" id="number1" placeholder="Enter first number" required>
            </div>
            <div class="form-group">
                <input type="number" name="number2" class="form-control" id="number2" placeholder="Enter second number" required>
            </div>
            <button type="submit" name="submit" value="add" class="btn btn-primary btn-block">ADD</button>
        </form>
        <!-- Include the result view here -->
        <?php if (isset($result_view)) echo $result_view; ?>
    </div>
</div>

</body>
</html>
