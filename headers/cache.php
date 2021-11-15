
<h2>Запретить кэшировать</h2>
<h2>NO CACHE</h2>
<h3><?echo date("H : m : s");?></h3>

<?php
    // NO CACHE, берет с сервера
    // header("Cache-Control: no-store");

    // Разоешиьб кэшировать на час
    header("Expires: " . date("r", time() + 3600));