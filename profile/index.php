<?php
/**
 * Created by PhpStorm.
 * User: manas samatovich
 * Email: manassamatovich@gmail.com
 * Date: 24.09.2016
 * Time: 11:45
 */
    require_once '../config.php';

    session_start();
    $sess_user = $_SESSION['sess_user'];

    $select_admin1 = "select * from user_database where user_id = '1'";
    $query_admin1 = mysql_query($select_admin1);
    $row_admin1 = mysql_fetch_array($query_admin1);

    if($sess_user == $row_admin1['user_name']){
        header("Location: ../admin/?admin1&profile");
    }

    $select_admin2 = "select * from user_database where user_id = '2'";
    $query_admin2 = mysql_query($select_admin2);
    $row_admin2 = mysql_fetch_array($query_admin2);

    if($sess_user == $row_admin2['user_name']){
        header("Location: ../admin/?admin2&profile");
    }

    $select_admin3 = "select * from user_database where user_id = '3'";
    $query_admin3 = mysql_query($select_admin3);
    $row_admin3 = mysql_fetch_array($query_admin3);

    if($sess_user == $row_admin3['user_name']){
        header("Location: ../admin/?admin3&profile");
    }

    if(!isset($_SESSION['sess_user'])){
        header("Location: ../log/?log=in");
    }

    if(isset($_GET['exit'])){
        session_destroy();
        header("Location: ../?");
    }
?>
<?php
/**
 * Created by PhpStorm.
 * User: manas samatovich
 * Email: manassamatovich@gmail.com
 * Date: 22.09.2016
 * Time: 21:47
 */

require_once "../language_class.php";
error_reporting(E_ALL);

