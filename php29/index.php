<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Bangla Tutorial Part-28 (Form Validation)</title>
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
        <h2>PHP Fundamentals Training</h2>
    </div>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <table>
        <tr>
            <td>Name: </td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td>E-mail: </td>
            <td><input type="text" name="email" required> </td>
        </tr>
        <tr>
            <td>Website: </td>
            <td><input type="text" name="website"></td>
        </tr>
        <tr>
            <td>Comment:</td>
            <td><textarea name="comment" rows="5" cols="40"></textarea></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="female"/> Female
                <input type="radio" name="gender" value="male" /> Male
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit" /> </td>
        </tr>
    </table>
    </form>

    <section class="maincontent">
    <?php 
    $name = $email = $website = $comment = $gender;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name       =validation($_POST["name"]);
        $email      =validation($_POST["email"]);
        $website    =validation($_POST["website"]);
        $comment    =validation($_POST["comment"]);
        $gender     =validation($_POST["gender"]);

        echo "Name: ".$name."<br/>";
        echo "E-mail: ".$email."<br/>";
        echo "Website: ".$website."<br/>";
        echo "Comment: ".$comment."<br/>";
        echo "Gender: ".$gender;
    }
    function validation($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    
    ?>
    </section>


 <div class="footeroption">
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

 
  
</body>
</html>