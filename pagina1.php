<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        ini_set("session.use_cookies", 1);
        ini_set("session.use_only_cookies", 0);
        ini_set("session.use_trans_sid", 1);
        session_name('cetys');
        session_start();
          echo session_id().'<br>';
        ?>
        <form name="formulario" action="index.php" method="POST">
            <input type="submit" value="Inicio" name="inicio">
        </form>
    </body>
</html>
