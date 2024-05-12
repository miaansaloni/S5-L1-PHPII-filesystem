<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import-Export CSV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2>Upload your CSV</h2>
        <!-- punta alla import -->
        <form method="post" action="import.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="uploaded_file" class="form-label">File CSV</label>
                <input class="form-control" type="file" id="uploaded_file" name="uploaded_file" accept="text/csv">
            <div class="mb-3">
                <label for="profile_image" class="form-label">Profile image</label>
                <input class="form-control" type="file" id="profile_image" name="profile_image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Load</button>
        </form>

        <!-- punta alla export -->
        <h2>Download the export in CSV</h2>
        <a class="btn btn-primary" href="files/export.csv" download>Download</a>
    </div>
</body>
</html>