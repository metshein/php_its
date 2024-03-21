<?php
$hash = "$2y$10$iqhV5B2IcjqfCxfAcnzpq.pMpGgUfCeuG6YtSJINPaqG/MBmvBCQK"
$password = "salasona";
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
echo $hashedPassword;

if ($salasona==$hash) {
    echo "pääsed ligi";
}

?>