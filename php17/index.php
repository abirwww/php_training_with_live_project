<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Bangla Tutorial Part-16 (Conditional Statements)</title>
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
        <h2>PHP Fundamentals Training</h2>
    </div>

    <section class="maincontent">
    <?php
    $x = 10;
    if($x > 15){
        echo "Training with live project";
    }

echo "<br/>";

    $x = 10;
    if($x > 15){
        echo "Training with live project";
    } else {
        echo "wrong";
    }

    echo "<br/>";
$x = 10;

if($x > 15){
    echo "x is grater than 15";
} elseif($x > 12) {
    echo "x is greater than 12";
} elseif ($x > 5){
    echo "x is greater than 5";
} else  {
    echo "Please give a value smaller than 10";
}
    ?>
    </section>


 <div class="footeroption">
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

 
  
</body>
</html>