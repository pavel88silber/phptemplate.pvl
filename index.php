<?php
    // Через 5 секунд вы будете перенаправлены
    // header("Refresh: 5; url=http://www.specialist.ru");

    include('cookie.php');

    if(isset($_GET['page']) && $_GET['page'] != '' ){    
        $page = $_GET['page']; // page being requested
        // $title = 'Home';
        $_POST['title'] = 'Home';
    } else{
        $page = '/home'; // default page
        $_POST['title'] = 'Home';
        $_GET['page'] = 'home';
        // $title = 'Home';
    }
    
    $_POST['title'] = $title;
    include('inc/head.php');
    include('inc/menu.php');

 
    echo '<div id="main-content">';
    ?>

    <blockquote>
        <?php
            if ($visitCounter==1) {
                echo "Thanks for your first time visit";
            } else {
                echo "This your $visitCounter visit";
                echo "<br>";
                echo "Your last visit $lastVisit <br>";
            }
        ?>
    </blockquote>

    <?
    include('headers/go.php');
    ?>
    <form action="<?=$_SERVER["PHP_SELF"]?>">
            Where you want to go?
            <select name="url" size="1">
                <option value=
                "http://www.google.ru">Google
                </option>
                <option value=
                "http://www.yandex.ru">Yandex
                </option>
                <option value=
                "http://www.yahoo.com">Yahoo
                </option>
            </select>
            <input type="submit" value="Go">
    </form>

    <p>Current time is: <?=date("H:i:s")?></p>

<?php


    // Dynamic page based on query string
    include('pages/'.$page.'.php');
    
    $_POST['title'] = $title;
    echo '</div>';

    include('inc/footer.php');


    
    echo '$_GET => '. $_GET['page'];
    echo '<br>';
    echo '$_POST => '. $_POST['title'];

    echo '<hr>';

    $user = [
        'name' => 'User34234',
        'login' => 'root',
        'password' => '1234',
    ];

    // echo serialize($user);  // cookie to str

    // Для сохранения целосности
    $str = base64_encode( serialize($user) );
    setcookie("user", $str);

    echo 'after base64_encode and serialize and set cookie $user = ' . $user;
    print_r($user);
    echo '<hr>';


    echo '$_COOKIE["user"]  ' . $_COOKIE["user"];

    echo '<br>';

    echo '$str  ' . $str;
    
    $user = unserialize( base64_decode($_COOKIE["user"]));

    
    print_r($user);
    
    echo '<hr>';


    echo '<hr>';
    echo 'serialize сериализация приврящяет из массива в строку ';
    echo '<br>';
    echo 'base64_decode упокавать строку чтобы не рассыпаоась ';
?>
