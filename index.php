<!DOCTYPE html>
<?php
/**
 * Created by PhpStorm.
 * User: manas samatovich
 * Email: manassamatovich@gmail.com
 * Date: 22.09.2016
 * Time: 21:47
 */
    require_once "config.php";
    require_once "language_class.php";

    session_start();

    if(isset($_GET['exit'])){
        session_destroy();
        header("Location: ?");
    }

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
<html lang="en">
<head>

    <script type="text/javascript">
        <!--
        if (screen.width <= 800) {
            window.location = "mobile/?home";
        }
        //-->
    </script>

    <title><?=$lang->get("TITLE_MAIN")?></title>

    <?php require_once "head.php"; ?>

    <style>
        .text_limit {
            white-space: nowrap;
            width: 12em;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>

</head>
<body>

    <?php include_once "navbar.php"; ?>

    <div class="container-fluid">

            <!-- Codrops top bar -->
            <div class="codrops-top">
                <ul class="nav navbar-nav">
                    <li><a href="#"><?=$lang->get("LABEL_MENU_ONE")?></a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$lang->get("LABEL_MENU_TWO")?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="pages/?url=<?=$lang->get("LABEL_MENU_TWO_ONE_URL")?>"><?=$lang->get("LABEL_MENU_TWO_ONE")?></a></li>
                            <li><a href="pages/?url=<?=$lang->get("LABEL_MENU_TWO_TWO_URL")?>"><?=$lang->get("LABEL_MENU_TWO_TWO")?></a></li>
                            <li><a href="pages/?url=<?=$lang->get("LABEL_MENU_TWO_THREE_URL")?>"><?=$lang->get("LABEL_MENU_TWO_THREE")?></a></li>
                            <li><a href="pages/?url=<?=$lang->get("LABEL_MENU_TWO_FOUR_URL")?>"><?=$lang->get("LABEL_MENU_TWO_FOUR")?></a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$lang->get("LABEL_MENU_THREE")?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="pages/?url=<?=$lang->get("LABEL_MENU_THREE_ONE_URL")?>"><?=$lang->get("LABEL_MENU_THREE_ONE")?></a></li>
                            <li><a href="pages/?url=<?=$lang->get("LABEL_MENU_THREE_TWO_URL")?>"><?=$lang->get("LABEL_MENU_THREE_TWO")?></a></li>
                        </ul>
                    </li>
                    <li><a href="news/"><?=$lang->get("LABEL_MENU_FOUR")?></a></li>
                    <li><a href="pages/?url=<?=$lang->get("LABEL_MENU_FIVE_URL")?>"><?=$lang->get("LABEL_MENU_FIVE")?></a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=$lang->get("LABEL_MENU_SIX")?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="pages/?url=<?=$lang->get("LABEL_MENU_SIX_ONE_URL")?>"><?=$lang->get("LABEL_MENU_SIX_ONE")?></a></li>
                            <li><a href="pages/?url=<?=$lang->get("LABEL_MENU_SIX_TWO_URL")?>"><?=$lang->get("LABEL_MENU_SIX_TWO")?></a></li>
                            <li><a href="pages/?url=<?=$lang->get("LABEL_MENU_SIX_THREE_URL")?>"><?=$lang->get("LABEL_MENU_SIX_THREE")?></a></li>
                            <li><a href="pages/?url=<?=$lang->get("LABEL_MENU_SIX_FOUR_URL")?>"><?=$lang->get("LABEL_MENU_SIX_FOUR")?></a></li>
                            <li><a href="pages/?url=<?=$lang->get("LABEL_MENU_SIX_FIVE_URL")?>"><?=$lang->get("LABEL_MENU_SIX_FIVE")?></a></li>
                        </ul>
                    </li>
                </ul>
                <span class="right">
					<ul class="nav navbar-nav navbar-right">
                        <?php
                            if(isset($_SESSION['sess_user'])){
                                ?>
                                <li><a href="profile/?"><span class="glyphicon glyphicon-home"></span> profile</a></li>
                                <?php
                            }
                        ?>
                        <?php
                            if(!isset($_SESSION['sess_user'])){
                                ?>
                                <li><a href="log/?sign=up"><span class="glyphicon glyphicon-user"></span> <?=$lang->get("LABEL_USER_SIGNUP")?></a></li>
                                <li><a href="log/?log=in"><span class="glyphicon glyphicon-log-in"></span> <?=$lang->get("LABEL_USER_LOGIN")?></a></li>
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
        <?php
        /*
            <header>
                <h1>3D Gallery <span>with CSS3 &amp; jQuery</span></h1>
                <nav class="codrops-demos">
                    <a class="current-demo" href="index.php">Navigation</a>
                    <a href="index2.html">Auto-Slideshow</a>
                    <a href="index3.html">3 Elements</a>
                </nav>
            </header>
        */
        ?>

            <section id="dg-container" class="dg-container">
                <div class="dg-wrapper img">
                    <?php
                    $select_slider = "SELECT slider_file FROM home WHERE slider_size > 0 ORDER BY home_id DESC LIMIT 12";
                    $query_slider = mysql_query($select_slider);
                    while($row_slider = mysql_fetch_assoc($query_slider)){
                        ?>
                        <a href="#"><img src="uploads/<?php echo $row_slider['slider_file'];?>" alt="slider home"></a>
                        <?php
                    }
                    ?>
                </div>
                <nav>
                    <span class="dg-prev">&lt;</span>
                    <span class="dg-next">&gt;</span>
                </nav>
            </section>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.gallery.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#dg-container').gallery();
            });
        </script/>
    </div>

    <div class="container-fluid">
        <div class="row">
            <?php
            $select_img = "SELECT img_file FROM home WHERE img_size > 0 ORDER BY home_id DESC LIMIT 4";
            $query_img = mysql_query($select_img);
            while($row_img = mysql_fetch_assoc($query_img)){
                ?>
                <div class="col-lg-3">
                    <div class="polaroid img">
                        <a href="#">
                            <img src="uploads/<?php echo $row_img['img_file']; ?>" alt="home images" style="width:100%">
                        </a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="polaroid">
                    <div class="container">
                        <p class="text_color">news every week!!!</p><hr />
                        <?php
                        $select_news = "select * from news where news_size > 0 order by news_id desc limit 5";
                        $query_news = mysql_query($select_news);
                        while($row_news = mysql_fetch_assoc($query_news)){
                            $news_id = $row_news['news_id'];
                            ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="polaroid img">
                                        <a href="view/?view=<?php echo $news_id; ?>">
                                            <img src="uploads/<?php echo $row_news['news_file']; ?>" alt="post image 1" style="width:100%">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <p class="text_color text_limit">
                                        <span class="post_date"><?php echo $row_news['insert_time']; ?></span><br />
                                        <span class="post_title"><?php echo $row_news['news_title']; ?></span>
                                    </p>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div><hr />
            <div class="col-lg-8">
                <div class="row">
                    <?php
                    $select_home_info = "SELECT * FROM home where home_info_active > 0 ORDER BY home_id DESC LIMIT 5";
                    $query_home_info = mysql_query($select_home_info);
                    while($row_home_info = mysql_fetch_assoc($query_home_info)){
                        ?>
                        <div class="col-lg-4">
                            <div class="polaroid">
                                <p class="text_color home_info_title"><?php echo $row_home_info['home_title']; ?></p><br />
                                <p class="text_color"><?php echo $row_home_info['home_desc']; ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "footer.php"; ?>

</body>
</html>
