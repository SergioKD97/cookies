<?php
ini_set("session.use_cookies", 1);
ini_set("session.use_only_cookies", 0);
ini_set("session.use_trans_sid", 1);
session_name('cetys');
session_start();
        echo session_id().'<br>';
        if(!isset($_GET['miSesion'])){
                header('location:index.php?miSesion='.session_id());
            }
        else{
                
                if(session_id()==$_GET['miSesion']){
                echo "Las cookies están activadas";
                 ?> <a href="pagina1.php">Siguiente Act</a><?php 
                }
                ELSE {echo "Las cookies están desactivadas";
                ?><a href="pagina1.php">Siguiente Des</a><?php 
                }
               
            }
        
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
<!--        <form name="formulario" action="pagina1.php" method="POST">
            <input type="submit" value="Están activadas las Cookies???" 
                   name="enviar">
        </form>-->
    </body>
</html>