function getLanguage() {

    preg_match_all('/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"]), $matches); // Получаем массив $matches с соответствиями
    $langs = array_combine($matches[1], $matches[2]); // Создаём массив с ключами $matches[1] и значениями $matches[2]
    foreach ($langs as $n => $v)
        $langs[$n] = $v ? $v : 1; // Если нет q, то ставим значение 1
    arsort($langs); // Сортируем по убыванию q
    $default_lang = key($langs); // Берём 1-й ключ первого (текущего) элемента (он же максимальный по q)
    if (strpos($default_lang, "ru") !== false) return "ru";
    elseif (strpos($default_lang, "en") !==false) return "en";

}
$language = getLanguage();
$lang = new Language($language);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <script type="text/javascript">
        <!--
        if (screen.width <= 800) {
            window.location = "../mobile/?home";
        }
        //-->
    </script>

    <title><?=$lang->get("TITLE_MAIN")?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="manas samatovich">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/main_style.css">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <link rel="icon" href="../img/logo2.png">

    <link rel="stylesheet" type="text/css" href="../css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <script type="text/javascript" src="../js/modernizr.custom.53451.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-3"><img class="img-responsive logo1" src="../img/logo1.png" alt="logo1"></div>
            <div class="col-lg-6"><p class="company_name"><?=$lang->get("LABEL_COMPANY_NAME")?></p></div>
            <div class="col-lg-3"><img class="img-responsive logo2" align="right" src="../img/logo2.png" alt="logo2"></div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- Codrops top bar -->
        <div class="codrops-top">
            <ul class="nav navbar-nav">
                <li><a href="../?home=user"><?=$lang->get("LABEL_MENU_ONE")?></a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$lang->get("LABEL_MENU_TWO")?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../pages/?url=<?=$lang->get("LABEL_MENU_TWO_ONE_URL")?>"><?=$lang->get("LABEL_MENU_TWO_ONE")?></a></li>
                        <li><a href="../pages/?url=<?=$lang->get("LABEL_MENU_TWO_TWO_URL")?>"><?=$lang->get("LABEL_MENU_TWO_TWO")?></a></li>
                        <li><a href="../pages/?url=<?=$lang->get("LABEL_MENU_TWO_THREE_URL")?>"><?=$lang->get("LABEL_MENU_TWO_THREE")?></a></li>
                        <li><a href="../pages/?url=<?=$lang->get("LABEL_MENU_TWO_FOUR_URL")?>"><?=$lang->get("LABEL_MENU_TWO_FOUR")?></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$lang->get("LABEL_MENU_THREE")?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../pages/?url=<?=$lang->get("LABEL_MENU_THREE_ONE_URL")?>"><?=$lang->get("LABEL_MENU_THREE_ONE")?></a></li>
                        <li><a href="../pages/?url=<?=$lang->get("LABEL_MENU_THREE_TWO_URL")?>"><?=$lang->get("LABEL_MENU_THREE_TWO")?></a></li>
                    </ul>
                </li>
                <li><a href="../news/?"><?=$lang->get("LABEL_MENU_FOUR")?></a></li>
                <li><a href="../pages/?url=<?=$lang->get("LABEL_MENU_FIVE_URL")?>"><?=$lang->get("LABEL_MENU_FIVE")?></a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$lang->get("LABEL_MENU_SIX")?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../pages/?url=<?=$lang->get("LABEL_MENU_SIX_ONE_URL")?>"><?=$lang->get("LABEL_MENU_SIX_ONE")?></a></li>
                        <li><a href="../pages/?url=<?=$lang->get("LABEL_MENU_SIX_TWO_URL")?>"><?=$lang->get("LABEL_MENU_SIX_TWO")?></a></li>
                        <li><a href="../pages/?url=<?=$lang->get("LABEL_MENU_SIX_THREE_URL")?>"><?=$lang->get("LABEL_MENU_SIX_THREE")?></a></li>
                        <li><a href="../pages/?url=<?=$lang->get("LABEL_MENU_SIX_FOUR_URL")?>"><?=$lang->get("LABEL_MENU_SIX_FOUR")?></a></li>
                        <li><a href="../pages/?url=<?=$lang->get("LABEL_MENU_SIX_FIVE_URL")?>"><?=$lang->get("LABEL_MENU_SIX_FIVE")?></a></li>
                    </ul>
                </li>
            </ul>
            <span class="right">
                                        <ul class="nav navbar-nav navbar-right">
                                            <?php
                                                if(!isset($_SESSION['sess_user'])){
                                                    ?>
                                                    <li><a href="../log/?sign=up"><span class="glyphicon glyphicon-user"></span> <?=$lang->get("LABEL_USER_SIGNUP")?></a></li>
                                                    <li><a href="../log/?log=in"><span class="glyphicon glyphicon-log-in"></span> <?=$lang->get("LABEL_USER_LOGIN")?></a></li>
                                                    <?php
                                                }
                                            ?>
                                            <li><a href='?exit'><span class="glyphicon glyphicon-log-out"></span>Exit</a></li>
                                        </ul>
                                    </span>
            <div class="clr"></div>
        </div><!--/ Codrops top bar -->
    </div>

    <?php
        if(isset($_SESSION['sess_user'])){
            ?>
            <div class="container text_color">
                <div class="polaroid">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="polaroid">
                                    <div class="container">
                                        <p>code: <?php echo $_SESSION['sess_user']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="polaroid">
                                    <div class="container">
                                        <p>user image information</p>
                                        <?php
                                        $select_img = "select * from profile_img where user_img = '$sess_user' order by profile_img_id desc limit 1";
                                        $query_img = mysql_query($select_img);
                                        $row_img = mysql_fetch_array($query_img);

                                        if(empty($row_img['file'])){
                                            ?>
                                            <img src="../img/admin.png" alt="profile user" style="width:100%"><a href="?user&img">[edit]</a>
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <img src="../img/<?php echo $row_img['file']; ?>" alt="profile user" style="width:100%"><a href="?user&img">[edit]</a>
                                            <?php
                                        }
                                        if(isset($_GET['img'])){
                                            ?>
                                            <form method="post" action="profile_func.php?img=insert" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <input name="file" class="form-control" type="file">
                                                </div>
                                                <button class="btn btn-default form-control">Submit</button>
                                            </form>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="polaroid">
                                    <div class="container">
                                        <p>user information</p>
                                        <?php
                                        $select_name = "select * from profile_img where user_name = '$sess_user' order by profile_img_id desc limit 1";
                                        $query_name = mysql_query($select_name);
                                        $row_name = mysql_fetch_array($query_name);
                                        ?>
                                        name: <?php echo $row_name['name']; ?><a href="?name">[edit]</a><br />
                                        <?php

                                        if(isset($_GET['name'])){
                                            ?>
                                            <form method="post" action="profile_func.php?name">
                                                <div class="form-group">
                                                    <input name="name" class="form-control" type="text" placeholder="name...">
                                                </div>
                                                <button class="btn btn-default form-control">Submit</button>
                                            </form>
                                            <?php
                                        }
                                        ?>

                                        <?php
                                        $select_surname = "select * from profile_img where user_surname = '$sess_user' order by profile_img_id desc limit 1";
                                        $query_surname = mysql_query($select_surname);
                                        $row_surname = mysql_fetch_array($query_surname);
                                        ?>
                                        surname: <?php echo $row_surname['surname']; ?><a href="?surname">[edit]</a><br />
                                        <?php

                                        if(isset($_GET['surname'])){
                                            ?>
                                            <form method="post" action="profile_func.php?surname">
                                                <div class="form-group">
                                                    <input name="surname" class="form-control" type="text" placeholder="surname...">
                                                </div>
                                                <button class="btn btn-default form-control">Submit</button>
                                            </form>
                                            <?php
                                        }
                                        ?>

                                        <?php
                                        $select_email = "select * from profile_img where user_email = '$sess_user' order by profile_img_id desc limit 1";
                                        $query_email = mysql_query($select_email);
                                        $row_email = mysql_fetch_array($query_email);
                                        ?>
                                        email: <?php echo $row_email['email']; ?><a href="?email">[edit]</a><br />
                                        <?php

                                        if(isset($_GET['email'])){
                                            ?>
                                            <form method="post" action="profile_func.php?email">
                                                <div class="form-group">
                                                    <input name="email" class="form-control" type="text" placeholder="email...">
                                                </div>
                                                <button class="btn btn-default form-control">Submit</button>
                                            </form>
                                            <?php
                                        }
                                        ?>

                                        <?php
                                        $select_company = "select * from profile_img where user_company = '$sess_user' order by profile_img_id desc limit 1";
                                        $query_company = mysql_query($select_company);
                                        $row_company = mysql_fetch_array($query_company);
                                        ?>
                                        company: <?php echo $row_company['company']; ?><a href="?company">[edit]</a><br />
                                        <?php

                                        if(isset($_GET['company'])){
                                            ?>
                                            <form method="post" action="profile_func.php?company">
                                                <div class="form-group">
                                                    <input name="company" class="form-control" type="text" placeholder="company...">
                                                </div>
                                                <button class="btn btn-default form-control">Submit</button>
                                            </form>
                                            <?php
                                        }
                                        ?>

                                        <?php
                                        $select_about = "select * from profile_img where user_about = '$sess_user' order by profile_img_id desc limit 1";
                                        $query_about = mysql_query($select_about);
                                        $row_about = mysql_fetch_array($query_about);
                                        ?>
                                        about me: <?php echo $row_about['about_you']; ?><a href="?about">[edit]</a><br />
                                        <?php

                                        if(isset($_GET['about'])){
                                            ?>
                                            <form method="post" action="profile_func.php?about">
                                                <div class="form-group">
                                                    <textarea name="about" class="form-control" placeholder="about me..."></textarea>
                                                </div>
                                                <button class="btn btn-default form-control">Submit</button>
                                            </form>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="polaroid">
                                    <div class="container">
                                        <?php
                                        $select_info = "select * from client where permission = '$sess_user' order by client_id desc";
                                        $query_info = mysql_query($select_info);
                                        $row_info = mysql_fetch_array($query_info);
                                        ?>
                                        <p>from admin:</p>
                                        <p><?php echo $row_info['info']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="polaroid">
                                    <div class="container" style="text-align: left;">
                                        <?php
                                        $select_ans = "select * from answer where permission='$sess_user' order by answer_id desc";
                                        $query_ans = mysql_query($select_ans);
                                        $row_ans = mysql_fetch_array($query_ans);
                                        ?>
                                        <h2><?php echo $row_ans['title']; ?></h2>
                                        <p><?php echo $row_ans['ans_desc']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    ?>

    <?php require_once "../footer.php"; ?>

</body>
</html>
