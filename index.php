<?php
// Display PHP information
if ($_GET['info'] ?? false) {
    phpinfo();
    exit;
}

// Simple Hello World message
echo "<h1>Welcome to NGINX with PHP!</h1>";
echo "<p>This is a simple PHP application served by NGINX.</p>";
echo "<p>Server Time: " . date('Y-m-d H:i:s') . "</p>";
echo "<p><a href='?info=true'>Click here for PHP info</a></p>";
?>
