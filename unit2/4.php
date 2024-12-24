<?php
$name = "aryan";
$heredocString = <<<EOD
Hello, $name!
This is a multi-line string using Heredoc.
Variables like \$name are interpolated.
You can write text over multiple lines.
EOD;

echo "Heredoc Output:<br>";
echo $heredocString . "<br><br>";

$nowdocString = <<<'EOD'
Hello, $name!
This is a multi-line string using Nowdoc.
Variables like \$name are NOT interpolated here.
It will be displayed literally.
EOD;

echo "Nowdoc Output:<br>";
echo $nowdocString . "<br>";
?>
