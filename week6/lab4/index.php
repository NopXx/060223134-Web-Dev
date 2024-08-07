<?php

    session_start();
    print_r(session_id());
    echo '<br>';
    ob_start();
    $_SESSION['data'] = "Hello Nopparat";
    $_SESSION['arr'] = ['nop', 'nop1', 'nop2']
?>
<pre><?php print_r($_SESSION); ?></pre>
<a href="show_detail.php">Show Detail</a>
    
