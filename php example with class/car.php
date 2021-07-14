<?php
class car {
private $color = 'white';

function changeColor($newc) {
	echo "<br>";
    echo "the original color is " . $this->color . ".<br>";
	$this->color = $newc;
	echo "the new color is " . $this->color . ".<br>";
	echo "<br><br>";
 } 

}
?>