<?php

declare(strict_types=1);

$page_title = 'cookies-read';

 require 'src/html-head.php';
?>

<body>
    <?php
     require 'src/html-nav.php';
    ?>


    <?php

    if (isset($_COOKIE['username'])) {
        echo '<h2>' . $_COOKIE['username'] . '</h2>';
    }

    if (isset($_COOKIE['dontstorepasswordincookies'])) {
        echo '<h3>' . $_COOKIE['dontstorepasswordincookies'] . '🥺😭😖</h3>';
    }

    ?>
    
    <?php  require 'src/globals-dump.php' ?>
</body>

</html>