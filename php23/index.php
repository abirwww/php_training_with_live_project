<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Bangla Tutorial Part-22 (Arrays)</title>
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
    $x = array(5,3,9,10);
    echo $x[0]; echo "<br/>";
    echo $x[1]; echo "<br/>";
    echo $x[2]; echo "<br/>";

    echo "<br/>";
    echo count($x);
    /*
    $x[0] = 5;
    $x[1] = 3;
    $x[2] = 9;
    $x[3] = 10;
    */
    echo "<br/>";
    echo "<br/>";
    $length = count($x);
    for ($i=0; $i < $length; $i++) { 
        echo " ".$x[$i];
        echo "<br/>";
    }

echo "<br/>";
$cars = array(
    array("BMW", 15, "nice"),
    array("Volvo", 20, 5),
    array("Saab", 25, 30),
    array("Audi", 21, 35)
);

echo $cars[0][0]; echo "<br/>";
echo $cars[0][2]; echo "<br/>";
echo $cars[1][0];

echo "<br/>";
echo "<br/>";

for ($row=0; $row <4 ; $row++) { 
    echo "<p>Row Number $row</p>";

    echo"<ul>";
    for ($col=0; $col < 3; $col++) { 
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo"</ul>";
}

    ?>
    </section>


 <div class="footeroption">
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

 
  
</body>
</html>