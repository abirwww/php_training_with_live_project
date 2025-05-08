<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Bangla Tutorial Part-43 (Explode & Implode Function)</title>
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
        PHP Fundamentals Bangla Tutorial Part-43 (Explode & Implode Function)</h2>
    </div>

   

    <section class="maincontent">
    <?php

        $myster = "We are learning PHP";
        $str = explode(" ", $myster);
        echo $str[0];

        print_r(explode(" ", $myster));

        $fruits = "apple,banana,mango,grape";
        print_r(explode(",", $fruits));

        $date = "2025-05-08";
        print_r(explode("-", $date));

        $sentence = "PHP is very easy to learn";
        $words = explode(" ", $sentence);
        echo "Total words:".count($words);

        $quote = "Knoledge is power";
        $words = explode(" ", $quote);
        echo $words[2];

        $mystr = array("we", "are", "learning", "PHP");
        echo implode(" ", $mystr);
        




    ?>
    </section>


 <div class="footeroption">
 <p>&copy; <?php echo date("Y"); ?> Training with live project</p>
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

</body>
</html>