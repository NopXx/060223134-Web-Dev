<?php

$month = time() - 3600;
unset($_COOKIE["LastVisit"]);
setcookie('LastVisit', '', $month);
echo "clear cookie success<br>";

?>
<pre><?php print_r($_COOKIE) ?></pre>

<meta http-equiv="refresh" content="2; url=work11.php">
