<?php
$expireTime = time() + (2 * 24 * 60 * 60); // 2 days
setcookie("myCookie", "someValue", $expireTime);

echo "Cookie set! It will expire in 2 days.";
?>
