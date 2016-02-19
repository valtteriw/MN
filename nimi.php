<?php


echo "<br><br>";

$kokonimi="  markus norrena  \n";
echo "Alussa: " . $kokonimi . " .";

//explode -- Split a string by string
$nimet = explode(" ", $kokonimi);
$kokonimi="";

//ucfirst -- Make a string's first character uppercase
foreach ($nimet as $nimi) {
	$kokonimi .= ucfirst($nimi) . " ";
}

//trim -- Strip whitespace (or other characters) from
//the beginning and end of a string
$kokonimi = trim($kokonimi);

echo "Lopussa: " . $kokonimi . ".";


function addname($first, $second) {

 $kokonainenimi = $first + $second; 

 return $kokonainenimi; 

} 

echo addname($first, $second); 

echo "<br><br>"; 

echo addname($first, addnum(5,6)); 

?>