<?php

echo "
<div class='showProfil'>
    <h2>{$user['user_name']}</h2>
    <p>Email: {$user['user_email']}</p>
    <p>Hobby: {$user['user_hobby']}</p>
    <p>Birthday: {$user['user_birth']}</p>
    <p>Gender: {$user['user_gender']}</p>
    <p>Account create at: {$user['user_creation_date']}</p>
</div>
";

?>


