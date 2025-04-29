<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    PHP Fundamentals Bangla Tutorial Part-23 (Sorting Arrays)</title>
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
   $names = array("Rakib", "Mamun", "Akbor", "Badol");
   sort($names);
   $length = count($names);
   for($i=0; $i<$length; $i++){
    echo $names[$i];
    echo "<br/>";
   }

   $numbers = array(2, 5, 1, 0, 9, 4);
   sort($numbers);
   $length = count($numbers);
   for($i=0; $i<$length; $i++){
    echo $numbers[$i];
    echo "<br/>";
   }
    ?>
    </section>


 <div class="footeroption">
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

 
  
</body>
</html>