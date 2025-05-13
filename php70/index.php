<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions Bangla Tutorial Part-20 (array_replace)</title>
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
      PHP Array Functions Bangla Tutorial Part-20 (array_replace)</h2>
    </div>

    <section class="maincontent">
    <?php
    
    //   $color_one = array("red", "green");
    //   $color_two = array("blue", "yellow");
    //   $result = array_replace($color_one, $color_two);

    //     $color_one = array("red", "green", "blue", "yellow");
    //     $result = array_reverse($color_one);
       

    //     print("<pre>");
    //   print_r($color_one);
    //   print("</pre>");

    //   print("<pre>");
    //   print_r($result);
    //   print("</pre>");

        // $color_one = array("a"=>"red","b"=>"green","c"=>"blue","a"=>"yellow");
        // if (isset($_POST['text'])) {
        //     global $text;
        //     $text = $_POST['text'];
        //     $result = array_search($text, $color_one);
        //     echo "You have searched by -> $text and your key is -> $result";
        // }

$color_one = array(
    "a"=>"red",
    "b"=>"green",
    "c"=>"blue",
    "d"=>"yellow"
);

array_shift($color_one);

print("<pre>");
print_r($color_one);
print("</pre>");


    ?>

    <form action="index.php" method="post">
        <input type="text" name="text" />
        <input type="submit" value="Submit">
    </form>
  
    </section>

 <div class="footeroption">
 <p>&copy; <?php echo date("Y"); ?> Training with live project</p>
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

</body>
</html>