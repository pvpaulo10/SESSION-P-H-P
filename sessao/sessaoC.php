<?php
  
  session_start();
  if(!isset($_SESSION['p1'])){
    header('location: sessaoB.php');
  }
  echo "<h1> BEM VINDO ".$_SESSION['nome'].'</h1>';
  $img = ' ';
  if($_SESSION['p1']== '0'){
      $img = 'deucerto.jpg';
  }
  else{
      $img = 'error.jpg';  
  }
echo "<img src='".$img."' style= 'height: 500px;'>"
?>
<br>
<a href="sessaoB.php">VOLTAR</a>
<!-- session(Seção) serve para fazer a seção do usuario (Exemplo numa rede social) e so sai quando o usuario finaliza(cria um echo pra sair) a sessao ou fecha o navegador
ja dados armazenados em cookies voce consegue limitar um tempo de acesso -->