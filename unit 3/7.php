<?php
interface PaymentGateway {
    public function processPayment($amount);
}
interface NotificationService {
    public function sendNotification($message);
}

class User {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}
class PremiumUser extends User implements PaymentGateway, NotificationService {
    
    public function processPayment($amount) {
        return "Payment of $amount processed for premium user: $this->name.";
    }

    public function sendNotification($message) {
        return "Notification for $this->name: $message";
    }
}
$premiumUser = new PremiumUser("Abin Hyanmikha");
echo $premiumUser->processPayment(2500) . "<br>";
echo $premiumUser->sendNotification("Your payment has been successfully processed.") . "<br>";
?>
