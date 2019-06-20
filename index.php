<?php
// $pirmas = 'bla bla';
// $antras = 'ku kū';
// $trecias = $pirmas + $antras;
// echo $trecias;


echo (int) 'yy898yyy';

echo '<br>';

$pirmas = 'bla bla';
$antras = "ku $pirmas kū";
$antras = 'ku' . $pirmas . 'kū';

echo mb_strlen($antras);