<?php
    /**
     * Created by PhpStorm.
     * User: manas samatovich
     * Email: manassamatovich@gmail.com
     * Date: 22.09.2016
     * Time: 21:47
     */

    require_once "../config.php";
    require_once "../language_class.php";
    error_reporting(E_ALL);

    session_start();

    if(isset($_GET['exit'])){
        session_destroy();
        header("Location: ../?");
    }

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
    <link rel="stylesheet" href="../css/pages_style.css">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <link rel="icon" href="../img/logo2.png">

    <link rel="stylesheet" type="text/css" href="../css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <script type="text/javascript" src="../js/modernizr.custom.53451.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .text_limit {
            white-space: nowrap;
            width: 12em;
            overflow: hidden;
            text-overflow: ellipsis;
            color: black;
        }
    </style>

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
                <li><a href="../"><?=$lang->get("LABEL_MENU_ONE")?></a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$lang->get("LABEL_MENU_TWO")?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?url=<?=$lang->get("LABEL_MENU_TWO_ONE_URL")?>"><?=$lang->get("LABEL_MENU_TWO_ONE")?></a></li>
                        <li><a href="?url=<?=$lang->get("LABEL_MENU_TWO_TWO_URL")?>"><?=$lang->get("LABEL_MENU_TWO_TWO")?></a></li>
                        <li><a href="?url=<?=$lang->get("LABEL_MENU_TWO_THREE_URL")?>"><?=$lang->get("LABEL_MENU_TWO_THREE")?></a></li>
                        <li><a href="?url=<?=$lang->get("LABEL_MENU_TWO_FOUR_URL")?>"><?=$lang->get("LABEL_MENU_TWO_FOUR")?></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$lang->get("LABEL_MENU_THREE")?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?url=<?=$lang->get("LABEL_MENU_THREE_ONE_URL")?>"><?=$lang->get("LABEL_MENU_THREE_ONE")?></a></li>
                        <li><a href="?url=<?=$lang->get("LABEL_MENU_THREE_TWO_URL")?>"><?=$lang->get("LABEL_MENU_THREE_TWO")?></a></li>
                    </ul>
                </li>
                <li><a href="../news/"><?=$lang->get("LABEL_MENU_FOUR")?></a></li>
                <li><a href="?url=<?=$lang->get("LABEL_MENU_FIVE_URL")?>"><?=$lang->get("LABEL_MENU_FIVE")?></a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$lang->get("LABEL_MENU_SIX")?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?url=<?=$lang->get("LABEL_MENU_SIX_ONE_URL")?>"><?=$lang->get("LABEL_MENU_SIX_ONE")?></a></li>
                        <li><a href="?url=<?=$lang->get("LABEL_MENU_SIX_TWO_URL")?>"><?=$lang->get("LABEL_MENU_SIX_TWO")?></a></li>
                        <li><a href="?url=<?=$lang->get("LABEL_MENU_SIX_THREE_URL")?>"><?=$lang->get("LABEL_MENU_SIX_THREE")?></a></li>
                        <li><a href="?url=<?=$lang->get("LABEL_MENU_SIX_FOUR_URL")?>"><?=$lang->get("LABEL_MENU_SIX_FOUR")?></a></li>
                        <li><a href="?url=<?=$lang->get("LABEL_MENU_SIX_FIVE_URL")?>"><?=$lang->get("LABEL_MENU_SIX_FIVE")?></a></li>
                    </ul>
                </li>
            </ul>
            <span class="right">
                                    <ul class="nav navbar-nav navbar-right">
                                        <?php
                                        if(isset($_SESSION['sess_user'])){
                                            ?>
                                            <li><a href="../profile/?"><span class="glyphicon glyphicon-home"></span> profile</a></li>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if(!isset($_SESSION['sess_user'])){
                                            ?>
                                            <li><a href="../log/?sign=up"><span class="glyphicon glyphicon-user"></span> <?=$lang->get("LABEL_USER_SIGNUP")?></a></li>
                                            <li><a href="../log/?log=in"><span class="glyphicon glyphicon-log-in"></span> <?=$lang->get("LABEL_USER_LOGIN")?></a></li>
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
                                </span>
            <div class="clr"></div>
        </div><!--/ Codrops top bar -->
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="polaroid">
                    <div class="container">
                        <p class="text_color">news every week!!!</p><hr />

                        <?php
                        $select_news = "select * from news where news_size > 0 order by news_id desc limit 10";
                        $query_news = mysql_query($select_news);
                        while($row_news = mysql_fetch_assoc($query_news)){
                            $news_id = $row_news['news_id'];
                            ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="polaroid img">
                                        <a href="../view/?view=<?php echo $news_id; ?>">
                                            <img src="../uploads/<?php echo $row_news['news_file']; ?>" alt="post image 1" style="width:100%">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <p class="text_color">
                                        <span class="post_date"><?php echo $row_news['insert_time']; ?></span><br />
                                        <span class="post_title"><?php echo "<div class='text_limit'>" . $row_news['news_title'] . "</div>"; ?></span>
                                    </p>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <?php
                    if(isset($_GET['url'])) {
                        $link_url = $_GET['url'];
                        ?>
                        <div class="polaroid text_color">
                            <div class="container">
                                <?php
                                if(isset($_GET['form_beef'])){
                                    ?>
                                    <div class="polaroid text_color">
                                        <div class="container">
                                            <p>заявка для жалоб </p>
                                            <form method="post" action="form_beef_func.php?form=insert">
                                                <div class="form-group">
                                                    <label for="usr"></label>
                                                    <input name="name" type="text" class="form-control" required placeholder="name..." id="usr">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email"></label>
                                                    <input name="email" type="email" class="form-control" required placeholder="email..." id="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="comment"></label>
                                                    <textarea name="message" class="form-control" rows="5" required placeholder="message..." id="comment"></textarea>
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
                                    <?php
                                }
                                if($link_url == 'timeWork'){
                                    ?>
                                    <?php
                                    $get = "select * from pages where time_work_active > 0 order by pages_id desc limit 1";
                                    $query = mysql_query($get);
                                    while($row = mysql_fetch_assoc($query)){
                                        ?>
                                        <div class="polaroid text_color">
                                            <div class="container">
                                                <div class="pages_title"> <?php echo $row['time_work_title'] . '<br />'; ?></div>
                                               <?php echo $row['time_work_desc'];?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                }
                                if($link_url == 'needCo'){ ?>
                                    <?php
                                    $get = "select * from pages where need_co_active > 0 order by pages_id desc limit 1";
                                    $query = mysql_query($get);
                                    while($row = mysql_fetch_assoc($query)){
                                        ?>
                                        <div class="polaroid text_color">
                                            <div class="container">
                                                <div class="pages_title"> <?php echo $row['need_co_title'] . '<br />'; ?></div>
                                                <?php echo $row['need_co_desc'];?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                <?php }
                                if($link_url == 'price'){ ?>
                                    <?php
                                    $get = "select * from pages where price_active > 0 order by pages_id desc limit 1";
                                    $query = mysql_query($get);
                                    while($row = mysql_fetch_assoc($query)){
                                        ?>
                                        <div class="polaroid text_color">
                                            <div class="container">
                                                <div class="pages_title"> <?php echo $row['price_title'] . '<br />'; ?></div>
                                                <?php echo $row['price_desc'];?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                <?php }
                                if($link_url == 'catalogInfo'){ ?>
                                    <?php
                                    $get = "select * from pages where catalog_info_active > 0 order by pages_id desc limit 1";
                                    $query = mysql_query($get);
                                    while($row = mysql_fetch_assoc($query)){
                                        ?>
                                        <div class="polaroid text_color">
                                            <div class="container">
                                                <div class="pages_title"> <?php echo $row['catalog_info_title'] . '<br />'; ?></div>
                                                <?php echo $row['catalog_info_desc'];?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                <?php }
                                if($link_url == 'aboutUs'){ ?>
                                    <?php
                                    $get = "select * from pages where about_us_active > 0 order by pages_id desc limit 1";
                                    $query = mysql_query($get);
                                    while($row = mysql_fetch_assoc($query)){
                                        ?>
                                        <div class="polaroid text_color">
                                            <div class="container">
                                                <div class="pages_title"> <?php echo $row['about_us_title'] . '<br />'; ?></div>
                                                <?php echo $row['about_us_desc'];?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                <?php }
                                if($link_url == 'historyOur'){ ?>
                                    <?php
                                    $get = "select * from pages where history_our_active > 0 order by pages_id desc limit 1";
                                    $query = mysql_query($get);
                                    while($row = mysql_fetch_assoc($query)){
                                        ?>
                                        <div class="polaroid text_color">
                                            <div class="container">
                                                <div class="pages_title"> <?php echo $row['history_our_title'] . '<br />'; ?></div>
                                                <?php echo $row['history_our_desc'];?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                <?php }
                                if($link_url == 'vacancyCo'){ ?>
                                    <?php
                                    $get = "select * from pages where vacancy_active > 0 order by pages_id desc limit 1";
                                    $query = mysql_query($get);
                                    while($row = mysql_fetch_assoc($query)){
                                        ?>
                                        <div class="polaroid text_color">
                                            <div class="container">
                                                <div class="pages_title"> <?php echo $row['vacancy_title'] . '<br />'; ?></div>
                                                <?php echo $row['vacancy_desc'];?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                <?php }
                                if($link_url == 'legalAddress'){ ?>
                                    <?php
                                    $get = "select * from pages where legal_address_active > 0 order by pages_id desc limit 1";
                                    $query = mysql_query($get);
                                    while($row = mysql_fetch_assoc($query)){
                                        ?>
                                        <div class="polaroid text_color">
                                            <div class="container">
                                                <div class="pages_title"> <?php echo $row['legal_address_title'] . '<br />'; ?></div>
                                                <?php echo $row['legal_address_desc'];?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                <?php }
                                if($link_url == 'mailAddress'){ ?>
                                    <?php
                                    $get = "select * from pages where mail_address_active > 0 order by pages_id desc limit 1";
                                    $query = mysql_query($get);
                                    while($row = mysql_fetch_assoc($query)){
                                        ?>
                                        <div class="polaroid text_color">
                                            <div class="container">
                                                <div class="pages_title"> <?php echo $row['mail_address_title'] . '<br />'; ?></div>
                                                <?php echo $row['mail_address_desc'];?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                <?php }
                                if($link_url == 'planTransit'){ ?>
                                    <?php
                                    $get = "select * from pages where plan_transit_active > 0 order by pages_id desc limit 1";
                                    $query = mysql_query($get);
                                    while($row = mysql_fetch_assoc($query)){
                                        ?>
                                        <div class="polaroid text_color">
                                            <div class="container">
                                                <div class="pages_title"> <?php echo $row['plan_transit_title'] . '<br />'; ?></div>
                                                <?php echo $row['plan_transit_desc'];?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                <?php }
                                if($link_url == 'contactInfo'){
                                    ?>
                                    <div class="container">
                                        <?php
                                        $get = "select * from pages where contact_info_active > 0 order by pages_id desc limit 1";
                                        $query = mysql_query($get);
                                        while($row = mysql_fetch_assoc($query)){
                                            ?>
                                            <div class="polaroid text_color">
                                                <div class="container">
                                                    <div class="pages_title"> <?php echo $row['contact_info_title'] . '<br />'; ?></div>
                                                    <?php echo $row['contact_info_desc'];?>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="polaroid text_color">
                                                    <div class="container">
                                                        <p>contact us now </p>
                                                        <form method="post" action="contact_func.php?contact=insert">
                                                            <div class="form-group">
                                                                <label for="usr"></label>
                                                                <input name="name" type="text" class="form-control" required placeholder="name..." id="usr">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email"></label>
                                                                <input name="email" type="email" class="form-control" required placeholder="email..." id="email">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="comment"></label>
                                                                <textarea name="message" class="form-control" rows="5" required placeholder="message..." id="comment"></textarea>
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
                                                        <a href="?url&form_beef" class="forma-jalob">[Форма - заявка для жалоб]</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="polaroid-map text_color">
                                                    <div class="container">
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2924.1795376026175!2d74.60653156938156!3d42.86905455057969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb7cf99d5d33d%3A0x36dff1646de6c45a!2zMjEg0L_RgNC-0YHQvy4g0K3RgNC60LjQvdC00LjQuiwg0JHQuNGI0LrQtdC6LCDQmtC40YDQs9C40LfQuNGP!5e0!3m2!1sru!2sru!4v1474686464237" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                if($link_url == 'bankProps'){ ?>
                                    <?php
                                    $get = "select * from pages where bank_props_active > 0 order by pages_id desc limit 1";
                                    $query = mysql_query($get);
                                    while($row = mysql_fetch_assoc($query)){
                                        ?>
                                        <div class="polaroid text_color">
                                            <div class="container">
                                                <div class="pages_title"> <?php echo $row['bank_props_title'] . '<br />'; ?></div>
                                                <?php echo $row['bank_props_desc'];?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                <?php }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>

    <?php require_once "../footer.php"; ?>

</body>
</html>
