<?php
/**
 * Created by PhpStorm.
 * User: manas samatovich
 * Email: manassamatovich@gmail.com
 * Date: 27.09.2016
 * Time: 23:11
 */

    require_once "../config.php";

    if(isset($_GET['form'])){
        $name = mysql_real_escape_string($_POST['name']);
        $email = mysql_real_escape_string($_POST['email']);
        $message = mysql_real_escape_string($_POST['message']);

        $sql = "insert into form_beef (name, email, message) values ('$name','$email','$message')";

        if(mysql_query($sql))
        {
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='../?success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='../?fail';
            </script>
            <?php
        }
    }