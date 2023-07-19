<?php
print "Remote address: " . $_SERVER['REMOTE_ADDR'] . " X Forwarded for: " . $_SERVER['HTTP_X_FORWARDED_FOR'] . " CF-Connecting-IP: " . $_SERVER['HTTP_CF_CONNECTING_IP'] . "\n";
?>
