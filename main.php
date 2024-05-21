<?php

$catAPI = 'https://cat-fact.herokuapp.com/facts/random?animal_type=cat&amount=5';
$catFactsJson = file_get_contents($catAPI);

if ($catFactsJson === FALSE) {
    exit('Error fetching cat facts');
}

$catFactsData = json_decode($catFactsJson);
if ($catFactsData === NULL) {
    exit('Error decoding JSON');
}

foreach ($catFactsData as $catFact) {
    echo $catFact->text . "\n";
}
