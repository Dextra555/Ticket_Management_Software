<?php
if (function_exists('mysqli_init')) {
    echo 'MySQLi extension is enabled.';
} else {
    echo 'MySQLi extension is not enabled.';
}
?>
