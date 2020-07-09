
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
</head>
<body>
    <form action="receber.php" method="post" enctype="multipart/form-data">
        <p>Selecione um arquivo...</p>
        <input type="file" name="arquivo" id=""><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>