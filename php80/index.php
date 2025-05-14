<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions Bangla Tutorial Part-33 (in_array)</title>
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
PHP Array Functions Bangla Tutorial Part-33 (in_array)</h2>
    </div>

    <section class="maincontent">
    <?php
    $coder = array("Delower", "Mamun", "Akbor", "kader");
    if(isset($_POST['username'])){
        $text = $_POST['username'];

        if(in_array($text, $coder)){
            echo "$text Exist.";
        } else {
            echo "$text Not Exist!!";
        }
    }
    ?>
  <form action="" method="post">
        <input type="text" name="username" />
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