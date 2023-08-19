<?php
$array = array(1, 2, 3, 4);
$NovoArray = array();
$Resultado = "";
$ArrayString = array("Cotemig","Jesus,","Samerk","Eu");
$NovoArrayString = "";

function SomarNumeros($array)
{

    $Soma = 0;
    foreach ($array as $Elemento) {
        $Soma += $Elemento;
    }

    return $Soma;
}

echo SomarNumeros($array);
if (isset($_POST['enviar']))
{
    $Numero = $_POST['numero'];
    $NumeroFatorial = $_POST['numero'];
}

function ImparOuPar($Numero)
{
    if ($Numero % 2 == 0)
        return true;
    else
        return false;
}

if (ImparOuPar($Numero))
    $Resultado = "par";
else
    $Resultado = "impar";


function RetornarArrayPar($array)
{

    for ($i = 0; $i <  count($array); $i++) {
        if ($array[$i] % 2 == 0) {
            $NovoArray[$i] = $array[$i];
        }
    }
    return $NovoArray;
}

echo "<br>";
print_r(RetornarArrayPar($array));

function FatorialNumero($Numero)
{
    $NumeroFatorial = $Numero;
    if ($Numero == 0)
        $i = 1;
    else
        for ($i = $Numero - 1; $i >= 1; $i--) {
            $NumeroFatorial *= $i;
        }
    return $NumeroFatorial;
}

function Verificarstring($ArrayString)
{
    for($i = 0; $i < count($ArrayString); $i++)
    {
        if(strlen($ArrayString[$i]) > 5)
        {
            $NovoArrayString[$i] = $ArrayString[$i];
        }
    }
    return $NovoArrayString;
}

print_r(Verificarstring($ArrayString));

function encontrarMaiorNumero($numeros) {
    $maior = $numeros[0]; 
    
    foreach ($numeros as $numero) {
        if ($numero > $maior) {
            $maior = $numero;
        }
    }
    
    return $maior;
}

$numeros = [5, 10, 3, 8, 2];
$maiorNumero = encontrarMaiorNumero($numeros);
echo "O maior número é: " . $maiorNumero;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="numero">
        <input type="submit" name="enviar">
        <p>Exercicio 3: <?= $Resultado ?></p>
        <p>Exercicio 4: <?= FatorialNumero($NumeroFatorial) ?></p>

       
    </form>
</body>

</html>