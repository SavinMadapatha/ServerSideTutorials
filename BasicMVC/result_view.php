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

<?php if (isset($result)): ?>
    <div id="result" class="mt-3 alert alert-success" role="alert">
        Result: <strong><?php echo $result; ?></strong>
    </div>
<?php endif; ?>

</body>
</html>
