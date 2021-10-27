<?php

    if(isset($_GET['page']) && $_GET['page'] != '' ){    
        $page = $_GET['page']; // page being requested
        $title = $_GET['title'];
    } else{
        $page = 'pages/home.php'; // default page
        $title = 'Home';
    }

    include('inc/head.php');
    include('inc/menu.php');



    echo '<div id="main-content">';
    // Dynamic page based on query string
    include('pages/'.$page.'.php');
        echo '</div>';

    include('inc/footer.php');

    echo '$_GET => '. $_GET['page'];
    echo '<br>';
    echo '$_POST => '. $_POST['page'];

    echo '<hr>';

    // echo $_COOKIE["name"];

////////////////////////////// COOKIES  //////////////////////////////
    // DELETE COOKIE
    // setcookie("name", "Vasya", time()-3600);

    // setcookie("name", "User34853458", time()+1200);

    $user = [
        'name' => 'User34234',
        'login' => 'root',
        'password' => '1234',
    ];

    $user1 = [
        'name' => 'User34534',
        'login' => 'toor',
        'password' => '5678',
    ];

    // echo '$_COOKIE["name"]=>' . $_COOKIE["name"];
    echo '<br>';

    // echo serialize($user);  // cookie to str

    // Для сохранения целосности
    $str = base64_encode( serialize($user) );
    setcookie("user", $str);

    echo 'after base64_encode and serialize and set cookie $str = ' . $str;
    echo '<hr>';

    echo 'after base64_encode and serialize and set cookie $user = ' . $user;
    print_r($user);
    echo '<hr>';


    echo '$_COOKIE["user"]  ' . $_COOKIE["user"];

    echo '<br>';

    echo '$str  ' . $str;


    
    $test = '42db7b8a-7c5d-4fb6-a5af-918fe23b2680';
    setcookie("test", $test);

    // $testResult = base64_decode($_COOKIE["test"]);
    $testResult = unserialize($_COOKIE["test"]);

    $user = unserialize( base64_decode($_COOKIE["user"]));
    // setcookie("user1", $user1);

    print_r($testResult);
    echo $testResult;

    // print_r($user);
    // echo $user1

    echo $_COOKIE["test"];


?>
