<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    PHP Fundamentals Bangla Tutorial Part-25 (Superglobals)</title>
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
        $GLOBALS
        $_SERVER
        $_REQUEST
        $_POST
        $_GET
        <hr/>
    <?php
   $x = 5;
   $y = 10;
   function sum(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
   }
   sum();
   echo $z;

   echo "<br/>";

   echo $_SERVER['PHP_SELF'];
   echo $_SERVER['SERVER_NMAE'];
   echo $_SERVER['SCRIPT_NMAE'];
    ?>
    </section>


 <div class="footeroption">
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

 
  
</body>
</html>