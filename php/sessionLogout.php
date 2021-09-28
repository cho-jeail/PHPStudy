<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>logout</title>
    </head>
    <body>
        <?php
            session_start();
            session_destroy();
            header('location:../html/sessionLogin.html');
        ?>
    </body>
</html>
