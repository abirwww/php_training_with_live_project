<?php include 'header.php'; ?>

<?php
if(isset($_POST['submit'])) {
    $coder = $_POST['coder'];
    echo "You are " .$coder." Coder";
}
?>


<p id="show"></p>
<form action="" method="post" name="myform" id="myform">
    <table>
        <tr>
            <td>Language:</td>
            <td>
               <select name="coder" id="">
                <option>Select One</option>
                <option value="JAVA">JAVA</option>
                <option value="PHP">PHP</option>
                <option value="C#">C#</option>
                <option value="C++">C++</option>

               </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Submit" />
                <input type="reset" value="Clear" />
            </td>
        </tr>
    </table>
</form>

<?php include 'footer.php'; ?>
