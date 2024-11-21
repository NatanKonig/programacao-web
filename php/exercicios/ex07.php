<?php 

$idade = 18;

if ($idade <= 12) {
    echo "Você pode assistir a filmes infantis.";
} elseif ($idade <= 16) {
    echo "Você pode assistir a filmes para adolescentes.";
} else {
    echo "Você pode assistir a filmes para adultos.";
}

?>