<?php //defined('SECURITY') or die('No direct script access.');

echo '<a style="color: red;">'.$error.'</a>';
?>

<form method="POST">
    <h1>Форма регистрации</h1>
    <p>Заполните поля для регистрации на сайте</p>
    <p>Фамилия<br /><input type="text" name="first_name" value="<?php echo $first_name ?>" ></p><?php echo ($error_first_name != 1) ? $error_first_name : '';  ?>
    <p>Имя<br /><input type="text" name="name" value="<?php echo $name ?>" ></p><?php echo ($error_name != 1) ? $error_name : '';  ?>
    <p>Отчество<br /><input type="text" name="patronumic" value="<?php echo $patronumic ?>" ></p><?php echo ($error_patronumic != 1) ? $error_patronumic : '';  ?>
    <p>Телефон<br /><input type="text" name="tel" value="<?php echo $tel ?>" ></p><?php echo ($error_tel != 1) ? $error_tel : '';  ?>
    <p>E-mail<br /><input type="text" name="email" value="<?php echo $email ?>"></p><?php echo ($error_email != 1) ? $error_email : '';  ?>
    <p>Пароль<br /><input type="password" name="password" ></p><?php echo ($error_password != 1) ? $error_password : '';  ?>
    <p>Повторите пароль<br /><input type="password" name="akcept_password"></p><?php echo ($error_akcept_password != 1) ? $error_akcept_password : '';  ?>
    <p>Лицензионное соглашение<br /><input type="checkbox" name="lic_ok"></p>
    <input type="submit" value="Регистрацыя" name="btnsubmit" >
</form>

