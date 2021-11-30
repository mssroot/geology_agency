<!DOCTYPE html>
    <?php
        require_once "../config.php";
        session_start();
        if(!isset($_SESSION['sess_user'])){
            header("Location: ../log/?log=in");
        }
        if(isset($_GET['exit'])){
            session_destroy();
            header("Location: ../log/?log=in");
        }
    ?>
<html lang="en">
<head>
    <title>admin page to control website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" href="../img/logo2.png">
</head>
<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">admin page</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="../?">go to home</a></li>
                    <li><a href="?profile">profile</a></li>
                    <li><a href="?pages&nav&info">pages</a></li>
                    <li><a href="?news=edit">[news]</a></li>
                    <li><a href="?form_beef">form beef</a></li>
                    <li><a href="?contact">contact</a></li>
                    <li><a href="?client">[client]</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="?exit"><span class="glyphicon glyphicon-log-out"></span> exit</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
        if(isset($_GET['client'])){
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="polaroid">
                            <table class="table">
                                <thead>
                                <tr><th>users</th></tr>
                                <?php
                                $select_log = "select * from user_database order by user_id desc";
                                $query_log = mysql_query($select_log);
                                while($row_log = mysql_fetch_assoc($query_log)){
                                    ?>
                                <tbody>
                                    <tr>
                                    <th><?php echo $row_log['user_id'] . "-->" . $row_log['user_name'];?></th>
                                    </tr>
                                </tbody>
                                    <?php
                                }
                                ?>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="polaroid">
                            <form method="post" action="permission_func.php?info=insert">
                                <div class="form-group">
                                    <label>some information to client profile</label>
                                    <input name="permission" class="form-control" type="text" placeholder="number..."><br />
                                    <textarea name="info" class="form-control" rows="10" placeholder="info..."></textarea>
                                </div>
                                <button class="btn btn-default" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="polaroid">
                            <form method="post" action="answers_func.php?answers=insert">
                                <div class="form-group">
                                    <label>lab answers</label>
                                    <input name="permission" class="form-control" type="text" placeholder="number..."><br />
                                    <input type="text" class="form-control" name="title" placeholder="title"><br />
                                    <textarea class="form-control" name="desc" rows="10" placeholder="desc"></textarea>
                                </div>
                                <button class="btn btn-default" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        if(isset($_GET['contact'])){
            ?>
            <div class="polaroid">
                <div class="container">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>name</th>
                            <th>email</th>
                            <th>message</th>
                        </tr>
                        </thead>
                    <?php
                    $select = "select * from contact order by contact_id desc";
                    $query = mysql_query($select);
                    while($row = mysql_fetch_assoc($query)){
                        if($row['contact_id'] % 2 == 0){
                            ?>
                            <tr class="success">
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['message'];?></td>
                            </tr>
                            <?php
                        }
                        else {
                            ?>
                            <tr class="danger">
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['message']; ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    </table>

                </div>
            </div>
            <?php
        }
        if(isset($_GET['form_beef'])){
            ?>
            <div class="polaroid">
                <div class="container">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>name</th>
                            <th>email</th>
                            <th>message</th>
                        </tr>
                        </thead>
                        <?php
                        $select = "select * from form_beef order by form_beef_id desc";
                        $query = mysql_query($select);
                        while($row = mysql_fetch_assoc($query)){
                            if($row['form_beef_id'] % 2 == 0){
                                ?>
                                <tr class="success">
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['message'];?></td>
                                </tr>
                                <?php
                            }
                            else {
                                ?>
                                <tr class="danger">
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['message']; ?></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
            <?php
        }
        if(isset($_GET['profile'])){
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="polaroid">
                        <?php
                        $select_img = "select * from profile where size > 0 order by profile_id desc limit 1";
                        $query_img = mysql_query($select_img);
                        $row_img = mysql_fetch_array($query_img);
                        ?>
                        <img src="../img/<?php echo $row_img['file']; ?>" alt="profile" style="width:100%"><a href="?profile&edit=img">[edit]</a>
                        <?php
                        if(isset($_GET['edit'])){
                            $edit_type = $_GET['edit'];
                            if($edit_type == 'img'){
                                ?>
                                <form role="form" method="post" action="profile_func.php?img" enctype="multipart/form-data">
                                    <input name="file" type="file"><input type="submit" value="ok">
                                </form>
                                <?php
                            }
                        }
                        ?>
                        <div class="container">
                            <?php
                            $select = "select * from profile where name_active > 0 order by profile_id desc limit 1";
                            $query = mysql_query($select);
                            $row = mysql_fetch_array($query);
                            ?>
                        </div>
                    </div>

                    <div class="polaroid">
                        <div class="container">
                            name:<?php echo $row['name']; ?><a href="?profile&edit=name">[edit]</a><br />
                            <?php
                            if(isset($_GET['edit'])){
                                $edit_type = $_GET['edit'];
                                if($edit_type == 'name'){
                                    ?>
                                        <form role="form" method="post" action="profile_func.php?name">
                                            <input name="name" type="text"><input type="submit" value="ok">
                                        </form>
                                    <?php
                                }
                            }
                            ?>
                            <?php
                            $select_sur = "select * from profile where surname_active > 0 order by profile_id desc limit 1";
                            $query_sur = mysql_query($select_sur);
                            $row_sur = mysql_fetch_array($query_sur);
                            ?>
                            surname:<?php echo $row_sur['surname']; ?><a href="?profile&edit=surname">[edit]</a><br />
                            <?php
                            if(isset($_GET['edit'])){
                                $edit_type = $_GET['edit'];
                                if($edit_type == 'surname'){
                                    ?>
                                    <form role="form" method="post" action="profile_func.php?surname">
                                        <input name="surname" type="text"><input type="submit" value="ok">
                                    </form>
                                    <?php
                                }
                            }
                            ?>
                            <?php
                            $select_em = "select * from profile where email_active > 0 order by profile_id desc limit 1";
                            $query_em = mysql_query($select_em);
                            $row_em = mysql_fetch_array($query_em);
                            ?>
                            email:<?php echo $row_em['email']; ?><a href="?profile&edit=email">[edit]</a><br />
                            <?php
                            if(isset($_GET['edit'])){
                                $edit_type = $_GET['edit'];
                                if($edit_type == 'email'){
                                    ?>
                                    <form role="form" method="post" action="profile_func.php?email">
                                        <input name="email" type="text"><input type="submit" value="ok">
                                    </form>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="polaroid">
                    <?php
                    $select_at = "select * from profile where profile_active > 0 order by profile_id desc limit 1";
                    $query_at = mysql_query($select_at);
                    $row_at = mysql_fetch_array($query_at);

                    $edit = "<a href='?profile&info'>[edit]</a>";
                    echo $row_at['title'] . '<br />';
                    echo $row_at['info_desc'] . '<br />';
                    echo $edit . '<br />';


                    if(isset($_GET['info'])){
                        ?>
                        <form method="post" action="profile_func.php?info">
                            <input name="title" type="text" size="100%"><br />
                            <textarea name="desc" rows="8" cols="100%"></textarea><br />
                            <input type="submit">
                        </form>
                        <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        if(isset($_GET['pages'])){
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="polaroid">
                            <nav>
                                <ul>
                                    <li><a href="?pages&nav&home">[home]</a></li>
                                    <li><a href="?pages&nav&timeWork">[time work]</a></li>
                                    <li><a href="?pages&nav&needCo">[need co]</a></li>
                                    <li><a href="?pages&nav&price">[price]</a></li>
                                    <li><a href="?pages&nav&catalogInfo">[catalog info]</a></li>
                                    <li><a href="?pages&nav&aboutUs">[about us]</a></li>
                                    <li><a href="?pages&nav&historyOur">[history our]</a></li>
                                    <li><a href="?pages&nav&news">[news]</a></li>
                                    <li><a href="?pages&nav&vacancy">[vacancy]</a></li>
                                    <li><a href="?pages&nav&legalAddr">[legal addr]</a></li>
                                    <li><a href="?pages&nav&mailAddr">[mail addr]</a></li>
                                    <li><a href="?pages&nav&planTransit">[plan trasit]</a></li>
                                    <li><a href="?pages&nav&contactInfo">[contact info]</a></li>
                                    <li><a href="?pages&nav&bankProps">[bank props]</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <?php
                        if(isset($_GET['info'])){
                            ?>
                            <div class="polaroid">
                                <p>admins tablo</p>
                                <form method="post" action="pages_info_func.php?table=insert">
                                    <div class="form-group">
                                        <input name="title" class="form-control" type="text" placeholder="title..."><br />
                                        <textarea name="page_desc" class="form-control" placeholder="description..."></textarea>
                                    </div>
                                    <button class="btn btn-default form-control">Submit</button>
                                </form>
                                <?php
                                $select_info_page = "select * from pages_info order by pages_info_id desc limit 9";
                                $query_info_page = mysql_query($select_info_page);
                                while($row_info_page = mysql_fetch_assoc($query_info_page)){
                                    ?>
                                    <p><i>#<?php echo $row_info_page['pages_info_id']; ?>=>><?php echo $row_info_page['page_info_time']; ?></i></p>
                                    <h3><strong><?php echo $row_info_page['title']; ?></strong></h3>
                                    <p><?php echo $row_info_page['page_desc']; ?></p><hr />
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
                        }
                        if(isset($_GET['home'])){
                            ?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="polaroid">
                                        <p>slider settings</p>
                                        <div>
                                            <form role="form" method="post" action="home_func.php?slider=insert" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <input name="file" class="form-control" type="file" value="slider" title="slider">
                                                </div>
                                                <button class="form-control" type="submit" class="btn btn-default">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="polaroid">
                                        <p>4 images settings</p>
                                        <div>
                                            <form role="form" method="post" action="home_func.php?4_images=insert" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <input name="file" class="form-control" type="file" value="image" title="4_images">
                                                </div>
                                                <button class="form-control" type="submit" class="btn btn-default">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="polaroid">
                                        <p>home info large text </p>
                                        <div>
                                            <form role="form" method="post" action="home_func.php?home_info=insert">
                                                <div class="form-group">
                                                    <input name="home_title" class="form-control" type="text" /><br />
                                                    <textarea name="home_desc" class="form-control"></textarea>
                                                </div>
                                                <button class="form-control" type="submit" class="btn btn-default">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        if(isset($_GET['timeWork'])){
                            ?>
                            <div class="polaroid">
                                <p>time work!</p>
                                <div>
                                    <form role="form" method="post" action="pages_func.php?time_work=insert">
                                        <div class="form-group">
                                            <input name="title" type="text" class="form-control"><br />
                                            <textarea name="desc" rows="10" class="form-control" ></textarea>
                                        </div>
                                        <button type="submit" class="form-control">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        if(isset($_GET['needCo'])){
                            ?>
                            <div class="polaroid">
                                <p>need company</p>
                                <div>
                                    <form role="form" method="post" action="pages_func.php?need_co=insert">
                                        <div class="form-group">
                                            <input name="title" type="text" class="form-control"><br />
                                            <textarea name="desc" rows="10" class="form-control" ></textarea>
                                        </div>
                                        <button type="submit" class="form-control">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        if(isset($_GET['price'])){
                            ?>
                            <div class="polaroid">
                                <p>price</p>
                                <div>
                                    <form role="form" method="post" action="pages_func.php?price=insert">
                                        <div class="form-group">
                                            <input name="title" type="text" class="form-control"><br />
                                            <textarea name="desc" rows="10" class="form-control" ></textarea>
                                        </div>
                                        <button type="submit" class="form-control">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        if(isset($_GET['catalogInfo'])){
                            ?>
                            <div class="polaroid">
                                <p>catalog info</p>
                                <div>
                                    <form role="form" method="post" action="pages_func.php?catalog_info=insert">
                                        <div class="form-group">
                                            <input name="title" type="text" class="form-control"><br />
                                            <textarea name="desc" rows="10" class="form-control" ></textarea>
                                        </div>
                                        <button type="submit" class="form-control">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        if(isset($_GET['aboutUs'])){
                            ?>
                            <div class="polaroid">
                                <p>about us</p>
                                <div>
                                    <form role="form" method="post" action="pages_func.php?about_us=insert">
                                        <div class="form-group">
                                            <input name="title" type="text" class="form-control"><br />
                                            <textarea name="desc" rows="10" class="form-control" ></textarea>
                                        </div>
                                        <button type="submit" class="form-control">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        if(isset($_GET['historyOur'])){
                            ?>
                            <div class="polaroid">
                                <p>history our</p>
                                <div>
                                    <form role="form" method="post" action="pages_func.php?history_our=insert">
                                        <div class="form-group">
                                            <input name="title" type="text" class="form-control"><br />
                                            <textarea name="desc" rows="10" class="form-control" ></textarea>
                                        </div>
                                        <button type="submit" class="form-control">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        if(isset($_GET['news'])){
                            ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="polaroid">
                                        <p>news image</p>
                                        <div>
                                            <form role="form" method="post" action="news_func.php?news=insert" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <input name="file" type="file" class="form-control">
                                                </div>
                                                <div class="polaroid">
                                                        <p>news title</p>
                                                        <div>
                                                            <div class="form-group">
                                                                <input name="news_title" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <p>news description</p>
                                                        <div class="form-group">
                                                            <textarea name="news_desc" class="form-control" rows="15"></textarea>
                                                        </div>
                                                </div>
                                                <button type="submit" class="form-control btn btn-default">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                </div>
                            </div>
                            <?php
                        }
                        if(isset($_GET['vacancy'])){
                            ?>
                            <div class="polaroid">
                                <p>vacancy</p>
                                <div>
                                    <form role="form" method="post" action="pages_func.php?vacancy=insert">
                                        <div class="form-group">
                                            <input name="title" type="text" class="form-control"><br />
                                            <textarea name="desc" rows="10" class="form-control" ></textarea>
                                        </div>
                                        <button type="submit" class="form-control">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        if(isset($_GET['legalAddr'])){
                            ?>
                            <div class="polaroid">
                                <p>legal address</p>
                                <div>
                                    <form role="form" method="post" action="pages_func.php?legal_address=insert">
                                        <div class="form-group">
                                            <input name="title" type="text" class="form-control"><br />
                                            <textarea name="desc" rows="10" class="form-control" ></textarea>
                                        </div>
                                        <button type="submit" class="form-control">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        if(isset($_GET['mailAddr'])){
                            ?>
                            <div class="polaroid">
                                <p>mail address</p>
                                <div>
                                    <form role="form" method="post" action="pages_func.php?mail_address=insert">
                                        <div class="form-group">
                                            <input name="title" type="text" class="form-control"><br />
                                            <textarea name="desc" rows="10" class="form-control" ></textarea>
                                        </div>
                                        <button type="submit" class="form-control">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        if(isset($_GET['planTransit'])){
                            ?>
                            <div class="polaroid">
                                <p>plan transit</p>
                                <div>
                                    <form role="form" method="post" action="pages_func.php?plan_transit=insert">
                                        <div class="form-group">
                                            <input name="title" type="text" class="form-control"><br />
                                            <textarea name="desc" rows="10" class="form-control" ></textarea>
                                        </div>
                                        <button type="submit" class="form-control">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        if(isset($_GET['contactInfo'])){
                            ?>
                            <div class="polaroid">
                                <p>contact information </p>
                                <div>
                                    <form role="form" method="post" action="pages_func.php?contact_info=insert">
                                        <div class="form-group">
                                            <input name="title" type="text" class="form-control"><br />
                                            <textarea name="desc" rows="10" class="form-control" ></textarea>
                                        </div>
                                        <button type="submit" class="form-control">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        if(isset($_GET['bankProps'])){
                            ?>
                            <div class="polaroid">
                                <p>bank props </p>
                                <div>
                                    <form role="form" method="post" action="pages_func.php?bank_props=insert">
                                        <div class="form-group">
                                            <input name="title" type="text" class="form-control"><br />
                                            <textarea name="desc" rows="10" class="form-control" ></textarea>
                                        </div>
                                        <button type="submit" class="form-control">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php
        }
        if(isset($_GET['news'])){
            ?>
            <div class="row">
                <div class="col-lg-4"><div class="polaroid">
                        <div class="container-fluid">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>setting</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $select_news = "select * from news order by news_id desc";
                                $query_news = mysql_query($select_news);
                                while($row_news = mysql_fetch_assoc($query_news)){
                                    $news_id = $row_news['news_id'];
                                    $edit = "<a href='?news&edit&news_id=$news_id'>[edit]</a>";
                                    $delete = "<a href='?news&delete&delete_id=$news_id'>[delete]</a>";
                                    ?>
                                    <tr>
                                        <th><?php echo $row_news['news_id']; ?></th>
                                        <th><?php echo $edit . " " . $delete;?></th>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div></div>
                <div class="col-lg-4">
                    <?php
                    if(isset($_GET['edit'])){
                        $news_id = $_GET['news_id'];
                        ?>
                        <div class="polaroid">
                                <form method="post" action="news_func.php?edit_changes&id=<?php echo $news_id;?>" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input name="file" type="file" class="form-control" ><br />
                                        <input name="title" class="form-control" type="text" placeholder="title..."><br />
                                        <textarea name="news_desc" class="form-control" rows="6" placeholder="description..."></textarea>
                                    </div>
                                    <button class="btn btn-default form-control">Submit</button>
                                </form>
                        </div>
                        <?php
                    }
                    if(isset($_GET['delete'])){
                        $delete_id = $_GET['delete_id'];
                        echo $delete_id;
                        $delete = "delete from news where news_id = '$delete_id'";
                        if(mysql_query($delete))
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
                    ?>
                </form>
            </div>
            <?php
        }
    ?>

</body>
</html>

