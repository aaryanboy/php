<?php
function getCarrier($phoneNumber) {
    if (preg_match("/^985\d{7}$/", $phoneNumber)) {
        return "NT Postpaid";
    } elseif (preg_match("/^984\d{7}$/", $phoneNumber)) {
        return "NT Prepaid";
    } elseif (preg_match("/^980\d{7}$/", $phoneNumber)) {
        return "Ncell";
    } else {
        return "Unknown Carrier";
    }
}

echo "Input: 9851111123 - Output: " . getCarrier("9851111123") . "<br>";
echo "Input: 9841111123 - Output: " . getCarrier("9841111123") . "<br>";
echo "Input: 9801111123 - Output: " . getCarrier("9801111123") . "<br>";
?>

