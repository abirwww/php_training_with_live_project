<?php include 'header.php'; ?>
  


<?php 
if(isset($_POST['username'])){
    $name = $_POST['username'];
    echo "Username is : ".$name;
}
?>


<form action="" method="post" >
    <table>
        <tr>
            <td>Username :</td>
            <td><input type="text" name="username" required="1" /></td>
        </tr>
        <tr>
            <td></td>
            <td>
            <input type="submit" value="Submit" />
            <input type="reset" value="Clear" />
            </td>
        </tr>
    </table>
</form>




<?php include 'footer.php'; ?>