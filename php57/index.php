<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    PHP Array Functions Bangla Tutorial Part-10 (array_intersect_assoc)</title>
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
        <h2>
        PHP Array Functions Bangla Tutorial Part-10 (array_intersect_assoc)</h2>
    </div>

    <section class="maincontent">
    <?php
   
        $array_one = array(
            "a" => "red",
            "b" => "green",
            "c" => "blue",
            "d" => "yelloow"
        );

        $array_two = array(
            "a" => "red",
            "f" => "green",
            "g" => "blue"
        );

       

        $result = array_intersect_assoc($array_one, $array_two);

        print ("<pre>");
        print_r($result);
        print("</pre>");
   
    ?>
    </section>


 <div class="footeroption">
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

 
  
</body>
</html>