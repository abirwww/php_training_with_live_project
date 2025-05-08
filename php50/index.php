<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions Bangla Tutorial Part-03 (array_column)</title>
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
        PHP Array Functions Bangla Tutorial Part-03 (array_column)</h2>
    </div>

   

    <section class="maincontent">
    <?php
         $name = array(
            array(
                'id'         => '200',
                'first_name' => 'Abdullah',
                'last_name'  => 'Manun'
            ),
            array(
                'id'          => '201',
                'first_name'  => 'Akbor',
                'last_name'   => 'Hossain'
         ),
            array(
                'id'            => "202",
                'first_name'    => "Delower",
                "last_name"     => 'Imran'
         )
        );

        $lastname = array_column($name, 'last_name');
        print("<pre>");
        print_r($lastname);
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