<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>The Wall</title>

    <style>.hidden{ display: none; } </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- Custom JS -->
    <script type="text/javascript">
        $(document).ready(function(){
            
        });
    </script>
</head>
<body>
    <div class="welcome">
        <h1>The Wall</h1>
        <p>Welcome, <?= $user['first_name'] ?>. <a href="/logout">Logout</a></p>

    </div>
</body>
</html>