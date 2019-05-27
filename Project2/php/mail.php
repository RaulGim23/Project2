<?php

$admin_email = "abcd@gmail.com";
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$adresa = $_POST['adresa'];
$telefon = $_POST['telefon'];
$mesaj = $_POST['mesaj'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/uikit.css" />
        <script src="../js/uikit.js"></script>
        <script src="../js/uikit-icons.js"></script>
    </head>
    <body>
		<div class="uk-container uk-container-small">
		<div class="uk-flex uk-flex-column uk-flex-center uk-flex-middle uk-background-muted uk-height-viewport">

<?php
if (!$nume || !$prenume||!$adresa||!$telefon||!$mesaj) die ("<div class='uk-alert-danger' uk-alert>Completati toate campurile!</div>");

else {

echo "<div class='uk-alert-primary' uk-alert>Numele: ".$nume."<br>";
echo "E-mail: ".$adresa."<br>";
echo "Mesaj: ".$mesaj."<br></div>";

echo "<div class='uk-alert-success' uk-alert>Salut ".$nume."!<br>Mesajul tau: &quot;".$mesaj."&quot; a fost trimis la adresa ".$adresa.".</div>";

}

//send mail
	mail( "Formular contact", $mesaj, "La".$adresa);

?>
		</div>
		</div>
 </body>
</html>