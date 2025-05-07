<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Bangla Tutorial Part-39 (Filters)</title>
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
        PHP Fundamentals Bangla Tutorial Part-39 (Filters)</h2>
    </div>

   

    <section class="maincontent">
    <?php
        // $intnum = 300;
        // $min = 1;
        // $max = 200;
        // if(filter_var($intnum, FILTER_VALIDATE_INT, array("options" => array("min_range" =>$min, "max_range" =>$max)))){
        //     echo "It is valid range";
        // } else {
        //     echo "It is not valid range";
        // }
       

        $url = "https://www.traingwithliveproject.com";
        if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
            echo "This url is valid";
        } else {
            echo "It has not query string";
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