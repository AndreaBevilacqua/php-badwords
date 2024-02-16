<?php 

$paragraph = $_POST["paragraph"];
$word = $_POST["word"];

echo "<p>$paragraph</p>";
echo "<p>" . strlen($paragraph) . "</p>";

$censoredParagraph = str_replace($censoredParagraph, '***', $paragraph);

echo "<p> $censoredParagraph</p>";
echo "<p>" . strlen($censoredParagraph) . "</p>";

?>