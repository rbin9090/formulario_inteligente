<?php

session_start();
$perguntas = ['Qual seu nome?','Qual sua idade?'];

$_SESSION['respostas'] = array();

$index = isset($_POST['count']) ? (int)$_POST['count'] : 0;
?>



<form>
	

<h2><?php echo $perguntas[$index];?></h2>

</form>