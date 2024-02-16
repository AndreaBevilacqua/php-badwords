<?php 

$paragraph = $_POST["paragraph"];
$word = $_POST["word"];

echo "<p>$paragraph</p>";
echo "<p>" . strlen($paragraph) . "</p>";

?>