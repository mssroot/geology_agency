<?php
/**
 * Created by PhpStorm.
 * User: manas samatovich
 * Email: manassamatovich@gmail.com
 * Date: 28.09.2016
 * Time: 21:29
 */

    require_once "../config.php";

    if(isset($_GET['table'])){
        $title = mysql_real_escape_string($_POST['title']);
        $page_desc = mysql_real_escape_string($_POST['page_desc']);

        $sql = "insert into pages_info (title, page_desc) values ('$title','$page_desc')";
        if(mysql_query($sql))
        {
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='index.php?pages&nav&info&success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='index.php?pages&nav&info&fail';
            </script>
            <?php
        }
    }