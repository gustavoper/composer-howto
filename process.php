<?php
	require_once("vendor/autoload.php");



	$previsao = new \Meteorologia\Previsao();

	echo $previsao->getPrevisao(array());

