<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions Bangla Tutorial Part-30 (arsort & asort)</title>
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
 PHP Array Functions Bangla Tutorial Part-30 (arsort & asort)</h2>
    </div>

    <section class="maincontent">
    <?php
  $num = Array(
    "Akbor"=> "39",
    "Mamun"=> "40",
    "Delower"=> "30",
    "Hasan" => "28"
  );
  asort($num);
  foreach ($num as $name => $age) {
    echo "Names: ".$name.", Age: ".$age."<br>";
  }
 
    ?>
  
    </section>

 <div class="footeroption">
 <p>&copy; <?php echo date("Y"); ?> Training with live project</p>
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

</body>
</html>