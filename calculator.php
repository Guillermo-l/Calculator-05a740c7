<?php

echo "Welke operatie wil je uitvoeren (+,-) \n";

$operatie = readline();

echo "Eerste getal? \n";

$eerste_getal = readline();

echo "Tweede getal? \n";

$tweede_getal = readline();

if ($operatie === "+") {
	 $uitkomst =  $eerste_getal + $tweede_getal;
}

elseif ($operatie === "-") { 
	$uitkomst = $eerste_getal - $tweede_getal;

}

print("Uw resultaat is: " . $uitkomst);

?>