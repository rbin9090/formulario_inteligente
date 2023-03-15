<?php

session_start();
$perguntas = ['Qual seu nome?','Qual sua idade?','qual sua cor favorita'];
if (!isset($_SESSION['respostas'])) 
	// code.
$_SESSION['respostas'] = array();

if (isset($_POST['count'])) {
	$_SESSION['respostas'][$_POST['count']] = @$_POST['resposta'];
	if (count($perguntas) == $_POST['count'] + 1) {
		header('location: resultado.php');
		
	}
}
$index = isset($_POST['count']) ? (int)$_POST['count'] + 1 : 0;
?>



<form method="POST">
	

<h2><?php echo $perguntas[$index]?></h2>
<input type="text" name="resposta">
<input type="submit" name="acao" value="enviar resposta">
<input type="hidden" name="count" value="<?php echo $index; ?>">

</form>