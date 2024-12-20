<?php
setcookie("test_cookie", "Initial Value", time() + 3600, "<br>"); 
echo "Step 1: Cookie set with value: " . ($_COOKIE['test_cookie'] ?? "Cookie not yet available") . "<br>";
setcookie("test_cookie", "Modified Value", time() + 3600, "<br>"); 
echo "Step 2: Cookie modified to value: " . ($_COOKIE['test_cookie'] ?? "Cookie not yet available") . "<br>";
setcookie("test_cookie", "", time() - 3600, "<br>"); 
echo "Step 3: Cookie deleted. Value is now: " . ($_COOKIE['test_cookie'] ?? "Cookie not available") . "<br>";
?>
