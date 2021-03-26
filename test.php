<?php
if (!isset($_SERVER['username'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
} else {
    echo "<p>Hello {$_SERVER['username']}.</p>";
    echo "<p>You entered {$_SERVER['password']} as your password.</p>";
}
?>