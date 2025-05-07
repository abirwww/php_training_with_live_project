<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    PHP Fundamentals Bangla Tutorial Part-12 (Increment/Decrement Operators)</title>
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
   $x = 5;
   echo ++$x;
   echo "<br/>";
   $y = 5;
   echo $y++;
   echo "<br/>";
   echo $y;
   echo "<br/>";
   $w = 5;
   echo --$w;
   echo "<br/>";
   
   $m = 5;
   echo $m--;
   echo "<br/>";
   echo $m;

   

    ?>
    </section>


 <div class="footeroption">
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

 
  
</body>
</html>