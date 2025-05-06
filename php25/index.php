<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Bangla Tutorial Part-24 (Variable Scope)</title>
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
    $x = 15;
    function test1(){
        global $x;
        $a = 5;
        echo $a;
        echo "<br/>";
        echo "Access from function test1.".$x;
        echo "<br/>";
    }

    function test2(){
        global $x;
        $b = 10;
        echo $b;
        echo "<br/>";
        echo "Access from function test2.".$x;
    }
    test1();
    test2();

    ?>
    </section>


 <div class="footeroption">
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

 
  
</body>
</html>