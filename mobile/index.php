<!DOCTYPE html>
<?php
    require_once '../config.php';
    session_start();

    if(isset($_GET['exit'])){
        session_destroy();
        header("Location: ../mobile/?home");
    }
?>
<html lang="en">
<head>
    <title>ГП  Центральная Лаборатория при Госгеолагенстве при Правительстве КР</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="mobile_style.css">

    <link rel="icon" href="../img/logo2.png">

    <script type="text/javascript">
        <!--
        if (screen.width > 800) {
            window.location = "../?";
        }
        //-->
    </script>

    <style>
        body{
            background-color: whitesmoke;
        }
        div.warning {
            border: 2px solid #a1a1a1;
            padding: 10px 40px;
            background: #dddddd;
            padding-top: 40%;
            border-radius: 100%;
        }
        div.align-text{
            text-align: center;
        }
        .ops {
            color: red;
        }
    </style>
</head>
    <body>
        <div class="wall">
            <?php
            /*
            ?>
                <div class="warning align-text">
                    <div class="align-text">
                        <h1 class="ops">Ooops!!!</h1>
                    </div>
                    <p>Warning!!!</p>
                    <a><i>not available on mobile devices, but we build it coming soon</i></a>
                    <p>this app available only on computer desktop</p>
                    <label>DEVELOPER mssamatovich</label>
                </div>
            */
            ?>
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" style="font-size:14px;" href="#">ГП  Центральная Лаборатория при Госгеолагенстве при Правительстве КР</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="?home">Главная</a></li>
                        <li><a href="?timeWork">Режим работы</a></li>
                        <li><a href="?catalogInfo">Справочная информация</a></li>
                        <li><a href="?price">Цены на услуги</a></li>
                        <li><a href="?contactInfo">Контактная информация</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(isset($_SESSION['sess_user'])){
                            ?>
                            <li><a href="../mobile/?profile"><span class="glyphicon glyphicon-home"></span> profile</a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if(!isset($_SESSION['sess_user'])){
                            ?>
                            <?php
                            /*
                            <li><a href="../log/?sign=up&mobile"><span class="glyphicon glyphicon-user"></span> sign up</a></li>
                            */
                            ?>
                            <li><a href="../log/?log=in&mobile"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if(isset($_SESSION['sess_user'])){
                            ?>
                            <li><a href='?exit'><span class="glyphicon glyphicon-log-out"></span>Exit</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="polaroid">
                <div class="container">
                    <?php
                    if(isset($_GET['home'])){
                        $select = "select * from home where home_info_active > 0 order by home_id desc limit 1";
                        $query = mysql_query($select);
                        $row = mysql_fetch_array($query);

                        echo $row['home_title'] . '<br />';
                        echo $row['home_desc'];
                    }
                    if(isset($_GET['timeWork'])){
                        $select = "select * from pages where time_work_active > 0 order by pages_id desc limit 1";
                        $query = mysql_query($select);
                        $row = mysql_fetch_array($query);

                        echo $row['time_work_title'] . '<br />';
                        echo $row['time_work_desc'];
                    }
                    if(isset($_GET['catalogInfo'])){
                        $select = "select * from pages where catalog_info_active > 0 order by pages_id desc limit 1";
                        $query = mysql_query($select);
                        $row = mysql_fetch_array($query);

                        echo $row['catalog_info_title'] . '<br />';
                        echo $row['catalog_info_desc'];
                    }
                    if(isset($_GET['price'])){
                        $select = "select * from pages where price_active > 0 order by pages_id desc limit 1";
                        $query = mysql_query($select);
                        $row = mysql_fetch_array($query);

                        echo $row['price_title'] . '<br />';
                        echo $row['price_desc'];
                    }
                    if(isset($_GET['contactInfo'])){
                        $select = "select * from pages where contact_info_active > 0 order by pages_id desc limit 1";
                        $query = mysql_query($select);
                        $row = mysql_fetch_array($query);

                        echo $row['contact_info_title'] . '<br />';
                        echo $row['contact_info_desc'];
                    }
                    if(isset($_GET['profile'])){
                        $sess_user = $_SESSION['sess_user'];
                        $select = "select * from answer where permission = '$sess_user' order by answer_id desc limit 1";
                        $query = mysql_query($select);
                        $row = mysql_fetch_array($query);

                        if(empty($row['permission'])){
                            echo 'empty answer';
                        }
                        else{
                            echo $row['answer_time'] . '<br />';
                            echo $row['title'] . '<br />';
                            echo $row['ans_desc'];
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="polaroid-footer">
                <div class="container-fluid">
                    <footer>
                        <p>info@center-lab.kg </p>
                        <p>help@center-lab.kg </p>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>