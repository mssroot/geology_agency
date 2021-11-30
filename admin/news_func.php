<?php
/**
 * Created by PhpStorm.
 * User: manas samatovich
 * Email: manassamatovich@gmail.com
 * Date: 27.09.2016
 * Time: 20:42
 */

    require_once "../config.php";

if(isset($_GET['news'])){
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
        $news_title = mysql_real_escape_string($_POST['news_title']);
        $news_desc = mysql_real_escape_string($_POST['news_desc']);
        $news_info_active = 1;

        $sql="INSERT INTO news(news_file,news_type,news_size,news_info_active, news_title, news_desc) VALUES('$final_file','$file_type','$new_size','$news_info_active','$news_title','$news_desc')";
        mysql_query($sql);
        ?>
        <script>
            alert('successfully uploaded');
            window.location.href='index.php?pages&nav&news&success';
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('error while uploading file');
            window.location.href='index.php?pages&news&home&fail';
        </script>
        <?php
    }
}


    if(isset($_GET['edit_changes'])){
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


        $title = mysql_real_escape_string($_POST['title']);
        $news_desc = mysql_real_escape_string($_POST['news_desc']);
        $news_id = $_GET['id'];

        if($file_size > 0){
            move_uploaded_file($file_loc,$folder.$final_file);
            $change = "UPDATE `news` SET `news_file` = '$final_file' WHERE `news`.`news_id` = '$news_id'";
            if(mysql_query($change))
            {
                ?>
                <script>
                    alert('successfully uploaded');
                    window.location.href='index.php?news&success';
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                    alert('error while uploading file');
                    window.location.href='index.php?news&fail';
                </script>
                <?php
            }
        }
        if(!empty($title)){
            $change = "UPDATE `news` SET `news_title` = '$title' WHERE `news`.`news_id` = '$news_id'";
            if(mysql_query($change))
            {

                ?>
                <script>
                    alert('successfully uploaded');
                    window.location.href='index.php?news&success';
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                    alert('error while uploading file');
                    window.location.href='index.php?news&fail';
                </script>
                <?php
            }
        }
        if(!empty($news_desc)){
            $change = "UPDATE `news` SET `news_desc` = '$news_desc' WHERE `news`.`news_id` = '$news_id'";
            if(mysql_query($change))
            {

                ?>
                <script>
                    alert('successfully uploaded');
                    window.location.href='index.php?news&success';
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                    alert('error while uploading file');
                    window.location.href='index.php?news&fail';
                </script>
                <?php
            }
        }
    }
