<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions Bangla Tutorial Part-27 (array_unshift)</title>
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
     PHP Array Functions Bangla Tutorial Part-27 (array_unshift)</h2>
    </div>

    <section class="maincontent">
    <?php
   
        $color = array(
            "a"=>"red",
            "b"=>"green",
            "c"=>"yellow",
        );
        print("<pre>");
        print_r($color);
        print("</pre>");

        $result = array_unshift($color, "blue");

        print("<pre>");
        print_r($color);
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