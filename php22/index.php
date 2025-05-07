<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Bangla Tutorial Part-21 (Functions)</title>
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
   function school($name = "My School", $year){
    echo "$name is started $year <br/>";
   }
   school("Jatrabari High School", 1901);
   school("ML High School", 1988);
   school("BM High School", 1903);
   school("AL High School", 2000);

echo "<br/>";

   function varsity($name = "My varsity"){
    echo "$name is started <br/>";
   }
   varsity("Jatrabari varsity");
   varsity("ML  varsity");
   varsity("BM  varsity");
   varsity("AL  varsity");
   varsity();
   

   function sum($a, $b){
    $c = $a+$b;
    return $c;
   }
   echo "5+10 = ".sum(5, 10);
    ?>
    </section>


 <div class="footeroption">
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

 
  
</body>
</html>