<?php //defined('SECURITY') or die('No direct script access.');

    echo '<a style="color: red;">'.$value.'</a>';

?>

<form method="POST">
    <h1>Форма входа</h1>
    <p>Имя<br /><input type="text" name="login" ></p>
    <p>Пароль<br /><input type="password" name="password" ></p>
    <input type="submit" value="Вход" name="btnsubmit" >
</form>

