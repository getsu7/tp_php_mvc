
<?php

if (!isset($_SESSION['user'])) {

    echo "
<h1>Login</h1>
<form method='post' style='width: 80%; margin: 10% '>
    <div class ='mb-3'>
        <label for='email'>Email</label>
        <input type='text' class='form-control' id='email' name='email'>

    </div>
    <div class='mb-3'>
        <label for='pswd'>Password</label>
        <input type='password' class='form-control' id='pswd' name='pswd'>
    </div>

    <button type='submit' class='btn btn-success'>Login</button>

</form>";

}
?>

