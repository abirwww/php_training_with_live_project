<?php
$fonts = "sans-serif";
$bgcolor = "#444";
$fontcolor = "#fff"; 
$errname = $erremail = $errweb = $errcomment = $errgender = ""; 


$name = $email = $website = $comment = $gender = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $errname = "Name is required.";
    } else {
        $name       = validate($_POST["name"]);
    }
}git 

if($_SERVER[
    "REQUEST_METHOD"] == "POST"){
    if(empty($_POST["email"])){
        $erremail = "E-mail is required.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $erremail   = "Invalid Email formate."
    } else {
        $email       = validate($_POST["email"]);
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["website"])){
        $errweb = "website is required.";
    } else {
        $website       = validate($_POST["website"]);
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["comment"])){
        $errcomment = "comment is required.";
    } else {
        $comment       = validate($_POST["comment"]);
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["gender"])){
        $errgender = "gender is required.";
    } else {
        $gender       = validate($_POST["gender"]);
    }
}



if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){

    }
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name       = validate($_POST["name"]);
$email      = validate($_POST["email"]);
$website    = validate($_POST["website"]);
$comment    = validate($_POST["comment"]);

// $gender     = validate($_POST["gender"]);

// echo "Name: ". $name."<br/>";
// echo "E-mail: ". $email."<br/>";
// echo "Website: ". $website."<br/>";
// echo "Comment: ". $comment."<br/>";
// echo "Gender: ". $gender."<br/>";
}
function validate($data){
$data = trim($data);
$data = stripcslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php syntax</title>
    <style>
        body{
            font-family:<?php echo $fonts; ?>
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
        }
        .headeroption h2, .footeroption h2{margin:0}
        .maincontent{min-height:400px; padding: 20px}
    </style>
</head>
<body>

<section class="phpcoding">
    <div class="headeroption">
        <h2>
        PHP Fundamentals Bangla Tutorial Part-26 ($_REQUEST & $_POST)</h2>
    </div>
<form method="post" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']) ?>" >
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"/>*<?php echo $errname; ?> </td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td><input type="email" name="email" />*<?php echo $erremail; ?> </td>
        </tr>
        <tr>
            <td>Website:</td>
            <td><input type="text" name="website"/>*<?php echo $errweb; ?> </td>
        </tr>
        <tr>
            <td>Comment:</td>
            <td><textarea name="comment" rows="5" cols="40"></textarea>*<?php echo $errcomment; ?> </td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" value="female"/> Female
                <input type="radio" name="gender" value="male"/> Male * <?php echo $errgender; ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>
    </table>
    </form>
    <section class="maincontent">
  
    <?php 


    ?>



    </section>


 <div class="footeroption">
<h2><?php echo "www.trainingwithliveproject.com";?></h2>
 </div>
</section>

</body>
</html>