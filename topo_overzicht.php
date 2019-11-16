<?php

echo "Hoeveel landen wil je toevoegen?",PHP_EOL;
$aantal = readline();
$alles = array();

for ($i=0; $i <$aantal ; $i++) {
  echo "Welk land wil je toevoegen?".PHP_EOL;
    $land = readline();
  echo "Wat is de hoofstad van $land".PHP_EOL;
    $hoofdstad = readline();

    $alles[$land]=$hoofdstad;
}
  echo "De volgende landen en steden zitten in je database".PHP_EOL;

foreach ($alles as $land => $hoofdstad) {
    echo "$land, $hoofdstad".PHP_EOL;
}
