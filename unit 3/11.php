<?php
class MagicMethods {
    private $data = [];
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }
    public function __get($name) {
        return isset($this->data[$name]) ? $this->data[$name] : null;
    }
    public function __call($name, $arguments) {
        return "Method '$name' called with arguments: " . implode(", ", $arguments);
    }
    public static function __callStatic($name, $arguments) {
        return "Static method '$name' called with arguments: " . implode(", ", $arguments);
    }
}
$magic = new MagicMethods();
$magic->name = "Abin"; 
echo "Name: " . $magic->name . "<br>";
echo $magic->unknownMethod("arg1", "arg2") . "<br>";  
echo MagicMethods::staticMethod("staticArg1", "staticArg2") . "<br>"; 
?>
