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
            window.location = "../mobile";
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
                <li><a href="#"><?=$lang->get("LABEL_MENU_ONE")?></a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$lang->get("LABEL_MENU_TWO")?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><?=$lang->get("LABEL_MENU_TWO_ONE")?></a></li>
                        <li><a href="#"><?=$lang->get("LABEL_MENU_TWO_TWO")?></a></li>
                        <li><a href="#"><?=$lang->get("LABEL_MENU_TWO_THREE")?></a></li>
                        <li><a href="#"><?=$lang->get("LABEL_MENU_TWO_FOUR")?></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$lang->get("LABEL_MENU_THREE")?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><?=$lang->get("LABEL_MENU_THREE_ONE")?></a></li>
                        <li><a href="#"><?=$lang->get("LABEL_MENU_THREE_TWO")?></a></li>
                    </ul>
                </li>
                <li><a href="#"><?=$lang->get("LABEL_MENU_FOUR")?></a></li>
                <li><a href="#"><?=$lang->get("LABEL_MENU_FIVE")?></a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$lang->get("LABEL_MENU_SIX")?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><?=$lang->get("LABEL_MENU_SIX_ONE")?></a></li>
                        <li><a href="#"><?=$lang->get("LABEL_MENU_SIX_TWO")?></a></li>
                        <li><a href="#"><?=$lang->get("LABEL_MENU_SIX_THREE")?></a></li>
                        <li><a href="#"><?=$lang->get("LABEL_MENU_SIX_FOUR")?></a></li>
                        <li><a href="#"><?=$lang->get("LABEL_MENU_SIX_FIVE")?></a></li>
                    </ul>
                </li>
            </ul>
            <span class="right">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?=$lang->get("LABEL_USER_SIGNUP")?></a></li>
                                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> <?=$lang->get("LABEL_USER_LOGIN")?></a></li>
                                </ul>
                            </span>
            <div class="clr"></div>
        </div><!--/ Codrops top bar -->
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="polaroid text_color">
                    <div class="container">
                        <p>contact with us</p>
                        <form>
                            <div class="form-group">
                                <label for="usr"></label>
                                <input type="text" class="form-control" required placeholder="name..." id="usr">
                            </div>
                            <div class="form-group">
                                <label for="email"></label>
                                <input type="email" class="form-control" required placeholder="email..." id="email">
                            </div>
                            <div class="form-group">
                                <label for="comment"></label>
                                <textarea class="form-control" rows="5" required placeholder="message..." id="comment"></textarea>
                            </div>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                    <button type="reset" class="btn btn-default">Clear</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="polaroid">
                    <div class="container">
                        <a href="#" class="forma-jalob">[Форма - заявка для жалоб]</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="polaroid-map text_color">
                    <div class="container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2924.1795376026175!2d74.60653156938156!3d42.86905455057969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb7cf99d5d33d%3A0x36dff1646de6c45a!2zMjEg0L_RgNC-0YHQvy4g0K3RgNC60LjQvdC00LjQuiwg0JHQuNGI0LrQtdC6LCDQmtC40YDQs9C40LfQuNGP!5e0!3m2!1sru!2sru!4v1474686464237" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "../footer.php"; ?>

</body>
</html>
