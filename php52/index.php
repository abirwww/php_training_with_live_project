<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions Bangla Tutorial Part-05 (array_count_values)</title>
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
        PHP Array Functions Bangla Tutorial Part-05 (array_count_values)</h2>
    </div>

   

    <section class="maincontent">
    <?php
    $name = array("akbor", 'mamun', "delower", "mamun", "mamun", "delower", "mamun", "mamun", "delower", "mamun", "mamun", "akbor");
    $age = array("20", "30", "33", "27", "20", "30", "27", "33", "20", "32");

    print("<pre>");
    print_r(array_count_values($name));
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