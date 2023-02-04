<?php
require_once 'conversor.php';

$htd = new HTML_TO_DOC();

$htmlcontent = '
<img src="../imagens/foto_contrato.png" alt="CM-Imovéis" class="all">
    <h1 style="text-align: center;">hello world</h1>
    <h3>create and download ms word file</h3>
    <p>This document is created from HTML.</p>
';

/*$wordDoc = $htd->createDoc($htmlcontent, 'my-word');

if($wordDoc){
    echo "sucesso";
}else {
    echo "erro";
}*/

$htd->createDoc($htmlcontent, 'my-word-html');
?>