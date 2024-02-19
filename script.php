<?php 

$paragraph = $_GET["paragraph"];
$word = $_GET["word"];

$censoredParagraph = str_replace($word, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Paragrafo originale</h3>
    <p><?= $paragraph?></p>
    <em>Il paragrafo originale é lungo <?= mb_strlen($paragraph)?> caratteri</em>
    <br>
    <h3>Paragrafo censurato</h3>
    <p><?= $censoredParagraph?></p>
    <em>Il paragrafo originale é lungo <?= mb_strlen($censoredParagraph)?> caratteri</em>
</body>
</html>