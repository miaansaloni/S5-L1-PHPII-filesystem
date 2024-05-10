<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="esempio.php" method="POST" enctype="multipart/form-data">
        <h2>Carica File</h2>
        <label for="fileSelect">File:</label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" value="Carica">
        <p>NOTA: Sono permessi i formati .jpeg .jpg .gif .png con una size massima di 5mb</p>
    </form>
</body>
</html>