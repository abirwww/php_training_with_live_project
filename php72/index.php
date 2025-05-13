<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions Bangla Tutorial Part-25 (array_sum)</title>
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
      PHP Array Functions Bangla Tutorial Part-25 (array_sum)</h2>
    </div>

    <section class="maincontent">
    <?php
    // $num = array(10,20,30);
    // $result = array_sum($num);
    // echo $result;
      $num = array(
        "a"=>"50",
        "b"=>"10",
        "c"=>"20"
      );
      $result = array_sum($num);
      echo "Total: ".$result;

    ?>
  
    </section>

 <div class="footeroption">
 <p>&copy; <?php echo date("Y"); ?> Training with live project</p>
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

</body>
</html>