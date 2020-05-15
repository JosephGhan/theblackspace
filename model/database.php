<?php

    $username = 'class';
    $password = 'cis239';
    $host = 'localhost';
    $db_name = 'black_space';

    try
    {
        $db = new mysqli($host, $username, $password, $db_name);
        //print("connected");
    }
    catch (Exception $ex)
    {
        error_log($ex->getMessage());
        exit('Error connecting to the database');
    }

    function isLogin($userName, $passWord)
    {
        $users = getLogins();
        //print_r($users);
        foreach($users as $user)
        {
            if($userName == $user[0] && $passWord == $user[1])
            {
                return true;
            }
        }
    }

    function getLogins()
    {
        global $db;
        $sql = 'SELECT userName, userPWord FROM users';
        $qry = mysqli_query($db, $sql);
        $users = mysqli_fetch_all($qry);
        return $users;
    }

    function addImage($url)
    {
        global $db;
        $sql = "INSERT INTO `pictures` (`id`, `url`) VALUES (NULL, '$url')";
        $qry = mysqli_query($db, $sql);
    }

    function getImages()
    {
        global $db;
        $sql = "SELECT `url` FROM `pictures`";
        $qry = mysqli_query($db, $sql);
        $images = mysqli_fetch_all($qry);
        return $images;
    }

    function getPost()
    {
        global $db;
        $sql = "SELECT `link` FROM `posts`";
        $qry = mysqli_query($db, $sql);
        $posts = mysqli_fetch_all($qry);
        return $posts;
    }