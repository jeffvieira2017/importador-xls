<?php

define("SERVIDOR","localhost");
define("USER","root");
define("SENHA","");
define("BANCO","importador_xls");

function inserirDados($nome,$email) {
    $banco = new mysqli(SERVIDOR,USER,SENHA,BANCO);
    $sql = "INSERT INTO contato (nome,email) VALUES ('$nome','$email')";
    $banco->query($sql);
    $banco->close();
}