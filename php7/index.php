<?php
$fonts = "arial"; 
$bgcolor = "#FB8637"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
PHP Fundamentals Bangla Tutorial Part-05 (Show Output in PHP)
</title>
    <style>
        body{
            font-family: <?php echo $fonts; ?>
        }
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
            background: <?php echo $bgcolor; ?>
        }
        .headeroption h2, .footeroption h2{margin:0}
        .maincontent{min-height:400px; padding: 20px}
    </style>
</head>
<body>

<section class="phpcoding">
    <div class="headeroption">
        <h2>PHP Fundamentals Training</h2>
    </div>

    <section class="maincontent">
1. string 
2. integer 
3. float 
4. boolean 
5. array 
6. object 
7. null 
8. resource 
<br/>
<hr/>
2.Integer 
<hr>
decimal - 

    <?php
   $x = "php data type";
   echo $x;
   
   $y = 28.3;
   var_dump($y);

   $z = 28;
   var_dump($z);

   $u = true;
   var_dump($u);

   $v = array("Akbor", "sumon", "rifat");
   var_dump($v);
   
   Class Student{
    function department(){
        return "Physics";
    }
    function details(){
        echo $this->department();
    }
   }
   $st = new Student;
   $st->details();
    ?>
    </section>


 <div class="footeroption">
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

 
  
</body>
</html>