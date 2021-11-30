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

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <link rel="icon" href="../img/logo2.png">

    <link rel="stylesheet" type="text/css" href="../css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <script type="text/javascript" src="../js/modernizr.custom.53451.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        body{
            background: transparent url(../img/news3.png);
        }

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

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="polaroid text_color">
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
                                    <a href="?view=<?php echo $news_id; ?>">
                                        <img src="../uploads/<?php echo $row_news['news_file']; ?>" alt="post image" style="width:100%">
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
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-8">
                    <div>
                        <?php
                        /*
                        $select_news = "select * from news where news_size > 0 order by news_id desc limit 10";
                        $query_news = mysql_query($select_news);
                        while($row_news = mysql_fetch_assoc($query_news)){
                            ?>
                            <div class="polaroid img">

                                <div class="container">
                                    <p class="text_color post_date"><?php echo $row_news['insert_time']; ?></p>
                                </div>

                                <a href="?view=post">
                                    <img src="../uploads/<?php echo $row_news['news_file']; ?>" alt="post list" style="width:100%">
                                </a>

                                <div class="container">
                                    <p class="text_color post_title"><?php echo $row_news['news_title']; ?></p>
                                </div>

                            </div>
                            <?php
                        }
                        */
                        if(isset($_GET['view'])){
                            $news_id = $_GET['view'];
                            ?>
                            <div class="polaroid text_color">
                                <div class="container">
                                    <?php
                                    $select_news = "select * from news where news_id = '$news_id'";
                                    $query_news = mysql_query($select_news);
                                    $row_news = mysql_fetch_array($query_news);
                                    ?>
                                    <img src="../uploads/<?php echo $row_news['news_file']; ?>" alt="post list" style="width:100%">
                                    <p class="text_color post_date"><?php echo $row_news['insert_time']; ?></p>
                                    <p class="text_color post_title"><?php echo $row_news['news_title']; ?></p><hr />
                                    <p class="text_color post_title"><?php echo $row_news['news_desc']; ?></p>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="polaroid">
                        <div class="container">
                            <div class="text_color">
                                <center>
                                    <script language="javascript" type="text/javascript">
                                        var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
                                        var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

                                        //  DECLARE AND INITIALIZE VARIABLES
                                        var Calendar = new Date();

                                        var year = Calendar.getFullYear();     // Returns year
                                        var month = Calendar.getMonth();    // Returns month (0-11)
                                        var today = Calendar.getDate();    // Returns day (1-31)
                                        var weekday = Calendar.getDay();    // Returns day (1-31)

                                        var DAYS_OF_WEEK = 7;    // "constant" for number of days in a week
                                        var DAYS_OF_MONTH = 31;    // "constant" for number of days in a month
                                        var cal;    // Used for printing

                                        Calendar.setDate(1);    // Start the calendar day at '1'
                                        Calendar.setMonth(month);    // Start the calendar month at now


                                        /* VARIABLES FOR FORMATTING
                                         NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
                                         tags to customize your caledanr's look. */

                                        var TR_start = '<TR>';
                                        var TR_end = '</TR>';
                                        var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=20><B><CENTER>';
                                        var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
                                        var TD_start = '<TD WIDTH="30"><CENTER>';
                                        var TD_end = '</CENTER></TD>';

                                        /* BEGIN CODE FOR CALENDAR
                                         NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
                                         tags to customize your calendar's look.*/

                                        cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=BBBBBB><TR><TD>';
                                        cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
                                        cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#EFEFEF"><CENTER><B>';
                                        cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
                                        cal += TR_start;

                                        //   DO NOT EDIT BELOW THIS POINT  //

                                        // LOOPS FOR EACH DAY OF WEEK
                                        for(index=0; index < DAYS_OF_WEEK; index++)
                                        {

                                            // BOLD TODAY'S DAY OF WEEK
                                            if(weekday == index)
                                                cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

                                            // PRINTS DAY
                                            else
                                                cal += TD_start + day_of_week[index] + TD_end;
                                        }

                                        cal += TD_end + TR_end;
                                        cal += TR_start;

                                        // FILL IN BLANK GAPS UNTIL TODAY'S DAY
                                        for(index=0; index < Calendar.getDay(); index++)
                                            cal += TD_start + '  ' + TD_end;

                                        // LOOPS FOR EACH DAY IN CALENDAR
                                        for(index=0; index < DAYS_OF_MONTH; index++)
                                        {
                                            if( Calendar.getDate() > index )
                                            {
                                                // RETURNS THE NEXT DAY TO PRINT
                                                week_day =Calendar.getDay();

                                                // START NEW ROW FOR FIRST DAY OF WEEK
                                                if(week_day == 0)
                                                    cal += TR_start;

                                                if(week_day != DAYS_OF_WEEK)
                                                {

                                                    // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
                                                    var day  = Calendar.getDate();

                                                    // HIGHLIGHT TODAY'S DATE
                                                    if( today==Calendar.getDate() )
                                                        cal += highlight_start + day + highlight_end + TD_end;

                                                    // PRINTS DAY
                                                    else
                                                        cal += TD_start + day + TD_end;
                                                }

                                                // END ROW FOR LAST DAY OF WEEK
                                                if(week_day == DAYS_OF_WEEK)
                                                    cal += TR_end;
                                            }

                                            // INCREMENTS UNTIL END OF THE MONTH
                                            Calendar.setDate(Calendar.getDate()+1);

                                        }// end for loop

                                        cal += '</TD></TR></TABLE></TABLE>';

                                        //  PRINT CALENDAR
                                        document.write(cal);

                                        //  End -->
                                    </script>
                                </center>
                                <br/><div style="clear:both"></div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="polaroid text_color">
                        <div>
                            <!-- weather widget start --><div id="m-booked-weather-bl250-67880"> <a href="//nochi.com/weather/bishkek-10287" class="booked-wzs-250-175" style="background-color:#137AE9;"> <div class="booked-wzs-250-175-data wrz-03"> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>9</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>21&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>8&deg;</div> </div> </div> <div class="booked-wzs-250-175-city">Бишкек</div> <div class="booked-wzs-250-175-date">Суббота, 24 Сентябрь</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">Прогноз на неделю</span> </div> </div> </div> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Пт</td> <td>Вс</td> <td>Пн</td> <td>Вт</td> <td>Ср</td> <td>Чт</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>9&deg;</td> <td class="week-day-val"><span class="plus">+</span>22&deg;</td> <td class="week-day-val"><span class="plus">+</span>22&deg;</td> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> <td class="week-day-val"><span class="plus">+</span>22&deg;</td> <td class="week-day-val"><span class="plus">+</span>20&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>9&deg;</td> <td class="week-day-val"><span class="plus">+</span>7&deg;</td> <td class="week-day-val"><span class="plus">+</span>6&deg;</td> <td class="week-day-val"><span class="plus">+</span>6&deg;</td> <td class="week-day-val"><span class="plus">+</span>5&deg;</td> <td class="week-day-val"><span class="plus">+</span>5&deg;</td> </tr> </table> </a> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'//s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-67880'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="http://widgets.booked.net/weather/info?action=get_weather_info&ver=4&cityID=10287&type=3&scode=2&ltid=3539&domid=589&cmetric=1&wlangID=20&color=137AE9&wwidth=250&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "../footer.php"; ?>

</body>
</html>
