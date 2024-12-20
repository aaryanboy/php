<?php
$string = "this is a cursed world we all live in";
if (preg_match("/\bis\b/", $string)) {
    echo "The word 'is' was found in the string.<br>";
} else {
    echo "The word 'is' was not found.<br>";
}
preg_match_all("/\bis\b/", $string, $matches);
echo "Occurrences of 'is': " . count($matches[0]) . "<br>";

$replaced = preg_replace("/\bis\b/", "was", $string);
echo "After replacement: $replaced<br>";

$words = preg_split("/\s+/", $string);
echo "Words in the string: ";
print_r($words);
echo "<br>";
?>
