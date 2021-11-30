<?php
/**
 * Created by PhpStorm.
 * User: manas samatovich
 * Email: manassamatovich@gmail.com
 * Date: 28.09.2016
 * Time: 4:19
 */

    require_once "../config.php";

    if(isset($_GET['info'])){
        $permission = mysql_real_escape_string($_POST['permission']);
        $info = mysql_real_escape_string($_POST['info']);
        $info_active = 1;

        $sql = "insert into client (permission, info, info_active) values ('$permission', '$info','$info_active')";
        if(mysql_query($sql))
        {
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='index.php?client&success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='index.php?client&fail';
            </script>
            <?php
        }
    }