<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Posting</title>
</head>
<body>
<form class="form-horizontal" method="post" action="php/insert.php">
    <fieldset>
        <legend>Posting</legend>
            <label for="naam">Voornaam:</label>
                <input required type="text" name="naam" id="naam"><br>
            <label for="Mail">E-mail:</label>
                <input required type="text" name="email" id="Mail"><br>
            <label for="bericht">Bericht:</label>
        <textarea name="bericht" cols="30" rows="3">Bericht</textarea>
        <input type="submit" value="Verzenden" name="post">
    </fieldset>
</form>
</body>
</html>

<?php
include_once("php/config.php");

$select = $db->prepare("SELECT * FROM postenzien");
$select->execute();
$output ="";

echo("Alle berichten: <br>");
while ($row = $select->fetch(PDO::FETCH_ASSOC)) {

    echo "<br>".
        "<strong>naam:</strong>".$row{'naam'}.
        "<br><strong>bericht:</strong> ".$row{'bericht'}. "<br>";}
?>
<br><br>

<a href="posting.php">Ververs het scherm</a>
