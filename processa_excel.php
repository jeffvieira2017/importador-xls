<?php

require_once "conexao.php";

$output = '';

if(isset($_POST['export_excel'])) {

    $banco = new mysqli(SERVIDOR,USER,SENHA,BANCO);
    $sql = "SELECT nome, email FROM contato ORDER BY id ASC";
    $result = $banco->query($sql);

    $output .= '
        <table class="" bordered="">
        <tr>
        <th>Nome</th>
        <th>Email</th>
        </tr>
    ';

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            $output .= '
                <tr>
                <td>'.$row['nome'].'</td>
                <td>'.$row['email'].'</td>
                </tr>
            ';
        }
    }

    $output .= '</table>';
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=contato_download.xls");
    echo $output;

    $banco->close();

}