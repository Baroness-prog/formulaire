<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action= thanks.php ?> >
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="userName" id="name" required>

    </div>

    <div>
        <label for="surName">Prenom :</label>
        <input type="text" name="userSurName" id="surName" required>

    </div>

    <div>
        <label for="email">Votre email :</label>
        <input type="email" name="courriel" id="email" required>

    </div>

    <div>
        <label for="phoneNumber">Numero de telephone</label>
        <input type="number" name="phoneNumber" id="phoneNumber" required>

    </div>

    <div>
        <label for="demande">Votre demande</label>
        <select name="subject" id="demande" required>
            <option value="Info">Demande d'informations</option>
            <option value="rdv">Demande de rdv</option>
        </select>

    </div>

    <div>
        <label for="message">Votre message : </label>
        <textarea name="userMessage" id="message" required ></textarea>

    </div>

    <div class="button">
        <button type="submit">Envoyer</button>
    </div>

</form>
</body>
</html>

