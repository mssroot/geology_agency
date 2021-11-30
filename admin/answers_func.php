<?php
/**
 * Created by PhpStorm.
 * User: manas samatovich
 * Email: manassamatovich@gmail.com
 * Date: 28.09.2016
 * Time: 4:41
 */

    require_once "../config.php";

    if(isset($_GET['answers'])){
        $permission = mysql_real_escape_string($_POST['permission']);
        $title = mysql_real_escape_string($_POST['title']);
        $desc = mysql_real_escape_string($_POST['desc']);
        $answer_active = 1;

    $sql = "insert into answer (permission, title, ans_desc, answer_active) values ('$permission', '$title', '$desc','$answer_active')";
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