<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
    
    session_start();
    if(empty($_SESSION['nome'])){
    header('location: sessaoA.php');
    }
    echo "<h1> BEM VINDO ".$_SESSION['nome'].'</h1>';
?>

<form action="" method="post">
    <fieldset>
        <legend>pergunta 1: </legend>
        Quanto é (((3²+14) /2 ) * 0) ?
        <input type="text" name="p1">       
    </fieldset>
    <input type="submit" value="RESPONDER">

</form>
<?php
    if($_POST){
        $_SESSION['p1'] = $_POST['p1'];
        header('location: sessaoC.php');
    }
?>
<a href="sessaoA.php">VOLTAR</a>
<!-- session(Seção) serve para fazer a seção do usuario (Exemplo numa rede social) e so sai quando o usuario finaliza(cria um echo pra sair) a sessao ou fecha o navegador
ja dados armazenados em cookies voce consegue limitar um tempo de acesso -->