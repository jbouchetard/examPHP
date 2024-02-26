<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploader des fichiers</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/upload.js"></script>
</head>
<body>
    <div class="upload-container">
        <nav>
            <a href="?route=logout">Se déconnecter</a>
        </nav>
        <form action="routers?upload" method="post" enctype="multipart/form-data">
            <h2>Uploader des fichiers</h2>
            <div id="file-input-container">
                <label for="files">Choisir un fichier :</label>
                <input type="file" name="files[]" multiple required>
            </div>

            <button type="button" onclick="addFileInput()">Ajouter un fichier</button>
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>
