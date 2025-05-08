<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Bangla Tutorial Part-44 (Case Change)</title>
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
        PHP Fundamentals Bangla Tutorial Part-44 (Case Change)</h2>
    </div>

   

    <section class="maincontent">
    <?php


        // if(isset($_POST['text'])){
        //     $text = $_POST['text'];
        //     echo $text;
        // }

        // if(isset($_POST['text'])){
        //     $text = $_POST['text'];
        //     $words = explode(" ", $text);
        //     echo "Total words: ".count($words);
        // }

        // if(isset($_POST['text'])){
        //     $text = $_POST['text'];
        //     $words = explode(" ", $text);
        //     $reversed = array_reverse($words);
        //     echo implode(" ", $reversed);
        // }

        if(isset($_POST['text'])){
            $txt = $_POST['text'];
            // echo strtoupper($txt);
            echo ucfirst($txt);

        }

    ?>

    <form action="index.php" method="post">
        <input type="text" name="text" />
        <input type="submit" value="Submit" />
    </form>
    </section>


 <div class="footeroption">
 <p>&copy; <?php echo date("Y"); ?> Training with live project</p>
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

</body>
</html>