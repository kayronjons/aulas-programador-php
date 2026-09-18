<?php

require __DIR__ . "/../../senac/senac.php";
senacClassName("Estrutura de Repetição — while");
?>

<?php senacClassSession("Estrutura while — repetição com condição", __LINE__); 

//exercício

$pessoasNaFrente = "10";

while ($pessoasNaFrente > 0 ) {
    echo"<p>Pessoas na sua frente</p>";

    $pessoasNaFrente--;
}


echo "<p> Agora e  sua vez!</p>";

//exercicíos 02

$alunosDaAcademia = 0;
$tentativas = 0;

while ($alunosDaAcademia <= 20 ){
    $tentativas++;
}

if(&tentativas 3 == 0)

echo"<p> Aluno com parcerla atrasada,lembrete para pagamento da parcerla </p>";