<?php
$fonts = "arial"; 
$bgcolor = "#FB8637"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Bangla Tutorial Part-18 (While Loops)</title>
    <style>
        body{
            font-family: <?php echo $fonts; ?>
        }
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
            background: <?php echo $bgcolor; ?>
        }
        .headeroption h2, .footeroption h2{margin:0}
        .maincontent{min-height:400px; padding: 20px}
    </style>
</head>
<body>

<section class="phpcoding">
    <div class="headeroption">
        <h2>PHP Fundamentals Training</h2>
    </div>

    <section class="maincontent">
    <?php
    $x = 1;
    while($x <= 5){
        echo "The number is: $x <br/>";
        $x++;
    }
echo "<br/>";
    $y = 1;
    do{
        echo "The number is: $y <br/>";
        $y++;
    } while($y <= 5);
    ?>
    </section>


 <div class="footeroption">
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

 
  
</body>
</html>