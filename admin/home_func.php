<?php
/**
 * Created by PhpStorm.
 * User: manas samatovich
 * Email: manassamatovich@gmail.com
 * Date: 27.09.2016
 * Time: 15:28
 */

    require_once "../config.php";

    if(isset($_GET['slider'])){
        $file = rand(1000,100000)."-".$_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder="../uploads/";

        // new file size in KB
        $new_size = $file_size/1024;
        // new file size in KB

        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case

        $final_file=str_replace(' ','-',$new_file_name);

        if(move_uploaded_file($file_loc,$folder.$final_file))
        {
            $sql="INSERT INTO home(slider_file,slider_type,slider_size) VALUES('$final_file','$file_type','$new_size')";
            mysql_query($sql);
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='index.php?pages&nav&home&success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='index.php?pages&nav&home&fail';
            </script>
            <?php
        }
    }


    if(isset($_GET['4_images'])){
        $file = rand(1000,100000)."-".$_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder="../uploads/";

        // new file size in KB
        $new_size = $file_size/1024;
        // new file size in KB

        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case

        $final_file=str_replace(' ','-',$new_file_name);

        if(move_uploaded_file($file_loc,$folder.$final_file))
        {
            $sql="INSERT INTO home(img_file,img_type,img_size) VALUES('$final_file','$file_type','$new_size')";
            mysql_query($sql);
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='index.php?pages&nav&home&success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='index.php?pages&nav&home&fail';
            </script>
            <?php
        }
    }


    if(isset($_GET['home_info'])){
        $home_title = mysql_real_escape_string($_POST['home_title']);
        $home_desc = mysql_real_escape_string($_POST['home_desc']);
        $home_info_active = 1;

        $insert = "INSERT INTO home (home_info_active, home_title, home_desc) VALUES ('$home_info_active', '$home_title', '$home_desc')";
        if(mysql_query($insert))
        {
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='index.php?pages&nav&home&success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='index.php?pages&nav&home&fail';
            </script>
            <?php
        }
    }