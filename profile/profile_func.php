<?php
/**
 * Created by PhpStorm.
 * User: manas samatovich
 * Email: manassamatovich@gmail.com
 * Date: 28.09.2016
 * Time: 20:02
 */

    require_once "../config.php";

    session_start();

    $sess_user = $_SESSION['sess_user'];
    $user = $sess_user;

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
            $sql="INSERT INTO profile_img (user_img, file, type, size) VALUES('$user', '$final_file','$file_type','$new_size')";
            mysql_query($sql);
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='../profile/?user=success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='../profile/?user=fail';
            </script>
            <?php
        }
    }

    if(isset($_GET['name'])){
        $name = mysql_real_escape_string($_POST['name']);
        $name_active = 1;
        $sql="INSERT INTO profile_img (user_name, name, name_active) VALUES('$user', '$name','$name_active')";
        if(mysql_query($sql))
        {
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='../profile/?user=success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='../profile/?user=fail';
            </script>
            <?php
        }
    }

    if(isset($_GET['surname'])){
        $surname = mysql_real_escape_string($_POST['surname']);
        $surname_active = 1;
        $sql="INSERT INTO profile_img (user_surname, surname, surname_active) VALUES('$user','$surname','$surname_active')";
        if(mysql_query($sql))
        {
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='../profile/?user=success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='../profile/?user=fail';
            </script>
            <?php
        }
    }

    if(isset($_GET['email'])){
        $email = mysql_real_escape_string($_POST['email']);
        $email_active = 1;
        $sql="INSERT INTO profile_img (user_email, email, email_active) VALUES('$user', '$email','$email_active')";
        if(mysql_query($sql))
        {
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='../profile/?user=success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='../profile/?user=fail';
            </script>
            <?php
        }
    }

    if(isset($_GET['company'])){
        $company = mysql_real_escape_string($_POST['company']);
        $company_active = 1;
        $sql="INSERT INTO profile_img (user_company, company, company_active) VALUES('$user', '$company','$company_active')";
        if(mysql_query($sql))
        {
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='../profile/?user=success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='../profile/?user=fail';
            </script>
            <?php
        }
    }

    if(isset($_GET['about'])){
        $about = mysql_real_escape_string($_POST['about']);
        $about_active = 1;
        $sql="INSERT INTO profile_img (user_about, about_you, info_active) VALUES('$user', '$about','$about_active')";
        if(mysql_query($sql))
        {
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='../profile/?user=success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='../profile/?user=fail';
            </script>
            <?php
        }
    }

