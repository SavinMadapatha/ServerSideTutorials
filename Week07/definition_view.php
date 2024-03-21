<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Exercise 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .form-content {
            width: 500px;
        }

        .btn {
            margin: 10px;
            width: 150px;
        }

        .result {
            margin-left: 10px;
            font-weight: 500;
        }

        .buttons {
            display: flex;
            flex-direction: row;
        }
    </style>
</head>
<body>

    <!-- Bootstrap styled form -->
    <div class="form">
        <h2>Welcome to the exercise 3</h2>
        <div class="form-group form-content">
            <input type="text" class="form-control" id="INPUT_ID" placeholder="Enter a word">
        </div>

        <div class="buttons">
            <button type="button" class="btn btn-primary" id="BUTTON_ID1">Get Definition</button>
            <button type="button" class="btn btn-primary" id="BUTTON_ID2">Clear</button>
        </div>

        <div class="result" id="DIV_ID"></div>
    </div>


<script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('#BUTTON_ID1').click(function(e){
            e.preventDefault();
            var word = $('#INPUT_ID').val();
            
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Definitions/get_definition'); ?>",
                data: {word: word},
                success: function(response){
                    $('#DIV_ID').html(response);
                }
            });
        });
        

    $('#BUTTON_ID2').click(function (e) {
        e.preventDefault();
        $('#DIV_ID').html(''); 
        $('#INPUT_ID').val(''); 
    });

    });
</script>
</body>
</html>
