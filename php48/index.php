<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions Bangla Tutorial Part-01 (Create an array)</title>
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
        PHP Array Functions Bangla Tutorial Part-01 (Create an array)</h2>
    </div>

    <section class="maincontent">
    <?php
    $car = array("Volvo", "BMW", "Toyota");
    $length = count($car);
    echo $length;

    for($i=0; $i<$length; $i++){
        echo $car[$i]."<br>";
    }
    

    $fruits = array("Apple", "Banana", "Mango", "Orange");
    for ($i=0; $i < count($fruits); $i++) { 
        echo $fruits[$i] . "<br>";
    }

    $numbers = array(10, 20, 30, 40);
    $sum = 0;
    for($i = 0; $i < count($numbers); $i++){
        $sum += $numbers[$i];
    }
    echo "Total : $sum";

    $names = array("Abir", "Rafi", "Tania");
    foreach($names as $name){
        echo $name."<br>";
    }

    $car = array(
        array("Volvo", "100", "90"),
        array("BMW", "40", "30"),
        array("Toyota", "120", "100")
    );
    echo $car[0][1];
    ?>
  
    </section>

 <div class="footeroption">
 <p>&copy; <?php echo date("Y"); ?> Training with live project</p>
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

</body>
</html>