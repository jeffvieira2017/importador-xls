<?php

$xls = $_FILES['arquivo']['tmp_name'];

if(!empty($xls)) {

    require_once "./conexao.php";

    $arquivo = new DOMDocument();
    $arquivo->load($xls);

    $linhas = $arquivo->getElementsByTagName("Row");

    // echo "<pre>";
    // print_r($arquivo);
    // echo "</pre>";

    $contLinha = 1;
    $erros = 0;

    foreach($linhas as $linha) {
        if($contLinha > 1) {
            $nome = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
            $email = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
            $inserir = inserirDados($nome,$email);
            if($inserir) {
                $erros++;
            }
        }
        $contLinha++;
    }

}

if($erros === 0) {
    header("LOCATION:index.php");
} else {
    echo "Houve um erro de importação";
}