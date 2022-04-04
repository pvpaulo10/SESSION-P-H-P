<?php
    session_start();
    if($_POST){
        $_SESSION['nome'] = $_POST ['nome'];
        header('location: sessaoB.php');

 }
?>
<form action="" method="post">

    digite seu nome:
    <input type="text" name="nome">

    <br>

    <input type="submit">

</form>
<!-- session(Seção) serve para fazer a seção do usuario (Exemplo numa rede social) e so sai quando o usuario finaliza(cria um echo pra sair) a sessao ou fecha o navegador
ja dados armazenados em cookies voce consegue limitar um tempo de acesso -->