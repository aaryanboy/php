<?php
function validatePassword($password) 
{
    $pattern = '/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[\W_]).{8,}$/';
    if (preg_match($pattern, $password))
    {
        return true;
    } else {
        return false; 
    }
}
$password = "ramshyamkuwar@123";
    if (validatePassword($password)) 
    {
        echo "'$password' is a valid password.";
    } 
    else 
    {
        echo "'$password' is an invalid password.";
    }
?>
