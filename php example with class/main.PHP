<?PHP

require_once('car.php');

echo "<html><body>";
ECHO "THIS <br>";
$mustang = new car;
$mustang->changeColor("yellow");
$formula = new car;
$formula->changeColor("pink");
FOR ($I=1;$I <= 10;$I+=1) {ECHO $I . "<br>";}
echo "</body></html>";




?>