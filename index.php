<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Importador Excel</title>
</head>
<body>

    <h1>Importador Excel</h1>

    <h3>Importar para banco de dados</h3>
    
    <form name="processa" action="processa.php" method="post" enctype="multipart/form-data">

        <input type="file" name="arquivo" id="">
        <input type="submit" name="enviar" value="Importar">

    </form>

    <h3>Gerar Excel</h3>

    <form name="excel" action="processa_excel.php" method="post">

        <input type="submit" name="export_excel" value="Gerar">

    </form>

</body>
</html>