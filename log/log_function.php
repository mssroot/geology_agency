<?php
/**
 * Created by PhpStorm.
 * User: manas samatovich
 * Email: manassamatovich@gmail.com
 * Date: 24.09.2016
 * Time: 15:23
 */

    require_once '../config.php';

    session_start();

    if(isset($_GET['log'])){
        $login = $_GET['log'];

        $username = mysql_real_escape_string($_POST['username']);
        $password = mysql_real_escape_string($_POST['password']);

        $check = "select * from user_database where user_name = '$username'";
        $quesry = mysql_query($check);
        $row = mysql_fetch_array($quesry);
        echo $row['user_name'];
        echo $row['user_pass'];

        if($password == $row['user_pass']){
            if(isset($_GET['log'])){
                $_SESSION['sess_user'] = $row['user_name'];
                $sess_user = $_SESSION['sess_user'];
                header("Location: ../profile/?user=".$sess_user."");
            }
            if(isset($_GET['mobile'])){
                $_SESSION['user_mobile'] = $row['user_name'];
                header("Location: ../mobile/?log=mobile&home");
            }
        }
        else{
            header('Location: ../log/?log=in&err');
        }
    }

    if(isset($_GET['sign'])){
        $signup = $_GET['sign'];

        $username = mysql_real_escape_string($_POST['username']);
        $password = mysql_real_escape_string($_POST['password']);
        $password_again = mysql_real_escape_string($_POST['password_again']);

        if($password === $password_again){
            $check = mysql_query("select user_name from user_database where user_name = '$username'");
            $row = mysql_fetch_array($check);
            $row_username = $row['user_name'];

            if($username == $row_username){
                header('Location: ../log/?sign&err&permission_sign');
            }
            else{
                $insert = "insert into user_database (user_name, user_pass)
                                        values ('$username', '$password')";
                if($result = mysql_query($insert)){
                    header('Location: ../log/?log=in&succ&permission_sign');
                }
            }
        }
        else{
            header('Location: ../log/?sign=up&pass&permission_sign');
        }
    }

