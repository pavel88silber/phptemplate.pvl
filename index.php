<?php

    if(isset($_GET['page']) && $_GET['page'] != '' ){    
        $page = $_GET['page']; // page being requested
    } else{
        $page = 'pages/home.php'; // default page
    }

    include('inc/head.php');
    include('inc/menu.php');

    echo '<div id="main-content">';
    // Dynamic page based on query string
    include('pages/'.$page.'.php');
        echo '</div>';

    include('inc/footer.php');

?>