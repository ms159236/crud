<?php
require __DIR__.'/vendor/autoload.php';
use \App\Entity\Vaga;
$Vagas= Vaga::getVagas();
//echo "<pre>";print_r($Vagas);echo "</pre>";exit;
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';
?>
