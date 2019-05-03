<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible">
    <title>Colaboradores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<?php
    include "header.php";
?>


<hr>

<body>

    <hr>
    <h1>Funcionários</h1>
    <hr>

    <table class="table table-bordered">

                <thead class="thead-dark">

                  <th>Colaborador(a)</th>
                  <th>Setor</th>
                  <th>Tipo</th>
                  <th>Email</th>

                  <th colspan=2>Gerenciamento</th>

                </thead>

                <tbody>

                    <?php

                        include_once('banco/read.php')

                    ?>

                </tbody>

            </table>
    
</body>

<hr>


<?php
    include "footer.php";
?>


</html>
