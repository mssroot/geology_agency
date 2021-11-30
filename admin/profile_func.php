<?php
/**
 * Created by PhpStorm.
 * User: manas samatovich
 * Email: manassamatovich@gmail.com
 * Date: 28.09.2016
 * Time: 19:01
 */

    require_once  "../config.php";

    if(isset($_GET['img'])){
        $file = rand(1000,100000)."-".$_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder="../img/";

        // new file size in KB
        $new_size = $file_size/1024;
        // new file size in KB

        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case

        $final_file=str_replace(' ','-',$new_file_name);

        if(move_uploaded_file($file_loc,$folder.$final_file))
        {
            $sql="INSERT INTO profile (file, type, size) VALUES('$final_file','$file_type','$new_size')";
            mysql_query($sql);
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='index.php?profile&success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='index.php?profile&fail';
            </script>
            <?php
        }
    }

    if(isset($_GET['name'])){
        $name = mysql_real_escape_string($_POST['name']);
        $name_active = 1;
        $sql = "insert into profile (name, name_active) values ('$name','$name_active')";
        if(mysql_query($sql))
        {
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='index.php?profile';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='index.php?profile';
            </script>
            <?php
        }
    }

    if(isset($_GET['info'])){
        $title = mysql_real_escape_string($_POST['title']);
        $desc = mysql_real_escape_string($_POST['desc']);
        $profile_active = 1;
        $sql = "insert into profile (title, info_desc,  profile_active) values ('$title', '$desc','$profile_active')";
        if(mysql_query($sql))
        {
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='index.php?profile';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='index.php?profile';
            </script>
            <?php
        }
    }

    if(isset($_GET['surname'])){
        $surname = mysql_real_escape_string($_POST['surname']);
        $surname_active = 1;
        $sql = "insert into profile (surname, surname_active) values ('$surname','$surname_active')";
        if(mysql_query($sql))
        {
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='index.php?profile';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='index.php?profile';
            </script>
            <?php
        }
    }

    if(isset($_GET['email'])){
        $email = mysql_real_escape_string($_POST['email']);
        $email_active = 1;
        $sql = "insert into profile (email, email_active) values ('$email','$email_active')";
        if(mysql_query($sql))
        {
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='index.php?profile';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='index.php?profile';
            </script>
            <?php
        }
    }