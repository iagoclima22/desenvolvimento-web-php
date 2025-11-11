  <?php 

// Estrutura de controle
$nome = "João";
$nota1 = 6;
$nota2 = 6;

$media = ($nota1 + $nota2) / 2;

if($media >= 6):
    echo "Parabéns $nome você foi aprovado com a média $media";
elseif($media >= 3 && $media <6):
    echo "Infelizmente você foi reprvado com a média $media";
elseif($media < 3):
    echo "Que pena $nome você foi expulso do curso com a media $media";
endif;


/*
// If e else
if($media >= 6){
    echo "Parabéns $nome! Você foi aprovado com a média $media";
}
else{
    echo "Infelizmente você foi reprovado com a média $media";
}

echo "<hr> Final do programa";
*/

?>
