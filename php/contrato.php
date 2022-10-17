<?php
require_once 'conversor.php';

$htd = new HTML_TO_DOC();

$htmlcontent = '
    <h1>hello world</h1>
    <h3>create and download ms word file</h3>
    <p>This document is created from HTML.</p>
';

/*$wordDoc = $htd->createDoc($htmlcontent, 'my-word');

if($wordDoc){
    echo "sucesso";
}else {
    echo "erro";
}*/

$htd->createDoc('../index.html', 'my-word-html', 1);
?>