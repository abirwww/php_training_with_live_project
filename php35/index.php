<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Bangla Tutorial Part-34 (File Open/Read/Close)
    </title>
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
        PHP Fundamentals Bangla Tutorial Part-34 (File Open/Read/Close)
        </h2>
    </div>

   

    <section class="maincontent">
    <?php

        // $ourfile = fopen("text.txt", "r") or die("File not found!!");
        // echo fread($ourfile, filesize("text.txt"));
        // fclose($ourfile);

        // $ourfile = fopen("text.txt", "r") or die("File not found!!");
        // echo fgets($ourfile, filesize("text.txt"));
        // fclose($ourfile);

        // $ourfile = fopen("text.txt", "r") or die("File not found!!");
        // echo fgetc($ourfile);
        // fclose($ourfile);

        $ourfile = fopen("text.txt", "r") or die("File not found !!");
        while(!feof($ourfile)){
            echo fgets($ourfile)."<br/>";
        }
        fclose($ourfile);

        
    ?>
    </section>


 <div class="footeroption">
 <p>&copy; <?php echo date("Y"); ?> Training with live project</p>
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

</body>
</html>