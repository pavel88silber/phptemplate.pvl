<h1>This home page</h1>

<?php
    $title = 'Home';
?>


<img src="img/car1.jpg" alt="Car" width="120" height="100">

<form method="post">
    <p>What is your name</p><input type="text"><br>
    <p>What is your age</p><input type="text">
    <input type='submit' name='sub' value='send_info'>
    <hr>
    <p>Your IP is: <?echo $_SERVER["REMOTE_ADDR"];?></p>
</form>

