<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="login-container">
        <form action="controllers/login-form.php" method="post">
            <h2>Se connecter</h2>
            <label for="username">Email:</label>
            <input type="email" id="username" name="username" required>
            
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="submit">Se connecter</button>
            <a href="?route=register" class="button">S'inscrire</a>
        </form>
    </div>
</body>
</html>
