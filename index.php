<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Variaveis</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
   <section class="toggle-area">
<!-- From Uiverse.io by Galahhad --> 
<label class="bb8-toggle">
    
      <input class="bb8-toggle__checkbox" type="checkbox">
      <div class="bb8-toggle__container">
        <div class="bb8-toggle__scenery">
          <div class="bb8-toggle__star"></div>
          <div class="bb8-toggle__star"></div>
          <div class="bb8-toggle__star"></div>
          <div class="bb8-toggle__star"></div>
          <div class="bb8-toggle__star"></div>
          <div class="bb8-toggle__star"></div>
          <div class="bb8-toggle__star"></div>
          <div class="tatto-1"></div>
          <div class="tatto-2"></div>
          <div class="gomrassen"></div>
          <div class="hermes"></div>
          <div class="chenini"></div>
          <div class="bb8-toggle__cloud"></div>
          <div class="bb8-toggle__cloud"></div>
          <div class="bb8-toggle__cloud"></div>
        </div>
        <div class="bb8">
          <div class="bb8__head-container">
            <div class="bb8__antenna"></div>
            <div class="bb8__antenna"></div>
            <div class="bb8__head"></div>
          </div>
          <div class="bb8__body"></div>
        </div>
        <div class="artificial__hidden">
          <div class="bb8__shadow"></div>
        </div>
      </div>
    </label>
</section>
<script>
  // Seleciona o checkbox
  const toggleCheckbox = document.querySelector('.bb8-toggle__checkbox');

  // Adiciona um listener para quando ele mudar de estado
  toggleCheckbox.addEventListener('change', () => {
    // Se estiver marcado, adiciona a classe "escuro", senão remove
    document.body.classList.toggle('escuro', toggleCheckbox.checked);
  });
</script>

    <main class="container">
    <section class="box">
    <h2 style='color:orange;'>Calculo</h2>
    
    <?php 
        $preco_original = 120.20;
        $desconto = 15;

        $preco_com_desconto = (float) $preco_original - (($desconto / 100) * $preco_original);

        echo"<p>Preço Original: R$ " . number_format($preco_original, 2, ',' , '.') . "</p>";
        echo "<p>Desconto aplicado: $desconto %</p>";
        echo"<p>Preço final: R$ " . number_format($preco_com_desconto, 2, ',' , '.') . "</p>";
    ?>
    </section>
    <section class="box">
    <h2 style='color:orange;'>Verificação</h2>
    
    <?php 
        $idade = 10;
        $tem_ingresso = true;

        if ($idade >= 18 && $tem_ingresso) {
            echo "<p style='color: green;'>Acesso liberado!vai </p>";
        } else {
            echo "<p style='color: red;'>CAI FORA </p>";
        }

    ?>
    </section>
    <section class="box">
    <h2 style='color:orange;'>Contas</h2>
    
    <?php 

$a = 10;
$b = 100;

$soma = $a + $b;
$sub = $a - $b;
$mult = $a * $b;
$divi = $a / $b;
$mod = $a % $b;

echo "<p>Soma: $soma</p>";
echo "<p>Sub: $sub<p>";
echo "<p>Mult: $mult<p>";
echo "<p>Divi: $divi<p>";
echo "<p>Mod: $mod<p>";

$c = 10;
$d = "10";

var_dump($c == $d);
var_dump($c === $d);
var_dump($c != $d);
var_dump($c !== $d);


$x = true;
$y = false;

var_dump($x && $y);
var_dump($x || $y);
var_dump(!$x);

$idade = 22;
$tem_carteira = true;
if ($idade >= 18 && $tem_carteira) {
    echo "Pode dirigir";
 
} else{
    echo "Nao pode dirigir";

}


?>


</section>
<section class="box">
    <h2 style='color:orange;'>Notas</h2>
        <?php 
        $a = 10;
        $b = 10;
        $c = 10;

         $media = ($a + $b + $c) / 3;
        

        echo "Media:  $media";

        ?>


</section>

</body>
</html>
