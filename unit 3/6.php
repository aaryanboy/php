<?php
interface PaymentGateway {
    public function processPayment($amount);
}
class eSewa implements PaymentGateway {
    public function processPayment($amount) {
        return "Payment of $amount processed via eSewa.";
    }
}
class Khalti implements PaymentGateway {
    public function processPayment($amount) {
        return "Payment of $amount processed via Khalti.";
    }
}
$payment1 = new eSewa();
echo $payment1->processPayment(500) . "\n";
$payment2 = new Khalti();
echo $payment2->processPayment(1000) . "\n";
?>
