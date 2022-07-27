<?php 
  $nome = $_GET['nome'];
  $nota1 = $_GET['nota1'];
  $nota2= $_GET['nota2'];
  $nota3= $_GET['nota3'];
  $nota4= $_GET['nota4'];
  $soma = $nota1+$nota2+$nota3+$nota4;

  echo "$nome <br>";
   $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
 
   echo "Média: $media <br>";
    
   if($media>=6){
       echo "aprovado";
   }
   else { 
   echo "reprovado";
   }










 ?>