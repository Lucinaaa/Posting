<?php

include_once("config.php");

$naam = $_POST['naam'];
$email = $_POST['email'];
$bericht = $_POST['bericht'];

if (isset($_POST['post'])){
    $sql = $db->prepare("INSERT INTO postenzien (naam, email, bericht)
    VALUES ('$naam', '$email','$bericht')");
    $sql->execute();

    echo "
    <center>
    <br><Br><br><br><Br>
    Moment
    </center>";

    function Redirect($url, $permanent = false)
    {
        header('Refresh: 3;' . $url, true, $permanent ? 301 : 302);
        exit();
    }
    Redirect('../posting.php', false);
}
else{echo "ERROR: Could not able to input data";}

die();

?>

