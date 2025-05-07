<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Bangla Tutorial Part-13 (Logical Operators)</title>
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
   $a = 40;
   $b = 20;
   if($a == 40 and $b == 20){
    echo "Training With Live Project";
   } else {
    echo "Wrong";
   }

echo "<br/>";

   $c = 40;
   $d = 20;
   if($c == 40 and $d == 300){
    echo "Training With Live Project";
   } else {
    echo "Wrong";
   }

   echo "<br/>";

   $e = 40;
   $f = 20;
   if($e == 40 or $f == 30){
    echo "Training With Live Project";
   } else {
    echo "Wrong";
   }

echo "<br/>";


   $g = 40;
   $h = 20;
   if($g == 40 xor $h == 20){
    echo "Training With Live Project";
   } else {
    echo "Wrong";
   }
   echo "<br/>";

   $i = 40;
   $j = 20;
   if($i == 40 && $j == 20){
    echo "Training With Live Project";
   } else {
    echo "Wrong";
   }
   echo "<br/>";

   $i = 40;
   $j = 20;
   if($i !== 30){
    echo "Training With Live Project";
   } else {
    echo "Wrong";
   }
    ?>
    </section>


 <div class="footeroption">
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

 
  
</body>
</html>