<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php syntax</title>
    <style>
        .phpcoding{
            width: 900px;
            margin: 0 auto;
            background: #ddd;
        }
        .headeroption, .footeroption{
            background:#444;
            color:#fff;
            text-align: center;
            padding: 20px;
        }
        .headeroption h2, .footeroption h2{margin:0}
        .maincontent{min-height:400px; padding: 20px}
    </style>
</head>
<body>

<section class="phpcoding">
    <div class="headeroption">
        <h2>
        PHP Fundamentals Bangla Tutorial Part-26 ($_REQUEST & $_POST)</h2>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Username: <input type="text" name="username">
        <input type="submit" value="Sumbmit">
    </form>

    <section class="maincontent">
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_REQUEST['username'];
        if(empty($name)){
            echo "Username must not be empty";
        } else {
            echo "You have submitted:".$name;
        }
    }



    ?>
    </section>


 <div class="footeroption">
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

 
  
</body>
</html>