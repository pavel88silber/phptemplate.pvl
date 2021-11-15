<?php
    $visitCounter = 0;
    if(isset($_COOKIE["visitCounter"])) {
        $visitCounter = $_COOKIE["visitCounter"];
    }
    $visitCounter++;


    $lastVisit = "";
    if(isset($_COOKIE["lastVisit"])) {
        $lastVisit = date("d-m-Y H:i:s", $_COOKIE["lastVisit"]);
    }

    if(date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')) {
        setcookie("visitCounter", $visitCounter, 0x7FFFFFFF);
        setcookie("lastVisit", time(), 0x7FFFFFFF);    
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = strip_tags($_POST["name"]);
        $age = $_POST["age"] * 1;

        setcookie("userName", $name);
        setcookie("userAge", $age);
    
        // перезапрос формы методом GET
        header("Location: " . $_SERVER["PHP_SELF"
        ]);
        exit;

        } else {
            // Чтение куки
            $name = strip_tags($_COOKIE["userName"]);
            $age = $_COOKIE["userAge"] * 1;
        }



    

