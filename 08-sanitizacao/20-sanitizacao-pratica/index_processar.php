<?php
require __DIR__ . "/../../senac/senac.php";
senacClassName("Prática — Processamento da Avaliação");
?>

<?php senacClassSession("Processamento da avaliação", __LINE__); 

$nota = filter_input(INPUT_POST , "nota" , FILTER_VALIDATE_FLOAT);

if(!$nota){
    echo"<p>informe, ums nota válida</p>";
}else if ($nota < 0 || $nota > 10 ){
echo"<p.informe uma nota entre  0 e 10 </p>";
}

echo"</p>Nota recebida" . htmlspecialchars($nota) . "</p>";

$cometario = filter_input(INPUT_POST, "cometario", FILTER_SANITIZE_FULL_CHARS);

if(!$cometario === false){}

senacFooter("Pedro Leandro");
