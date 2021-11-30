<?php
/**
 * Created by PhpStorm.
 * User: manas samatovich
 * Email: manassamatovich@gmail.com
 * Date: 27.09.2016
 * Time: 21:33
 */

    require_once "../config.php";

    if(isset($_GET['time_work'])){
        $title = mysql_real_escape_string($_POST['title']);
        $desc = mysql_real_escape_string($_POST['desc']);
        $active = 1;

        $sql = "insert into pages (time_work_title, time_work_desc, time_work_active) values ('$title','$desc','$active')";

        if(mysql_query($sql))
        {
            ?>
            <script>
                alert('successfully uploaded');
                window.location.href='index.php?pages&nav&timeWork&success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                alert('error while uploading file');
                window.location.href='index.php?pages&nav&timeWork&fail';
            </script>
            <?php
        }
    }

if(isset($_GET['need_co'])){
    $title = mysql_real_escape_string($_POST['title']);
    $desc = mysql_real_escape_string($_POST['desc']);
    $active = 1;

    $sql = "insert into pages (need_co_title, need_co_desc, need_co_active) values ('$title','$desc','$active')";

    if(mysql_query($sql))
    {
        ?>
        <script>
            alert('successfully uploaded');
            window.location.href='index.php?pages&nav&needCo&success';
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('error while uploading file');
            window.location.href='index.php?pages&nav&needCo&fail';
        </script>
        <?php
    }
}

if(isset($_GET['price'])){
    $title = mysql_real_escape_string($_POST['title']);
    $desc = mysql_real_escape_string($_POST['desc']);
    $active = 1;

    $sql = "insert into pages (price_title, price_desc, price_active) values ('$title','$desc','$active')";

    if(mysql_query($sql))
    {
        ?>
        <script>
            alert('successfully uploaded');
            window.location.href='index.php?pages&nav&price&success';
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('error while uploading file');
            window.location.href='index.php?pages&nav&price&fail';
        </script>
        <?php
    }
}


if(isset($_GET['catalog_info'])){
    $title = mysql_real_escape_string($_POST['title']);
    $desc = mysql_real_escape_string($_POST['desc']);
    $active = 1;

    $sql = "insert into pages (catalog_info_title, catalog_info_desc, catalog_info_active) values ('$title','$desc','$active')";

    if(mysql_query($sql))
    {
        ?>
        <script>
            alert('successfully uploaded');
            window.location.href='index.php?pages&nav&price&success';
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('error while uploading file');
            window.location.href='index.php?pages&nav&price&fail';
        </script>
        <?php
    }
}


if(isset($_GET['about_us'])){
    $title = mysql_real_escape_string($_POST['title']);
    $desc = mysql_real_escape_string($_POST['desc']);
    $active = 1;

    $sql = "insert into pages (about_us_title, about_us_desc, about_us_active) values ('$title','$desc','$active')";

    if(mysql_query($sql))
    {
        ?>
        <script>
            alert('successfully uploaded');
            window.location.href='index.php?pages&nav&price&success';
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('error while uploading file');
            window.location.href='index.php?pages&nav&price&fail';
        </script>
        <?php
    }
}




if(isset($_GET['history_our'])){
    $title = mysql_real_escape_string($_POST['title']);
    $desc = mysql_real_escape_string($_POST['desc']);
    $active = 1;

    $sql = "insert into pages (history_our_title, history_our_desc, history_our_active) values ('$title','$desc','$active')";

    if(mysql_query($sql))
    {
        ?>
        <script>
            alert('successfully uploaded');
            window.location.href='index.php?pages&nav&price&success';
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('error while uploading file');
            window.location.href='index.php?pages&nav&price&fail';
        </script>
        <?php
    }
}



if(isset($_GET['vacancy'])){
    $title = mysql_real_escape_string($_POST['title']);
    $desc = mysql_real_escape_string($_POST['desc']);
    $active = 1;

    $sql = "insert into pages (vacancy_title, vacancy_desc, vacancy_active) values ('$title','$desc','$active')";

    if(mysql_query($sql))
    {
        ?>
        <script>
            alert('successfully uploaded');
            window.location.href='index.php?pages&nav&price&success';
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('error while uploading file');
            window.location.href='index.php?pages&nav&price&fail';
        </script>
        <?php
    }
}


if(isset($_GET['legal_address'])){
    $title = mysql_real_escape_string($_POST['title']);
    $desc = mysql_real_escape_string($_POST['desc']);
    $active = 1;

    $sql = "insert into pages (legal_address_title, legal_address_desc, legal_address_active) values ('$title','$desc','$active')";

    if(mysql_query($sql))
    {
        ?>
        <script>
            alert('successfully uploaded');
            window.location.href='index.php?pages&nav&price&success';
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('error while uploading file');
            window.location.href='index.php?pages&nav&price&fail';
        </script>
        <?php
    }
}



if(isset($_GET['mail_address'])){
    $title = mysql_real_escape_string($_POST['title']);
    $desc = mysql_real_escape_string($_POST['desc']);
    $active = 1;

    $sql = "insert into pages (mail_address_title, mail_address_desc, mail_address_active) values ('$title','$desc','$active')";

    if(mysql_query($sql))
    {
        ?>
        <script>
            alert('successfully uploaded');
            window.location.href='index.php?pages&nav&price&success';
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('error while uploading file');
            window.location.href='index.php?pages&nav&price&fail';
        </script>
        <?php
    }
}

if(isset($_GET['plan_transit'])){
    $title = mysql_real_escape_string($_POST['title']);
    $desc = mysql_real_escape_string($_POST['desc']);
    $active = 1;

    $sql = "insert into pages (plan_transit_title, plan_transit_desc, plan_transit_active) values ('$title','$desc','$active')";

    if(mysql_query($sql))
    {
        ?>
        <script>
            alert('successfully uploaded');
            window.location.href='index.php?pages&nav&price&success';
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('error while uploading file');
            window.location.href='index.php?pages&nav&price&fail';
        </script>
        <?php
    }
}


if(isset($_GET['contact_info'])){
    $title = mysql_real_escape_string($_POST['title']);
    $desc = mysql_real_escape_string($_POST['desc']);
    $active = 1;

    $sql = "insert into pages (contact_info_title, contact_info_desc, contact_info_active) values ('$title','$desc','$active')";

    if(mysql_query($sql))
    {
        ?>
        <script>
            alert('successfully uploaded');
            window.location.href='index.php?pages&nav&price&success';
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('error while uploading file');
            window.location.href='index.php?pages&nav&price&fail';
        </script>
        <?php
    }
}

if(isset($_GET['bank_props'])){
    $title = mysql_real_escape_string($_POST['title']);
    $desc = mysql_real_escape_string($_POST['desc']);
    $active = 1;

    $sql = "insert into pages (bank_props_title, bank_props_desc, bank_props_active) values ('$title','$desc','$active')";

    if(mysql_query($sql))
    {
        ?>
        <script>
            alert('successfully uploaded');
            window.location.href='index.php?pages&nav&price&success';
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('error while uploading file');
            window.location.href='index.php?pages&nav&price&fail';
        </script>
        <?php
    }
}