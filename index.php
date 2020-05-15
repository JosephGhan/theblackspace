<?php

    include "./model/database.php";
    include "./view/header.php";
    
    $action = filter_input(INPUT_POST, 'action');

    switch ($action)
    {
        default:
            include "./view/home.php";
            break;
    }

    include "./view/footer.php";
