
<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];

    echo "<script type='text/javascript'>

    alert('$message');

    </script>";
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Managament</title>
    <link rel="stylesheet" href="style.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdgV4a+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyyON1RsVXV4nDQJutJnGasICJuc7uuwdwu9SVrLVRYo0P2bWYgmqJQIxWI/sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-TcSIQi6b027qvyj5MfHjOMaLkfuwVxZxuPncJAZl2mCWIiP9GmdC8bwnGNlCPIzTxa" crossorigin="anonymous"></script>

</head>
<body>

<!--pjesa e navbarit-->

<nav>
    <label class="logo">Kolegji AAB</label>

    <ul>
        <li><a href="">Ballina</a></li>
        <li><a href="">Kontakti</a></li>
        <li><a href="">Pranimi</a></li>
        <li><a href="login.php" class="btn btn-success">Kycu</a></li>

    </ul>
</nav>


<!--seksioni 1 -->

<label>Ne mesojme studentet me kujdes</label>
<div class="section1">
<img class="main_img"src="AAB-1.jpg">
</div>

<div class="container">

<div class="row">

    <div class="col-md-4">

        <img class="welcome_img" src="aabview.jpg">
        
    </div>

    <div class="col-md-8">

        <h1>Mire se vini ne Kolegjin AAB</h1>

        <p>Cilesi, lidership, sukses!</p>
        
    </div>
    

</div>


</div>


<center>
<h1>Stafi yne</h1>
</center>


<div class="container">

<div class="row">

    <div class="col-md-4">

        <img class="teacher" src="teacher1.jpg">

        <p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
        
    </div>

    <div class="col-md-4">

        <img class="teacher" src="teacher2.jpg">
        <p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
        
    </div>

    <div class="col-md-4">

        <img class="teacher" src="teacher3.jpg">
        <p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
        
    </div>
    

</div>


</div>






<center>
<h1>Drejtimet tona</h1>
</center>


<div class="container">

<div class="row">

    <div class="col-md-4">

        <img class="teacher" src="cs.PNG">
        <h3>Shkenca kompjuterike</h3>
        
        
    </div>

    <div class="col-md-4">

        <img class="teacher" src="arkitekture.PNG">
        <h3>Arkitekture</h3>
        
    </div>

    <div class="col-md-4">

        <img class="teacher" src="cybersecurity.PNG">
        <h3>Siguri Kibernetike</h3>
        
    </div>
    

</div>


</div>

<!--forma e aplikimit-->

<center>
<h1 class="adm">Forma aplikimit</h1>

</center>


<div align="center" class="admission_form">

<form action="data_check.php" method="POST">
    
<div class="adm_int">
    <label class="label_text">Emri</label>
    <input class="input_deg" type="text" name="name">
</div>

<div class="adm_int">
    <label class="label_text">Email</label>
    <input class="input_deg" type="text" name="email">
</div>

<div class="adm_int">
    <label class="label_text">Nr telefonit</label>
    <input class="input_deg" type="text" name="phone">
</div>
<div class="adm_int">
    <label class="label_text">Mesazhi</label>
    <textarea class="input_txt" name="message"></textarea>
</div>

<div class="adm_int" >
    
    <input class="btn btn-primary" id="submit" type="submit" value="Apliko" name="apply" >
</div>


</form>

</div>


<footer>
<h3 class="footer_text">Te gjitha te drejtat e rezervuara. © 2024</h3>
</footer>


</body>
</html>