<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
<h1>Testando PHP</h1>
  <?php

$categorias = [];
 $categorias[] = 'infantil';
 $categorias[] = 'adolescente';
 $categorias[] = 'adulto';
 $categorias[] = 'idoso';
  
 // print_r($categorias);

$nome = 'Eduardo';
$idade = 17;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12){

  for($i = 0; $i <= count($categorias); $i++){
    if($categorias[$i] == 'infantil')
      echo "O nadador " .$nome. " compete na categoria intanfil";
  }

}elseif($idade >= 13 && $idade < 18){
  
  for($i = 0; $i <= count($categorias); $i++){
    if($categorias[$i] == 'adolescente')
      echo "O nadador " .$nome. " compete na categoria adolescente";
  }

}else{

  for($i = 0; $i <= count($categorias); $i++){
    if($categorias[$i] == 'adulto')
      echo "O nadador " .$nome. " compete na categoria adulto";
  }

}
  
  
  
  ?>
</body>
</html>
