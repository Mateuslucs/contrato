<?php
    require_once "../vendor/autoload.php";
    
    $phpWord = new \PhpOffice\PhpWord\PhpWord();
    $section = $phpWord->addSection();

    $diadoprazoin = $_POST["diadoprazoin"];
    $diaprazoin_escrito = $_POST["diaprazoin_escrito"];
    $mesdoprazoin = $_POST["mesdoprazoin"];
    $anodoprazoin = $_POST["anodoprazoin"];
    $diadoprazofim = $_POST["diadoprazofim"];
    $mesdoprazofim = $_POST["mesdoprazofim"];
    $anodoprazofim = $_POST["anodoprazofim"];
    /*$section->addText(
        '"Learn from yesterday, live for today, hope for tomorrow. '.'The important thing is not to stop questioning." '. '(Albert Einstein)'
    );*/

    /*escrevendo com tags*/
    /*$html = "<h1>CONTRATO DE LOCAÇÃO</h1>
    <h1>RESIDENCIAL</h1>";
    $html .= "<p><strong>INÍCIO:</strong> $diadoprazoin/$mesdoprazoin/$anodoprazoin</p>
    <p><strong>TERMINO:</strong> $diadoprazofim/$mesdoprazofim/$anodoprazofim</p>";
    
    \PhpOffice\PhpWord\Shared\Html::addHtml($section,$html,false,false);

    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');*/

    /*escrevendo normal com fontes*/

    /*$fontStyle = new \PhpOffice\PhpWord\Style\Font();
    $fontStyle->setBold(true);
    $fontStyle->setName('Tahoma');
    $fontStyle->setSize(13);
    $myTextElement = $section->addText('I am styled by a paragraph style definition.', null, $paragraphStyleName);
    $myTextElement->setFontStyle($fontStyle);*/

   
    $estilo = \PhpOffice\PhpWord\SimpleType\TextAlignment::CENTER;
    $fontStyle = new \PhpOffice\PhpWord\Style\Font(); 
    $fontStyle->setBold(true);
    $section->addText('ola mundo', [$fontStyle], [$estilo]);
    /*$fontStyle = new \PhpOffice\PhpWord\Style\Font();
    $fontStyle->setBold(true);
    $fontStyle->setName('Tahoma');
    $fontStyle->setSize(13);
    $fontStyle->setParagraph($estilo);
    $myTextElement = $section->addText('"Believe you can and you\'re halfway there." (Theodor Roosevelt)');
    $myTextElement->setFontStyle($fontStyle);*/

    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    $objWriter->save('helloWorld.docx');

    /*dowload do documento
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment;filename=contrato.docx");
    $objWriter->save("contrato.docx");*/
?>