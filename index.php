<?php

session_start();
$perguntas = ['Qual seu nome?','Qual sua idade?'];

$_SESSION['respostas'] = array();
if (isset($_POST['count'])) {
	$_SESSION['respostas'][$_POST['count']] = $_POST['respostas'];
	if (count($perguntas)) {
		// code...
	}
}
$index = isset($_POST['count']) ? (int)$_POST['count'] + 1 : 0;
?>



<form>
	

<h2><?php echo $perguntas[$index];?></h2>
<input type="text" name="resposta e ir para proxima pergunta" >
<input type="submit" name="acao" value="enviar">
<input type="hidden" name="cont" value="<?php echo $index; ?>">

</form>