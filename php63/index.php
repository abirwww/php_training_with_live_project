<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions Bangla Tutorial Part-16 (array_multisort)</title>
    <style>
        .phpcoding{
            width: 900px;
            margin: 0 auto;
            background: #ddd;
        }
        .headeroption, .footeroption
        
        {
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
        <h2>
       PHP Array Functions Bangla Tutorial Part-16 (array_multisort)</h2>
    </div>

   

    <section class="maincontent">
    <?php
    $arr_one = array("Dog", "Cat");
    $arr_two = array("Horse", "Bear");

    array_multisort($arr_one,  $arr_two);
        
    print("<pre>");
    print_r($arr_one);
    print("</pre>");

    print("<pre>");
    print_r($arr_two);
    print("</pre>");
  
    ?>
  
    </section>


 <div class="footeroption">
 <p>&copy; <?php echo date("Y"); ?> Training with live project</p>
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

</body>
</html>