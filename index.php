<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3, label, input {
            padding: 0 15px;
            margin: 0 15px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 500px;
            height: 110px;
            background-color: lightgoldenrodyellow;
            border: 1px solid red;
            border-radius: 10px;
        }
        ul {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: auto;
            border: 1px solid red;
            padding: 8;
            margin: 0;
        }
        li {
            text-align: right;
            padding: 5px;
            margin: 0px 10px;
        }
    </style>

</head>
<body>


<?php
        $nroEntero = null;
        $listaSalida = !isset($listaSalida) ? array(): $listaSalida;
        if (isset($_POST['nroEntero'])) $nroEntero = $_POST['nroEntero'];
        $mipag=$_SERVER["PHP_SELF"];
        if ($nroEntero!=NULL && is_numeric($nroEntero) && $nroEntero > 0) {
            do {
                $nroEntero = $nroEntero % 2 === 0 ? $nroEntero / 2 : $nroEntero * 3 + 1;
                array_push($listaSalida, $nroEntero);
            } while ($nroEntero <> 1);
        }
        echo "
        <form action='" . $mipag . "' method='POST'>
            <h3>Ejercicio Desarrollador Web Data & Business SAS</h3>
            <br><label>Indique un número entero:<input type='text' name='nroEntero'></label>
            <br><input type='submit' value='Procesar'><br>
            <h3>Resultados de cada paso</h3>
            <ul>";
            foreach ($listaSalida as $value) {
                echo '<li>' . $value . '</li>';
            } 
            echo "</ul>
        </form>
        ";
?> 
</body>
</html>