<?php

    include "./model/database.php";
    include "./view/header.php";

    $action = filter_input(INPUT_POST, 'action');
    //echo($action);
    //echo($userName . " " . $password);
    switch ($action){
        case "login":
            //get username and password for verification
            $userName = filter_input(INPUT_POST, "name");
            $password = filter_input(INPUT_POST, "password");
            if(isLogin($userName, $password))
            {
                $_SESSION['user'] = $userName;
                include "./view/adminView.php";
            }
            else
            {
                //echo("incorrect");
                include "./view/adminLogin.php";
            }
            break;
        case "addImage":
            $url = filter_input(INPUT_POST, 'url');
            $url = $url . "media/?size=l";
            addImage($url);

            $_SESSION['user'] = "";
            include "./view/adminView.php";
            break;
        default:
        include "./view/adminLogin.php";
    }
    
    //include "./view/footer.php";