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
<?php

$nameErr =$surNameError= $emailErr = $subjectErr = $phoneNumberErr = $messageErr = "";
$name = $surName = $email = $subject = $message = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["userName"])) {
    $nameErr = "Name is required";
} else {
    $name = test_input($_POST["userName"]);
}

if (empty($_POST["email"])) {
    $emailErr = "Email is required";
} else {
    $email = test_input($_POST["courriel"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    if (empty($_POST["phoneNumber"])) {
        $phone = "Phone number is required";
    } else {
        $phone = test_input($_POST["phoneNumber"]);
    }

    if (empty($_POST["userMessage"])) {
        $messageErr = "message is required";
    } else {
        $message = test_input($_POST["userMessage"]);
    }

    if (empty($_POST["subject"])) {
        $subjectErr = "subject is required";
    } else {
        $subject = test_input($_POST["subject"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>



<form method="post" action= " <?php echo htmlspecialchars($_SERVER["/thanks.php"]);?>" >
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="userName" id="name">
        <span class="error">* <?php echo $nameErr ;?></span>
    </div>

    <div>
        <label for="surName">Prenom :</label>
        <input type="text" name="userSurName" id="surName">
        <span class="error">* <?php echo $surNameError;?></span>
    </div>

    <div>
        <label for="email">Votre email :</label>
        <input type="email" name="courriel" id="email">
        <span class="error">* <?php echo $emailErr; ?> </span>
    </div>

    <div>
        <label for="phoneNumber">Numero de telephone</label>
        <input type="number" name="phoneNumber" id="phoneNumber">
        <span class="error">* <?php echo $phoneNumberErr; ?> </span>
    </div>

    <div>
        <label for="demande">Votre demande</label>
        <select name="subject" id="demande">
            <option value="Info">Demande d'informations</option>
            <option value="rdv">Demande de rdv</option>
        </select>
        <span class="error">* <?php echo $subjectErr;?></span>
    </div>

    <div>
        <label for="message">Votre message : </label>
        <textarea name="userMessage" id="message" cols="30" rows="10"></textarea>
        <span class="error">* echo <?php echo $messageErr;?></span>
    </div>

    <div class="button">
        <button type="submit">Envoyer</button>
    </div>

</form>
</body>
</html>
