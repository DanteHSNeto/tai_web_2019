<?php
    include_once '../controle/controleAluno.php';
    if(!empty($_POST['form_submit']) ) {
        controleAluno::confirmar();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="img/favicon.ico">
        <title>SiGer</title>
        <!-- Bootstrap URL - CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootst">
        <link rel="../../recursos/css/theme.css" rel="stylesheet">
    </head>
    <body role="document">
        <form class="form" method="post" action="viewAluno"></form>
    </body>
</html>