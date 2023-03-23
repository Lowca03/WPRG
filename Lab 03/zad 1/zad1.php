<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz kontaktowy</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <fieldset>
            Imię i nazwisko
            <label>
                <input type="text" name="name" required>
            </label><br>
            Adres e-mail
            <label>
                <input type="email" name="mail" required>
            </label><br>
            Nr telefonu
            <label>
                <input type="tel" name="phoneNr">
            </label><br>
            Wybierz temat
            <label>
                <select name="theme" required>
                    <option value="strona">Wykonanie strony internetowej</option>
                </select>
            </label><br>
            Treść wiadomości
            <label>
                <textarea name="comment" cols="50" rows="10" required>Wpisz tutaj treść swojej wiadomości...</textarea>
            </label>
            <p>Preferowana forma kontaktu</p>
            <label>
                <input type="checkbox" name="contactEmail">
            </label>Email<br>
            <label>
                <input type="checkbox" name="contactTel">
            </label>Nr telefonu<br>
            <p>Posiadasz już stronę www?</p>
            <label>
                <input type="radio" name="yes" value="tak">
            </label>Tak<br>
            <label>
                <input type="radio" name="no" value="nie">
            </label>Nie<br>
            <p>Załączniki</p>
            <input type="file" name="file">
        </fieldset>
        <input type="submit" value="Wyślij formularz">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["mail"];
        $phone = $_POST["phoneNr"];
        $theme = $_POST["theme"];
        $comment = $_POST["comment"];
        $contactEmail = isset($_POST["contactEmail"]) ? "Email" : "";
        $contactTel = isset($_POST["contactTel"]) ? "Nr telefonu" : "";
        $yesNo = isset($_POST["yes"]) ? "Tak" : "Nie";

        echo "<ul>";
        echo "<li>Imię i nazwisko: $name</li>";
        echo "<li>Adres e-mail: $email</li>";
        echo "<li>Nr telefonu: $phone</li>";
        echo "<li>Wybrany temat: $theme</li>";
        echo "<li>Treść wiadomości: $comment</li>";
        echo "<li>Preferowana forma kontaktu: $contactEmail $contactTel</li>";
        echo "<li>Posiadasz już stronę www?: $yesNo</li>";
        echo "</ul>";
    }
    ?>
</body>
</html>