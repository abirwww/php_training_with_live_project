<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    PHP Fundamentals Bangla Tutorial Part-15 (Array Operators)</title>
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
    $x = array(
        "a" => "Dhaka",
        "b" => "Sylhet"
    );

    $y = array(
        "c" => "Comilla",
        "d" => "Rajshahi"
    );

    var_dump($x+$y);


    echo "<br/>";

    $a = array(
        "a" => "Dhaka",
        "b" => "Sylhet"
    );

    $b = array(
        "c" => "Comilla",
        "d" => "Rajshahi"
    );

    var_dump($a==$b);

    echo "<br/>";

    $e = array(
        "a" => "Dhaka",
        "b" => "Sylhet"
    );

    $f = array(
        "c" => "Comilla",
        "d" => "Rajshahi"
    );

    var_dump($e===$f);

    echo "<br/>";

    $p = array(
        "a" => "Dhaka",
        "b" => "Sylhet"
    );

    $q = array(
        "c" => "Comilla",
        "d" => "Rajshahi"
    );

    var_dump($p!=$q);
    ?>
    </section>


 <div class="footeroption">
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

 
  
</body>
</html>