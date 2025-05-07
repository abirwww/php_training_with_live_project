<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Bangla Tutorial Part-36 (File/Image Upload)</title>
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
        PHP Fundamentals Bangla Tutorial Part-36 (File/Image Upload)</h2>
    </div>

    <section class="maincontent">
    <?php
        if(isset($_FILES['image'])){
            $filename = $_FILES['image']['name'];
            $filetmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($filetmp, "images/".$filename);
            echo "Image uploaded Successfully";
        }

    ?>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" Value="Submit" />
    </form>

    </section>

 <div class="footeroption">
 <p>&copy; <?php echo date("Y"); ?> Training with live project</p>
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>
</body>
</html>