<?php
unset($_COOKIE['uid']);
// empty value and expiration one hour before
$res = setcookie(uid, '', time() - 3600);
header( 'Location: home.php' );
?>