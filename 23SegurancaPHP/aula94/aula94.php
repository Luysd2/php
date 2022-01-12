<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>reCaptcha</title>
</head>
<body>
    <h2>reCaptcha</h2>
    <form action="cadastrar.php" method="POST">
        <input type="email" name="inputEmail">
        <button type="submit">Enviar</button>
        <br><br><br>
        <div class="g-recaptcha" data-sitekey="6LfPYgceAAAAAGRpouL3AylNwvpDCg-XUDHgoaV2"></div>
    </form>
    
</body>
</html>